$(document).ready(function () {

    $('.dropdown').click(function () {
        $('.dropdown-menu').slideToggle(300);
    });

    $('#aereo_image').each(function () {
        $(this).mouseover(function () {
            $(this).animate({'opacity': 0.9, 'box-shadow': '2px 2px 2px #000'}, {duration: 300});
        });
        $(this).mouseout(function () {
            $(this).animate({'opacity': 0.8, 'box-shadow': '0px 0px 0px #000'}, {duration: 300});
        });
    });

    $("#register_href").hover(
        function () {
            $(".form-signin").stop(true).fadeTo("slow", 0.33);
        },
        function () {
            $(".form-signin").stop(true).fadeTo("slow", 1);
        }
    );
});