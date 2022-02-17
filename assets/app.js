/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// start the Stimulus application
import './bootstrap';

if ($(".text-slider").length == 1) {
    var typed_strings = $(".text-slider-items").text();
    var typed = new Typed(".text-slider", {
        strings: typed_strings.split(", "),
        typeSpeed: 120,
        loop: true,
        backDelay: 1500,
        backSpeed: 30,
    });
}

$("figure")(
    function() {
        $(this).removeClass("hover");
    }
);

$(function() {
    $('[data-toggle="popover"]').popover();

    $('#cvc').on('click', function() {
        if ($('.cvc-preview-container').hasClass('hide')) {
            $('.cvc-preview-container').removeClass('hide');
        } else {
            $('.cvc-preview-container').addClass('hide');
        }
    });

});