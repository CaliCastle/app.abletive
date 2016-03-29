// browserify entry point
var Vue = require('vue');
var insight;

let openPage = function (url) {
    window.open(url, "_blank");
};

const enterClass = function (el) {
    $(el).addClass('entered');
};

let vue = new Vue({
    el: '#app',
    data: {
        appStoreURL: "https://appsto.re/cn/6r8M-.i"
    },
    methods: {
        redirectToAppStore: function() {
            openPage(this.appStoreURL);
        }
    }
});

$('section').each(function () {
    new Waypoint({
        element: $(this),
        offset: "55%",
        handler: function () {
            enterClass(this.element);
        }
    });
});

$(function () {
    $(window).scroll(function () {
        if (mobileDetect()) return;

        var $current_top = $(this).scrollTop();
        var $pos = $('#banner').offset().top;
        var $bottom_limit = $('#be-updated').offset().top;

        // Banner
        if ($current_top >= $pos && $current_top < $bottom_limit) {
            $current_top -= $pos;
            var negative = parseFloat(1 - $current_top / 15);
            var positive = -negative;
            $('#banner .app-store').css({
                'transform': 'translateY(' + negative + 'px)',
            });
            $('.iPhone-inside').css({
                'transform': 'translateY(' + positive + 'px)',
            });
        }

        $pos = $('#be-updated').offset().top;
        // Be updated, section 2
        // if ($current_top >= $pos && $current_top < $bottom_limit) {
            $current_top -= $pos;
            var negative = parseFloat(1 - $current_top / 31.5);
            var positive = -negative;
            $('#be-updated.entered .hand-hold-iphone').css({
                'transform': 'translateY(' + negative + 'px)',
            });
            $('#be-updated.entered aside').css({
                'transform': 'translateY(' + positive + 'px)',
            });
        // }

        $pos = $('#enjoy-anywhere').offset().top;
        // Enjoy anywhere, section 3
        $current_top -= $pos;
        var negative = parseFloat(1 - $current_top / 30);
        var positive = -negative;
        $('#enjoy-anywhere.entered aside').css({
            'transform': 'translateY(' + positive + 'px)',
        });

        $pos = $('#personal-pages').offset().top;
        // Personal pages, section 4
        $current_top -= $pos;
        var negative = parseFloat(1 - $current_top / 130);
        var positive = -negative;
        $('#personal-pages.entered .device').css({
            'transform': 'translateX(' + positive + 'px)',
        });
        $('#personal-pages.entered .row').css({
            'transform': 'translateY(' + negative + 'px)',
        });

        $pos = $('#watch-online').offset().top;
        // Personal pages, section 4
        $current_top -= $pos;
        var negative = parseFloat(1 - $current_top / 125);
        var positive = -negative;
        $('#watch-online.entered .vertical').css({
            'transform': 'translateY(' + negative + 'px)',
        });
        $('#watch-online.entered .horizontal').css({
            'transform': 'translateY(' + positive + 'px)',
        });

        $pos = $('#communicate').offset().top;
        // Communicate, section 5
        $current_top -= $pos;
        var negative = parseFloat(1 - $current_top / 105);
        var positive = -negative;
        $('#communicate.entered .left').css({
            'transform': 'translateY(' + positive + 'px)',
        });
        $('#communicate.entered .right').css({
            'transform': 'translateY(' + negative + 'px)',
        });
    });
});

function mobileDetect() {
    var ua = navigator.userAgent;
    var ipad = ua.match(/(iPad).*OS\s([\d_]+)/),
        isIphone = !ipad && ua.match(/(iPhone\sOS)\s([\d_]+)/),
        isAndroid = ua.match(/(Android)\s+([\d.]+)/),
        isMobile = isIphone || isAndroid;
    if (isMobile) {
        return true;
    } else {
        return false;
    }
}