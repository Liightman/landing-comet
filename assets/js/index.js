if (window.screen.availHeight <= 824)
{
    if (navigator.userAgent.indexOf("Chrome")!== -1 || navigator.userAgent.indexOf("Safari")!== -1)
    {   
        $('#satellite').css('top',"-30rem");
        $('#rocket').css('top', "-28rem");
        $('#dust').css('top', "-14rem")
    }

    if (navigator.userAgent.indexOf("Firefox") !== -1)
    {
        $('#satellite').css('margin-top', '-16.7%');
        $('#rocket').css('margin-top', '-16.7%');
    }
}

if (window.screen.availHeight <= 728)
{
    if (navigator.userAgent.indexOf("Chrome") !== -1)
    {
        $('.bottom').css('display', 'none');
    }

    if (navigator.userAgent.indexOf("Firefox") !== -1)
    {
        $('.bottom').css('display', 'none');
    }
}

$('#freelancesActionButton').click(function () {
   window.location = '/freelances'
});

$('#businessActionButton').click(function () {
   window.location = '/entreprises'
});

!function () {
    var analytics = window.analytics = window.analytics || [];
    if (!analytics.initialize)if (analytics.invoked) window.console && console.error && console.error("Segment snippet included twice."); else {
        analytics.invoked = !0;
        analytics.methods = ["trackSubmit", "trackClick", "trackLink", "trackForm", "pageview", "identify", "reset", "group", "track", "ready", "alias", "debug", "page", "once", "off", "on"];
        analytics.factory = function (t) {
            return function () {
                var e = Array.prototype.slice.call(arguments);
                e.unshift(t);
                analytics.push(e);
                return analytics
            }
        };
        for (var t = 0; t < analytics.methods.length; t++) {
            var e = analytics.methods[t];
            analytics[e] = analytics.factory(e)
        }
        analytics.load = function (t) {
            var e = document.createElement("script");
            e.type = "text/javascript";
            e.async = !0;
            e.src = ("https:" === document.location.protocol ? "https://" : "http://") + "cdn.segment.com/analytics.js/v1/" + t + "/analytics.min.js";
            var n = document.getElementsByTagName("script")[0];
            n.parentNode.insertBefore(e, n)
        };
        analytics.SNIPPET_VERSION = "4.0.0";
        analytics.load("7iOqS9L3PoyGRj04HhCqfZfkR7ofjIFV");
        analytics.page({})
        // { Intercom: { hideDefaultLauncher: true }}
    }
}();
//         Hotjar Tracking Code for http://www.hellocomet.co
(function (h, o, t, j, a, r) {
    h.hj = h.hj || function () {
            (h.hj.q = h.hj.q || []).push(arguments)
        };
    h._hjSettings = {hjid: 485099, hjsv: 5};
    a = o.getElementsByTagName('head')[0];
    r = o.createElement('script');
    r.async = 1;
    r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
    a.appendChild(r);
})(window, document, '//static.hotjar.com/c/hotjar-', '.js?sv=');

if (location.protocol !== 'https:')
    location.href = 'https:' + window.location.href.substring(window.location.protocol.length);

$('.cta-button').on('mouseover', function () {
    $($(this).parent().find("img")[0]).addClass('floating');
}).on('mouseout', function () {
    $($(this).parent().find("img")[0]).removeClass('floating');
})

setTimeout(popup, 2000);

function popup() {
    $("#toexport").insertBefore("body").animate({opacity: 0.9}, 1500).fadeIn(2000).removeClass('hidden');
    $(".first-container").css("margin-top", "-1rem");
}
$(".clicks").css('top', '10rem');
$(document).on('click', '.close', function () {
    $(".clicks").css('top', '3rem');
})
$(document).ready(function () {
    var link_f = $('.cta-button');
    $.each(link_f, function (index, value) {
        if ($(value).attr('name').includes("Freelance")) {
            var libel = 'Freelance_sign_up'
        }
        else {
            var libel = 'Entreprise_sign_up'
        }
        analytics.trackLink($(value), 'Click_CTA', {
            category: libel,
            label: $(value).attr('name'),
        });
    });
})

