/* oh hi :) */
!function (t) {
    skel.breakpoints({
        narrower: "(max-width: 768px)",
        wide: "(max-width: 1280px)",
        normal: "(max-width: 1140px)",
        narrow: "(max-width: 960px)",
        mobile: "(max-width: 736px)"
    }), t(function () {
        var e = t(window), a = t("body"), s = a.attr("id");
        switch (a.addClass("is-loading"), e.on("load", function () {
            a.removeClass("is-loading")
        }), s) {
            default:
                break;

            case"mobile-test":
                if (skel.vars.touch)return void window.location.replace(t("#demo-iframe").attr("src"));
                e.load(function () {
                    var s = t("#demo-header"),
                        o = s.find(".selector"),
                        i = o.children("li"),
                        n = t("#demo-iframe-wrapper"),
                        r = t("#demo-iframe"), c = !1;

                        e.resize(function () {
                            o.is(":visible") ? e.width() < 1200 && (i.removeClass("active"), i.first().addClass("active"), o.hide(), n.css("left", 0).css("top", 0).css("width", "100%").css("height", "100%").css("margin-top", a.hasClass("overlap") ? 0 : "3.375em").css("margin-left", 0)) : e.width() >= 1200 && o.show()
                        });

                    r.on("load", function () {
                        n.removeClass("loading");
                        c = !1
                    });
                    i.each(function () {
                        var o, l, d = t(this), f = 0, h = 0, u = d.data("width"), p = d.data("height"), m = s.outerHeight(), v = e.height() - m - 120, w = !1;
                        u ? (h = "50%", o = u / -2 + "px", u += "px", w = !0) : (h = 0, o = "0", u = "100%"), p ? (p = Math.min(v, p), f = "50%", l = p / -2 + m / 2 + "px", p += "px", w = !0) : (f = "", l = "", p = "", skel.vars.IEVersion <= 8 && (f = 0, l = a.hasClass("overlap") ? 0 : "3.375em", p = "100%")), d.click(function () {
                            return c || d.hasClass("active") ? !1 : (c = !0, i.removeClass("active"), d.addClass("active"), n.addClass("loading"), void window.setTimeout(function () {
                                w ? n.addClass("framed") : n.removeClass("framed"), n.css("left", h).css("top", f).css("width", u).css("height", p).css("margin-top", l).css("margin-left", o), window.setTimeout(function () {
                                    a.hasClass("reload") ? r.attr("src", r.attr("src")) : (n.removeClass("loading"), c = !1)
                                }, 500)
                            }, 500))
                        })
                    });
                    // e.trigger("resize");
                    // skel.vars.IEVersion <= 8 && i.first().removeClass("active").trigger("click")
                })
        }
    })
}(jQuery);