!function(e) {
    function t(t) {
        for (var i, r, a = t[0], l = t[1], h = t[2], d = 0, p = []; d < a.length; d++)
            r = a[d],
            o[r] && p.push(o[r][0]),
            o[r] = 0;
        for (i in l)
            Object.prototype.hasOwnProperty.call(l, i) && (e[i] = l[i]);
        for (c && c(t); p.length; )
            p.shift()();
        return n.push.apply(n, h || []),
        s()
    }
    function s() {
        for (var e, t = 0; t < n.length; t++) {
            for (var s = n[t], i = !0, a = 1; a < s.length; a++) {
                var l = s[a];
                0 !== o[l] && (i = !1)
            }
            i && (n.splice(t--, 1),
            e = r(r.s = s[0]))
        }
        return e
    }
    var i = {}
      , o = {
        1: 0
    }
      , n = [];
    function r(t) {
        if (i[t])
            return i[t].exports;
        var s = i[t] = {
            i: t,
            l: !1,
            exports: {}
        };
        return e[t].call(s.exports, s, s.exports, r),
        s.l = !0,
        s.exports
    }
    r.e = function(e) {
        var t = []
          , s = o[e];
        if (0 !== s)
            if (s)
                t.push(s[2]);
            else {
                var i = new Promise(function(t, i) {
                    s = o[e] = [t, i]
                }
                );
                t.push(s[2] = i);
                var n, a = document.getElementsByTagName("head")[0], l = document.createElement("script");
                l.charset = "utf-8",
                l.timeout = 120,
                r.nc && l.setAttribute("nonce", r.nc),
                l.src = function(e) {
                    return r.p + "js/modern." + ({
                        0: "InteractiveScroller",
                        2: "vendors~InteractiveScroller"
                    }[e] || e) + ".js"
                }(e),
                n = function(t) {
                    l.onerror = l.onload = null,
                    clearTimeout(h);
                    var s = o[e];
                    if (0 !== s) {
                        if (s) {
                            var i = t && ("load" === t.type ? "missing" : t.type)
                              , n = t && t.target && t.target.src
                              , r = new Error("Loading chunk " + e + " failed.\n(" + i + ": " + n + ")");
                            r.type = i,
                            r.request = n,
                            s[1](r)
                        }
                        o[e] = void 0
                    }
                }
                ;
                var h = setTimeout(function() {
                    n({
                        type: "timeout",
                        target: l
                    })
                }, 12e4);
                l.onerror = l.onload = n,
                a.appendChild(l)
            }
        return Promise.all(t)
    }
    ,
    r.m = e,
    r.c = i,
    r.d = function(e, t, s) {
        r.o(e, t) || Object.defineProperty(e, t, {
            enumerable: !0,
            get: s
        })
    }
    ,
    r.r = function(e) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
            value: "Module"
        }),
        Object.defineProperty(e, "__esModule", {
            value: !0
        })
    }
    ,
    r.t = function(e, t) {
        if (1 & t && (e = r(e)),
        8 & t)
            return e;
        if (4 & t && "object" == typeof e && e && e.__esModule)
            return e;
        var s = Object.create(null);
        if (r.r(s),
        Object.defineProperty(s, "default", {
            enumerable: !0,
            value: e
        }),
        2 & t && "string" != typeof e)
            for (var i in e)
                r.d(s, i, function(t) {
                    return e[t]
                }
                .bind(null, i));
        return s
    }
    ,
    r.n = function(e) {
        var t = e && e.__esModule ? function() {
            return e.default
        }
        : function() {
            return e
        }
        ;
        return r.d(t, "a", t),
        t
    }
    ,
    r.o = function(e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }
    ,
    r.p = "/",
    r.oe = function(e) {
        throw console.error(e),
        e
    }
    ;
    var a = window.webpackJsonp = window.webpackJsonp || []
      , l = a.push.bind(a);
    a.push = t,
    a = a.slice();
    for (var h = 0; h < a.length; h++)
        t(a[h]);
    var c = l;
    n.push([146, 3]),
    s()
}({
    146: function(e, t, s) {
        "use strict";
        s.r(t);
        s(147),
        s(153),
        s(58),
        s(87);
        var i = s(2)
          , o = function(e, t, s) {
            var i;
            return function() {
                var o = this
                  , n = arguments
                  , r = s && !i;
                clearTimeout(i),
                i = setTimeout(function() {
                    i = null,
                    s || e.apply(o, n)
                }, t),
                r && e.apply(o, n)
            }
        }
          , n = s(0)
          , r = s(3);
        var a = new class extends i.e {
            constructor() {
                super(),
                this.breakpoints = {
                    xs: 576,
                    sm: 768,
                    md: 992,
                    lg: 1200,
                    xl: 1920
                }
            }
            isMobile() {
                return !this.isMin("sm")
            }
        }
          , l = s(79)
          , h = s.n(l);
        var c = new class {
            constructor() {
                this.containers = document.querySelectorAll(".nav"),
                this.breadcrumbAppends = [...document.querySelectorAll(".breadcrumb-append")],
                this.links = [...document.querySelectorAll(".main-nav .nav-link")],
                this.mobileBtns = [...document.querySelectorAll(".nav-btn")],
                this.backgrounds = document.querySelectorAll(".nav__background"),
                this.lists = document.querySelectorAll(".mobile-list"),
                this.listsLinks = [...document.querySelectorAll(".mobile-list .nav-link-wrapper")],
                this.listsLinksReverse = [...this.listsLinks].reverse(),
                this.labelWrappers = document.querySelectorAll(".nav__mobile-label-wrapper"),
                this.openLabels = document.querySelectorAll(".nav__mobile-label-open"),
                this.closeLabels = document.querySelectorAll(".nav__mobile-label-close"),
                this.overlay = document.getElementById("nav__overlay"),
                this.whiteElements = document.querySelectorAll(".nav-white"),
                this.blackElements = document.querySelectorAll(".nav-black"),
                this.navPoints = document.querySelectorAll(".nav__point"),
                this.navPointsElements = [],
                this.navLoading = document.querySelectorAll(".nav__loading"),
                this.navLangs = document.querySelectorAll(".nav__lang"),
                this.navItemAbsolute = document.querySelectorAll(".nav-item-absolute"),
                this.navItems = document.querySelectorAll(".breadcrumb .nav-item:not(.nav-item-absolute):not(:first-child)"),
                this.bigLetters = [],
                this.firstBreadcrumbEls = [],
                this.page = null,
                this.layoutAnimationDelay = 0,
                this.navOpen = !1,
                this.currentLayout = null,
                this.animationCompleted = !0,
                this.navLinkClick = !1,
                this.backgroundsPositionY = 80,
                this.isTransitioning = !1,
                this.loadingTl = null,
                this.bgShow = !1,
                this.isHomeShow = !1,
                this.update = this.update.bind(this),
                this.onChangeLayout = this.onChangeLayout.bind(this),
                this.onTransitionStart = this.onTransitionStart.bind(this),
                this.onTransitionComplete = this.onTransitionComplete.bind(this),
                this.onMobileBtnClick = this.onMobileBtnClick.bind(this),
                this.onMouseMove = this.onMouseMove.bind(this),
                this.onResize = this.onResize.bind(this),
                this.onShowHome = this.onShowHome.bind(this),
                this.onHideHome = this.onHideHome.bind(this),
                this.onMouseMoveThrottle = h()(this.onMouseMove, 100)
            }
            init() {
                a.isMin("sm") ? this.hideBackground() : this.backgroundsPositionY = 55;
                for (const e of this.navPoints) {
                    const t = e.querySelectorAll("div");
                    this.navPointsElements.push(t)
                }
                this.loadingTl = new n.f({
                    repeat: -1,
                    paused: !0,
                    onComplete: ()=>{
                        this.loadingTl.restart()
                    }
                });
                let e = 0;
                for (const t of this.navPointsElements) {
                    for (const s of t)
                        this.loadingTl.set(s, {
                            scale: 0
                        }, .5 * e).to(s, 1.5, {
                            scale: 3
                        }, .5 * e).to(s, .75, {
                            alpha: .2
                        }, .5 * e).to(s, .75, {
                            alpha: 0
                        }, .75 + .5 * e),
                        e++;
                    e = 0
                }
                this.initEvents(),
                this.show()
            }
            initEvents() {
                window.addEventListener(i.h.AFTER_PAGE_BOOT, this.update, !!window.passiveSupported && {
                    passive: !0
                }),
                window.addEventListener(i.h.TRANSITION_START, this.onTransitionStart, !!window.passiveSupported && {
                    passive: !0
                }),
                window.addEventListener(i.h.TRANSITION_COMPLETE, this.onTransitionComplete, !!window.passiveSupported && {
                    passive: !0
                }),
                document.addEventListener("nav.changeLayout", this.onChangeLayout, !!window.passiveSupported && {
                    passive: !0
                }),
                window.addEventListener("mousemove", this.onMouseMoveThrottle, !!window.passiveSupported && {
                    passive: !0
                }),
                window.addEventListener("resize", o(this.onResize, 20), !!window.passiveSupported && {
                    passive: !0
                }),
                window.addEventListener("NAV_SHOW_HOME", this.onShowHome),
                window.addEventListener("NAV_HIDE_HOME", this.onHideHome);
                for (const e of this.mobileBtns)
                    e.addEventListener("click", this.onMobileBtnClick, !!window.passiveSupported && {
                        passive: !0
                    })
            }
            onShowHome() {
                "home" !== this.page.type && (n.h.killTweensOf(this.navItemAbsolute),
                n.h.killTweensOf(this.navItems),
                this.isHomeShow = !0,
                n.h.to(this.navItemAbsolute, .45, {
                    alpha: 1,
                    y: -10,
                    ease: n.c.easeOut
                }),
                n.h.to(this.navItems, .45, {
                    y: -10,
                    alpha: 0,
                    ease: n.c.easeOut
                }))
            }
            onHideHome() {
                this.isHomeShow && (n.h.killTweensOf(this.navItemAbsolute),
                n.h.killTweensOf(this.navItems),
                this.isHomeShow = !1,
                n.h.to(this.navItemAbsolute, .45, {
                    y: 0,
                    alpha: 0,
                    ease: n.c.easeOut
                }),
                n.h.to(this.navItems, .45, {
                    y: 0,
                    alpha: 1,
                    ease: n.c.easeOut
                }))
            }
            onResize() {
                this.backgroundsPositionY = 80,
                a.isMin("sm") || (this.backgroundsPositionY = 55,
                this.navOpen && this.close())
            }
            onMouseMove(e) {
                if (a.isMin("sm")) {
                    if (this.isTransitioning)
                        return;
                    e.pageY <= this.backgroundsPositionY && !this.bgShow ? this.showBackground() : e.pageY > this.backgroundsPositionY && this.bgShow && this.hideBackground()
                }
            }
            onMobileBtnClick() {
                this.navOpen ? this.close() : this.open()
            }
            onTransitionStart() {
                this.isTransitioning = !0,
                this.layoutAnimationDelay = 1,
                this.navOpen || this.hideBackground()
            }
            onTransitionComplete() {
                this.isTransitioning = !1,
                this.layoutAnimationDelay = 0;
                for (const e of this.containers)
                    e.classList.remove("static");
                this.page.scrollManager.isSmooth || (document.documentElement.scrollTop = 0,
                document.body.scrollTop = 0,
                this.page.updateScroll())
            }
            onChangeLayout(e) {
                let t = e.detail;
                const s = t.way
                  , i = t.options.layout;
                this.navOpen || !this.animationCompleted || this.isTransitioning || "enter" === s && this.changeLayout(i)
            }
            showBackground() {
                this.bgShow = !0,
                n.h.to(this.backgrounds, .55, {
                    y: 0,
                    ease: n.d.easeOut
                })
            }
            hideBackground() {
                this.bgShow = !1,
                n.h.to(this.backgrounds, .55, {
                    y: -this.backgroundsPositionY,
                    ease: n.d.easeOut
                })
            }
            loading() {
                let e = !(arguments.length > 0 && void 0 !== arguments[0]) || arguments[0];
                return new Promise(t=>{
                    e ? (n.h.to(this.breadcrumbAppends, .25, {
                        alpha: 0,
                        delay: .25
                    }),
                    n.h.to(this.navLoading, .25, {
                        alpha: 1,
                        delay: .5
                    }),
                    this.loadingTl.play()) : (n.h.killTweensOf(this.breadcrumbAppends),
                    n.h.killTweensOf(this.navLoading),
                    n.h.to(this.breadcrumbAppends, .25, {
                        alpha: 1,
                        delay: .25
                    }),
                    n.h.to(this.navLoading, .25, {
                        alpha: 0
                    }),
                    n.h.to(this.navPointsElements, .25, {
                        alpha: 0,
                        onComplete: ()=>{
                            this.loadingTl.pause()
                        }
                    }))
                }
                )
            }
            update(e) {
                this.page = e.detail;
                for (const e of [...this.bigLetters, ...this.firstBreadcrumbEls])
                    e.removeEventListener("mouseenter", this.onShowHome),
                    e.removeEventListener("mouseleave", this.onHideHome);
                this.updateLinks(),
                this.onHideHome();
                let t = this.page.rootElement.getAttribute("data-urls").split("|");
                t.length > 2 && (t = t.slice(0, -1));
                for (const e of this.navLangs) {
                    const s = e.querySelectorAll("a")
                      , i = s.length;
                    for (let e = 0; e < i; e++) {
                        const i = s[e]
                          , o = t[e];
                        i && o ? (i.setAttribute("href", o),
                        i.style.display = "block") : i.style.display = "none"
                    }
                }
                if ("home" !== this.page.type && "static" === this.page.context)
                    for (const e of this.breadcrumbAppends)
                        e.querySelectorAll(".nav-link")[0].innerText = "R";
                "static" === this.page.context && this.changeLayout(this.oppositeLayout(this.page.backgroundColor), 0)
            }
            close() {
                let e = arguments.length > 0 && void 0 !== arguments[0] && arguments[0]
                  , t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : .95
                  , s = (arguments.length > 2 && void 0 !== arguments[2] && arguments[2],
                arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : n.c.easeOut);
                return new Promise(i=>{
                    this.navOpen = !1,
                    this.animationCompleted = !1,
                    n.h.killTweensOf(this.listsLinks),
                    n.h.killTweensOf(this.listsLinksReverse),
                    n.h.killDelayedCallsTo(),
                    e || this.changeLayout(this.oppositeLayout(), .15, t - .15),
                    n.h.to(this.overlay, t, {
                        alpha: 0,
                        ease: s
                    }),
                    n.h.to(this.backgrounds, t, {
                        y: e ? -this.backgroundsPositionY : 0,
                        ease: s,
                        onComplete: ()=>{
                            n.h.set(this.listsLinksReverse, {
                                y: .1 * Object(r.a)(),
                                alpha: 0
                            }),
                            this.animationCompleted = !0,
                            i()
                        }
                    }),
                    n.h.to(this.labelWrappers, t, {
                        yPercent: 0,
                        ease: s
                    }),
                    n.h.to(this.closeLabels, t / 2, {
                        alpha: 1,
                        ease: s
                    }),
                    n.h.to(this.openLabels, t / 2, {
                        alpha: 0,
                        ease: s
                    }),
                    n.h.to(this.lists, t / 2, {
                        pointerEvents: "none",
                        autoAlpha: 0,
                        ease: s
                    }),
                    document.body.classList.remove("nav-open")
                }
                )
            }
            open() {
                return new Promise(e=>{
                    this.animationCompleted ? (this.navOpen = !0,
                    this.animationCompleted = !1,
                    n.h.killTweensOf(this.listsLinks),
                    n.h.killTweensOf(this.listsLinksReverse),
                    n.h.killTweensOf(this.backgrounds),
                    n.h.killDelayedCallsTo(),
                    this.changeLayout(this.oppositeLayout()),
                    n.h.to(this.overlay, .75 * .7, {
                        alpha: .85,
                        ease: n.c.easeOut
                    }),
                    n.h.to(this.backgrounds, .75, {
                        y: Object(r.a)() - this.backgroundsPositionY,
                        ease: n.c.easeOut,
                        onComplete: ()=>{
                            this.animationCompleted = !0
                        }
                    }),
                    n.h.to(this.labelWrappers, .75, {
                        yPercent: -50,
                        ease: n.c.easeOut,
                        onComplete: e
                    }),
                    n.h.to(this.closeLabels, .375, {
                        alpha: 0,
                        ease: n.c.easeOut
                    }),
                    n.h.to(this.openLabels, .375, {
                        alpha: 1,
                        ease: n.c.easeOut
                    }),
                    n.h.set(this.lists, {
                        pointerEvents: "auto",
                        autoAlpha: 1
                    }),
                    document.body.classList.add("nav-open"),
                    n.h.staggerTo(this.listsLinks, 1.2, {
                        y: 0,
                        alpha: 1,
                        rotationX: 0,
                        delay: .05,
                        ease: n.d.easeOut
                    }, .075)) : e()
                }
                )
            }
            oppositeLayout() {
                let e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : null;
                return null === e && (e = this.currentLayout),
                "white" === e ? "black" : "white"
            }
            changeLayout() {
                let e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "black"
                  , t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : null
                  , s = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : .5;
                if (e === this.currentLayout)
                    return;
                const i = n.c.easeOut;
                this.oldLayout = this.currentLayout,
                this.currentLayout = e,
                null === t && (t = this.layoutAnimationDelay),
                "white" === e ? (n.h.to(this.blackElements, s, {
                    alpha: 0,
                    pointerEvents: "none",
                    ease: i,
                    delay: t
                }),
                n.h.to(this.whiteElements, s, {
                    alpha: 1,
                    pointerEvents: "auto",
                    delay: t
                })) : (n.h.to(this.blackElements, s, {
                    alpha: 1,
                    pointerEvents: "auto",
                    ease: i,
                    delay: t
                }),
                n.h.to(this.whiteElements, s, {
                    alpha: 0,
                    pointerEvents: "none",
                    ease: i,
                    delay: t
                }))
            }
            updateLinks() {
                const e = window.location
                  , t = e.pathname
                  , s = e.href;
                for (const e of this.links) {
                    const i = e.getAttribute("href");
                    i === t || i === s ? n.h.to(e, .5, {
                        alpha: .5,
                        pointerEvents: "none"
                    }) : n.h.to(e, .5, {
                        alpha: 1,
                        pointerEvents: "inherit"
                    })
                }
            }
            addListeners() {
                this.bigLetters = this.page.rootElement.querySelectorAll(".big-letter"),
                this.firstBreadcrumbEls = document.querySelectorAll(".nav .breadcrumb .nav-item:first-child");
                for (const e of [...this.bigLetters, ...this.firstBreadcrumbEls])
                    e.addEventListener("mouseenter", this.onShowHome),
                    e.addEventListener("mouseleave", this.onHideHome)
            }
            changeBreadcrumb() {
                let e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : .75;
                const t = this.page.rootElement.querySelector("#hidden-breadcrumb ul");
                "home" !== this.page.type && (t.querySelectorAll(".nav-link")[0].innerText = "R");
                for (const s of this.breadcrumbAppends) {
                    const i = s.querySelector(".breadcrumb")
                      , o = i.querySelectorAll("li");
                    s.prepend(t.cloneNode(!0));
                    const r = s.children[0].querySelectorAll("li:not(.nav-item-absolute)");
                    n.h.set(r, {
                        y: 13,
                        alpha: 0
                    });
                    let a = 0
                      , l = o.length;
                    for (; a < l; a++) {
                        const t = r[a]
                          , s = o[a];
                        t && t.innerText.replace(/\s/g, "") === s.innerText.replace(/\s/g, "") && !t.classList.contains(".separator") ? (n.h.set(t, {
                            y: 0,
                            alpha: 1
                        }),
                        n.h.set(s, {
                            alpha: 0
                        })) : n.h.to(s, 1, {
                            y: -13,
                            alpha: 0,
                            delay: e + .15 * a,
                            ease: n.d.easeOut
                        })
                    }
                    n.h.staggerTo(r, 1, {
                        y: 0,
                        alpha: 1,
                        delay: e + .15 * a,
                        ease: n.d.easeOut
                    }, .15, ()=>{
                        this.navItems = document.querySelectorAll(".breadcrumb .nav-item:not(.nav-item-absolute):not(:first-child)"),
                        this.navItemAbsolute = document.querySelectorAll(".nav-item-absolute"),
                        this.addListeners(),
                        i && i.parentNode && i.parentNode.removeChild(i)
                    }
                    )
                }
            }
            show() {
                let e = 0;
                for (const t of this.containers) {
                    const s = [...t.querySelectorAll(".nav li:not(.nav-item-absolute)")];
                    n.h.staggerFromTo(s, 1, {
                        y: 10,
                        alpha: 0
                    }, {
                        y: 0,
                        alpha: 1,
                        delay: .2,
                        ease: n.d.easeOut
                    }, .15, ()=>{
                        0 === e && (this.addListeners(),
                        e++)
                    }
                    )
                }
            }
        }
        ;
        Object.prototype.toString;
        function d(e) {
            return !isNaN(parseFloat(e)) && isFinite(e)
        }
        var p = s(4);
        s(96);
        const u = {
            CLICK: "click.Scroll",
            ISREADY: "isReady.Scroll",
            REBUILD: "rebuild.Scroll",
            RENDER: "render.Scroll",
            RESIZE: "resize.Scroll",
            SCROLL: "scroll.Scroll",
            SCROLLTO: "scrollTo.Scroll",
            UPDATE: "update.Scroll"
        }
          , m = {
            container: document,
            mobileContainer: document,
            onScroll: function() {},
            selector: ".js-animate",
            smooth: !1,
            smoothMobile: !1,
            reversed: !1,
            getWay: !1,
            getSpeed: !1
        };
        var g = class {
            constructor(e) {
                this.container = e.container ? e.container : m.container,
                this.selector = e.selector ? e.selector : m.selector,
                this.callbacks = {
                    onScroll: "function" == typeof e.onScroll ? e.onScroll : m.onScroll
                },
                this.scroll = {
                    x: 0,
                    y: 0,
                    direction: ""
                },
                this.enabled = !1,
                this.windowHeight = Object(r.a)(),
                this.windowMiddle = this.windowHeight / 2,
                this.animatedElements = [],
                this.requestId = null,
                this.onRebuild = this.onRebuild.bind(this),
                this.onUpdate = this.onUpdate.bind(this),
                this.onRender = this.onRender.bind(this),
                this.onScrollTo = this.onScrollTo.bind(this),
                this.onResize = this.onResize.bind(this),
                this.onScroll = this.onScroll.bind(this)
            }
            init() {
                document.documentElement.classList.remove("has-smooth-scroll"),
                this.scroll.y = window.pageYOffset,
                this.scroll.x = window.pageXOffset,
                this.addElements(),
                this.renderAnimations(),
                document.addEventListener("scroll", this.onScroll, !!window.passiveSupported && {
                    passive: !0
                }),
                document.addEventListener(u.REBUILD, this.onRebuild, !!window.passiveSupported && {
                    passive: !0
                }),
                document.addEventListener(u.UPDATE, this.onUpdate, !!window.passiveSupported && {
                    passive: !0
                }),
                document.addEventListener(u.RENDER, this.onRender, !!window.passiveSupported && {
                    passive: !0
                }),
                document.addEventListener(u.SCROLLTO, this.onScrollTo, !!window.passiveSupported && {
                    passive: !0
                }),
                document.addEventListener(u.RESIZE, this.onResize, !!window.passiveSupported && {
                    passive: !0
                }),
                this.enabled = !0
            }
            onScroll() {
                this.enabled && this.renderAnimations()
            }
            onResize() {
                this.updateElements()
            }
            onScrollTo(e) {
                let t = e.detail;
                this.scrollTo(t.options),
                this.updateElements()
            }
            onRender() {
                this.renderAnimations(!1)
            }
            onUpdate(e, t) {
                this.updateElements(t)
            }
            onRebuild() {
                this.scrollbar.scrollTo(0, 0, 0),
                this.updateElements()
            }
            addElements() {
                this.animatedElements = [];
                const e = this.container.querySelectorAll(this.selector)
                  , t = e.length;
                let s = 0;
                for (; s < t; s++) {
                    let t = e[s]
                      , o = t.getAttribute("data-position")
                      , n = t.getAttribute("data-target")
                      , r = "string" == typeof t.getAttribute("data-sticky")
                      , a = t.getAttribute("data-sticky-target")
                      , l = n && document.querySelector(n).length ? document.querySelector(n) : t
                      , h = l.getBoundingClientRect().top + this.scroll.y
                      , c = h + l.offsetHeight
                      , d = null;
                    t.hasAttribute("data-viewport-offset") && (d = t.getAttribute("data-viewport-offset").split(","));
                    let u = "string" == typeof t.getAttribute("data-callback") ? t.getAttribute("data-callback") : null
                      , m = null;
                    if (null != u) {
                        let e = u.substr(0, u.indexOf("("))
                          , t = u.substr(u.indexOf("("), u.length - e.length)
                          , s = (t = (t = t.replace("(", "")).replace(")", "")).split("|")
                          , o = {};
                        for (var i = 0; i < s.length; i++) {
                            let e, t = s[i].split(":");
                            t[0] = t[0].replace(" ", ""),
                            e = "true" === t[1] || "false" !== t[1] && (/^\d+$/.test(t[1]) ? parseInt(t[1]) : t[1]),
                            o[t[0]] = e
                        }
                        m = {
                            event: e,
                            options: o
                        }
                    }
                    let g = !!t.getAttribute("data-repeat")
                      , w = t.getAttribute("data-inview-class");
                    w || (w = "is-show"),
                    r && (c = a ? document.querySelector(a).getBoundingClientRect().top - t.innerHeight : this.container.innerHeight,
                    t.classList.remove(w),
                    t.classList.remove("is-unstuck"),
                    p.c.set(t, {
                        x: 0,
                        y: 0,
                        z: 0
                    })),
                    g && t.classList.contains(w) || (this.animatedElements[s] = {
                        element: t,
                        offset: Math.round(h),
                        repeat: g,
                        position: o,
                        limit: c,
                        inViewClass: w,
                        viewportOffset: d,
                        sticky: r,
                        callback: m
                    })
                }
            }
            animateElements() {
                const e = this.animatedElements.length
                  , t = [];
                let s = 0;
                for (; s < e; s++) {
                    let e = this.animatedElements[s];
                    this.toggleElement(e, s) && t.push(s)
                }
                for (s = t.length; s--; )
                    this.animatedElements.splice(t[s], 1)
            }
            renderAnimations() {
                this.scroll.y !== window.pageYOffset && (this.scroll.y = window.pageYOffset),
                this.scroll.x !== window.pageXOffset && (this.scroll.x = window.pageXOffset),
                this.callbacks.onScroll(this.scroll),
                this.animateElements()
            }
            toggleElement(e, t) {
                let s = !1;
                if (e) {
                    const t = this.scroll.y
                      , i = t + this.windowHeight;
                    let o = !1;
                    if ("top" === e.position)
                        o = t >= e.offset && t <= e.limit;
                    else if ("below" === e.position)
                        o = t > e.limit;
                    else if (e.sticky)
                        o = t >= e.offset && t <= e.limit;
                    else if (e.viewportOffset)
                        if (e.viewportOffset.length > 1) {
                            let s = t + this.windowHeight * e.viewportOffset[1];
                            o = i - this.windowHeight * e.viewportOffset[0] > e.offset && s < e.limit
                        } else {
                            let t = i - this.windowHeight * e.viewportOffset[0];
                            o = t > e.offset && t < e.limit
                        }
                    else
                        o = i >= e.offset && t <= e.limit;
                    if (e.sticky && (t > e.limit ? e.element.classList.add("is-unstuck") : e.element.classList.remove("is-unstuck"),
                    t < e.offset && e.element.classList.remove(e.inViewClass)),
                    o) {
                        if (e.inView || (e.element.hasAttribute("data-disable-inview-class") || e.element.classList.add(e.inViewClass),
                        e.inView = !0,
                        this.triggerCallback(e, "enter")),
                        e.repeat || e.sticky || (s = !0),
                        e.sticky) {
                            let t = this.scroll.y - e.offset;
                            p.c.set(e.element, {
                                y: t
                            })
                        }
                    } else
                        e.repeat && e.inView && (e.element.hasAttribute("data-disable-inview-class") || e.element.classList.remove(e.inViewClass),
                        e.inView = !1,
                        this.triggerCallback(e, "leave"))
                }
                return s
            }
            triggerCallback(e, t) {
                if (e.callback) {
                    const s = new window.CustomEvent(e.callback.event,{
                        detail: {
                            element: e.element,
                            type: e.callback.event,
                            options: e.callback.options,
                            way: t
                        }
                    });
                    document.dispatchEvent(s)
                }
            }
            scrollTo(e) {
                const t = e.targetElem
                  , s = e.sourceElem
                  , i = e.offsetElem;
                let o = d(e.targetOffset) ? parseInt(e.targetOffset) : 0;
                const n = d(e.speed) ? parseInt(e.speed) / 1e3 : .8
                  , r = d(e.delay) ? parseInt(e.delay) : 0
                  , a = e.toTop
                  , l = e.toBottom;
                let h = 0;
                if (void 0 === t && void 0 === s && void 0 === o)
                    return console.warn("You must specify at least one parameter."),
                    !1;
                if (void 0 !== t && t && (o = t.getBoundingClientRect().top + o),
                void 0 !== s && s) {
                    let e = "";
                    e = s.getAttribute("data-target") ? s.getAttribute("data-target") : s.getAttribute("href"),
                    o = document.querySelector(e).getBoundingClientRect().top + o
                }
                void 0 !== i && (o -= h = document.querySelector(i).offsetHeight),
                !0 === a ? o = 0 : !0 === l && (o = window.pageYOffset),
                e.useTarget && (o = t),
                p.c.to(window, n, {
                    delay: r,
                    scrollTo: {
                        y: o,
                        autoKill: !1
                    },
                    ease: p.a.easeOut
                })
            }
            updateElements() {
                this.scroll.y = window.pageYOffset,
                this.scroll.x = window.pageXOffset,
                this.addElements(),
                this.animateElements()
            }
            destroy() {
                window.cancelAnimationFrame(this.requestId),
                this.requestId = null,
                this.animatedElements = [],
                document.removeEventListener(u.REBUILD, this.onRebuild, !!window.passiveSupported && {
                    passive: !0
                }),
                document.removeEventListener(u.UPDATE, this.onUpdate, !!window.passiveSupported && {
                    passive: !0
                }),
                document.removeEventListener(u.RENDER, this.onRender, !!window.passiveSupported && {
                    passive: !0
                }),
                document.removeEventListener(u.SCROLLTO, this.onScrollTo, !!window.passiveSupported && {
                    passive: !0
                }),
                document.removeEventListener(u.RESIZE, this.onResize, !!window.passiveSupported && {
                    passive: !0
                }),
                document.removeEventListener("scroll", this.onScrollThrottle, !!window.passiveSupported && {
                    passive: !0
                })
            }
        }
          , w = window.GreenSockGlobals || window
          , v = function(e) {
            var t, s = e.split("."), i = w;
            for (t = 0; t < s.length; t++)
                i[s[t]] = i = i[s[t]] || {};
            return i
        }("com.greensock.utils")
          , b = function e(t) {
            var s = t.nodeType
              , i = "";
            if (1 === s || 9 === s || 11 === s) {
                if ("string" == typeof t.textContent)
                    return t.textContent;
                for (t = t.firstChild; t; t = t.nextSibling)
                    i += e(t)
            } else if (3 === s || 4 === s)
                return t.nodeValue;
            return i
        }
          , y = document
          , f = y.defaultView ? y.defaultView.getComputedStyle : function() {}
          , E = /([A-Z])/g
          , S = function(e, t, s, i) {
            var o;
            return (s = s || f(e, null)) ? o = (e = s.getPropertyValue(t.replace(E, "-$1").toLowerCase())) || s.length ? e : s[t] : e.currentStyle && (o = (s = e.currentStyle)[t]),
            i ? o : parseInt(o, 10) || 0
        }
          , L = function(e) {
            return !!(e.length && e[0] && (e[0].nodeType && e[0].style && !e.nodeType || e[0].length && e[0][0]))
        }
          , T = ")eefec303079ad17405c"
          , k = /(?:<br>|<br\/>|<br \/>)/gi
          , C = "<div style='position:relative;display:inline-block;" + (y.all && !y.addEventListener ? "*display:inline;*zoom:1;'" : "'")
          , P = function(e) {
            var t = -1 !== (e = e || "").indexOf("++")
              , s = 1;
            return t && (e = e.split("++").join("")),
            function() {
                return C + (e ? " class='" + e + (t ? s++ : "") + "'>" : ">")
            }
        }
          , O = v.SplitText = w.SplitText = function(e, t) {
            if ("string" == typeof e && (e = O.selector(e)),
            !e)
                throw new Error("cannot split a null element.");
            this.elements = L(e) ? function(e) {
                var t, s, i, o = [], n = e.length;
                for (t = 0; t < n; t++)
                    if (s = e[t],
                    L(s))
                        for (i = s.length,
                        i = 0; i < s.length; i++)
                            o.push(s[i]);
                    else
                        o.push(s);
                return o
            }(e) : [e],
            this.chars = [],
            this.words = [],
            this.lines = [],
            this._originals = [],
            this.vars = t || {},
            this.split(t)
        }
          , x = function(e, t) {
            for (var s = t.length; --s > -1; )
                e.push(t[s])
        }
          , j = function(e, t, s, i, o) {
            k.test(e.innerHTML) && (e.innerHTML = e.innerHTML.replace(k, T));
            var n, r, a, l, h, c, d, p, u, m, g, w, v, E, L = b(e), C = t.type || t.split || "chars,words,lines", O = -1 !== C.indexOf("lines") ? [] : null, j = -1 !== C.indexOf("words"), A = -1 !== C.indexOf("chars"), I = "absolute" === t.position || !0 === t.absolute, M = I ? "&#173; " : " ", _ = -999, B = f(e), R = S(e, "paddingLeft", B), q = S(e, "borderBottomWidth", B) + S(e, "borderTopWidth", B), H = S(e, "borderLeftWidth", B) + S(e, "borderRightWidth", B), N = S(e, "paddingTop", B) + S(e, "paddingBottom", B), D = S(e, "paddingLeft", B) + S(e, "paddingRight", B), W = S(e, "textAlign", B, !0), z = e.clientHeight, Y = e.clientWidth, F = P(t.wordsClass), V = P(t.charsClass), U = -1 !== (t.linesClass || "").indexOf("++"), X = t.linesClass, G = -1 !== L.indexOf("<"), $ = !0, Z = [], J = [], K = [];
            for (U && (X = X.split("++").join("")),
            G && (L = L.split("<").join("{{LT}}")),
            n = L.length,
            l = F(),
            h = 0; h < n; h++)
                if (")" === (d = L.charAt(h)) && L.substr(h, 20) === T)
                    l += ($ ? "</div>" : "") + "<BR/>",
                    $ = !1,
                    h !== n - 20 && L.substr(h + 20, 20) !== T && (l += " " + F(),
                    $ = !0),
                    h += 19;
                else if (" " === d && " " !== L.charAt(h - 1) && h !== n - 1 && L.substr(h - 20, 20) !== T) {
                    for (l += $ ? "</div>" : "",
                    $ = !1; " " === L.charAt(h + 1); )
                        l += M,
                        h++;
                    ")" === L.charAt(h + 1) && L.substr(h + 1, 20) === T || (l += M + F(),
                    $ = !0)
                } else
                    "{" === d && "{{LT}}" === L.substr(h, 6) ? (l += A ? V() + "{{LT}}</div>" : "{{LT}}",
                    h += 5) : l += A && " " !== d ? V() + d + "</div>" : d;
            for (e.innerHTML = l + ($ ? "</div>" : ""),
            G && function e(t, s, i) {
                var o = t.nodeType;
                if (1 === o || 9 === o || 11 === o)
                    for (t = t.firstChild; t; t = t.nextSibling)
                        e(t, s, i);
                else
                    3 !== o && 4 !== o || (t.nodeValue = t.nodeValue.split(s).join(i))
            }(e, "{{LT}}", "<"),
            n = (c = e.getElementsByTagName("*")).length,
            p = [],
            h = 0; h < n; h++)
                p[h] = c[h];
            if (O || I)
                for (h = 0; h < n; h++)
                    ((a = (u = p[h]).parentNode === e) || I || A && !j) && (m = u.offsetTop,
                    O && a && m !== _ && "BR" !== u.nodeName && (r = [],
                    O.push(r),
                    _ = m),
                    I && (u._x = u.offsetLeft,
                    u._y = m,
                    u._w = u.offsetWidth,
                    u._h = u.offsetHeight),
                    O && (j !== a && A || (r.push(u),
                    u._x -= R),
                    a && h && (p[h - 1]._wordEnd = !0),
                    "BR" === u.nodeName && u.nextSibling && "BR" === u.nextSibling.nodeName && O.push([])));
            for (h = 0; h < n; h++)
                a = (u = p[h]).parentNode === e,
                "BR" !== u.nodeName ? (I && (w = u.style,
                j || a || (u._x += u.parentNode._x,
                u._y += u.parentNode._y),
                w.left = u._x + "px",
                w.top = u._y + "px",
                w.position = "absolute",
                w.display = "block",
                w.width = u._w + 1 + "px",
                w.height = u._h + "px"),
                j ? a && "" !== u.innerHTML ? J.push(u) : A && Z.push(u) : a ? (e.removeChild(u),
                p.splice(h--, 1),
                n--) : !a && A && (m = !O && !I && u.nextSibling,
                e.appendChild(u),
                m || e.appendChild(y.createTextNode(" ")),
                Z.push(u))) : O || I ? (e.removeChild(u),
                p.splice(h--, 1),
                n--) : j || e.appendChild(u);
            if (O) {
                for (I && (g = y.createElement("div"),
                e.appendChild(g),
                v = g.offsetWidth + "px",
                m = g.offsetParent === e ? 0 : e.offsetLeft,
                e.removeChild(g)),
                w = e.style.cssText,
                e.style.cssText = "display:none;"; e.firstChild; )
                    e.removeChild(e.firstChild);
                for (E = !I || !j && !A,
                h = 0; h < O.length; h++) {
                    for (r = O[h],
                    (g = y.createElement("div")).style.cssText = "display:block;text-align:" + W + ";position:" + (I ? "absolute;" : "relative;"),
                    X && (g.className = X + (U ? h + 1 : "")),
                    K.push(g),
                    n = r.length,
                    c = 0; c < n; c++)
                        "BR" !== r[c].nodeName && (u = r[c],
                        g.appendChild(u),
                        E && (u._wordEnd || j) && g.appendChild(y.createTextNode(" ")),
                        I && (0 === c && (g.style.top = u._y + "px",
                        g.style.left = R + m + "px"),
                        u.style.top = "0px",
                        m && (u.style.left = u._x - m + "px")));
                    0 === n && (g.innerHTML = "&nbsp;"),
                    j || A || (g.innerHTML = b(g).split(String.fromCharCode(160)).join(" ")),
                    I && (g.style.width = v,
                    g.style.height = u._h + "px"),
                    e.appendChild(g)
                }
                e.style.cssText = w
            }
            I && (z > e.clientHeight && (e.style.height = z - N + "px",
            e.clientHeight < z && (e.style.height = z + q + "px")),
            Y > e.clientWidth && (e.style.width = Y - D + "px",
            e.clientWidth < Y && (e.style.width = Y + H + "px"))),
            x(s, Z),
            x(i, J),
            x(o, K)
        }
          , A = O.prototype;
        /*!
 * VERSION: 0.3.4
 * DATE: 2015-08-15
 * UPDATES AND DOCS AT: http://greensock.com
 *
 * @license Copyright (c) 2008-2016, GreenSock. All rights reserved.
 * SplitText is a Club GreenSock membership benefit; You must have a valid membership to use
 * this code without violating the terms of use. Visit http://www.greensock.com/club/ to sign up or get more details.
 * This work is subject to the software agreement that was issued with your membership.
 *
 * @author: Jack Doyle, jack@greensock.com
 */
        A.split = function(e) {
            this.isSplit && this.revert(),
            this.vars = e || this.vars,
            this._originals.length = this.chars.length = this.words.length = this.lines.length = 0;
            for (var t = this.elements.length; --t > -1; )
                this._originals[t] = this.elements[t].innerHTML,
                j(this.elements[t], this.vars, this.chars, this.words, this.lines);
            return this.chars.reverse(),
            this.words.reverse(),
            this.lines.reverse(),
            this.isSplit = !0,
            this
        }
        ,
        A.revert = function() {
            if (!this._originals)
                throw new Error("revert() call wasn't scoped properly.");
            for (var e = this._originals.length; --e > -1; )
                this.elements[e].innerHTML = this._originals[e];
            return this.chars = [],
            this.words = [],
            this.lines = [],
            this.isSplit = !1,
            this
        }
        ,
        O.selector = window.$ || window.jQuery || function(e) {
            var t = window.$ || window.jQuery;
            return t ? (O.selector = t,
            t(e)) : "undefined" == typeof document ? e : document.querySelectorAll ? document.querySelectorAll(e) : document.getElementById("#" === e.charAt(0) ? e.substr(1) : e)
        }
        ,
        O.version = "0.3.4";
        var I = O;
        class M extends i.d {
            constructor() {
                super(),
                this.clonedProjectImage = null,
                this.imageAppendCont = null,
                this.pageContentWrapper = null,
                this.splitedTitle = null
            }
            start() {
                Promise.all([this.newPageLoading, this.fadeOut()]).then(this.fadeIn.bind(this))
            }
            fadeOut() {
                return new Promise(e=>{
                    if (this.oldPage.hideBackground(),
                    this.oldPage.destroyEvents(),
                    this.oldPage.rootElement.style.zIndex = 11,
                    this.splitedTitle = new I(this.oldPage.lastSelectedProjectTitle,{
                        type: "chars, lines"
                    }),
                    a.isMin("sm"))
                        for (const e of this.splitedTitle.lines) {
                            let t = 1
                              , s = 10
                              , i = [...e.children];
                            this.oldPage.lastSelectedProject.isOdd && (i = i.reverse());
                            for (const e of i) {
                                let i = s *= 1.2;
                                this.oldPage.lastSelectedProject.isOdd && (i = -s),
                                n.h.to(e, 2, {
                                    x: i,
                                    delay: .5 + .1 * t,
                                    ease: n.a.easeInOut
                                })
                            }
                        }
                    else
                        n.h.staggerTo(this.splitedTitle.lines.reverse(), .75, {
                            delay: .15,
                            yPercent: 75,
                            alpha: 0,
                            ease: n.e.easeIn
                        }, .1);
                    this.clonedProjectImage = this.oldPage.lastSelectedProject,
                    this.clonedProjectImage.cloneTo(this.oldPage.rootElement.parentNode);
                    const t = this.clonedProjectImage.getDiffY()
                      , s = Math.abs(t) / Math.round(.8 * Object(r.a)());
                    let i = Math.max(1, 1.2 * s)
                      , o = -.17 * Object(r.a)()
                      , l = this.oldPage.lastSelectedProject.old;
                    this.oldPage.scrollManager.isSmooth || (i = Math.min(2, Math.max(1, Math.abs(t) / Math.round(.8 * Object(r.a)()))),
                    o = window.scrollY + t,
                    l = null),
                    n.h.delayedCall(.1, ()=>{
                        const s = new window.CustomEvent(u.SCROLLTO,{
                            detail: {
                                options: {
                                    speed: 1e3 * i,
                                    targetOffset: o,
                                    targetElem: l
                                }
                            }
                        });
                        document.dispatchEvent(s),
                        this.clonedProjectImage.goPosY(i, t).then(e)
                    }
                    )
                }
                )
            }
            fadeIn() {
                document.body.classList.add("transitioning"),
                c.changeLayout(c.oppositeLayout(c.page.backgroundColor), .4, .85),
                this.newPage.buildScroll(),
                this.newPage.rootElement.style.backgroundColor = "",
                this.imageAppendCont = this.newPage.rootElement.querySelector("#image-append"),
                this.pageContentWrapper = this.newPage.rootElement.querySelector(".page-content_wrapper"),
                this.imageAppendCont.innerHTML = "",
                this.clonedProjectImage.el.classList.add("clone"),
                this.imageAppendCont.appendChild(this.clonedProjectImage.el),
                this.clonedProjectImage.resetY(),
                a.isMin("xs") && this.clonedProjectImage.goTo(),
                this.newPage.scrollManager && this.newPage.scrollManager.update(),
                n.h.set(this.newPage.rootElement.querySelectorAll('.project-page-bg[data-layout="white"]'), {
                    alpha: 0
                }),
                n.h.set(this.newPage.rootElement, {
                    autoAlpha: 1,
                    position: "fixed",
                    top: 0,
                    right: 0,
                    left: 0
                });
                let e = -55
                  , t = -100
                  , s = "right";
                this.oldPage.lastSelectedProject.isOdd && (e = -e,
                t = -t,
                s = "left"),
                a.isMin("sm") || (e = 0),
                "left" === s ? this.newPage.rootElement.setAttribute("data-align", "right") : this.newPage.rootElement.setAttribute("data-align", "left"),
                this.newPage.changeBackground(t),
                n.h.delayedCall(.75, ()=>{
                    i.g.commit("SHOW_PAGE_CONTENT")
                }
                ),
                n.h.to(this.oldPage.rootElement, .75, {
                    alpha: 0
                }),
                n.h.to(this.oldPage.rootElement, 1.5, {
                    xPercent: e,
                    ease: n.e.easeInOut,
                    onComplete: ()=>{
                        this.done(),
                        document.body.classList.remove("transitioning"),
                        this.newPage.rootElement.style.backgroundColor = "#fff"
                    }
                }),
                c.changeBreadcrumb(.4)
            }
        }
        class _ extends i.d {
            constructor() {
                super(),
                this.mobileNavOpened = !1
            }
            start() {
                const e = [this.newPageLoading]
                  , t = this.oldPage.rootElement.querySelector(".page-overlay");
                c.navOpen && (this.mobileNavOpened = !0,
                c.loading(!0)),
                n.h.to(t, 1.2, {
                    alpha: .85,
                    delay: 0,
                    ease: n.c.easeInOut
                }),
                Promise.all(e).then(()=>(document.body.classList.add("transitioning"),
                this.oldPage.destroyEvents(),
                this.newPage.buildScroll(),
                this.newPage.preLoad())).then(()=>this.newPage.afterPreLoad()).then(()=>this.mobileNavOpened ? (c.loading(!1),
                c.close(!0, 1),
                Promise.resolve()) : Promise.resolve()).then(()=>this.slideUp())
            }
            slideUp() {
                document.body.classList.remove("static");
                let e = 1.2;
                const t = this.newPage.rootElement.querySelectorAll(".page-content_inner")
                  , s = n.d.easeInOut;
                this.newPage.showBackground(),
                a.isMobile() && (e = 1.55),
                this.newPage.updateScroll(),
                n.h.set(this.newPage.rootElement, {
                    position: "fixed",
                    top: 0,
                    right: 0,
                    left: 0,
                    autoAlpha: 1,
                    zIndex: 5,
                    y: window.screen.height || Object(r.a)()
                });
                const o = new n.f({
                    paused: !0,
                    onComplete: ()=>{
                        this.done(),
                        document.body.classList.remove("transitioning"),
                        a.isMobile() && c.showBackground()
                    }
                });
                o.to(this.newPage.rootElement, e, {
                    y: 0,
                    ease: s
                }, 0).to(t, .7 * e, {
                    alpha: 1
                }, 0).to(this.oldPage.rootElement, e, {
                    y: -Object(r.a)() / 2,
                    ease: s
                }, 0),
                o.play(),
                n.h.delayedCall(e / 2, ()=>{
                    i.g.commit("SHOW_PAGE_CONTENT")
                }
                ),
                n.h.delayedCall(e - .5, ()=>{
                    c.changeLayout(c.oppositeLayout(c.page.backgroundColor), 0, .85),
                    c.changeBreadcrumb(0)
                }
                )
            }
        }
        var B = new class {
            constructor() {
                this.blackEl = document.querySelector(".generic_bg_black"),
                this.whiteEl = document.querySelector(".generic_bg_white")
            }
            show() {
                let e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "black"
                  , t = this.whiteEl
                  , s = this.blackEl;
                "black" === e && (t = this.blackEl,
                s = this.whiteEl),
                n.h.set(t, {
                    alpha: 1
                }),
                n.h.set(s, {
                    alpha: 0
                })
            }
            hide() {
                n.h.set([this.whiteEl, this.blackEl], {
                    alpha: 0
                })
            }
            hideAnimate() {
                n.h.to([this.whiteEl, this.blackEl], 1, {
                    alpha: 0
                })
            }
        }
        ;
        const R = document.getElementById("main-container");
        class q extends i.d {
            start() {
                Promise.all([this.newPageLoading, this.animOut()]).then(this.animIn.bind(this))
            }
            animOut() {
                return new Promise(e=>{
                    this.oldPage.scrollManager.disable(),
                    this.oldPage.destroyEvents(),
                    e()
                }
                )
            }
            animIn() {
                document.body.classList.add("transitioning"),
                n.h.set(this.newPage.rootElement, {
                    position: "fixed",
                    top: 0,
                    right: 0,
                    left: 0
                });
                const e = Object(r.a)()
                  , t = n.e.easeInOut
                  , s = this.oldPage.scrollManager.getScrollDistanceEnd()
                  , o = this.newPage.rootElement.querySelector(".introduction_wrapper");
                "black" === this.newPage.backgroundColor && B.show(this.newPage.backgroundColor),
                c.changeLayout(c.oppositeLayout(c.page.backgroundColor), .4, .85);
                const l = this.oldPage.rootElement.querySelector(".project-next")
                  , h = l.cloneNode(!0)
                  , d = h.children[0];
                h.classList.add("clone"),
                h.setAttribute("data-align", this.oldPage.rootElement.getAttribute("data-align")),
                R.appendChild(h),
                a.isMobile() ? n.h.set(h, {
                    bottom: 0
                }) : n.h.set(h, {
                    bottom: -s
                });
                let p = 0;
                p = a.isMin("xs") ? e / 2 - 129 - e - s : -h.getBoundingClientRect().top,
                "white" === this.newPage.backgroundColor ? (n.h.to(h.querySelectorAll(".introduction.black"), 1, {
                    alpha: 1
                }),
                n.h.to(h.querySelectorAll(".introduction.white"), 1, {
                    alpha: 0
                })) : n.h.to(h.querySelectorAll(".introduction.black"), 1, {
                    alpha: 0
                }),
                n.h.set(l, {
                    alpha: 0
                }),
                n.h.to(d, 2, {
                    y: 0,
                    ease: n.e.easeInOut
                }),
                n.h.to(h, 2, {
                    y: p,
                    ease: n.e.easeInOut
                }),
                c.changeBreadcrumb(),
                n.h.to(this.newPage.rootElement, 1, {
                    autoAlpha: 1,
                    delay: 1
                }),
                n.h.to(this.oldPage.rootElement, 1, {
                    alpha: 0,
                    ease: t
                }),
                n.h.delayedCall(1, ()=>{
                    "left" === this.oldPage.rootElement.getAttribute("data-align") ? this.newPage.rootElement.setAttribute("data-align", "right") : this.newPage.rootElement.setAttribute("data-align", "left"),
                    this.newPage.buildScroll()
                }
                ),
                n.h.delayedCall(1.2, ()=>{
                    n.h.set(o, {
                        alpha: 0
                    }),
                    i.g.commit("SHOW_PAGE_CONTENT")
                }
                ),
                n.h.delayedCall(2.1, ()=>{
                    document.body.classList.remove("transitioning");
                    const e = this.newPage.rootElement.querySelector(".introduction_wrapper");
                    e.innerHTML = "",
                    e.appendChild(h.children[0]),
                    h.parentNode.removeChild(h),
                    a.isMobile() && c.showBackground(),
                    n.h.set(e, {
                        alpha: 1
                    }),
                    this.done(),
                    this.newPage.scrollManager.update(),
                    "black" === this.newPage.backgroundColor ? B.hide() : B.hideAnimate()
                }
                )
            }
        }
        class H extends i.d {
            start() {
                this.oldPage.rootElement.classList.add("page-content-fixed"),
                document.body.classList.add("transitioning"),
                Promise.all([this.newPageLoading, this.fadeOut()]).then(this.fadeIn.bind(this))
            }
            fadeOut() {
                return this.oldPage.destroyEvents(),
                new Promise(e=>{
                    n.h.to(this.oldPage.rootElement, .85, {
                        alpha: 0,
                        y: -75,
                        ease: n.d.easeIn,
                        onComplete: e
                    })
                }
                )
            }
            fadeIn() {
                this.newPage.preLoad(),
                this.newPage.buildScroll(),
                n.h.fromTo(this.newPage.rootElement, .75, {
                    y: 75,
                    autoAlpha: 0
                }, {
                    y: 0,
                    autoAlpha: 1,
                    ease: n.d.easeOut,
                    onStart: ()=>{
                        document.body.classList.remove("transitioning"),
                        this.newPage.showBackground(),
                        i.g.commit("SHOW_PAGE_CONTENT"),
                        this.done()
                    }
                })
            }
        }
        class N {
            constructor() {
                this.lastTransition = null
            }
            getTransition(e, t) {
                let s;
                arguments.length > 2 && void 0 !== arguments[2] && arguments[2];
                if (/Trident\/|MSIE/.test(window.navigator.userAgent))
                    return new H;
                if (e.url.includes("/projects") && !t.url.includes("/projects") || !t.transitionName && t.url.includes("/projects"))
                    return this.lastTransition = "slide-up",
                    new _;
                switch (t.transitionName) {
                case "project":
                    s = new M,
                    this.lastTransition = "project";
                    break;
                case "next-project":
                    s = new q,
                    this.lastTransition = "next-project";
                    break;
                case "slide-up":
                default:
                    s = new _,
                    this.lastTransition = "slide-up"
                }
                return s
            }
        }
        var D = s(80)
          , W = s.n(D)
          , z = s(81)
          , Y = s.n(z)
          , F = s(83)
          , V = s.n(F)
          , U = s(31)
          , X = class extends g {
            constructor(e) {
                super(e),
                this.isReversed = e.reversed || m.reversed,
                this.getWay = e.getWay || m.getWay,
                this.getSpeed = e.getSpeed || m.getSpeed,
                this.parallaxElements = [],
                this.getSpeed && (this.scroll.speed = 0)
            }
            init() {
                U.default.use(Y.a, V.a),
                this.scrollbar = U.default.init(this.container),
                this.scrollbarStatus = null,
                this.setScrollbarLimit(),
                this.setWheelDirection(this.isReversed),
                this.addElements(),
                this.renderAnimations(!0),
                this.scrollbar.addListener(e=>this.renderAnimations(!1, e)),
                document.addEventListener(u.REBUILD, this.onRebuild, !!window.passiveSupported && {
                    passive: !0
                }),
                document.addEventListener(u.UPDATE, this.onUpdate, !!window.passiveSupported && {
                    passive: !0
                }),
                document.addEventListener(u.RENDER, this.onRender, !!window.passiveSupported && {
                    passive: !0
                }),
                document.addEventListener(u.SCROLLTO, this.onScrollTo, !!window.passiveSupported && {
                    passive: !0
                }),
                document.addEventListener(u.RESIZE, this.onResize, !!window.passiveSupported && {
                    passive: !0
                })
            }
            onScrollTo(e) {
                let t = e.detail;
                this.scrollTo(t.options)
            }
            addElements() {
                this.animatedElements = [],
                this.parallaxElements = [];
                const e = this.container.querySelectorAll(this.selector)
                  , t = e.length;
                let s = 0;
                for (; s < t; s++) {
                    let t = e[s]
                      , o = t.getBoundingClientRect()
                      , n = !!d(t.getAttribute("data-speed")) && t.getAttribute("data-speed") / 10
                      , r = t.getAttribute("data-target")
                      , a = "string" == typeof t.getAttribute("data-sticky")
                      , l = t.getAttribute("data-sticky-target")
                      , h = r && document.querySelector(r).length ? document.querySelector(r) : t
                      , c = h.getBoundingClientRect().top + this.scrollbar.scrollTop
                      , p = c + h.offsetHeight
                      , u = null;
                    t.hasAttribute("data-viewport-offset") && (u = t.getAttribute("data-viewport-offset").split(","));
                    let m = "string" == typeof t.getAttribute("data-callback") ? t.getAttribute("data-callback") : null
                      , g = null;
                    if (null != m) {
                        let e = m.substr(0, m.indexOf("("))
                          , t = m.substr(m.indexOf("("), m.length - e.length)
                          , s = (t = (t = t.replace("(", "")).replace(")", "")).split("|")
                          , o = {};
                        for (var i = 0; i < s.length; i++) {
                            let e, t = s[i].split(":");
                            t[0] = t[0].replace(" ", ""),
                            e = "true" === t[1] || "false" !== t[1] && (/^\d+$/.test(t[1]) ? parseInt(t[1]) : t[1]),
                            o[t[0]] = e
                        }
                        g = {
                            event: e,
                            options: o
                        }
                    }
                    let w = !!t.getAttribute("data-repeat")
                      , v = t.getAttribute("data-inview-class");
                    if (v || (v = "is-show"),
                    !r && t.getAttribute("data-transform") && (c -= parseFloat(t.getAttribute("data-transform").y)),
                    !r && t.getAttribute("data-offset-y") && (c += h.offsetHeight * parseFloat(t.getAttribute("data-offset-y"))),
                    a)
                        if (l) {
                            p = document.querySelector(l).getBoundingClientRect().top - o.height + this.scrollbar.scrollTop
                        } else
                            p = 1 / 0;
                    const b = {
                        element: t,
                        inViewClass: v,
                        limit: p,
                        offset: Math.round(c),
                        repeat: w,
                        callback: g,
                        viewportOffset: u,
                        inView: !1
                    };
                    if (!1 !== n) {
                        let e = t.getAttribute("data-position")
                          , s = t.getAttribute("data-horizontal")
                          , i = (p - c) / 2 + c;
                        b.horizontal = s,
                        b.middle = i,
                        b.offset = c,
                        b.position = e,
                        b.speed = n,
                        this.parallaxElements.push(b)
                    } else
                        b.sticky = a,
                        this.animatedElements.push(b),
                        a && this.toggleElement(b)
                }
            }
            renderAnimations(e, t) {
                t && (this.scrollbarStatus = t);
                const s = this.scrollbar.scrollTop;
                this.getWay && (s > this.scroll.y ? "down" !== this.scroll.direction && (this.scroll.direction = "down") : s < this.scroll.y && "up" !== this.scroll.direction && (this.scroll.direction = "up")),
                this.getSpeed && (this.scroll.y !== s ? (this.scroll.speed = this.scrollbar.movement.y,
                this.scroll.y = s) : this.scroll.speed = 0),
                this.scroll.y !== s && (this.scroll.y = s),
                this.transformElements(e),
                this.callbacks.onScroll(this.scroll),
                this.animateElements()
            }
            scrollTo(e) {
                const t = e.targetElem
                  , s = e.sourceElem
                  , i = e.offsetElem;
                let o = d(e.targetOffset) ? parseInt(e.targetOffset) : 0;
                const r = d(e.delay) ? parseInt(e.delay) : 0
                  , a = d(e.speed) ? parseInt(e.speed) : 900
                  , l = e.toTop
                  , h = e.toBottom;
                let c = 0;
                if (void 0 === t && void 0 === s && void 0 === o)
                    return console.warn("You must specify at least one parameter."),
                    !1;
                if (t) {
                    const e = t.getBoundingClientRect();
                    o = e.top + this.scrollbar.scrollTop + o
                }
                if (s) {
                    let e = "";
                    e = s.getAttribute("data-target") ? s.getAttribute("data-target") : s.getAttribute("href");
                    const t = document.querySelector(e).getBoundingClientRect();
                    o = t.top + this.scrollbar.scrollTop + o
                }
                i && (c = i.offsetHeight,
                o -= c),
                !0 === l ? o = 0 : !0 === h && (o = this.scrollbar.limit.y),
                n.h.delayedCall(r / 1e3, ()=>{
                    this.scrollbar.scrollTo(0, Math.round(o), a, {
                        easing: e=>1 - --e * e * e * e
                    })
                }
                )
            }
            setScrollbarLimit() {
                this.scrollbarLimit = this.scrollbar.limit.y + this.windowHeight
            }
            transformElement(e, t, s) {
                let i = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : 0;
                t = t || 0,
                s = s || 0,
                i = i || 0,
                e.style.transform = `translate3d(${t}px, ${s}px, ${i}px)`,
                e.style.webkitTransform = `translate3d(${t}px, ${s}px, ${i}px)`,
                e.style.mozTransform = `translate3d(${t}px, ${s}px, ${i}px)`
            }
            transformElements(e) {
                if (this.parallaxElements.length > 0) {
                    const t = this.scrollbar.scrollTop + this.windowHeight
                      , s = this.scrollbar.scrollTop + this.windowMiddle;
                    let i = 0;
                    const o = this.parallaxElements.length;
                    for (; i < o; i++) {
                        let o = this.parallaxElements[i]
                          , n = "top" === o.position ? this.scrollbar.scrollTop : t
                          , r = !1
                          , a = n >= o.offset && this.scrollbar.scrollTop <= o.limit;
                        if (this.toggleElement(o, i),
                        e && !a && o.speed && "top" !== o.position && (r = (o.offset - this.windowMiddle - o.middle) * -o.speed),
                        a && o.speed)
                            switch (o.position) {
                            case "top":
                                r = (this.scrollbar.scrollTop - o.offset) * -o.speed;
                                break;
                            case "bottom":
                                r = (this.scrollbarLimit - n) * o.speed;
                                break;
                            default:
                                r = (s - o.middle) * -o.speed
                            }
                        d(r) && (o.horizontal ? this.transformElement(o.element, r.toFixed(2), 0) : this.transformElement(o.element, 0, r.toFixed(2), 0))
                    }
                }
            }
            updateElements(e) {
                e = e || {},
                this.scrollbar.update(),
                this.windowHeight = Object(r.a)(),
                this.windowMiddle = this.windowHeight / 2,
                this.setScrollbarLimit(),
                this.setWheelDirection(this.isReversed),
                this.addElements(),
                this.transformElements(!0),
                "function" == typeof e.callback && e.callback(),
                this.renderAnimations(!1)
            }
            setWheelDirection(e) {}
            destroy() {
                super.destroy(),
                this.parallaxElements = [],
                this.scrollbar.destroy()
            }
        }
        ;
        class G {
            constructor() {
                let e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
                this.options = W()({
                    container: document.getElementById("scroll"),
                    selector: ".js-animate",
                    smooth: !0,
                    smoothMobile: !1,
                    mobileContainer: document,
                    getWay: !1,
                    getSpeed: !1
                }, e),
                this.smooth = this.options.smooth || m.smooth,
                this.smoothMobile = this.options.smoothMobile || m.smoothMobile,
                this.mobileContainer = this.options.mobileContainer || m.mobileContainer,
                this.isMobile = !1,
                this.isSmooth = !1,
                this.instance = null
            }
            init() {
                this.smoothMobile || (this.isMobile = /Android|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)),
                !0 !== this.smooth || this.isMobile ? (this.mobileContainer && (this.options.container = this.mobileContainer),
                this.instance = new g(this.options)) : (this.isSmooth = !0,
                this.instance = new X(this.options)),
                this.instance.init()
            }
            update() {
                this.instance.updateElements()
            }
            reset() {
                this.isSmooth ? this.instance.scrollbar.setPosition(0, 0) : window.scrollY,
                this.update()
            }
            enable() {
                this.instance.enabled = !0,
                this.isSmooth && this.instance.scrollbar.updatePluginOptions("stop", {
                    disable: !1
                })
            }
            disable() {
                this.instance.enabled = !1,
                this.isSmooth && this.instance.scrollbar.updatePluginOptions("stop", {
                    disable: !0
                })
            }
            getPositions() {
                return this.instance.scroll
            }
            getScrollHeight() {
                return this.isSmooth ? this.instance.scrollbar.limit.y : document.body.scrollHeight
            }
            scrollTo(e, t) {
                let s = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 0;
                arguments.length > 3 && void 0 !== arguments[3] && arguments[3];
                s && this.isSmooth ? this.instance.scrollTo({
                    targetOffset: t,
                    speed: s
                }) : s ? this.instance.scrollTo({
                    targetOffset: t,
                    speed: s
                }) : this.isSmooth ? this.instance.scrollbar.setPosition(e, t) : window.scrollTo(e, t)
            }
            getScrollDistanceEnd() {
                return this.getScrollHeight() - this.getPositions().y
            }
            destroy() {
                this.instance.destroy()
            }
        }
        var $ = new class {
            constructor() {
                this.container = null,
                this.backToTop = null,
                this.backToTopTl = null,
                this.scrollManager = null,
                this.duration = 1.25,
                this.backToTopLeft = null,
                this.backToTopRight = null,
                this.backToTopBottom = null,
                this.onBackToTopClick = this.onBackToTopClick.bind(this),
                this.onBackToTopMouseEvent = this.onBackToTopMouseEvent.bind(this)
            }
            initEvents() {
                this.backToTop.addEventListener("click", this.onBackToTopClick, !!window.passiveSupported && {
                    passive: !0
                }),
                this.backToTop.addEventListener("mouseenter", this.onBackToTopMouseEvent, !!window.passiveSupported && {
                    passive: !0
                }),
                this.backToTop.addEventListener("mouseleave", this.onBackToTopMouseEvent, !!window.passiveSupported && {
                    passive: !0
                })
            }
            removeEvents() {
                this.backToTop && (this.backToTop.removeEventListener("click", this.onBackToTopClick, !!window.passiveSupported && {
                    passive: !0
                }),
                this.backToTop.removeEventListener("mouseenter", this.onBackToTopMouseEvent, !!window.passiveSupported && {
                    passive: !0
                }),
                this.backToTop.removeEventListener("mouseleave", this.onBackToTopMouseEvent, !!window.passiveSupported && {
                    passive: !0
                }))
            }
            onBackToTopClick() {
                const e = Math.min(this.scrollManager.getScrollHeight() / 2500 * 1e3, 2500);
                this.scrollManager.scrollTo(0, 0, Math.round(e))
            }
            onBackToTopMouseEvent(e) {
                if ("mouseenter" === e.type) {
                    const e = new n.f({
                        paused: !0
                    });
                    e.to(this.backToTopBottom, 1, {
                        scaleY: 0,
                        ease: n.e.easeOut
                    }, 0),
                    e.to(this.backToTopLeft, 1.15, {
                        rotation: -45,
                        scaleX: .85,
                        scaleY: .8,
                        force3D: !0,
                        ease: n.a.easeOut
                    }, .1),
                    e.to(this.backToTopRight, 1.15, {
                        rotation: 45,
                        scaleX: .85,
                        scaleY: .8,
                        force3D: !0,
                        ease: n.a.easeOut
                    }, .1),
                    e.play()
                } else {
                    const e = new n.f({
                        paused: !0
                    });
                    e.to(this.backToTopBottom, 1, {
                        scaleY: 1,
                        ease: n.e.easeOut
                    }, .1),
                    e.to(this.backToTopLeft, 1.15, {
                        rotation: 0,
                        scaleX: .5,
                        scaleY: 1,
                        force3D: !0,
                        ease: n.a.easeOut
                    }, 0),
                    e.to(this.backToTopRight, 1.15, {
                        rotation: 0,
                        scaleX: .5,
                        scaleY: 1,
                        force3D: !0,
                        ease: n.a.easeOut
                    }, 0),
                    e.play()
                }
            }
            reset(e, t) {
                this.removeEvents(),
                this.container = e,
                this.scrollManager = t,
                this.backToTopTl = null,
                this.backToTop = this.container.querySelector(".back-to-top"),
                this.backToTop && (this.backToTopLeft = this.container.querySelector(".back-to-top__el-top-left"),
                this.backToTopRight = this.container.querySelector(".back-to-top__el-top-right"),
                this.backToTopBottom = this.container.querySelector(".back-to-top__el-bottom"),
                this.initEvents())
            }
        }
          , Z = s(84)
          , J = s.n(Z);
        class K extends i.c {
            constructor(e) {
                super(e, "DefaultPage"),
                this.bgBlack = null,
                this.bgWhite = null,
                this.bg = null,
                this.footerCanvasEl = null,
                this.backgroundColor = null,
                this.isWhiteBackground = !1,
                this.scrollManager = null,
                this.interactiveScroll = null,
                this.interactiveScrollerLayout = "black",
                this.newLayout = null,
                this.lastScrollY = 0,
                this.footerCanvas = null,
                this.delay = 0,
                this.showPageContent = !1,
                this.delayedAnimations = [],
                this.onFooterShow = this.onFooterShow.bind(this),
                this.onShowScroll = this.onShowScroll.bind(this),
                this.onShowPageContent = this.onShowPageContent.bind(this),
                this.onTransitionComplete = this.onTransitionComplete.bind(this),
                this.onChangeLayout = this.onChangeLayout.bind(this),
                this.onImageShow = this.onImageShow.bind(this)
            }
            async init() {
                await super .init(),
                this.bgBlack = this.rootElement.querySelector(".main_background-black"),
                this.bgWhite = this.rootElement.querySelector(".main_background-white"),
                this.bg = null,
                this.footerCanvasEl = this.rootElement.querySelector("#footer__canvas"),
                this.backgroundColor = this.rootElement.getAttribute("data-background-color"),
                "static" === this.context && (this.rootElement.classList.add("ready"),
                this.buildScroll(),
                n.h.delayedCall(.6, ()=>{
                    i.g.commit("SHOW_PAGE_CONTENT")
                }
                )),
                this.loadInteractiveScroller(),
                this.checkLinks()
            }
            destroy() {
                super.destroy(),
                this.scrollManager && this.scrollManager.destroy()
            }
            initEvents() {
                document.addEventListener("show.Scroll", this.onShowScroll, !!window.passiveSupported && {
                    passive: !0
                }),
                document.addEventListener("scroll.ImageShow", this.onImageShow, !!window.passiveSupported && {
                    passive: !0
                }),
                document.addEventListener("scroll.changeLayout", this.onChangeLayout, !!window.passiveSupported && {
                    passive: !0
                }),
                window.addEventListener("resize", this.onResizeDebounce, !!window.passiveSupported && {
                    passive: !0
                }),
                window.addEventListener("SHOW_PAGE_CONTENT", this.onShowPageContent, !!window.passiveSupported && {
                    passive: !0
                }),
                window.addEventListener(i.h.TRANSITION_COMPLETE, this.onTransitionComplete, !!window.passiveSupported && {
                    passive: !0
                })
            }
            destroyEvents() {
                if (null !== this.blocks)
                    for (let e in this.blocks)
                        this.blocks.hasOwnProperty(e) && this.blocks[e].destroyEvents();
                document.removeEventListener("show.Scroll", this.onShowScroll, !!window.passiveSupported && {
                    passive: !0
                }),
                document.removeEventListener("scroll.ImageShow", this.onImageShow, !!window.passiveSupported && {
                    passive: !0
                }),
                document.removeEventListener("scroll.changeLayout", this.onChangeLayout, !!window.passiveSupported && {
                    passive: !0
                }),
                window.removeEventListener("resize", this.onResizeDebounce, !!window.passiveSupported && {
                    passive: !0
                }),
                window.removeEventListener("SHOW_PAGE_CONTENT", this.onShowPageContent, !!window.passiveSupported && {
                    passive: !0
                }),
                window.removeEventListener(i.h.TRANSITION_COMPLETE, this.onTransitionComplete, !!window.passiveSupported && {
                    passive: !0
                })
            }
            checkLinks() {
                const e = [...this.rootElement.querySelectorAll("a")];
                for (const t of e)
                    window.location.protocol === t.protocol && window.location.hostname === t.hostname && i.l.getPort() === i.l.getPort(t.port) || (t.setAttribute("target", "_blank"),
                    t.setAttribute("rel", "noopener"))
            }
            onImageShow(e) {
                let t = e.detail;
                if (a.isMobile())
                    return;
                const s = t.element;
                n.h.to(s, 1, {
                    y: 0,
                    delay: .15,
                    ease: n.d.easeOut,
                    roundProps: "y"
                }),
                n.h.to(s, .75, {
                    delay: .15,
                    ease: n.c.easeOut
                }),
                s.classList.contains("lazyloaded") && (s.style.transition = "none",
                n.h.fromTo(s, .75, {
                    alpha: 0
                }, {
                    alpha: 1,
                    delay: .15,
                    ease: n.c.easeOut
                }))
            }
            preLoad() {
                return Promise.all(this.blocks.map(e=>e.preLoad()))
            }
            afterPreLoad() {
                return Promise.all(this.blocks.map(e=>e.afterPreLoad()))
            }
            loadInteractiveScroller() {
                a.isMin("md") && Promise.all([s.e(2), s.e(0)]).then(s.bind(null, 86)).then(e=>{
                    this.interactiveScroll = e.default,
                    this.scrollManager && n.h.delayedCall(.45, ()=>{
                        this.interactiveScroll.attachScrollManager(this.scrollManager),
                        this.interactiveScroll.currentLayout || this.interactiveScroll.setLayout(this.newLayout)
                    }
                    )
                }
                )
            }
            onChangeLayout(e) {
                let t = e.detail;
                const s = t.way
                  , i = t.options.layout;
                "enter" === s && (this.newLayout = i)
            }
            onTransitionComplete() {}
            onShowPageContent() {
                this.showPageContent = !0,
                this.showScrollElements(J()(this.delayedAnimations))
            }
            onShowScroll(e) {
                let t = e.detail;
                const s = t.element
                  , i = t.options
                  , o = [...s.children];
                this.showPageContent ? this.showScrollElements([{
                    elements: o,
                    type: i.type || "normal",
                    mobileOpacity: i.mobileOpacity || 1
                }]) : this.delayedAnimations.push({
                    elements: o,
                    type: i.type || "normal",
                    mobileOpacity: parseFloat(i.mobileOpacity) || 1
                }),
                s.classList.remove("js-animate")
            }
            showScrollElements(e) {
                let t = .12
                  , s = 1;
                for (const i of e) {
                    let e = i.type;
                    a.isMobile() && (s = i.mobileOpacity);
                    for (const o of i.elements) {
                        if ("normal" === e)
                            n.h.to(o, 1.2, {
                                delay: t,
                                ease: n.d.easeOut,
                                rotationX: 0,
                                alpha: s,
                                force3D: !0,
                                y: 0
                            });
                        else if ("footer" === e) {
                            const e = o.querySelectorAll(".footer__info");
                            n.h.to(e, 1.2, {
                                ease: n.d.easeOut,
                                delay: t,
                                rotationX: 0,
                                alpha: s,
                                y: 0
                            }, .05)
                        }
                        t += .12
                    }
                }
            }
            onFooterShow(e) {
                let t = e.detail;
                const s = t.element
                  , i = t.options
                  , o = s.querySelector(".footer__content-bg")
                  , r = s.querySelectorAll(".footer__info");
                let a = parseFloat(i.delay) || .25;
                "static" !== this.context && (a = 0),
                n.h.staggerTo(r, 1.2, {
                    ease: n.d.easeOut,
                    delay: a,
                    rotationX: 0,
                    alpha: 1,
                    y: 0
                }, .05),
                n.h.to(o, .75, {
                    x: 0,
                    delay: .1,
                    ease: n.a.easeOut
                })
            }
            buildScroll() {
                this.scrollManager = new G({
                    container: this.rootElement.querySelector("#scroll"),
                    mobileContainer: this.rootElement
                }),
                this.scrollManager.init(),
                n.h.delayedCall(.25, ()=>{
                    this.interactiveScroll && this.interactiveScroll.attachScrollManager(this.scrollManager);
                    for (const e of this.blocks)
                        e.scrollManagerReady()
                }
                ),
                $.reset(this.rootElement, this.scrollManager)
            }
            updateScroll() {
                this.scrollManager && this.scrollManager.update()
            }
            onResize() {
                super.onResize(),
                this.interactiveScroll && this.interactiveScroll.updateValues()
            }
            hideBackground() {}
            showBackground() {}
            animateInBackground() {
                arguments.length > 0 && void 0 !== arguments[0] && arguments[0],
                arguments.length > 1 && void 0 !== arguments[1] && arguments[1]
            }
        }
        class Q extends i.a {
            constructor(e) {
                super(e, arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "DefaultBlock"),
                this.imagesLength = 0,
                this.imagesLoadedLength = 0
            }
            scrollManagerReady() {}
            preLoad() {
                return new Promise(e=>{
                    e()
                }
                )
            }
            afterPreLoad() {
                return Promise.resolve()
            }
        }
        class ee extends Q {
            constructor(e) {
                super(e, "IntroductionBlock"),
                this.splitText = null,
                this.defaultTitle = "",
                this.delay = 0,
                this.transitionCompleted = !1,
                this.splitAnimationCompleted = !1,
                this.onTransitionComplete = this.onTransitionComplete.bind(this),
                this.onShowPageContent = this.onShowPageContent.bind(this)
            }
            init() {
                super.init(),
                this.rootElement.classList.contains("big-letter") || (this.delay = .2)
            }
            initEvents() {
                super.initEvents(),
                window.addEventListener("SHOW_PAGE_CONTENT", this.onShowPageContent),
                window.addEventListener("SB_TRANSITION_COMPLETE", this.onTransitionComplete)
            }
            destroyEvents() {
                super.destroyEvents(),
                window.removeEventListener("SHOW_PAGE_CONTENT", this.onShowPageContent),
                window.removeEventListener("SB_TRANSITION_COMPLETE", this.onTransitionComplete)
            }
            check() {
                this.splitAnimationCompleted && this.transitionCompleted && n.h.set(this.page.rootElement, {
                    position: "relative"
                })
            }
            onTransitionComplete() {
                this.transitionCompleted = !0,
                this.check()
            }
            cutText() {
                this.splitText = new I(this.rootElement,{
                    type: "lines"
                }),
                this.rootElement.classList.contains("no-effects") || (n.h.set(this.splitText.lines, {
                    y: .1 * Object(r.a)()
                }),
                n.h.set(this.rootElement, {
                    alpha: 1
                }))
            }
            onShowPageContent() {
                this.splitText || this.cutText();
                let e = .1;
                a.isMobile() && (e = .05),
                n.h.staggerTo(this.splitText.lines, 1, {
                    ease: n.d.easeOut,
                    rotationX: 0,
                    alpha: 1,
                    delay: this.delay,
                    y: 0
                }, e, ()=>{
                    this.splitText.revert(),
                    this.splitAnimationCompleted = !0,
                    this.check()
                }
                )
            }
        }
        class te extends K {
            constructor(e) {
                super(e, "ProjectPage"),
                this.projectEl = null,
                this.projectInnerEl = null,
                this.projectInnerReverseEl = null,
                this.mainImage = null,
                this.pageContentWrapper = null,
                this.projectNextLoader = null,
                this.nextProjectBg = null,
                this.nextProjectTitle = null,
                this.projectShare = null,
                this.imgLoaded = !1,
                this.interactiveScrollerLayout = "white",
                this.nextProjectTimer = null,
                this.projectNextLoaderTl = null,
                this.projectNextWait = 3500,
                this.projectImageShow = !1,
                this.onNextProjectToggle = this.onNextProjectToggle.bind(this),
                this.showProjectImage = this.showProjectImage.bind(this),
                this.onImageLoad = this.onImageLoad.bind(this)
            }
            async init() {
                this.projectEl = this.rootElement.querySelector(".project-image"),
                this.projectInnerEl = this.rootElement.querySelector(".project-image_inner"),
                this.projectInnerReverseEl = this.rootElement.querySelector(".project-image_inner-reverse"),
                this.mainImage = this.rootElement.querySelector(".project-img"),
                this.pageContentWrapper = this.rootElement.querySelector(".page-content_wrapper"),
                this.projectNextLoader = this.rootElement.querySelector(".project-next-loader"),
                this.nextProjectBg = this.rootElement.querySelector(".project-next_bg"),
                this.nextProjectTitle = this.rootElement.querySelector(".project-next > .row"),
                this.projectShare = this.rootElement.querySelector(".project-share"),
                await super .init(),
                "white" === this.backgroundColor ? this.bg = this.bgWhite : this.bg = this.bgBlack,
                this.nextProjectBg && n.h.to(this.nextProjectBg, .5, {
                    alpha: 1
                }),
                this.projectNextLoaderTl = new n.f({
                    paused: !0,
                    onComplete: ()=>{
                        n.h.to(this.projectNextLoader, 1.5, {
                            scaleY: 0,
                            alpha: 0,
                            transformOrigin: "0 0",
                            ease: n.e.easeOut
                        })
                    }
                }),
                this.projectNextLoaderTl.to(this.projectNextLoader, this.projectNextWait / 1e3, {
                    scaleY: 1,
                    ease: n.c.easeOut
                })
            }
            initEvents() {
                super.initEvents(),
                "static" === this.context && document.addEventListener("toggle.nextProject", this.onNextProjectToggle, !!window.passiveSupported && {
                    passive: !0
                }),
                this.mainImage.addEventListener("load", this.onImageLoad)
            }
            destroyEvents() {
                super.destroyEvents(),
                document.removeEventListener("toggle.nextProject", this.onNextProjectToggle, !!window.passiveSupported && {
                    passive: !0
                }),
                this.mainImage.removeEventListener("load", this.onImageLoad),
                window.clearTimeout(this.nextProjectTimer)
            }
            onImageLoad() {
                this.imgLoaded = !0,
                this.checkImage()
            }
            onShowPageContent() {
                super.onShowPageContent(),
                this.checkImage(),
                n.h.delayedCall(.1, ()=>{
                    if (this.blocks[this.blocks.length - 1]instanceof ee && this.blocks[this.blocks.length - 1].splitText && this.blocks[this.blocks.length - 1].splitText.lines) {
                        const e = this.blocks[this.blocks.length - 1].splitText.lines.length
                          , t = this.nextProjectTitle.getBoundingClientRect();
                        let s = 0;
                        if (1 === e)
                            s = -t.height / 2;
                        else if (e >= 2) {
                            s = -1.5 * (t.height / e)
                        }
                        n.h.set(this.nextProjectTitle, {
                            y: s
                        })
                    }
                }
                )
            }
            checkImage() {
                this.showPageContent && this.imgLoaded && this.showProjectImage()
            }
            onTransitionComplete() {
                super.onTransitionComplete(),
                document.addEventListener("toggle.nextProject", this.onNextProjectToggle, !!window.passiveSupported && {
                    passive: !0
                })
            }
            onNextProjectToggle(e) {
                "enter" === e.detail.way ? this.setNextProjectTimer(!0) : this.setNextProjectTimer(!1)
            }
            setNextProjectTimer() {
                !(arguments.length > 0 && void 0 !== arguments[0]) || arguments[0] ? (this.projectNextLoaderTl.play(),
                this.nextProjectTimer = window.setTimeout(()=>{
                    const e = this.rootElement.querySelector(".project-next-link")
                      , t = new window.Event("HTMLEvents");
                    t.initEvent("click", !0, !0),
                    e.dispatchEvent(t)
                }
                , this.projectNextWait)) : (this.projectNextLoaderTl.reverse(),
                window.clearTimeout(this.nextProjectTimer))
            }
            showProjectImage() {
                arguments.length > 0 && void 0 !== arguments[0] && arguments[0];
                this.showPageContent && !this.projectImageShow && (this.projectImageShow = !0,
                n.h.to(this.projectEl, 2, {
                    alpha: 1,
                    ease: n.d.easeOut
                }),
                n.h.to([this.projectInnerEl, this.projectInnerReverseEl], 1.75, {
                    y: 0,
                    ease: n.e.easeOut
                }))
            }
            hideBackground() {
                n.h.set(this.bg, {
                    alpha: 0
                })
            }
            showBackground() {
                n.h.set(this.bg, {
                    alpha: 1
                })
            }
            changeBackground(e) {
                this.bg && n.h.fromTo(this.bg, 1.6, {
                    xPercent: e
                }, {
                    xPercent: 0,
                    ease: n.e.easeInOut,
                    onStart: ()=>{
                        n.h.set(this.bg, {
                            alpha: 1
                        })
                    }
                    ,
                    onComplete: ()=>{
                        "white" === this.backgroundColor && n.h.to(this.bgWhite, 1, {
                            alpha: 0
                        }),
                        a.isMin("sm") || c.showBackground()
                    }
                })
            }
        }
        class se extends i.b {
            constructor(e) {
                super(e, "BlockBuilder")
            }
            async getBlockInstance(e) {
                return this.hasService(e) ? this.getService(e).instance() : null
            }
        }
        var ie = s(85);
        class oe extends Q {
            constructor(e) {
                super(e, "VideoBlock"),
                this.player = null,
                this.vimeoEl = null,
                this.options = {
                    loop: !0,
                    background: !0,
                    autoplay: !1,
                    muted: !0,
                    transparent: !1,
                    quality: 1080
                },
                this.firstInit = !1,
                this.delayedCall = null,
                this.inView = this.inView.bind(this),
                this.build = this.build.bind(this),
                this.onDelayedCall = this.onDelayedCall.bind(this)
            }
            init() {
                super.init(),
                this.vimeoEl = this.rootElement.querySelector(".vimeo"),
                "static" === this.page.context && n.h.delayedCall(1.5, ()=>{
                    this.build()
                }
                )
            }
            destroy() {
                super.destroy(),
                this.delayedCall && (n.h.killDelayedCallsTo(this.delayedCall),
                n.h.killDelayedCallsTo(this.onDelayedCall),
                n.h.killTweensOf(this.delayedCall),
                n.h.killTweensOf(this.onDelayedCall)),
                this.player && this.player.destroy()
            }
            initEvents() {
                super.initEvents(),
                document.addEventListener("scroll.inViewVideo", this.inView),
                window.addEventListener(i.h.TRANSITION_COMPLETE, this.build)
            }
            destroyEvents() {
                super.destroyEvents(),
                document.removeEventListener("scroll.inViewVideo", this.inView),
                window.removeEventListener(i.h.TRANSITION_COMPLETE, this.build)
            }
            build() {
                this.delayedCall = n.h.delayedCall(1, this.onDelayedCall)
            }
            onDelayedCall() {
                this.player = new ie.a(this.vimeoEl,this.options),
                this.player.on("play", ()=>{
                    this.firstInit || (this.firstInit = !0,
                    this.player.pause())
                }
                )
            }
            inView(e) {
                let t = e.detail;
                const s = t.way;
                t.element.parentNode.parentNode.parentNode === this.rootElement && ("enter" === s && this.player ? this.player.play() : this.player && this.player.pause())
            }
        }
        class ne extends Q {
            constructor(e) {
                super(e, "AlternateImagesBlock"),
                this.elements = [],
                this.allItems = [],
                this.beforeLastItem = null,
                this.marginBottom = 200,
                this.previousHalfHeight = 0
            }
            init() {
                super.init(),
                this.elements = [...this.rootElement.getElementsByClassName("item")]
            }
            onPageReady() {
                super.onPageReady(),
                this.check()
            }
            onResize() {
                super.onResize(),
                this.check()
            }
            check() {
                a.isMin("md") ? (this.setValues(),
                this.positionItems(),
                this.page.updateScroll()) : this.resetMargins()
            }
            setValues() {
                const e = this.elements.length;
                this.allItems = [];
                for (let t = 0; t < e; t++) {
                    const e = this.elements[t]
                      , s = e.getBoundingClientRect();
                    this.allItems.push({
                        el: e,
                        bounds: s,
                        offsetY: 0
                    })
                }
            }
            resetMargins() {
                for (const e of this.elements)
                    n.h.set(e, {
                        marginTop: 0
                    })
            }
            positionItems() {
                const e = this.allItems.length;
                for (let t = 0; t < e; t++) {
                    const e = this.allItems[t]
                      , s = e.el
                      , i = e.bounds
                      , o = this.allItems[t + 1];
                    if (0 === t && (e.offsetY = i.height / 2),
                    s.classList.contains("text-wrapper") && o && 0 === t)
                        o.offsetY = i.height,
                        n.h.set(o.el, {
                            marginTop: -i.height
                        });
                    else if (o) {
                        const t = o.el;
                        let s = i.height - e.offsetY
                          , r = s / 2;
                        s <= this.marginBottom && (r = -this.marginBottom + s),
                        o.offsetY = r,
                        n.h.set(t, {
                            marginTop: -r
                        })
                    }
                }
            }
        }
        class re {
            constructor(e, t, s) {
                this.el = e,
                this.elLink = t,
                this.inner = this.el.querySelector(".project-image_inner"),
                this.innerReverse = this.el.querySelector(".project-image_inner-reverse"),
                this.bg = this.el.querySelector(".project-image_background"),
                this.jsAnimate = this.el.querySelector(".js-animate"),
                this.index = s,
                this.old = null,
                this.isOdd = this.index % 2 == 1,
                this.imageCanvas = null,
                this.scrollPositions = null,
                this.currentPositions = null,
                this.clonedProjectImagePosition = null,
                this.ease = n.e.easeInOut,
                this.duration = 1.4,
                this.bounds = this.el.getBoundingClientRect(),
                this.tl = null,
                this.widthSm = 40.5,
                this.heightSm = 40.5,
                this.widthFull = 63,
                this.heightFull = 46,
                this.origin = "center",
                this.initiatedOnce = !1,
                this.projectHeight = 0,
                this.imageLinkWidth = 0,
                this.expand = this.expand.bind(this),
                this.onResize = this.onResize.bind(this),
                this.init()
            }
            init() {
                this.initListeners()
            }
            initListeners() {
                window.addEventListener("resize", this.onResize, !!window.passiveSupported && {
                    passive: !0
                })
            }
            destroyListeners() {
                window.addEventListener("resize", this.onResize, !!window.passiveSupported && {
                    passive: !0
                })
            }
            onResize() {
                this.bounds = this.el.getBoundingClientRect()
            }
            setSize() {
                let e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0
                  , t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0
                  , s = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 0
                  , i = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : 0
                  , o = arguments.length > 4 && void 0 !== arguments[4] ? arguments[4] : 1.4
                  , r = arguments.length > 5 && void 0 !== arguments[5] ? arguments[5] : 0
                  , a = arguments.length > 6 && void 0 !== arguments[6] ? arguments[6] : null;
                const l = this.bounds.width - e
                  , h = this.bounds.height - t;
                let c = 0
                  , d = 0
                  , p = a || this.ease;
                return "center" === this.origin && (c = this.bounds.width / 2 - e / 2,
                d = this.bounds.height / 2 - t / 2),
                new Promise(e=>{
                    this.tl = new n.f,
                    this.tl.to(this.inner, o, {
                        x: -l + s,
                        y: -h + i,
                        ease: p,
                        delay: r
                    }, 0),
                    this.tl.to(this.innerReverse, o, {
                        x: l,
                        y: h,
                        ease: p,
                        delay: r
                    }, 0),
                    this.tl.to(this.bg, o, {
                        x: -s - c,
                        y: -i - d,
                        ease: p,
                        onComplete: e,
                        delay: r
                    }, 0)
                }
                )
            }
            cloneTo(e) {
                this.destroyListeners(),
                this.currentPositions = this.el.getBoundingClientRect(),
                this.old = this.el,
                this.el = this.el.cloneNode(!0),
                this.inner = this.el.querySelector(".project-image_inner"),
                this.innerReverse = this.el.querySelector(".project-image_inner-reverse"),
                this.bg = this.el.querySelector(".project-image_background"),
                this.jsAnimate = this.el.querySelector(".js-animate");
                let t = "absolute";
                a.isMin("xs") || (t = "fixed"),
                n.h.set(this.el, {
                    position: t,
                    top: this.currentPositions.top,
                    left: Math.round(this.currentPositions.left)
                }),
                e.appendChild(this.el),
                n.h.set(this.old, {
                    alpha: 0,
                    delay: .1
                })
            }
            expand() {
                n.h.to([this.el, this.inner, this.innerReverse], this.duration, {
                    scale: 1,
                    xPercent: 0,
                    ease: n.e.easeInOut
                }),
                n.h.to(this.jsAnimate, this.duration, {
                    scale: 1,
                    xPercent: 0,
                    y: 0,
                    ease: n.e.easeInOut,
                    onComplete: ()=>{
                        n.h.set(this.el, {
                            clearProps: "all"
                        })
                    }
                })
            }
            resetY() {
                this.jsAnimate.setAttribute("data-position", "top"),
                a.isMin("xs") || n.h.set(this.el, {
                    position: "relative"
                }),
                n.h.set(this.el, {
                    y: 0,
                    top: 0
                })
            }
            getDiffY() {
                return this.clonedProjectImagePosition = this.el.getBoundingClientRect(),
                a.isMin("xs") ? Math.round(this.clonedProjectImagePosition.top - .17 * Object(r.a)()) : Math.round(this.clonedProjectImagePosition.top - 55)
            }
            goPosY(e, t) {
                return new Promise(s=>{
                    let i = 5;
                    this.isOdd && (i = -i),
                    a.isMin("xs") || (i = 0),
                    n.h.to(this.el, e, {
                        y: -t,
                        ease: n.c.easeOut
                    }),
                    this.isOdd ? (n.h.to(this.inner, e, {
                        xPercent: i,
                        ease: n.c.easeOut
                    }),
                    n.h.to(this.innerReverse, e, {
                        xPercent: -i,
                        ease: n.c.easeOut
                    })) : (n.h.to(this.el, e, {
                        xPercent: i,
                        ease: n.c.easeOut
                    }),
                    n.h.to(this.inner, e, {
                        xPercent: -i,
                        ease: n.c.easeOut
                    })),
                    n.h.to(this.jsAnimate, e, {
                        y: 0,
                        yPercent: 0,
                        ease: n.c.easeOut,
                        onComplete: s
                    })
                }
                )
            }
            goTo() {
                const e = Object(r.b)()
                  , t = e / 100;
                let s = -Math.round(e - t * this.widthSm);
                this.isOdd && (s = Math.round(e - t * this.widthFull)),
                n.h.to(this.el, this.duration, {
                    x: s,
                    ease: n.e.easeInOut,
                    onStart: ()=>{
                        this.expand(),
                        this.setSize(Math.round(t * this.widthFull), Math.round(t * this.heightFull))
                    }
                })
            }
            setProjectHeight(e) {
                this.projectHeight = e
            }
            setImageLinkWidth(e) {
                this.imageLinkWidth = e
            }
        }
        class ae extends Q {
            constructor(e) {
                super(e, "ProjectListBlock"),
                this.projects = [],
                this.projectLinks = [],
                this.projectImageEls = [],
                this.projectTitles = [],
                this.projectImageLinks = [],
                this.projectImages = [],
                this.queue = [],
                this.projectOffset = 0,
                this.onProjectLinkClick = this.onProjectLinkClick.bind(this),
                this.show = this.show.bind(this),
                this.onShowPageContent = this.onShowPageContent.bind(this)
            }
            init() {
                super.init(),
                this.projects = [...this.rootElement.querySelectorAll(".project-list_item")],
                this.projectLinks = [...this.rootElement.querySelectorAll('a[data-transition="project"]')],
                this.projectImageEls = [...this.rootElement.querySelectorAll(".project-image")],
                this.projectTitles = [...this.rootElement.querySelectorAll(".project-info_name")],
                this.projectImageLinks = [...this.rootElement.querySelectorAll(".project-image-link")];
                const e = this.projectImageEls.length;
                for (let t = 0; t < e; t++) {
                    const e = new re(this.projectImageEls[t],this.projectImageLinks[t],t);
                    this.projectImages.push(e)
                }
                "static" === this.page.context && this.calcHeight()
            }
            initEvents() {
                super.initEvents();
                for (const e of this.projectLinks)
                    e.addEventListener("click", this.onProjectLinkClick, !!window.passiveSupported && {
                        passive: !0
                    });
                window.addEventListener("SHOW_PAGE_CONTENT", this.onShowPageContent, !!window.passiveSupported && {
                    passive: !0
                })
            }
            destroyEvents() {
                super.destroyEvents();
                for (const e of this.projectLinks)
                    e.removeEventListener("click", this.onProjectLinkClick, !!window.passiveSupported && {
                        passive: !0
                    });
                window.removeEventListener("SHOW_PAGE_CONTENT", this.onShowPageContent, !!window.passiveSupported && {
                    passive: !0
                })
            }
            preLoad() {
                this.calcHeight(),
                this.setImagesHeight(!0);
                for (let e = 0; e < this.projects.length; e++) {
                    const t = this.projectImages[e];
                    n.h.set(t.el, {
                        alpha: .01,
                        force3D: !0,
                        ease: n.d.easeOut
                    })
                }
                super.preLoad()
            }
            onShowPageContent() {
                this.showPageContent = !0;
                for (let e = 0; e < this.projects.length; e++)
                    this.show(e)
            }
            show(e) {
                const t = this.projectImages[e];
                let s = 2;
                a.isMobile() && (s = 1),
                "home" === this.page.type && (s = 0),
                n.h.delayedCall(.1, ()=>{
                    e + 1 <= s ? (this.setImageHeight(e),
                    n.h.to(t.el, 1, {
                        alpha: 1,
                        clearProps: "transform",
                        ease: n.d.easeOut
                    })) : (this.setImageHeight(e, !0),
                    n.h.set(t.el, {
                        alpha: 1,
                        clearProps: "transform"
                    }))
                }
                )
            }
            setImageHeight(e) {
                let t = arguments.length > 1 && void 0 !== arguments[1] && arguments[1];
                if (!a.isMin("xs"))
                    return;
                const s = this.projectImages[e];
                t ? s.setSize(s.imageLinkWidth, s.projectHeight, 0, 0, 0) : (s.initiatedOnce || (s.setSize(s.imageLinkWidth, 0, 0, 0, 0),
                s.initiatedOnce = !0),
                s.setSize(s.imageLinkWidth, s.projectHeight, 0, 0, 1.5, 0, n.e.easeOut))
            }
            calcHeight() {
                if (!a.isMin("xs"))
                    return;
                const e = this.projectImages.length;
                for (let t = 0; t < e; t++) {
                    const e = this.projectImageLinks[t]
                      , s = parseFloat(this.projectImageLinks[t].getAttribute("data-image-height"))
                      , i = this.projects[t]
                      , o = this.projectImages[t];
                    let r = a.viewportSize.width * s;
                    a.viewportSize.width > a.viewportSize.height && (r = a.viewportSize.height * s),
                    r > o.bounds.height && (r = o.bounds.height),
                    n.h.set([i, e], {
                        height: r.toFixed(0)
                    }),
                    n.h.set(i, {
                        marginTop: -this.projectOffset.toFixed(0)
                    }),
                    this.projectOffset = Math.round(.3 * r),
                    o.setProjectHeight(r),
                    o.setImageLinkWidth(e.clientWidth)
                }
            }
            setImagesHeight() {
                let e = arguments.length > 0 && void 0 !== arguments[0] && arguments[0];
                if (!a.isMin("xs"))
                    return;
                let t = this.projectImageLinks.length;
                this.projectOffset = 0;
                for (let s = 0; s < t; s++)
                    this.setImageHeight(s, e)
            }
            onProjectLinkClick(e) {
                const t = e.currentTarget.getAttribute("data-index");
                this.page.lastSelectedProjectTitle = this.projectTitles[t],
                this.page.lastSelectedProject = this.projectImages[t]
            }
            onResize() {
                super.onResize();
                for (const e of this.projectImages)
                    e.onResize();
                this.calcHeight(),
                this.setImagesHeight()
            }
        }
        class le {
            constructor() {
                this._triggers = {}
            }
            dispatchEvent(e) {
                const t = this._triggers[e];
                if (t && t.length) {
                    for (var s = arguments.length, i = new Array(s > 1 ? s - 1 : 0), o = 1; o < s; o++)
                        i[o - 1] = arguments[o];
                    for (let e of t)
                        e(...i)
                }
            }
            on(e, t) {
                this._triggers[e] || (this._triggers[e] = []),
                this._triggers[e].push(t)
            }
            off(e, t) {
                const s = this._triggers[e];
                if (s && s.length)
                    for (let e in s)
                        if (s.hasOwnProperty(e)) {
                            s[e] === t && s.splice(e, 1)
                        }
            }
        }
        class he extends le {
            constructor() {
                super(),
                this.cursor = document.getElementById("cursor"),
                this.bars = this.cursor.querySelectorAll("span"),
                this.cross = this.cursor.querySelectorAll("div"),
                this.open = !1,
                this.isShow = !1,
                this.height = 62,
                this.width = 62,
                this.onClick = this.onClick.bind(this),
                this.onMouseMove = this.onMouseMove.bind(this),
                this.onMouseUp = this.onMouseUp.bind(this),
                this.onMouseDown = this.onMouseDown.bind(this)
            }
            init() {
                this.hideCross(),
                window.addEventListener("click", this.onClick, !!window.passiveSupported && {
                    passive: !0
                }),
                window.addEventListener("mousedown", this.onMouseDown, !!window.passiveSupported && {
                    passive: !0
                }),
                window.addEventListener("mouseup", this.onMouseUp, !!window.passiveSupported && {
                    passive: !0
                }),
                window.addEventListener("mousemove", this.onMouseMove, !!window.passiveSupported && {
                    passive: !0
                })
            }
            destroy() {
                window.removeEventListener("click", this.onClick, !!window.passiveSupported && {
                    passive: !0
                }),
                window.removeEventListener("mousedown", this.onMouseDown, !!window.passiveSupported && {
                    passive: !0
                }),
                window.removeEventListener("mouseup", this.onMouseUp, !!window.passiveSupported && {
                    passive: !0
                }),
                window.removeEventListener("mousemove", this.onMouseMove, !!window.passiveSupported && {
                    passive: !0
                })
            }
            onMouseDown() {
                this.isShow && p.d.to(this.cursor, .2, {
                    scale: .9,
                    ease: p.b.easeIn
                })
            }
            onMouseUp() {
                this.isShow && p.d.to(this.cursor, .2, {
                    scale: 1,
                    delay: .2,
                    ease: p.b.easeOut
                })
            }
            onClick() {
                this.isShow && (this.open = !this.open,
                this.open ? (this.hideBars(),
                this.showCross()) : (this.hideCross(),
                this.showBars()),
                this.dispatchEvent("click"))
            }
            onMouseMove(e) {
                p.d.to(this.cursor, .4, {
                    y: e.pageY,
                    x: e.pageX,
                    ease: p.b.easeOut,
                    roundProps: "x,y"
                })
            }
            show() {
                this.isShow = !0,
                p.d.set(this.cursor, {
                    backgroundColor: "#000",
                    mixBlendMode: ""
                }),
                p.d.set([this.bars, this.cross], {
                    backgroundColor: "#fff"
                }),
                p.d.to(this.cursor, .2, {
                    height: this.height,
                    width: this.width,
                    marginTop: -this.height / 2,
                    marginLeft: -this.width / 2
                }),
                this.open ? this.showCross() : this.showBars(),
                p.d.to(this.cursor, .4, {
                    scale: 1,
                    alpha: 1,
                    ease: p.b.easeOut
                })
            }
            hide() {
                this.isShow = !1,
                this.open ? this.hideCross() : this.hideBars(),
                p.d.to(this.cursor, .4, {
                    scale: 0,
                    alpha: 0,
                    ease: p.b.easeOut
                })
            }
            showBars() {
                p.d.killTweensOf(this.bars),
                p.d.set(this.bars, {
                    transformOrigin: "0% 0%"
                }),
                p.d.staggerTo(this.bars, .2, {
                    alpha: 1,
                    delay: .3
                }, .15),
                p.d.staggerFromTo(this.bars, .5, {
                    scaleX: 0
                }, {
                    scaleX: 1,
                    delay: .3,
                    ease: p.b.easeOut
                }, .15)
            }
            hideBars() {
                p.d.killTweensOf(this.bars),
                p.d.staggerTo(this.bars, .5, {
                    transformOrigin: "100% 100%",
                    scaleX: 0,
                    alpha: 0,
                    ease: p.b.easeOut,
                    force3D: !0
                }, .15)
            }
            showCross() {
                p.d.killTweensOf(this.cross),
                p.d.staggerTo(this.cross, .4, {
                    scaleX: 1,
                    delay: .2,
                    force3D: !0
                }, .1)
            }
            hideCross() {
                p.d.killTweensOf(this.cross),
                p.d.staggerTo(this.cross, .4, {
                    scaleX: 0,
                    force3D: !0
                }, .1)
            }
        }
        class ce extends he {
            show() {
                n.h.set(this.cursor, {
                    backgroundColor: "#fff"
                }),
                n.h.set([this.bars, this.cross], {
                    backgroundColor: "#000"
                }),
                this.isShow = !0,
                n.h.to(this.cursor, .2, {
                    height: this.height,
                    width: this.width,
                    marginTop: -this.height / 2,
                    marginLeft: -this.width / 2
                }),
                this.open ? this.showCross() : this.showBars(),
                n.h.to(this.cursor, .4, {
                    scale: 1,
                    alpha: 1,
                    ease: n.d.easeOut
                })
            }
        }
        class de extends Q {
            constructor(e) {
                super(e, "FocusBlock"),
                this.imgContainer = null,
                this.imgEl = null,
                this.contentEL = null,
                this.cursor = null,
                this.ease = n.d.easeInOut,
                this.easeImg = n.e.easeInOut,
                this.duration = 1.2,
                this.decalContentX = -Object(r.b)() / 12 * 2,
                this.decalImgX = -Object(r.b)() / 2 + Object(r.b)() / 12,
                this.cursor = null,
                this.isTextShow = !1,
                this.activeHover = !1,
                this.onEnter = this.onEnter.bind(this),
                this.onLeave = this.onLeave.bind(this),
                this.onCursorClick = this.onCursorClick.bind(this)
            }
            init() {
                super.init(),
                this.imgContainer = this.rootElement.querySelector(".img-container"),
                this.imgEl = this.rootElement.querySelector(".img-3d"),
                this.contentEL = this.rootElement.querySelector(".focus-block__content"),
                this.cursor = this.rootElement.querySelector(".cursor"),
                this.activeHover = this.contentEL.hasAttribute("data-hover"),
                this.checkCursor()
            }
            destroy() {
                super.destroy(),
                this.cursor && (this.cursor.hide(),
                this.cursor.destroy())
            }
            initEvents() {
                super.initEvents(),
                this.contentEL.addEventListener("mouseenter", this.onEnter, !!window.passiveSupported && {
                    passive: !0
                }),
                this.contentEL.addEventListener("mouseleave", this.onLeave, !!window.passiveSupported && {
                    passive: !0
                })
            }
            destroyEvents() {
                super.destroyEvents(),
                this.contentEL.removeEventListener("mouseenter", this.onEnter, !!window.passiveSupported && {
                    passive: !0
                }),
                this.contentEL.removeEventListener("mouseleave", this.onLeave, !!window.passiveSupported && {
                    passive: !0
                })
            }
            onResize() {
                this.checkCursor()
            }
            onEnter() {
                this.cursor && (this.cursor.show(),
                this.rotateIn())
            }
            onLeave() {
                this.cursor && (this.cursor.hide(),
                this.rotateOut())
            }
            onCursorClick() {
                this.isTextShow ? this.hideText() : this.showText()
            }
            checkCursor() {
                a.isMin("md") ? this.cursor || this.createCursor() : this.cursor && (this.cursor.off("click", this.onCursorClick),
                this.cursor.destroy(),
                this.cursor = null)
            }
            createCursor() {
                this.rootElement.classList.contains("layout-black") ? this.cursor = new ce : this.cursor = new he,
                this.cursor.on("click", this.onCursorClick),
                this.cursor.init()
            }
            showText() {
                this.isTextShow = !0;
                const e = new window.CustomEvent(u.SCROLLTO,{
                    detail: {
                        options: {
                            speed: 1e3,
                            targetOffset: -120,
                            targetElem: this.contentEL,
                            useTarget: !0
                        }
                    }
                });
                document.dispatchEvent(e),
                n.h.to(this.contentEL, this.duration, {
                    x: -Object(r.b)() / 12 * 2,
                    alpha: 1,
                    force3D: !0,
                    ease: this.ease
                }),
                n.h.to(this.imgContainer, 1.2 * this.duration, {
                    x: -Object(r.b)() / 2 + Object(r.b)() / 12 * .5,
                    force3D: !0,
                    ease: this.easeImg
                }),
                this.rotateOut(.5)
            }
            hideText() {
                this.isTextShow = !1,
                this.cursor.isShow && this.rotateIn(.6),
                n.h.to(this.contentEL, this.duration, {
                    x: 0,
                    alpha: .1,
                    force3D: !0,
                    ease: this.ease
                }),
                n.h.to(this.imgContainer, 1.2 * this.duration, {
                    x: 0,
                    force3D: !0,
                    ease: this.easeImg
                })
            }
            rotateIn() {
                let e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0;
                !this.isTextShow && this.activeHover && (n.h.killTweensOf(this.imgEl),
                n.h.to(this.imgEl, 1, {
                    rotationY: 7,
                    delay: e,
                    ease: n.d.easeOut
                }))
            }
            rotateOut() {
                let e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0;
                this.activeHover && (n.h.killTweensOf(this.imgEl),
                n.h.to(this.imgEl, 1, {
                    rotationY: 0,
                    delay: e,
                    ease: n.d.easeOut
                }))
            }
        }
        class pe extends Q {
        }
        class ue extends he {
            constructor() {
                super(),
                this.height = 120,
                this.width = 120
            }
            launchScaleAnimation() {
                n.h.to(this.cursor, 1, {
                    yoyo: !0,
                    repeat: -1,
                    scale: .8,
                    ease: n.b.easeInOut
                })
            }
            onMouseDown() {}
            onMouseUp() {}
            onClick() {}
            show() {
                this.isShow = !0,
                n.h.to(this.cursor, .2, {
                    height: this.height,
                    width: this.width,
                    marginTop: -this.height / 2,
                    marginLeft: -this.width / 2,
                    onComplete: ()=>{
                        this.launchScaleAnimation()
                    }
                }),
                n.h.set(this.cursor, {
                    backgroundColor: "#fff",
                    mixBlendMode: "difference"
                }),
                n.h.to(this.cursor, .4, {
                    scale: 1,
                    alpha: 1,
                    ease: n.d.easeOut
                })
            }
            hide() {
                this.isShow = !1,
                n.h.to(this.cursor, .4, {
                    scale: 0,
                    alpha: 0,
                    ease: n.d.easeOut
                }),
                n.h.set(this.cursor, {
                    backgroundColor: "#000",
                    mixBlendMode: "normal"
                })
            }
        }
        class me extends Q {
            constructor(e) {
                super(e, "MaskBlock"),
                this.circleElement = null,
                this.cursor = new ue,
                this.onMouseMove = this.onMouseMove.bind(this),
                this.onMouseEnter = this.onMouseEnter.bind(this),
                this.onMouseLeave = this.onMouseLeave.bind(this)
            }
            init() {
                super.init(),
                this.cursor.init(),
                this.circleElement = this.rootElement.querySelector(".mask-block__circle"),
                this.rootElementHeight = this.rootElement.getBoundingClientRect().height
            }
            initEvents() {
                super.initEvents(),
                this.rootElement.addEventListener("mouseenter", this.onMouseEnter, !!window.passiveSupported && {
                    passive: !0
                }),
                this.rootElement.addEventListener("mouseleave", this.onMouseLeave, !!window.passiveSupported && {
                    passive: !0
                })
            }
            destroyEvents() {
                super.destroyEvents(),
                this.rootElement.removeEventListener("mouseenter", this.onMouseEnter, !!window.passiveSupported && {
                    passive: !0
                }),
                this.rootElement.removeEventListener("mouseleave", this.onMouseLeave, !!window.passiveSupported && {
                    passive: !0
                })
            }
            onMouseMove(e) {
                p.d.to(this.circleElement, .4, {
                    y: e.pageY - (Object(r.a)() - this.rootElementHeight) / 2,
                    x: e.pageX,
                    ease: p.b.easeOut
                })
            }
            onMouseEnter(e) {
                this.cursor.show()
            }
            onMouseLeave() {
                this.cursor.hide()
            }
        }
        class ge extends K {
        }
        class we extends K {
        }
        class ve extends Q {
            constructor(e) {
                super(e, "HomeSocialsBlock"),
                this.container = document.getElementById("home-socials"),
                this.links = this.container.querySelectorAll("a"),
                this.point = this.container.querySelector(".home-socials__point"),
                this.onSocialLeave = this.onSocialLeave.bind(this),
                this.onSocialLinkEnter = this.onSocialLinkEnter.bind(this)
            }
            initEvents() {
                super.initEvents(),
                this.container.addEventListener("mouseleave", this.onSocialLeave);
                for (const e of this.links)
                    e.addEventListener("mouseenter", this.onSocialLinkEnter)
            }
            destroyEvents() {
                super.destroyEvents(),
                this.container.removeEventListener("mouseleave", this.onSocialLeave);
                for (const e of this.links)
                    e.removeEventListener("mouseenter", this.onSocialLinkEnter)
            }
            onSocialLeave() {
                n.h.to(this.point, .7, {
                    scale: 0,
                    ease: n.d.easeOut
                })
            }
            onSocialLinkEnter(e) {
                const t = parseInt(e.currentTarget.getAttribute("data-index"));
                n.h.to(this.point, .7, {
                    y: 40 * t,
                    scale: 1,
                    ease: n.d.easeOut
                })
            }
        }
        class be extends Q {
            constructor(e) {
                super(e, "ImageOpenerBlock"),
                this.img = null,
                this.maskElement = null,
                this.showPageContent = !1,
                this.imageLoaded = !1,
                this.imageShown = !1,
                this.delay = .4,
                this.duration = 1.6,
                this.display = "",
                this.onShowPageContent = this.onShowPageContent.bind(this),
                this.onImgLoaded = this.onImgLoaded.bind(this)
            }
            init() {
                super.init(),
                this.img = this.rootElement.querySelector("img"),
                this.maskElement = this.rootElement.children[0],
                this.display = window.getComputedStyle(this.rootElement).display,
                n.h.set(this.img, {
                    alpha: .001,
                    yPercent: 1,
                    force3D: !0
                }),
                n.h.set(this.maskElement, {
                    yPercent: -1,
                    force3D: !0
                }),
                this.rootElement.hasAttribute("data-delay") && (this.delay = parseFloat(this.rootElement.getAttribute("data-delay"))),
                this.rootElement.hasAttribute("data-duration") && (this.duration = parseFloat(this.rootElement.getAttribute("data-duration")))
            }
            initEvents() {
                super.initEvents(),
                window.addEventListener("SHOW_PAGE_CONTENT", this.onShowPageContent),
                this.img.addEventListener("load", this.onImgLoaded)
            }
            destroyEvents() {
                super.destroyEvents(),
                window.removeEventListener("SHOW_PAGE_CONTENT", this.onShowPageContent),
                this.img.removeEventListener("load", this.onImgLoaded)
            }
            onImgLoaded() {
                this.imageLoaded = !0,
                this.check()
            }
            onShowPageContent() {
                this.showPageContent = !0,
                this.check()
            }
            onResize() {
                this.rootElement && (this.display = window.getComputedStyle(this.rootElement).display),
                this.check()
            }
            check() {
                this.imageLoaded && this.showPageContent && this.showImage()
            }
            showImage() {
                this.imageShown || "none" === this.display || (this.imageShown = !0,
                n.h.set(this.img, {
                    yPercent: 90,
                    force3D: !0
                }),
                n.h.set(this.maskElement, {
                    yPercent: -101,
                    force3D: !0
                }),
                n.h.to([this.maskElement, this.img], this.duration, {
                    yPercent: 0,
                    alpha: 1,
                    force3D: !0,
                    delay: this.delay,
                    ease: n.d.easeOut
                }))
            }
        }
        window.passiveSupported = !1;
        try {
            var ye = Object.defineProperty({}, "passive", {
                get: function() {
                    window.passiveSupported = !0
                }
            });
            window.addEventListener("test", ye, ye),
            window.removeEventListener("test", ye, ye)
        } catch (e) {
            window.passiveSupported = !1
        }
        document.addEventListener("DOMContentLoaded", ()=>{
            if (window.MAIN_EXECUTED)
                throw new Error("Safari 10");
            "scrollRestoration"in window.history && (window.history.scrollRestoration = "manual"),
            window.MAIN_EXECUTED = !0,
            /Trident\/|MSIE/.test(window.navigator.userAgent) && document.body.classList.add("ie");
            const e = new i.m({
                wrapperId: "main-container",
                debug: 0
            });
            e.provider("BlockBuilder", se),
            e.provider("TransitionFactory", N),
            e.provider("CacheProvider", i.f),
            e.provider("History", i.i),
            e.bootableProvider("Prefetch", i.k),
            e.bootableProvider("Pjax", i.j),
            e.instanceFactory("DefaultPage", e=>new K(e)),
            e.instanceFactory("project", e=>new te(e)),
            e.instanceFactory("studio", e=>new we(e)),
            e.instanceFactory("home", e=>new ge(e)),
            e.instanceFactory("video", e=>new oe(e)),
            e.instanceFactory("mask", e=>new me(e)),
            e.instanceFactory("alternate-images", e=>new ne(e)),
            e.instanceFactory("HomeSocialsBlock", e=>new ve(e)),
            e.instanceFactory("ProjectList", e=>new ae(e)),
            e.instanceFactory("ImageOpenerBlock", e=>new be(e)),
            e.instanceFactory("focus", e=>new de(e)),
            e.instanceFactory("Introduction", e=>new ee(e)),
            e.instanceFactory("introduction-images", e=>new pe(e)),
            c.init(),
            e.boot()
        }
        )
    },
    147: function(e, t) {},
    153: function(e, t) {},
    3: function(e, t, s) {
        "use strict";
        s.d(t, "a", function() {
            return n
        }),
        s.d(t, "b", function() {
            return r
        });
        let i = window.innerHeight
          , o = window.innerWidth;
        function n() {
            return i
        }
        function r() {
            return o
        }
        window.addEventListener("resize", ()=>{
            i = window.innerHeight,
            o = window.innerWidth
        }
        )
    },
    81: function(e, t, s) {
        "use strict";
        var i, o = this && this.__extends || (i = function(e, t) {
            return (i = Object.setPrototypeOf || {
                __proto__: []
            }instanceof Array && function(e, t) {
                e.__proto__ = t
            }
            || function(e, t) {
                for (var s in t)
                    t.hasOwnProperty(s) && (e[s] = t[s])
            }
            )(e, t)
        }
        ,
        function(e, t) {
            function s() {
                this.constructor = e
            }
            i(e, t),
            e.prototype = null === t ? Object.create(t) : (s.prototype = t.prototype,
            new s)
        }
        );
        t.__esModule = !0;
        var n = function(e) {
            function t() {
                return null !== e && e.apply(this, arguments) || this
            }
            return o(t, e),
            t.prototype.transformDelta = function(e) {
                return this.options.disable ? {
                    x: 0,
                    y: 0
                } : e
            }
            ,
            t.pluginName = "stop",
            t.defaultOptions = {
                disable: !1
            },
            t
        }(s(31).ScrollbarPlugin);
        t.default = n
    },
    83: function(e, t, s) {
        "use strict";
        var i, o = this && this.__extends || (i = function(e, t) {
            return (i = Object.setPrototypeOf || {
                __proto__: []
            }instanceof Array && function(e, t) {
                e.__proto__ = t
            }
            || function(e, t) {
                for (var s in t)
                    t.hasOwnProperty(s) && (e[s] = t[s])
            }
            )(e, t)
        }
        ,
        function(e, t) {
            function s() {
                this.constructor = e
            }
            i(e, t),
            e.prototype = null === t ? Object.create(t) : (s.prototype = t.prototype,
            new s)
        }
        );
        t.__esModule = !0;
        var n = function(e) {
            function t() {
                return null !== e && e.apply(this, arguments) || this
            }
            return o(t, e),
            t.prototype.transformDelta = function(e) {
                return {
                    x: 0,
                    y: e.y
                }
            }
            ,
            t.pluginName = "vertical",
            t
        }(s(31).ScrollbarPlugin);
        t.default = n
    }
});
