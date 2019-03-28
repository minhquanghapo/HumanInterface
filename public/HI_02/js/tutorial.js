(function ($) {
    let _isInTutorial = false;
    let _currentStep;
    let _steps = [];
    let _overlay;
    let _tutorialBtn;

    $.fn.extend({
        tutorial: function(s) {
            _steps = s;
            _tutorialBtn = this;
            _tutorialBtn.click(function() {
                endTutorial();
                beginTutorial();
            });

            // setTimeout(function() {
            //     function loop(){
            //         _tutorialBtn.effect("shake", {distance: 10}, 1000, loop);
            //     }
            //     loop();
            // }, 1000 * 5)
        }
    });

    function backupZIndex () {
        _steps.forEach(function(s) {
            s.oldZIndex = $(s.element).css('z-index');
        })
    }
    function restoreZIndex () {
        _steps.forEach(function(s) {
             $(s.element).css('z-index', s.oldZIndex);
        })
    }


    function beginTutorial(){
        backupZIndex();
        _isInTutorial = true;
        _currentStep = 0;
        showCurrentStep();

        $(document).on('keydown.tutorial', function(e){
            if(e.which == 13){
                e.preventDefault();
                nextStep();
            } else
            if(e.which == 27) {
                endTutorial();
            }
        })
    }

    function showCurrentStep() {
        let step = _steps[_currentStep];
        let elm = step.element;
        _overlay = $(`
            <div id="overlay">
                <div class="step-index">
                    <h3>Step ${ _currentStep + 1 }</h3>
                    <p>${ step.suggestion }</p>
                </div>
                <div class="suggestion-text">
                    <p>[Enter] - next step, [Esc] - quit tutorial</p>
                </div>
            </div>
        `);
        $(elm).after(_overlay);
        $(elm).css('z-index', 10001);


        $('html, body').stop().animate({
            scrollTop: $(elm).offset().top - $(window).height() / 2
        }, 800);
    }

    function removeOverlay() {
        if(_overlay)
            _overlay.remove();
    }

    function hideCurrentStep() {
        let step = _steps[_currentStep];
        let elm = step.element;
        $(elm).css('z-index', step.oldZIndex);
        removeOverlay();
    }

    function nextStep() {
        hideCurrentStep();

        _currentStep += 1;

        if(_currentStep === _steps.length) {
            return endTutorial();
        } else {
            showCurrentStep();
        }
    }

    function endTutorial() {
        removeOverlay();
        _currentStep = 0;
        restoreZIndex();
        $(document).off('keydown.tutorial');
    }
})(jQuery);
