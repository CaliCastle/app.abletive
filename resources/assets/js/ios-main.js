$(function () {
    var $stage = $('.main'),
        $canvas = $('.logo-canvas');

    $canvas.mouseenter(function () {
        $stage.removeClass('reset').addClass('smash');
    });

    $canvas.mouseleave(function () {
        $stage.removeClass('smash').addClass('reset');
    });

    //$('#intro-audio')[0].play();
    setTimeout(function () {
        $stage.addClass('stage-1 smash');
    }, 150);

    // Vocal intro
    setTimeout(function () {
        //$stage.removeClass('smash').addClass('stage-1 reset');
    }, 2100);

    // Drop time
    setTimeout(function () {
        $stage.addClass('smash');
    }, 3530);
    setTimeout(function () {
        $stage.removeClass('smash').addClass('reset');
    }, 4330);
});