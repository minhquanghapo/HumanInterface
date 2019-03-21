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
            });
            $('.voice-call').animate({ left: 0 }, 'fast');
            $('.video-call').animate({ left: 0 }, 'fast');
        } else {
            $.when(
                $('.chat-icon.open').hide('scale', { direction: "both" }, 50).promise()
            ).done(function() {
                $('.chat-icon.close').show('scale', { direction: "both" }, 50);
            });
            $('.voice-call').animate({ left: -70 }, 'fast');
            $('.video-call').animate({ left: -140 }, 'fast');
        }
        chatBoxShow = !chatBoxShow;
        $('.chat-box').slideToggle('fast');
    }

    // display time when hover message
    function bindMessageHoverListener() {
        $('.message').hover(
            function () {
                $(this).parent().find('.message-time').css('opacity', '1');
            },
            function () {

                $(this).parent().find('.message-time').css('opacity', '0');
            }
        );
    }
    bindMessageHoverListener();

    // display remove btn when hover preview image
    function bindRemoveBtnHoverListener() {
        $('.file-preview .file').hover(
            function () {
                $(this).find('.remove-file').show();
            },
            function () {
                $(this).find('.remove-file').hide();
            }
        );
    }
    bindRemoveBtnHoverListener();

    // remove file
    function bindRemoveBtnClickListener() {
        $('.remove-file').click(function(){
            $(this).parent().remove();
        });
    }
    bindRemoveBtnClickListener();

    // add file
    let _imageExtensions = [".jpg", ".jpeg", ".bmp", ".gif", ".png"];
    function isImage(ext) {

        return _imageExtensions.includes('.' + ext);
    }

    $("#btnAddFile, #btnAddImage").click(function () {
        let filePreviewElm = $('.file-preview');

        let fileInputElm = $(`<input class="fileInp" type="file" hidden>`);
        filePreviewElm.append(fileInputElm);
        fileInputElm.click();
        fileInputElm.change(function(){
            if (this.files && this.files[0]) {
                let fileName = this.files[0].name;
                let arr = fileName.split('.');
                let ext = arr[arr.length - 1];

                let fileElm = $(`<div class="file"></div>`);
                let imgElm = $(`<img style="height: 50px" src="" alt="">`);
                let fileInfoElm = $(`
                    <div class="file-info">
                        <h4 class="file-ext">${ext}</h4>
                        <p class="no-margin">${fileName}</p>
                    </div>
                `);
                let removeBtnElm = $(`<span class="remove-file hover-pointer"><i class="fas fa-times"></i></span>`);

                var reader = new FileReader();
                reader.readAsDataURL(this.files[0]);
                reader.onload = function(e) {
                    let src;
                    if(isImage(ext)){
                        src = e.target.result;
                        imgElm.attr('src', e.target.result);
                        fileElm.append(imgElm);
                        fileElm.append(removeBtnElm);
                    } else {
                        src = '/HI_02/img/file.png';
                        imgElm.attr('src', '/HI_02/img/file.png');
                        fileElm.append(imgElm);
                        fileElm.append(fileInfoElm);
                        fileElm.append(removeBtnElm);
                    }
                    fileInputElm.data('src', src);
                    filePreviewElm.append(fileElm);
                    bindRemoveBtnHoverListener();
                    bindRemoveBtnClickListener();
                };
                removeBtnElm.click(function(){
                    fileInputElm.remove();
                })
            }
        });

    });

    // chat
    $('#chatForm').submit(function (e) {
        e.preventDefault();
        let messInpElm = $('#messageInp');
        let message = messInpElm.val();
        let now = new Date();
        let time = now.getHours() + ':' + now.getMinutes();

        let chatBoxContentElm = $('.chat-box-content');
        let lastMessageElm = $('.chat-box-content .chat-message:last-child').last();
        let newMessageHtml = '';

        if(message.length > 0) {
            newMessageHtml = `
                <div class="message-wrapper">
                    <div class="message">
                        <p>${message}</p>
                    </div>
                    <div class="message-time">
                        <span>${time}</span>
                    </div>
                </div>
            `;
        }

        $('.fileInp').each(function(){
            let fileName = this.files[0].name;
            let arr = fileName.split('.');
            let ext = arr[arr.length - 1];
            if(isImage(ext)) {
                newMessageHtml += `
                    <div class="message-wrapper">
                        <div class="message">
                            <img class="img-responsive img-thumbnail" src="${$(this).data('src')}">
                        </div>
                        <div class="message-time">
                            <span>${time}</span>
                        </div>
                    </div>
                `;
            } else {
                newMessageHtml += `
                    <div class="message-wrapper">
                        <div class="message">
                            <a class="text-white" href="#">${fileName}</a>
                        </div>
                        <div class="message-time">
                            <span>${time}</span>
                        </div>
                    </div>
                `;
            }
        });

        if(lastMessageElm.hasClass('message-send')) {
            lastMessageElm.find('.messages').append(newMessageHtml);
        }
        else {
            chatBoxContentElm.append(`
                <div class="chat-message message-send">
                    <div class="avatar">
                        <img src="/HI_02/svg/female-35.svg" class="img-responsive img-rounded" alt="">
                    </div>
                    <div class="messages">
                        ${newMessageHtml}
                    </div>
                </div>
            `)
        }
        bindMessageHoverListener();
        messInpElm.val('');
        $('.remove-file').click();
        scrollToBottomOfChatbox();
        
        // reply
        let loadingElm = replying();
        setTimeout(function() {
            loadingElm.remove();
            reply(`<p>You can go to hospital at <a href="#" data-toggle="tooltip" title="Set appointment">14:30</a></p>`);
        }, 3000)
    })


    // reply message handler
    function replying() {
        let chatBoxContentElm = $('.chat-box-content');
        let lastMessageElm = $('.chat-box-content .chat-message:last-child').last();
        let loadingElm;
        if(lastMessageElm.hasClass('message-reply')) {
            loadingElm = $(`<p class="loading"><span>.</span><span>.</span><span>.</span></p>`)
            lastMessageElm.find('.messages').append(loadingElm);
        }
        else {
            loadingElm = $(`
                <div class="chat-message message-reply">
                    <div class="avatar">
                        <img src="/HI_02/svg/female-35.svg" class="img-responsive img-rounded" alt="">
                    </div>
                    <div class="messages">
                        <p class="loading"><span>.</span><span>.</span><span>.</span></p>
                    </div>
                </div>
            `)
            chatBoxContentElm.append(loadingElm)
        }

        return loadingElm;
    }

    function reply(message) {
        let now = new Date();
        let time = now.getHours() + ':' + now.getMinutes();

        let chatBoxContentElm = $('.chat-box-content');
        let lastMessageElm = $('.chat-box-content .chat-message:last-child').last();
        newMessageHtml = `
            <div class="message-wrapper">
                <div class="message">
                    <p>${message}</p>
                </div>
                <div class="message-time">
                    <span>${time}</span>
                </div>
            </div>
        `;
        if(lastMessageElm.hasClass('message-reply')) {
            lastMessageElm.find('.messages').append(newMessageHtml);
        }
        else {
            chatBoxContentElm.append(`
                <div class="chat-message message-reply">
                    <div class="avatar">
                        <img src="/HI_02/svg/female-35.svg" class="img-responsive img-rounded" alt="">
                    </div>
                    <div class="messages">
                        ${newMessageHtml}
                    </div>
                </div>
            `)
        }
        bindMessageHoverListener();
        scrollToBottomOfChatbox();
    }


    function scrollToBottomOfChatbox(){
        let chatBoxContentElm = $('.chat-box-content');
        chatBoxContentElm.stop().animate({
            scrollTop: chatBoxContentElm[0].scrollHeight
        }, 800);
    }
})(jQuery);
