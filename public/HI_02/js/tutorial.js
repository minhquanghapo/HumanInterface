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
            $(this).parent().show();
            $(this).click(function(e) {
                e.stopPropagation();
                endTutorial();
                beginTutorial();
            });
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
            e.stopPropagation();
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
                    <p>[Enter] - Bước sau, [Esc] - Thoát</p>
                </div>
            </div>
        `);
        $(elm).after(_overlay);
        $(elm).css('z-index', 10001);

        $('html, body').stop().animate({
            scrollTop: $(elm).offset().top - $(window).height() / 2
        }, 800);

        $(elm).on('clickout', function (e) {
            e.stopPropagation();
            nextStep();
        });
    }

    function hideCurrentStep() {
        let step = _steps[_currentStep];
        let elm = step.element;
        $(elm).css('z-index', step.oldZIndex);
        $(elm).off('clickout');
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
        if(_steps[_currentStep]) hideCurrentStep();
        removeOverlay();
        _currentStep = undefined;
        restoreZIndex();
        $(document).off('keydown.tutorial');
    }

    function removeOverlay() {
        if(_overlay)
            _overlay.remove();
    }
})(jQuery);
