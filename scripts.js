$(document).ready(function name() {
    $("body").on("click", "a", function scroll (event){
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({
            scrollTop: top
        }, 700);
    });
    $('.icon').click(function () {
        $('.icon,.mobile-menu').toggleClass('active');
    });
    $('.mobile-link').click(function () {
        $('.mobile-menu').removeClass('active');
    });
    
});


