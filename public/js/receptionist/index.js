$("#checkin_form").on("keyup", "form", function(e){
  if (e.which == 13){
    if ($("#next").is(":visible") && $("fieldset.current").find("input, textarea").valid() ){
      e.preventDefault();
      nextSection();
      return false;
    }
  }
});
 
 
$("#next").on("click", function(e){
  console.log(e.target);
  nextSection();
});
 
$("form").on("submit", function(e){
  if ($("#next").is(":visible") || $("fieldset.current").index() < 3){
    e.preventDefault();
  }
});
 
function goToSection(i){
  $("fieldset:gt("+i+")").removeClass("current").addClass("next");
  $("fieldset:lt("+i+")").removeClass("current");

  $("#checkin-tabs li").eq(i).addClass("current").siblings().removeClass("current");
  setTimeout(function(){
    $("fieldset").eq(i).removeClass("next").addClass("current active");
      if ($("fieldset.current").index() == 3    ){
        $("#next").hide();
        $("input[type=submit]").show();
      } else {
        $("#next").show();
          // $("#next").hide();
          // $("input[type=submit]").show();
        $("input[type=submit]").hide();
      }
  }, 80);

}
 
function nextSection(){


  var i = $("fieldset.current").index();
  if (i < 4){
    $("li").eq(i+1).addClass("active");
    goToSection(i+1);
  }

  if(i==0){
      alert("hello");
      var video=document.querySelector("#videoElement_2");
      navigator.getUserMedia=navigator.getUserMedia||navigator.webkitGetUserMedia||navigator.mozGetUserMedia||navigator.msGetUserMedia||navigator.oGetUserMedia;
      if(navigator.getUserMedia){ navigator.getUserMedia({video:true},handleVideo,videoError); }
      function handleVideo(stream){ video.srcObject = stream; }
      function videoError(e){ }
  }
}
 
$("li").on("click", function(e){
  var i = $(this).index();
    goToSection(i);
  // if ($(this).hasClass("active")){
  //   goToSection(i);
  // } else {
  //   alert("Please complete previous sections first.");
  // }
});


(function ($) {
    $.extend({
        playSound: function () {
            return $(
                '<audio class="sound-player" autoplay="autoplay" style="display:none;">'
                + '<source src="' + arguments[0] + '" />'
                + '<embed src="' + arguments[0] + '" hidden="true" autostart="true" loop="false"/>'
                + '</audio>'
            ).appendTo('body');
        },
        stopSound: function () {
            $(".sound-player").remove();
        }
    });
})(jQuery);