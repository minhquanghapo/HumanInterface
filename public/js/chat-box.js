(function ($) {
    // show chat box
    let chatBoxShow = false;
    $('.chat-bubble').click(toogleChatbox);
    function toogleChatbox() {
        if(chatBoxShow) {
            $.when(
                $('.chat-icon.close').hide('scale', { direction: "both" }, 50).promise()
            ).done(function() {
                $('.chat-icon.open').show('scale', { direction: "both" }, 50);
            })
        } else {
            $.when(
                $('.chat-icon.open').hide('scale', { direction: "both" }, 50).promise()
            ).done(function() {
                $('.chat-icon.close').show('scale', { direction: "both" }, 50);
            });
        }
        chatBoxShow = !chatBoxShow;
        $('.chat-box').slideToggle('fast');
    }

    // display time when hover message
    $('.message').hover(
        function () {
            $(this).parent().find('.message-time').css('opacity', '1');
        },
        function () {

            $(this).parent().find('.message-time').css('opacity', '0');
        }
    );
})(jQuery);
