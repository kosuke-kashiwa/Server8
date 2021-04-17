// モーダル２
$(document).on('click','.post-window',function() {
    // 背景をスクロールできないように＆スクロール場所を維持
    scroll_position = $(window).scrollTop();
    $('body').addClass('fixed').css({'top': -scroll_position});

    // モーダルウィンドウを開く
    $('.post-process').fadeIn();
    $('.modal').fadeIn();

    // モーダルを閉じる
    $(document).on('click touchend', function(e) {
        if (!$(e.target).closest('.post-process').length) {
            $('.modal').fadeOut();
        }
    });
    return false;
})

function check(){
    txt = document.form1.text.value;
    n = txt.length;
    if ( n > 150) alert("150文字以内で入力してください");
}