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
            e.src = "assets/js/analytics.js";
            var n = document.getElementsByTagName("script")[0];
            n.parentNode.insertBefore(e, n)
        };
        analytics.SNIPPET_VERSION = "4.0.0";
        analytics.load("7iOqS9L3PoyGRj04HhCqfZfkR7ofjIFV");
        analytics.page({})
    }
}();

window.intercomSettings = {
    app_id: "nr701pks"
};
(function () {
    var w = window;
    var ic = w.Intercom;
    if (typeof ic === "function") {
        ic('reattach_activator');
        ic('update', intercomSettings);
    } else {
        var d = document;
        var i = function () {
            i.c(arguments)
        };
        i.q = [];
        i.c = function (args) {
            i.q.push(args)
        };
        w.Intercom = i;
        function l() {
            var s = d.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = 'https://widget.intercom.io/widget/APP_ID';
            var x = d.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        }

        if (w.attachEvent) {
            w.attachEvent('onload', l);
        } else {
            w.addEventListener('load', l, false);
        }
    }
})()

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
})(window, document, '/assets/js/hotjar.js', '.js?sv=');
