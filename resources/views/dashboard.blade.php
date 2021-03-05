<!DOCTYPE HTML>
<html>

<head>
    <title>FORLAND MODERN MOTORS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Forland Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">


    <link href="css/font-awesome.css" rel="stylesheet">
    <script>
        /*!
         * Chart.js
         * http://chartjs.org/
         * Version: 1.0.2
         *
         * Copyright 2015 Nick Downie
         * Released under the MIT license
         * https://github.com/nnnick/Chart.js/blob/master/LICENSE.md
         */
        (function () {
            "use strict";
            var t = this,
                i = t.Chart,
                e = function (t) {
                    this.canvas = t.canvas, this.ctx = t;
                    var i = function (t, i) {
                            return t["offset" + i] ? t["offset" + i] : document.defaultView.getComputedStyle(t)
                                .getPropertyValue(i)
                        },
                        e = this.width = i(t.canvas, "Width"),
                        n = this.height = i(t.canvas, "Height");
                    t.canvas.width = e, t.canvas.height = n;
                    var e = this.width = t.canvas.width,
                        n = this.height = t.canvas.height;
                    return this.aspectRatio = this.width / this.height, s.retinaScale(this), this
                };
            e.defaults = {
                global: {
                    animation: !0,
                    animationSteps: 60,
                    animationEasing: "easeOutQuart",
                    showScale: !0,
                    scaleOverride: !1,
                    scaleSteps: null,
                    scaleStepWidth: null,
                    scaleStartValue: null,
                    scaleLineColor: "rgba(0,0,0,.1)",
                    scaleLineWidth: 1,
                    scaleShowLabels: !0,
                    scaleLabel: "<%=value%>",
                    scaleIntegersOnly: !0,
                    scaleBeginAtZero: !1,
                    scaleFontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",
                    scaleFontSize: 12,
                    scaleFontStyle: "normal",
                    scaleFontColor: "#666",
                    responsive: !1,
                    maintainAspectRatio: !0,
                    showTooltips: !0,
                    customTooltips: !1,
                    tooltipEvents: ["mousemove", "touchstart", "touchmove", "mouseout"],
                    tooltipFillColor: "rgba(0,0,0,0.8)",
                    tooltipFontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",
                    tooltipFontSize: 14,
                    tooltipFontStyle: "normal",
                    tooltipFontColor: "#fff",
                    tooltipTitleFontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",
                    tooltipTitleFontSize: 14,
                    tooltipTitleFontStyle: "bold",
                    tooltipTitleFontColor: "#fff",
                    tooltipYPadding: 6,
                    tooltipXPadding: 6,
                    tooltipCaretSize: 8,
                    tooltipCornerRadius: 6,
                    tooltipXOffset: 10,
                    tooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
                    multiTooltipTemplate: "<%= value %>",
                    multiTooltipKeyBackground: "#fff",
                    onAnimationProgress: function () {},
                    onAnimationComplete: function () {}
                }
            }, e.types = {};
            var s = e.helpers = {},
                n = s.each = function (t, i, e) {
                    var s = Array.prototype.slice.call(arguments, 3);
                    if (t)
                        if (t.length === +t.length) {
                            var n;
                            for (n = 0; n < t.length; n++) i.apply(e, [t[n], n].concat(s))
                        } else
                            for (var o in t) i.apply(e, [t[o], o].concat(s))
                },
                o = s.clone = function (t) {
                    var i = {};
                    return n(t, function (e, s) {
                        t.hasOwnProperty(s) && (i[s] = e)
                    }), i
                },
                a = s.extend = function (t) {
                    return n(Array.prototype.slice.call(arguments, 1), function (i) {
                        n(i, function (e, s) {
                            i.hasOwnProperty(s) && (t[s] = e)
                        })
                    }), t
                },
                h = s.merge = function () {
                    var t = Array.prototype.slice.call(arguments, 0);
                    return t.unshift({}), a.apply(null, t)
                },
                l = s.indexOf = function (t, i) {
                    if (Array.prototype.indexOf) return t.indexOf(i);
                    for (var e = 0; e < t.length; e++)
                        if (t[e] === i) return e;
                    return -1
                },
                r = (s.where = function (t, i) {
                    var e = [];
                    return s.each(t, function (t) {
                        i(t) && e.push(t)
                    }), e
                }, s.findNextWhere = function (t, i, e) {
                    e || (e = -1);
                    for (var s = e + 1; s < t.length; s++) {
                        var n = t[s];
                        if (i(n)) return n
                    }
                }, s.findPreviousWhere = function (t, i, e) {
                    e || (e = t.length);
                    for (var s = e - 1; s >= 0; s--) {
                        var n = t[s];
                        if (i(n)) return n
                    }
                }, s.inherits = function (t) {
                    var i = this,
                        e = t && t.hasOwnProperty("constructor") ? t.constructor : function () {
                            return i.apply(this, arguments)
                        },
                        s = function () {
                            this.constructor = e
                        };
                    return s.prototype = i.prototype, e.prototype = new s, e.extend = r, t && a(e.prototype, t),
                        e.__super__ = i.prototype, e
                }),
                c = s.noop = function () {},
                u = s.uid = function () {
                    var t = 0;
                    return function () {
                        return "chart-" + t++
                    }
                }(),
                d = s.warn = function (t) {
                    window.console && "function" == typeof window.console.warn && console.warn(t)
                },
                p = s.amd = "function" == typeof define && define.amd,
                f = s.isNumber = function (t) {
                    return !isNaN(parseFloat(t)) && isFinite(t)
                },
                g = s.max = function (t) {
                    return Math.max.apply(Math, t)
                },
                m = s.min = function (t) {
                    return Math.min.apply(Math, t)
                },
                v = (s.cap = function (t, i, e) {
                    if (f(i)) {
                        if (t > i) return i
                    } else if (f(e) && e > t) return e;
                    return t
                }, s.getDecimalPlaces = function (t) {
                    return t % 1 !== 0 && f(t) ? t.toString().split(".")[1].length : 0
                }),
                S = s.radians = function (t) {
                    return t * (Math.PI / 180)
                },
                x = (s.getAngleFromPoint = function (t, i) {
                    var e = i.x - t.x,
                        s = i.y - t.y,
                        n = Math.sqrt(e * e + s * s),
                        o = 2 * Math.PI + Math.atan2(s, e);
                    return 0 > e && 0 > s && (o += 2 * Math.PI), {
                        angle: o,
                        distance: n
                    }
                }, s.aliasPixel = function (t) {
                    return t % 2 === 0 ? 0 : .5
                }),
                y = (s.splineCurve = function (t, i, e, s) {
                    var n = Math.sqrt(Math.pow(i.x - t.x, 2) + Math.pow(i.y - t.y, 2)),
                        o = Math.sqrt(Math.pow(e.x - i.x, 2) + Math.pow(e.y - i.y, 2)),
                        a = s * n / (n + o),
                        h = s * o / (n + o);
                    return {
                        inner: {
                            x: i.x - a * (e.x - t.x),
                            y: i.y - a * (e.y - t.y)
                        },
                        outer: {
                            x: i.x + h * (e.x - t.x),
                            y: i.y + h * (e.y - t.y)
                        }
                    }
                }, s.calculateOrderOfMagnitude = function (t) {
                    return Math.floor(Math.log(t) / Math.LN10)
                }),
                C = (s.calculateScaleRange = function (t, i, e, s, n) {
                    var o = 2,
                        a = Math.floor(i / (1.5 * e)),
                        h = o >= a,
                        l = g(t),
                        r = m(t);
                    l === r && (l += .5, r >= .5 && !s ? r -= .5 : l += .5);
                    for (var c = Math.abs(l - r), u = y(c), d = Math.ceil(l / (1 * Math.pow(10, u))) * Math.pow(
                                10, u), p = s ? 0 : Math.floor(r / (1 * Math.pow(10, u))) * Math.pow(10, u), f =
                            d - p, v = Math.pow(10, u), S = Math.round(f / v);
                        (S > a || a > 2 * S) && !h;)
                        if (S > a) v *= 2, S = Math.round(f / v), S % 1 !== 0 && (h = !0);
                        else if (n && u >= 0) {
                        if (v / 2 % 1 !== 0) break;
                        v /= 2, S = Math.round(f / v)
                    } else v /= 2, S = Math.round(f / v);
                    return h && (S = o, v = f / S), {
                        steps: S,
                        stepValue: v,
                        min: p,
                        max: p + S * v
                    }
                }, s.template = function (t, i) {
                    function e(t, i) {
                        var e = /\W/.test(t) ? new Function("obj",
                                "var p=[],print=function(){p.push.apply(p,arguments);};with(obj){p.push('" + t
                                .replace(/[\r\t\n]/g, " ").split("<%").join("	").replace(/((^|%>)[^\t]*)'/g,
                                    "$1\r").replace(/\t=(.*?)%>/g, "',$1,'").split("	").join("');").split("%>")
                                .join("p.push('").split("\r").join("\\'") + "');}return p.join('');") : s[t] =
                            s[t];
                        return i ? e(i) : e
                    }
                    if (t instanceof Function) return t(i);
                    var s = {};
                    return e(t, i)
                }),
                w = (s.generateLabels = function (t, i, e, s) {
                    var o = new Array(i);
                    return labelTemplateString && n(o, function (i, n) {
                        o[n] = C(t, {
                            value: e + s * (n + 1)
                        })
                    }), o
                }, s.easingEffects = {
                    linear: function (t) {
                        return t
                    },
                    easeInQuad: function (t) {
                        return t * t
                    },
                    easeOutQuad: function (t) {
                        return -1 * t * (t - 2)
                    },
                    easeInOutQuad: function (t) {
                        return (t /= .5) < 1 ? .5 * t * t : -0.5 * (--t * (t - 2) - 1)
                    },
                    easeInCubic: function (t) {
                        return t * t * t
                    },
                    easeOutCubic: function (t) {
                        return 1 * ((t = t / 1 - 1) * t * t + 1)
                    },
                    easeInOutCubic: function (t) {
                        return (t /= .5) < 1 ? .5 * t * t * t : .5 * ((t -= 2) * t * t + 2)
                    },
                    easeInQuart: function (t) {
                        return t * t * t * t
                    },
                    easeOutQuart: function (t) {
                        return -1 * ((t = t / 1 - 1) * t * t * t - 1)
                    },
                    easeInOutQuart: function (t) {
                        return (t /= .5) < 1 ? .5 * t * t * t * t : -0.5 * ((t -= 2) * t * t * t - 2)
                    },
                    easeInQuint: function (t) {
                        return 1 * (t /= 1) * t * t * t * t
                    },
                    easeOutQuint: function (t) {
                        return 1 * ((t = t / 1 - 1) * t * t * t * t + 1)
                    },
                    easeInOutQuint: function (t) {
                        return (t /= .5) < 1 ? .5 * t * t * t * t * t : .5 * ((t -= 2) * t * t * t * t + 2)
                    },
                    easeInSine: function (t) {
                        return -1 * Math.cos(t / 1 * (Math.PI / 2)) + 1
                    },
                    easeOutSine: function (t) {
                        return 1 * Math.sin(t / 1 * (Math.PI / 2))
                    },
                    easeInOutSine: function (t) {
                        return -0.5 * (Math.cos(Math.PI * t / 1) - 1)
                    },
                    easeInExpo: function (t) {
                        return 0 === t ? 1 : 1 * Math.pow(2, 10 * (t / 1 - 1))
                    },
                    easeOutExpo: function (t) {
                        return 1 === t ? 1 : 1 * (-Math.pow(2, -10 * t / 1) + 1)
                    },
                    easeInOutExpo: function (t) {
                        return 0 === t ? 0 : 1 === t ? 1 : (t /= .5) < 1 ? .5 * Math.pow(2, 10 * (t - 1)) :
                            .5 * (-Math.pow(2, -10 * --t) + 2)
                    },
                    easeInCirc: function (t) {
                        return t >= 1 ? t : -1 * (Math.sqrt(1 - (t /= 1) * t) - 1)
                    },
                    easeOutCirc: function (t) {
                        return 1 * Math.sqrt(1 - (t = t / 1 - 1) * t)
                    },
                    easeInOutCirc: function (t) {
                        return (t /= .5) < 1 ? -0.5 * (Math.sqrt(1 - t * t) - 1) : .5 * (Math.sqrt(1 - (t -=
                            2) * t) + 1)
                    },
                    easeInElastic: function (t) {
                        var i = 1.70158,
                            e = 0,
                            s = 1;
                        return 0 === t ? 0 : 1 == (t /= 1) ? 1 : (e || (e = .3), s < Math.abs(1) ? (s = 1,
                            i = e / 4) : i = e / (2 * Math.PI) * Math.asin(1 / s), -(s * Math.pow(2,
                            10 * (t -= 1)) * Math.sin(2 * (1 * t - i) * Math.PI / e)))
                    },
                    easeOutElastic: function (t) {
                        var i = 1.70158,
                            e = 0,
                            s = 1;
                        return 0 === t ? 0 : 1 == (t /= 1) ? 1 : (e || (e = .3), s < Math.abs(1) ? (s = 1,
                            i = e / 4) : i = e / (2 * Math.PI) * Math.asin(1 / s), s * Math.pow(2, -
                            10 * t) * Math.sin(2 * (1 * t - i) * Math.PI / e) + 1)
                    },
                    easeInOutElastic: function (t) {
                        var i = 1.70158,
                            e = 0,
                            s = 1;
                        return 0 === t ? 0 : 2 == (t /= .5) ? 1 : (e || (e = .3 * 1.5), s < Math.abs(1) ? (
                                s = 1, i = e / 4) : i = e / (2 * Math.PI) * Math.asin(1 / s), 1 > t ? -
                            .5 * s * Math.pow(2, 10 * (t -= 1)) * Math.sin(2 * (1 * t - i) * Math.PI /
                                e) : s * Math.pow(2, -10 * (t -= 1)) * Math.sin(2 * (1 * t - i) * Math
                                .PI / e) * .5 + 1)
                    },
                    easeInBack: function (t) {
                        var i = 1.70158;
                        return 1 * (t /= 1) * t * ((i + 1) * t - i)
                    },
                    easeOutBack: function (t) {
                        var i = 1.70158;
                        return 1 * ((t = t / 1 - 1) * t * ((i + 1) * t + i) + 1)
                    },
                    easeInOutBack: function (t) {
                        var i = 1.70158;
                        return (t /= .5) < 1 ? .5 * t * t * (((i *= 1.525) + 1) * t - i) : .5 * ((t -= 2) *
                            t * (((i *= 1.525) + 1) * t + i) + 2)
                    },
                    easeInBounce: function (t) {
                        return 1 - w.easeOutBounce(1 - t)
                    },
                    easeOutBounce: function (t) {
                        return (t /= 1) < 1 / 2.75 ? 7.5625 * t * t : 2 / 2.75 > t ? 1 * (7.5625 * (t -=
                            1.5 / 2.75) * t + .75) : 2.5 / 2.75 > t ? 1 * (7.5625 * (t -= 2.25 / 2.75) *
                            t + .9375) : 1 * (7.5625 * (t -= 2.625 / 2.75) * t + .984375)
                    },
                    easeInOutBounce: function (t) {
                        return .5 > t ? .5 * w.easeInBounce(2 * t) : .5 * w.easeOutBounce(2 * t - 1) + .5
                    }
                }),
                b = s.requestAnimFrame = function () {
                    return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window
                        .mozRequestAnimationFrame || window.oRequestAnimationFrame || window
                        .msRequestAnimationFrame || function (t) {
                            return window.setTimeout(t, 1e3 / 60)
                        }
                }(),
                P = s.cancelAnimFrame = function () {
                    return window.cancelAnimationFrame || window.webkitCancelAnimationFrame || window
                        .mozCancelAnimationFrame || window.oCancelAnimationFrame || window.msCancelAnimationFrame ||
                        function (t) {
                            return window.clearTimeout(t, 1e3 / 60)
                        }
                }(),
                L = (s.animationLoop = function (t, i, e, s, n, o) {
                    var a = 0,
                        h = w[e] || w.linear,
                        l = function () {
                            a++;
                            var e = a / i,
                                r = h(e);
                            t.call(o, r, e, a), s.call(o, r, e), i > a ? o.animationFrame = b(l) : n.apply(o)
                        };
                    b(l)
                }, s.getRelativePosition = function (t) {
                    var i, e, s = t.originalEvent || t,
                        n = t.currentTarget || t.srcElement,
                        o = n.getBoundingClientRect();
                    return s.touches ? (i = s.touches[0].clientX - o.left, e = s.touches[0].clientY - o.top) : (
                        i = s.clientX - o.left, e = s.clientY - o.top), {
                        x: i,
                        y: e
                    }
                }, s.addEvent = function (t, i, e) {
                    t.addEventListener ? t.addEventListener(i, e) : t.attachEvent ? t.attachEvent("on" + i, e) :
                        t["on" + i] = e
                }),
                k = s.removeEvent = function (t, i, e) {
                    t.removeEventListener ? t.removeEventListener(i, e, !1) : t.detachEvent ? t.detachEvent("on" +
                        i, e) : t["on" + i] = c
                },
                F = (s.bindEvents = function (t, i, e) {
                    t.events || (t.events = {}), n(i, function (i) {
                        t.events[i] = function () {
                            e.apply(t, arguments)
                        }, L(t.chart.canvas, i, t.events[i])
                    })
                }, s.unbindEvents = function (t, i) {
                    n(i, function (i, e) {
                        k(t.chart.canvas, e, i)
                    })
                }),
                R = s.getMaximumWidth = function (t) {
                    var i = t.parentNode;
                    return i.clientWidth
                },
                T = s.getMaximumHeight = function (t) {
                    var i = t.parentNode;
                    return i.clientHeight
                },
                A = (s.getMaximumSize = s.getMaximumWidth, s.retinaScale = function (t) {
                    var i = t.ctx,
                        e = t.canvas.width,
                        s = t.canvas.height;
                    window.devicePixelRatio && (i.canvas.style.width = e + "px", i.canvas.style.height = s +
                        "px", i.canvas.height = s * window.devicePixelRatio, i.canvas.width = e * window
                        .devicePixelRatio, i.scale(window.devicePixelRatio, window.devicePixelRatio))
                }),
                M = s.clear = function (t) {
                    t.ctx.clearRect(0, 0, t.width, t.height)
                },
                W = s.fontString = function (t, i, e) {
                    return i + " " + t + "px " + e
                },
                z = s.longestText = function (t, i, e) {
                    t.font = i;
                    var s = 0;
                    return n(e, function (i) {
                        var e = t.measureText(i).width;
                        s = e > s ? e : s
                    }), s
                },
                B = s.drawRoundedRectangle = function (t, i, e, s, n, o) {
                    t.beginPath(), t.moveTo(i + o, e), t.lineTo(i + s - o, e), t.quadraticCurveTo(i + s, e, i + s,
                            e + o), t.lineTo(i + s, e + n - o), t.quadraticCurveTo(i + s, e + n, i + s - o, e + n),
                        t.lineTo(i + o, e + n), t.quadraticCurveTo(i, e + n, i, e + n - o), t.lineTo(i, e + o), t
                        .quadraticCurveTo(i, e, i + o, e), t.closePath()
                };
            e.instances = {}, e.Type = function (t, i, s) {
                    this.options = i, this.chart = s, this.id = u(), e.instances[this.id] = this, i.responsive &&
                        this.resize(), this.initialize.call(this, t)
                }, a(e.Type.prototype, {
                    initialize: function () {
                        return this
                    },
                    clear: function () {
                        return M(this.chart), this
                    },
                    stop: function () {
                        return P(this.animationFrame), this
                    },
                    resize: function (t) {
                        this.stop();
                        var i = this.chart.canvas,
                            e = R(this.chart.canvas),
                            s = this.options.maintainAspectRatio ? e / this.chart.aspectRatio : T(this.chart
                                .canvas);
                        return i.width = this.chart.width = e, i.height = this.chart.height = s, A(this
                            .chart), "function" == typeof t && t.apply(this, Array.prototype.slice.call(
                            arguments, 1)), this
                    },
                    reflow: c,
                    render: function (t) {
                        return t && this.reflow(), this.options.animation && !t ? s.animationLoop(this.draw,
                            this.options.animationSteps, this.options.animationEasing, this.options
                            .onAnimationProgress, this.options.onAnimationComplete, this) : (this
                            .draw(), this.options.onAnimationComplete.call(this)), this
                    },
                    generateLegend: function () {
                        return C(this.options.legendTemplate, this)
                    },
                    destroy: function () {
                        this.clear(), F(this, this.events);
                        var t = this.chart.canvas;
                        t.width = this.chart.width, t.height = this.chart.height, t.style.removeProperty ? (
                                t.style.removeProperty("width"), t.style.removeProperty("height")) : (t
                                .style.removeAttribute("width"), t.style.removeAttribute("height")),
                            delete e.instances[this.id]
                    },
                    showTooltip: function (t, i) {
                        "undefined" == typeof this.activeElements && (this.activeElements = []);
                        var o = function (t) {
                            var i = !1;
                            return t.length !== this.activeElements.length ? i = !0 : (n(t, function (t,
                                e) {
                                t !== this.activeElements[e] && (i = !0)
                            }, this), i)
                        }.call(this, t);
                        if (o || i) {
                            if (this.activeElements = t, this.draw(), this.options.customTooltips && this
                                .options.customTooltips(!1), t.length > 0)
                                if (this.datasets && this.datasets.length > 1) {
                                    for (var a, h, r = this.datasets.length - 1; r >= 0 && (a = this
                                            .datasets[r].points || this.datasets[r].bars || this.datasets[r]
                                            .segments, h = l(a, t[0]), -1 === h); r--);
                                    var c = [],
                                        u = [],
                                        d = function () {
                                            var t, i, e, n, o, a = [],
                                                l = [],
                                                r = [];
                                            return s.each(this.datasets, function (i) {
                                                t = i.points || i.bars || i.segments, t[h] && t[h]
                                                    .hasValue() && a.push(t[h])
                                            }), s.each(a, function (t) {
                                                l.push(t.x), r.push(t.y), c.push(s.template(this
                                                    .options.multiTooltipTemplate, t)), u.push({
                                                    fill: t._saved.fillColor || t.fillColor,
                                                    stroke: t._saved.strokeColor || t
                                                        .strokeColor
                                                })
                                            }, this), o = m(r), e = g(r), n = m(l), i = g(l), {
                                                x: n > this.chart.width / 2 ? n : i,
                                                y: (o + e) / 2
                                            }
                                        }.call(this, h);
                                    new e.MultiTooltip({
                                        x: d.x,
                                        y: d.y,
                                        xPadding: this.options.tooltipXPadding,
                                        yPadding: this.options.tooltipYPadding,
                                        xOffset: this.options.tooltipXOffset,
                                        fillColor: this.options.tooltipFillColor,
                                        textColor: this.options.tooltipFontColor,
                                        fontFamily: this.options.tooltipFontFamily,
                                        fontStyle: this.options.tooltipFontStyle,
                                        fontSize: this.options.tooltipFontSize,
                                        titleTextColor: this.options.tooltipTitleFontColor,
                                        titleFontFamily: this.options.tooltipTitleFontFamily,
                                        titleFontStyle: this.options.tooltipTitleFontStyle,
                                        titleFontSize: this.options.tooltipTitleFontSize,
                                        cornerRadius: this.options.tooltipCornerRadius,
                                        labels: c,
                                        legendColors: u,
                                        legendColorBackground: this.options
                                            .multiTooltipKeyBackground,
                                        title: t[0].label,
                                        chart: this.chart,
                                        ctx: this.chart.ctx,
                                        custom: this.options.customTooltips
                                    }).draw()
                                } else n(t, function (t) {
                                    var i = t.tooltipPosition();
                                    new e.Tooltip({
                                        x: Math.round(i.x),
                                        y: Math.round(i.y),
                                        xPadding: this.options.tooltipXPadding,
                                        yPadding: this.options.tooltipYPadding,
                                        fillColor: this.options.tooltipFillColor,
                                        textColor: this.options.tooltipFontColor,
                                        fontFamily: this.options.tooltipFontFamily,
                                        fontStyle: this.options.tooltipFontStyle,
                                        fontSize: this.options.tooltipFontSize,
                                        caretHeight: this.options.tooltipCaretSize,
                                        cornerRadius: this.options.tooltipCornerRadius,
                                        text: C(this.options.tooltipTemplate, t),
                                        chart: this.chart,
                                        custom: this.options.customTooltips
                                    }).draw()
                                }, this);
                            return this
                        }
                    },
                    toBase64Image: function () {
                        return this.chart.canvas.toDataURL.apply(this.chart.canvas, arguments)
                    }
                }), e.Type.extend = function (t) {
                    var i = this,
                        s = function () {
                            return i.apply(this, arguments)
                        };
                    if (s.prototype = o(i.prototype), a(s.prototype, t), s.extend = e.Type.extend, t.name || i
                        .prototype.name) {
                        var n = t.name || i.prototype.name,
                            l = e.defaults[i.prototype.name] ? o(e.defaults[i.prototype.name]) : {};
                        e.defaults[n] = a(l, t.defaults), e.types[n] = s, e.prototype[n] = function (t, i) {
                            var o = h(e.defaults.global, e.defaults[n], i || {});
                            return new s(t, o, this)
                        }
                    } else d("Name not provided for this chart, so it hasn't been registered");
                    return i
                }, e.Element = function (t) {
                    a(this, t), this.initialize.apply(this, arguments), this.save()
                }, a(e.Element.prototype, {
                    initialize: function () {},
                    restore: function (t) {
                        return t ? n(t, function (t) {
                            this[t] = this._saved[t]
                        }, this) : a(this, this._saved), this
                    },
                    save: function () {
                        return this._saved = o(this), delete this._saved._saved, this
                    },
                    update: function (t) {
                        return n(t, function (t, i) {
                            this._saved[i] = this[i], this[i] = t
                        }, this), this
                    },
                    transition: function (t, i) {
                        return n(t, function (t, e) {
                            this[e] = (t - this._saved[e]) * i + this._saved[e]
                        }, this), this
                    },
                    tooltipPosition: function () {
                        return {
                            x: this.x,
                            y: this.y
                        }
                    },
                    hasValue: function () {
                        return f(this.value)
                    }
                }), e.Element.extend = r, e.Point = e.Element.extend({
                    display: !0,
                    inRange: function (t, i) {
                        var e = this.hitDetectionRadius + this.radius;
                        return Math.pow(t - this.x, 2) + Math.pow(i - this.y, 2) < Math.pow(e, 2)
                    },
                    draw: function () {
                        if (this.display) {
                            var t = this.ctx;
                            t.beginPath(), t.arc(this.x, this.y, this.radius, 0, 2 * Math.PI), t
                                .closePath(), t.strokeStyle = this.strokeColor, t.lineWidth = this
                                .strokeWidth,
                                t.fillStyle = this.fillColor, t.fill(), t.stroke()
                        }
                    }
                }), e.Arc = e.Element.extend({
                    inRange: function (t, i) {
                        var e = s.getAngleFromPoint(this, {
                                x: t,
                                y: i
                            }),
                            n = e.angle >= this.startAngle && e.angle <= this.endAngle,
                            o = e.distance >= this.innerRadius && e.distance <= this.outerRadius;
                        return n && o
                    },
                    tooltipPosition: function () {
                        var t = this.startAngle + (this.endAngle - this.startAngle) / 2,
                            i = (this.outerRadius - this.innerRadius) / 2 + this.innerRadius;
                        return {
                            x: this.x + Math.cos(t) * i,
                            y: this.y + Math.sin(t) * i
                        }
                    },
                    draw: function (t) {
                        var i = this.ctx;
                        i.beginPath(), i.arc(this.x, this.y, this.outerRadius, this.startAngle, this
                                .endAngle), i.arc(this.x, this.y, this.innerRadius, this.endAngle, this
                                .startAngle, !0), i.closePath(), i.strokeStyle = this.strokeColor, i
                            .lineWidth = this.strokeWidth, i.fillStyle = this.fillColor, i.fill(), i
                            .lineJoin = "bevel", this.showStroke && i.stroke()
                    }
                }), e.Rectangle = e.Element.extend({
                    draw: function () {
                        var t = this.ctx,
                            i = this.width / 2,
                            e = this.x - i,
                            s = this.x + i,
                            n = this.base - (this.base - this.y),
                            o = this.strokeWidth / 2;
                        this.showStroke && (e += o, s -= o, n += o), t.beginPath(), t.fillStyle = this
                            .fillColor, t.strokeStyle = this.strokeColor, t.lineWidth = this.strokeWidth, t
                            .moveTo(e, this.base), t.lineTo(e, n), t.lineTo(s, n), t.lineTo(s, this.base), t
                            .fill(), this.showStroke && t.stroke()
                    },
                    height: function () {
                        return this.base - this.y
                    },
                    inRange: function (t, i) {
                        return t >= this.x - this.width / 2 && t <= this.x + this.width / 2 && i >= this
                            .y && i <= this.base
                    }
                }), e.Tooltip = e.Element.extend({
                    draw: function () {
                        var t = this.chart.ctx;
                        t.font = W(this.fontSize, this.fontStyle, this.fontFamily), this.xAlign = "center",
                            this.yAlign = "above";
                        var i = this.caretPadding = 2,
                            e = t.measureText(this.text).width + 2 * this.xPadding,
                            s = this.fontSize + 2 * this.yPadding,
                            n = s + this.caretHeight + i;
                        this.x + e / 2 > this.chart.width ? this.xAlign = "left" : this.x - e / 2 < 0 && (
                            this.xAlign = "right"), this.y - n < 0 && (this.yAlign = "below");
                        var o = this.x - e / 2,
                            a = this.y - n;
                        if (t.fillStyle = this.fillColor, this.custom) this.custom(this);
                        else {
                            switch (this.yAlign) {
                                case "above":
                                    t.beginPath(), t.moveTo(this.x, this.y - i), t.lineTo(this.x + this
                                            .caretHeight, this.y - (i + this.caretHeight)), t.lineTo(this
                                            .x - this.caretHeight, this.y - (i + this.caretHeight)), t
                                        .closePath(), t.fill();
                                    break;
                                case "below":
                                    a = this.y + i + this.caretHeight, t.beginPath(), t.moveTo(this.x, this
                                        .y + i), t.lineTo(this.x + this.caretHeight, this.y + i + this
                                        .caretHeight), t.lineTo(this.x - this.caretHeight, this.y + i +
                                        this.caretHeight), t.closePath(), t.fill()
                            }
                            switch (this.xAlign) {
                                case "left":
                                    o = this.x - e + (this.cornerRadius + this.caretHeight);
                                    break;
                                case "right":
                                    o = this.x - (this.cornerRadius + this.caretHeight)
                            }
                            B(t, o, a, e, s, this.cornerRadius), t.fill(), t.fillStyle = this.textColor, t
                                .textAlign = "center", t.textBaseline = "middle", t.fillText(this.text, o +
                                    e / 2, a + s / 2)
                        }
                    }
                }), e.MultiTooltip = e.Element.extend({
                    initialize: function () {
                        this.font = W(this.fontSize, this.fontStyle, this.fontFamily), this.titleFont = W(
                                this.titleFontSize, this.titleFontStyle, this.titleFontFamily), this
                            .height = this.labels.length * this.fontSize + (this.labels.length - 1) * (this
                                .fontSize / 2) + 2 * this.yPadding + 1.5 * this.titleFontSize, this.ctx
                            .font = this.titleFont;
                        var t = this.ctx.measureText(this.title).width,
                            i = z(this.ctx, this.font, this.labels) + this.fontSize + 3,
                            e = g([i, t]);
                        this.width = e + 2 * this.xPadding;
                        var s = this.height / 2;
                        this.y - s < 0 ? this.y = s : this.y + s > this.chart.height && (this.y = this.chart
                                .height - s), this.x > this.chart.width / 2 ? this.x -= this.xOffset + this
                            .width : this.x += this.xOffset
                    },
                    getLineHeight: function (t) {
                        var i = this.y - this.height / 2 + this.yPadding,
                            e = t - 1;
                        return 0 === t ? i + this.titleFontSize / 2 : i + (1.5 * this.fontSize * e + this
                            .fontSize / 2) + 1.5 * this.titleFontSize
                    },
                    draw: function () {
                        if (this.custom) this.custom(this);
                        else {
                            B(this.ctx, this.x, this.y - this.height / 2, this.width, this.height, this
                                .cornerRadius);
                            var t = this.ctx;
                            t.fillStyle = this.fillColor, t.fill(), t.closePath(), t.textAlign = "left", t
                                .textBaseline = "middle", t.fillStyle = this.titleTextColor, t.font = this
                                .titleFont, t.fillText(this.title, this.x + this.xPadding, this
                                    .getLineHeight(0)), t.font = this.font, s.each(this.labels, function (i,
                                    e) {
                                    t.fillStyle = this.textColor, t.fillText(i, this.x + this.xPadding +
                                            this.fontSize + 3, this.getLineHeight(e + 1)), t.fillStyle =
                                        this.legendColorBackground, t.fillRect(this.x + this.xPadding,
                                            this.getLineHeight(e + 1) - this.fontSize / 2, this
                                            .fontSize, this.fontSize), t.fillStyle = this.legendColors[
                                            e].fill, t.fillRect(this.x + this.xPadding, this
                                            .getLineHeight(e + 1) - this.fontSize / 2, this.fontSize,
                                            this.fontSize)
                                }, this)
                        }
                    }
                }), e.Scale = e.Element.extend({
                    initialize: function () {
                        this.fit()
                    },
                    buildYLabels: function () {
                        this.yLabels = [];
                        for (var t = v(this.stepValue), i = 0; i <= this.steps; i++) this.yLabels.push(C(
                            this.templateString, {
                                value: (this.min + i * this.stepValue).toFixed(t)
                            }));
                        this.yLabelWidth = this.display && this.showLabels ? z(this.ctx, this.font, this
                            .yLabels) : 0
                    },
                    addXLabel: function (t) {
                        this.xLabels.push(t), this.valuesCount++, this.fit()
                    },
                    removeXLabel: function () {
                        this.xLabels.shift(), this.valuesCount--, this.fit()
                    },
                    fit: function () {
                        this.startPoint = this.display ? this.fontSize : 0, this.endPoint = this.display ?
                            this.height - 1.5 * this.fontSize - 5 : this.height, this.startPoint += this
                            .padding, this.endPoint -= this.padding;
                        var t, i = this.endPoint - this.startPoint;
                        for (this.calculateYRange(i), this.buildYLabels(), this
                            .calculateXLabelRotation(); i > this.endPoint - this.startPoint;) i = this
                            .endPoint - this.startPoint, t = this.yLabelWidth, this.calculateYRange(i), this
                            .buildYLabels(), t < this.yLabelWidth && this.calculateXLabelRotation()
                    },
                    calculateXLabelRotation: function () {
                        this.ctx.font = this.font;
                        var t, i, e = this.ctx.measureText(this.xLabels[0]).width,
                            s = this.ctx.measureText(this.xLabels[this.xLabels.length - 1]).width;
                        if (this.xScalePaddingRight = s / 2 + 3, this.xScalePaddingLeft = e / 2 > this
                            .yLabelWidth + 10 ? e / 2 : this.yLabelWidth + 10, this.xLabelRotation = 0, this
                            .display) {
                            var n, o = z(this.ctx, this.font, this.xLabels);
                            this.xLabelWidth = o;
                            for (var a = Math.floor(this.calculateX(1) - this.calculateX(0)) - 6; this
                                .xLabelWidth > a && 0 === this.xLabelRotation || this.xLabelWidth > a &&
                                this.xLabelRotation <= 90 && this.xLabelRotation > 0;) n = Math.cos(S(this
                                    .xLabelRotation)), t = n * e, i = n * s, t + this.fontSize / 2 > this
                                .yLabelWidth + 8 && (this.xScalePaddingLeft = t + this.fontSize / 2), this
                                .xScalePaddingRight = this.fontSize / 2, this.xLabelRotation++, this
                                .xLabelWidth = n * o;
                            this.xLabelRotation > 0 && (this.endPoint -= Math.sin(S(this.xLabelRotation)) *
                                o + 3)
                        } else this.xLabelWidth = 0, this.xScalePaddingRight = this.padding, this
                            .xScalePaddingLeft = this.padding
                    },
                    calculateYRange: c,
                    drawingArea: function () {
                        return this.startPoint - this.endPoint
                    },
                    calculateY: function (t) {
                        var i = this.drawingArea() / (this.min - this.max);
                        return this.endPoint - i * (t - this.min)
                    },
                    calculateX: function (t) {
                        var i = (this.xLabelRotation > 0, this.width - (this.xScalePaddingLeft + this
                                .xScalePaddingRight)),
                            e = i / Math.max(this.valuesCount - (this.offsetGridLines ? 0 : 1), 1),
                            s = e * t + this.xScalePaddingLeft;
                        return this.offsetGridLines && (s += e / 2), Math.round(s)
                    },
                    update: function (t) {
                        s.extend(this, t), this.fit()
                    },
                    draw: function () {
                        var t = this.ctx,
                            i = (this.endPoint - this.startPoint) / this.steps,
                            e = Math.round(this.xScalePaddingLeft);
                        this.display && (t.fillStyle = this.textColor, t.font = this.font, n(this.yLabels,
                            function (n, o) {
                                var a = this.endPoint - i * o,
                                    h = Math.round(a),
                                    l = this.showHorizontalLines;
                                t.textAlign = "right", t.textBaseline = "middle", this.showLabels &&
                                    t.fillText(n, e - 10, a), 0 !== o || l || (l = !0), l && t
                                    .beginPath(), o > 0 ? (t.lineWidth = this.gridLineWidth, t
                                        .strokeStyle = this.gridLineColor) : (t.lineWidth = this
                                        .lineWidth, t.strokeStyle = this.lineColor), h += s
                                    .aliasPixel(t.lineWidth), l && (t.moveTo(e, h), t.lineTo(this
                                        .width, h), t.stroke(), t.closePath()), t.lineWidth = this
                                    .lineWidth, t.strokeStyle = this.lineColor, t.beginPath(), t
                                    .moveTo(e - 5, h), t.lineTo(e, h), t.stroke(), t.closePath()
                            }, this), n(this.xLabels, function (i, e) {
                            var s = this.calculateX(e) + x(this.lineWidth),
                                n = this.calculateX(e - (this.offsetGridLines ? .5 : 0)) + x(
                                    this.lineWidth),
                                o = this.xLabelRotation > 0,
                                a = this.showVerticalLines;
                            0 !== e || a || (a = !0), a && t.beginPath(), e > 0 ? (t.lineWidth =
                                    this.gridLineWidth, t.strokeStyle = this.gridLineColor) : (t
                                    .lineWidth = this.lineWidth, t.strokeStyle = this.lineColor
                                ), a && (t.moveTo(n, this.endPoint), t.lineTo(n, this
                                    .startPoint - 3), t.stroke(), t.closePath()), t.lineWidth =
                                this.lineWidth, t.strokeStyle = this.lineColor, t.beginPath(), t
                                .moveTo(n, this.endPoint), t.lineTo(n, this.endPoint + 5), t
                                .stroke(), t.closePath(), t.save(), t.translate(s, o ? this
                                    .endPoint + 12 : this.endPoint + 8), t.rotate(-1 * S(this
                                    .xLabelRotation)), t.font = this.font, t.textAlign = o ?
                                "right" : "center", t.textBaseline = o ? "middle" : "top", t
                                .fillText(i, 0, 0), t.restore()
                        }, this))
                    }
                }), e.RadialScale = e.Element.extend({
                    initialize: function () {
                        this.size = m([this.height, this.width]), this.drawingArea = this.display ? this
                            .size / 2 - (this.fontSize / 2 + this.backdropPaddingY) : this.size / 2
                    },
                    calculateCenterOffset: function (t) {
                        var i = this.drawingArea / (this.max - this.min);
                        return (t - this.min) * i
                    },
                    update: function () {
                        this.lineArc ? this.drawingArea = this.display ? this.size / 2 - (this.fontSize /
                                2 + this.backdropPaddingY) : this.size / 2 : this.setScaleSize(), this
                            .buildYLabels()
                    },
                    buildYLabels: function () {
                        this.yLabels = [];
                        for (var t = v(this.stepValue), i = 0; i <= this.steps; i++) this.yLabels.push(C(
                            this.templateString, {
                                value: (this.min + i * this.stepValue).toFixed(t)
                            }))
                    },
                    getCircumference: function () {
                        return 2 * Math.PI / this.valuesCount
                    },
                    setScaleSize: function () {
                        var t, i, e, s, n, o, a, h, l, r, c, u, d = m([this.height / 2 - this
                                .pointLabelFontSize - 5, this.width / 2
                            ]),
                            p = this.width,
                            g = 0;
                        for (this.ctx.font = W(this.pointLabelFontSize, this.pointLabelFontStyle, this
                                .pointLabelFontFamily), i = 0; i < this.valuesCount; i++) t = this
                            .getPointPosition(i, d), e = this.ctx.measureText(C(this.templateString, {
                                value: this.labels[i]
                            })).width + 5, 0 === i || i === this.valuesCount / 2 ? (s = e / 2, t.x + s >
                                p && (p = t.x + s, n = i), t.x - s < g && (g = t.x - s, a = i)) : i < this
                            .valuesCount / 2 ? t.x + e > p && (p = t.x + e, n = i) : i > this.valuesCount /
                            2 && t.x - e < g && (g = t.x - e, a = i);
                        l = g, r = Math.ceil(p - this.width), o = this.getIndexAngle(n), h = this
                            .getIndexAngle(a), c = r / Math.sin(o + Math.PI / 2), u = l / Math.sin(h + Math
                                .PI / 2), c = f(c) ? c : 0, u = f(u) ? u : 0, this.drawingArea = d - (u +
                                c) / 2, this.setCenterPoint(u, c)
                    },
                    setCenterPoint: function (t, i) {
                        var e = this.width - i - this.drawingArea,
                            s = t + this.drawingArea;
                        this.xCenter = (s + e) / 2, this.yCenter = this.height / 2
                    },
                    getIndexAngle: function (t) {
                        var i = 2 * Math.PI / this.valuesCount;
                        return t * i - Math.PI / 2
                    },
                    getPointPosition: function (t, i) {
                        var e = this.getIndexAngle(t);
                        return {
                            x: Math.cos(e) * i + this.xCenter,
                            y: Math.sin(e) * i + this.yCenter
                        }
                    },
                    draw: function () {
                        if (this.display) {
                            var t = this.ctx;
                            if (n(this.yLabels, function (i, e) {
                                    if (e > 0) {
                                        var s, n = e * (this.drawingArea / this.steps),
                                            o = this.yCenter - n;
                                        if (this.lineWidth > 0)
                                            if (t.strokeStyle = this.lineColor, t.lineWidth = this
                                                .lineWidth, this.lineArc) t.beginPath(), t.arc(this
                                                    .xCenter, this.yCenter, n, 0, 2 * Math.PI), t
                                                .closePath(), t.stroke();
                                            else {
                                                t.beginPath();
                                                for (var a = 0; a < this.valuesCount; a++) s = this
                                                    .getPointPosition(a, this.calculateCenterOffset(this
                                                        .min + e * this.stepValue)), 0 === a ? t.moveTo(
                                                        s.x, s.y) : t.lineTo(s.x, s.y);
                                                t.closePath(), t.stroke()
                                            } if (this.showLabels) {
                                            if (t.font = W(this.fontSize, this.fontStyle, this
                                                    .fontFamily), this.showLabelBackdrop) {
                                                var h = t.measureText(i).width;
                                                t.fillStyle = this.backdropColor, t.fillRect(this
                                                    .xCenter - h / 2 - this.backdropPaddingX, o -
                                                    this.fontSize / 2 - this.backdropPaddingY, h +
                                                    2 * this.backdropPaddingX, this.fontSize + 2 *
                                                    this.backdropPaddingY)
                                            }
                                            t.textAlign = "center", t.textBaseline = "middle", t
                                                .fillStyle = this.fontColor, t.fillText(i, this.xCenter,
                                                    o)
                                        }
                                    }
                                }, this), !this.lineArc) {
                                t.lineWidth = this.angleLineWidth, t.strokeStyle = this.angleLineColor;
                                for (var i = this.valuesCount - 1; i >= 0; i--) {
                                    if (this.angleLineWidth > 0) {
                                        var e = this.getPointPosition(i, this.calculateCenterOffset(this
                                            .max));
                                        t.beginPath(), t.moveTo(this.xCenter, this.yCenter), t.lineTo(e.x, e
                                            .y), t.stroke(), t.closePath()
                                    }
                                    var s = this.getPointPosition(i, this.calculateCenterOffset(this.max) +
                                        5);
                                    t.font = W(this.pointLabelFontSize, this.pointLabelFontStyle, this
                                        .pointLabelFontFamily), t.fillStyle = this.pointLabelFontColor;
                                    var o = this.labels.length,
                                        a = this.labels.length / 2,
                                        h = a / 2,
                                        l = h > i || i > o - h,
                                        r = i === h || i === o - h;
                                    t.textAlign = 0 === i ? "center" : i === a ? "center" : a > i ? "left" :
                                        "right", t.textBaseline = r ? "middle" : l ? "bottom" : "top", t
                                        .fillText(this.labels[i], s.x, s.y)
                                }
                            }
                        }
                    }
                }), s.addEvent(window, "resize", function () {
                    var t;
                    return function () {
                        clearTimeout(t), t = setTimeout(function () {
                            n(e.instances, function (t) {
                                t.options.responsive && t.resize(t.render, !0)
                            })
                        }, 50)
                    }
                }()), p ? define(function () {
                    return e
                }) : "object" == typeof module && module.exports && (module.exports = e), t.Chart = e, e
                .noConflict = function () {
                    return t.Chart = i, e
                }
        }).call(this),
            function () {
                "use strict";
                var t = this,
                    i = t.Chart,
                    e = i.helpers,
                    s = {
                        scaleBeginAtZero: !0,
                        scaleShowGridLines: !0,
                        scaleGridLineColor: "rgba(0,0,0,.05)",
                        scaleGridLineWidth: 1,
                        scaleShowHorizontalLines: !0,
                        scaleShowVerticalLines: !0,
                        barShowStroke: !0,
                        barStrokeWidth: 2,
                        barValueSpacing: 5,
                        barDatasetSpacing: 1,
                        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>'
                    };
                i.Type.extend({
                    name: "Bar",
                    defaults: s,
                    initialize: function (t) {
                        var s = this.options;
                        this.ScaleClass = i.Scale.extend({
                                offsetGridLines: !0,
                                calculateBarX: function (t, i, e) {
                                    var n = this.calculateBaseWidth(),
                                        o = this.calculateX(e) - n / 2,
                                        a = this.calculateBarWidth(t);
                                    return o + a * i + i * s.barDatasetSpacing + a / 2
                                },
                                calculateBaseWidth: function () {
                                    return this.calculateX(1) - this.calculateX(0) - 2 * s
                                        .barValueSpacing
                                },
                                calculateBarWidth: function (t) {
                                    var i = this.calculateBaseWidth() - (t - 1) * s
                                        .barDatasetSpacing;
                                    return i / t
                                }
                            }), this.datasets = [], this.options.showTooltips && e.bindEvents(this, this
                                .options.tooltipEvents,
                                function (t) {
                                    var i = "mouseout" !== t.type ? this.getBarsAtEvent(t) : [];
                                    this.eachBars(function (t) {
                                        t.restore(["fillColor", "strokeColor"])
                                    }), e.each(i, function (t) {
                                        t.fillColor = t.highlightFill, t.strokeColor = t
                                            .highlightStroke
                                    }), this.showTooltip(i)
                                }), this.BarClass = i.Rectangle.extend({
                                strokeWidth: this.options.barStrokeWidth,
                                showStroke: this.options.barShowStroke,
                                ctx: this.chart.ctx
                            }), e.each(t.datasets, function (i) {
                                var s = {
                                    label: i.label || null,
                                    fillColor: i.fillColor,
                                    strokeColor: i.strokeColor,
                                    bars: []
                                };
                                this.datasets.push(s), e.each(i.data, function (e, n) {
                                    s.bars.push(new this.BarClass({
                                        value: e,
                                        label: t.labels[n],
                                        datasetLabel: i.label,
                                        strokeColor: i.strokeColor,
                                        fillColor: i.fillColor,
                                        highlightFill: i.highlightFill || i
                                            .fillColor,
                                        highlightStroke: i.highlightStroke || i
                                            .strokeColor
                                    }))
                                }, this)
                            }, this), this.buildScale(t.labels), this.BarClass.prototype.base = this.scale
                            .endPoint, this.eachBars(function (t, i, s) {
                                e.extend(t, {
                                    width: this.scale.calculateBarWidth(this.datasets.length),
                                    x: this.scale.calculateBarX(this.datasets.length, s, i),
                                    y: this.scale.endPoint
                                }), t.save()
                            }, this), this.render()
                    },
                    update: function () {
                        this.scale.update(), e.each(this.activeElements, function (t) {
                            t.restore(["fillColor", "strokeColor"])
                        }), this.eachBars(function (t) {
                            t.save()
                        }), this.render()
                    },
                    eachBars: function (t) {
                        e.each(this.datasets, function (i, s) {
                            e.each(i.bars, t, this, s)
                        }, this)
                    },
                    getBarsAtEvent: function (t) {
                        for (var i, s = [], n = e.getRelativePosition(t), o = function (t) {
                                s.push(t.bars[i])
                            }, a = 0; a < this.datasets.length; a++)
                            for (i = 0; i < this.datasets[a].bars.length; i++)
                                if (this.datasets[a].bars[i].inRange(n.x, n.y)) return e.each(this.datasets,
                                    o), s;
                        return s
                    },
                    buildScale: function (t) {
                        var i = this,
                            s = function () {
                                var t = [];
                                return i.eachBars(function (i) {
                                    t.push(i.value)
                                }), t
                            },
                            n = {
                                templateString: this.options.scaleLabel,
                                height: this.chart.height,
                                width: this.chart.width,
                                ctx: this.chart.ctx,
                                textColor: this.options.scaleFontColor,
                                fontSize: this.options.scaleFontSize,
                                fontStyle: this.options.scaleFontStyle,
                                fontFamily: this.options.scaleFontFamily,
                                valuesCount: t.length,
                                beginAtZero: this.options.scaleBeginAtZero,
                                integersOnly: this.options.scaleIntegersOnly,
                                calculateYRange: function (t) {
                                    var i = e.calculateScaleRange(s(), t, this.fontSize, this
                                        .beginAtZero, this.integersOnly);
                                    e.extend(this, i)
                                },
                                xLabels: t,
                                font: e.fontString(this.options.scaleFontSize, this.options.scaleFontStyle,
                                    this.options.scaleFontFamily),
                                lineWidth: this.options.scaleLineWidth,
                                lineColor: this.options.scaleLineColor,
                                showHorizontalLines: this.options.scaleShowHorizontalLines,
                                showVerticalLines: this.options.scaleShowVerticalLines,
                                gridLineWidth: this.options.scaleShowGridLines ? this.options
                                    .scaleGridLineWidth : 0,
                                gridLineColor: this.options.scaleShowGridLines ? this.options
                                    .scaleGridLineColor : "rgba(0,0,0,0)",
                                padding: this.options.showScale ? 0 : this.options.barShowStroke ? this
                                    .options.barStrokeWidth : 0,
                                showLabels: this.options.scaleShowLabels,
                                display: this.options.showScale
                            };
                        this.options.scaleOverride && e.extend(n, {
                            calculateYRange: e.noop,
                            steps: this.options.scaleSteps,
                            stepValue: this.options.scaleStepWidth,
                            min: this.options.scaleStartValue,
                            max: this.options.scaleStartValue + this.options.scaleSteps * this
                                .options.scaleStepWidth
                        }), this.scale = new this.ScaleClass(n)
                    },
                    addData: function (t, i) {
                        e.each(t, function (t, e) {
                            this.datasets[e].bars.push(new this.BarClass({
                                value: t,
                                label: i,
                                x: this.scale.calculateBarX(this.datasets.length, e,
                                    this.scale.valuesCount + 1),
                                y: this.scale.endPoint,
                                width: this.scale.calculateBarWidth(this.datasets
                                    .length),
                                base: this.scale.endPoint,
                                strokeColor: this.datasets[e].strokeColor,
                                fillColor: this.datasets[e].fillColor
                            }))
                        }, this), this.scale.addXLabel(i), this.update()
                    },
                    removeData: function () {
                        this.scale.removeXLabel(), e.each(this.datasets, function (t) {
                            t.bars.shift()
                        }, this), this.update()
                    },
                    reflow: function () {
                        e.extend(this.BarClass.prototype, {
                            y: this.scale.endPoint,
                            base: this.scale.endPoint
                        });
                        var t = e.extend({
                            height: this.chart.height,
                            width: this.chart.width
                        });
                        this.scale.update(t)
                    },
                    draw: function (t) {
                        var i = t || 1;
                        this.clear();
                        this.chart.ctx;
                        this.scale.draw(i), e.each(this.datasets, function (t, s) {
                            e.each(t.bars, function (t, e) {
                                t.hasValue() && (t.base = this.scale.endPoint, t
                                    .transition({
                                        x: this.scale.calculateBarX(this.datasets
                                            .length, s, e),
                                        y: this.scale.calculateY(t.value),
                                        width: this.scale.calculateBarWidth(this
                                            .datasets.length)
                                    }, i).draw())
                            }, this)
                        }, this)
                    }
                })
            }.call(this),
            function () {
                "use strict";
                var t = this,
                    i = t.Chart,
                    e = i.helpers,
                    s = {
                        segmentShowStroke: !0,
                        segmentStrokeColor: "#fff",
                        segmentStrokeWidth: 2,
                        percentageInnerCutout: 50,
                        animationSteps: 100,
                        animationEasing: "easeOutBounce",
                        animateRotate: !0,
                        animateScale: !1,
                        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
                    };
                i.Type.extend({
                    name: "Doughnut",
                    defaults: s,
                    initialize: function (t) {
                        this.segments = [], this.outerRadius = (e.min([this.chart.width, this.chart
                                .height
                            ]) - this.options.segmentStrokeWidth / 2) / 2, this.SegmentArc = i
                            .Arc.extend({
                                ctx: this.chart.ctx,
                                x: this.chart.width / 2,
                                y: this.chart.height / 2
                            }), this.options.showTooltips && e.bindEvents(this, this.options.tooltipEvents,
                                function (t) {
                                    var i = "mouseout" !== t.type ? this.getSegmentsAtEvent(t) : [];
                                    e.each(this.segments, function (t) {
                                        t.restore(["fillColor"])
                                    }), e.each(i, function (t) {
                                        t.fillColor = t.highlightColor
                                    }), this.showTooltip(i)
                                }), this.calculateTotal(t), e.each(t, function (t, i) {
                                this.addData(t, i, !0)
                            }, this), this.render()
                    },
                    getSegmentsAtEvent: function (t) {
                        var i = [],
                            s = e.getRelativePosition(t);
                        return e.each(this.segments, function (t) {
                            t.inRange(s.x, s.y) && i.push(t)
                        }, this), i
                    },
                    addData: function (t, i, e) {
                        var s = i || this.segments.length;
                        this.segments.splice(s, 0, new this.SegmentArc({
                            value: t.value,
                            outerRadius: this.options.animateScale ? 0 : this.outerRadius,
                            innerRadius: this.options.animateScale ? 0 : this.outerRadius /
                                100 * this.options.percentageInnerCutout,
                            fillColor: t.color,
                            highlightColor: t.highlight || t.color,
                            showStroke: this.options.segmentShowStroke,
                            strokeWidth: this.options.segmentStrokeWidth,
                            strokeColor: this.options.segmentStrokeColor,
                            startAngle: 1.5 * Math.PI,
                            circumference: this.options.animateRotate ? 0 : this
                                .calculateCircumference(t.value),
                            label: t.label
                        })), e || (this.reflow(), this.update())
                    },
                    calculateCircumference: function (t) {
                        return 2 * Math.PI * (Math.abs(t) / this.total)
                    },
                    calculateTotal: function (t) {
                        this.total = 0, e.each(t, function (t) {
                            this.total += Math.abs(t.value)
                        }, this)
                    },
                    update: function () {
                        this.calculateTotal(this.segments), e.each(this.activeElements, function (t) {
                            t.restore(["fillColor"])
                        }), e.each(this.segments, function (t) {
                            t.save()
                        }), this.render()
                    },
                    removeData: function (t) {
                        var i = e.isNumber(t) ? t : this.segments.length - 1;
                        this.segments.splice(i, 1), this.reflow(), this.update()
                    },
                    reflow: function () {
                        e.extend(this.SegmentArc.prototype, {
                            x: this.chart.width / 2,
                            y: this.chart.height / 2
                        }), this.outerRadius = (e.min([this.chart.width, this.chart.height]) - this
                            .options.segmentStrokeWidth / 2) / 2, e.each(this.segments, function (t) {
                            t.update({
                                outerRadius: this.outerRadius,
                                innerRadius: this.outerRadius / 100 * this.options
                                    .percentageInnerCutout
                            })
                        }, this)
                    },
                    draw: function (t) {
                        var i = t ? t : 1;
                        this.clear(), e.each(this.segments, function (t, e) {
                            t.transition({
                                    circumference: this.calculateCircumference(t.value),
                                    outerRadius: this.outerRadius,
                                    innerRadius: this.outerRadius / 100 * this.options
                                        .percentageInnerCutout
                                }, i), t.endAngle = t.startAngle + t.circumference, t.draw(), 0 ===
                                e && (t.startAngle = 1.5 * Math.PI), e < this.segments.length - 1 &&
                                (this.segments[e + 1].startAngle = t.endAngle)
                        }, this)
                    }
                }), i.types.Doughnut.extend({
                    name: "Pie",
                    defaults: e.merge(s, {
                        percentageInnerCutout: 0
                    })
                })
            }.call(this),
            function () {
                "use strict";
                var t = this,
                    i = t.Chart,
                    e = i.helpers,
                    s = {
                        scaleShowGridLines: !0,
                        scaleGridLineColor: "rgba(0,0,0,.05)",
                        scaleGridLineWidth: 1,
                        scaleShowHorizontalLines: !0,
                        scaleShowVerticalLines: !0,
                        bezierCurve: !0,
                        bezierCurveTension: .4,
                        pointDot: !0,
                        pointDotRadius: 4,
                        pointDotStrokeWidth: 1,
                        pointHitDetectionRadius: 20,
                        datasetStroke: !0,
                        datasetStrokeWidth: 2,
                        datasetFill: !0,
                        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].strokeColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>'
                    };
                i.Type.extend({
                    name: "Line",
                    defaults: s,
                    initialize: function (t) {
                        this.PointClass = i.Point.extend({
                            strokeWidth: this.options.pointDotStrokeWidth,
                            radius: this.options.pointDotRadius,
                            display: this.options.pointDot,
                            hitDetectionRadius: this.options.pointHitDetectionRadius,
                            ctx: this.chart.ctx,
                            inRange: function (t) {
                                return Math.pow(t - this.x, 2) < Math.pow(this.radius + this
                                    .hitDetectionRadius, 2)
                            }
                        }), this.datasets = [], this.options.showTooltips && e.bindEvents(this, this
                            .options.tooltipEvents,
                            function (t) {
                                var i = "mouseout" !== t.type ? this.getPointsAtEvent(t) : [];
                                this.eachPoints(function (t) {
                                    t.restore(["fillColor", "strokeColor"])
                                }), e.each(i, function (t) {
                                    t.fillColor = t.highlightFill, t.strokeColor = t
                                        .highlightStroke
                                }), this.showTooltip(i)
                            }), e.each(t.datasets, function (i) {
                            var s = {
                                label: i.label || null,
                                fillColor: i.fillColor,
                                strokeColor: i.strokeColor,
                                pointColor: i.pointColor,
                                pointStrokeColor: i.pointStrokeColor,
                                points: []
                            };
                            this.datasets.push(s), e.each(i.data, function (e, n) {
                                s.points.push(new this.PointClass({
                                    value: e,
                                    label: t.labels[n],
                                    datasetLabel: i.label,
                                    strokeColor: i.pointStrokeColor,
                                    fillColor: i.pointColor,
                                    highlightFill: i.pointHighlightFill || i
                                        .pointColor,
                                    highlightStroke: i.pointHighlightStroke || i
                                        .pointStrokeColor
                                }))
                            }, this), this.buildScale(t.labels), this.eachPoints(function (t,
                                i) {
                                e.extend(t, {
                                    x: this.scale.calculateX(i),
                                    y: this.scale.endPoint
                                }), t.save()
                            }, this)
                        }, this), this.render()
                    },
                    update: function () {
                        this.scale.update(), e.each(this.activeElements, function (t) {
                            t.restore(["fillColor", "strokeColor"])
                        }), this.eachPoints(function (t) {
                            t.save()
                        }), this.render()
                    },
                    eachPoints: function (t) {
                        e.each(this.datasets, function (i) {
                            e.each(i.points, t, this)
                        }, this)
                    },
                    getPointsAtEvent: function (t) {
                        var i = [],
                            s = e.getRelativePosition(t);
                        return e.each(this.datasets, function (t) {
                            e.each(t.points, function (t) {
                                t.inRange(s.x, s.y) && i.push(t)
                            })
                        }, this), i
                    },
                    buildScale: function (t) {
                        var s = this,
                            n = function () {
                                var t = [];
                                return s.eachPoints(function (i) {
                                    t.push(i.value)
                                }), t
                            },
                            o = {
                                templateString: this.options.scaleLabel,
                                height: this.chart.height,
                                width: this.chart.width,
                                ctx: this.chart.ctx,
                                textColor: this.options.scaleFontColor,
                                fontSize: this.options.scaleFontSize,
                                fontStyle: this.options.scaleFontStyle,
                                fontFamily: this.options.scaleFontFamily,
                                valuesCount: t.length,
                                beginAtZero: this.options.scaleBeginAtZero,
                                integersOnly: this.options.scaleIntegersOnly,
                                calculateYRange: function (t) {
                                    var i = e.calculateScaleRange(n(), t, this.fontSize, this
                                        .beginAtZero, this.integersOnly);
                                    e.extend(this, i)
                                },
                                xLabels: t,
                                font: e.fontString(this.options.scaleFontSize, this.options.scaleFontStyle,
                                    this.options.scaleFontFamily),
                                lineWidth: this.options.scaleLineWidth,
                                lineColor: this.options.scaleLineColor,
                                showHorizontalLines: this.options.scaleShowHorizontalLines,
                                showVerticalLines: this.options.scaleShowVerticalLines,
                                gridLineWidth: this.options.scaleShowGridLines ? this.options
                                    .scaleGridLineWidth : 0,
                                gridLineColor: this.options.scaleShowGridLines ? this.options
                                    .scaleGridLineColor : "rgba(0,0,0,0)",
                                padding: this.options.showScale ? 0 : this.options.pointDotRadius + this
                                    .options.pointDotStrokeWidth,
                                showLabels: this.options.scaleShowLabels,
                                display: this.options.showScale
                            };
                        this.options.scaleOverride && e.extend(o, {
                            calculateYRange: e.noop,
                            steps: this.options.scaleSteps,
                            stepValue: this.options.scaleStepWidth,
                            min: this.options.scaleStartValue,
                            max: this.options.scaleStartValue + this.options.scaleSteps * this
                                .options.scaleStepWidth
                        }), this.scale = new i.Scale(o)
                    },
                    addData: function (t, i) {
                        e.each(t, function (t, e) {
                            this.datasets[e].points.push(new this.PointClass({
                                value: t,
                                label: i,
                                x: this.scale.calculateX(this.scale.valuesCount + 1),
                                y: this.scale.endPoint,
                                strokeColor: this.datasets[e].pointStrokeColor,
                                fillColor: this.datasets[e].pointColor
                            }))
                        }, this), this.scale.addXLabel(i), this.update()
                    },
                    removeData: function () {
                        this.scale.removeXLabel(), e.each(this.datasets, function (t) {
                            t.points.shift()
                        }, this), this.update()
                    },
                    reflow: function () {
                        var t = e.extend({
                            height: this.chart.height,
                            width: this.chart.width
                        });
                        this.scale.update(t)
                    },
                    draw: function (t) {
                        var i = t || 1;
                        this.clear();
                        var s = this.chart.ctx,
                            n = function (t) {
                                return null !== t.value
                            },
                            o = function (t, i, s) {
                                return e.findNextWhere(i, n, s) || t
                            },
                            a = function (t, i, s) {
                                return e.findPreviousWhere(i, n, s) || t
                            };
                        this.scale.draw(i), e.each(this.datasets, function (t) {
                            var h = e.where(t.points, n);
                            e.each(t.points, function (t, e) {
                                    t.hasValue() && t.transition({
                                        y: this.scale.calculateY(t.value),
                                        x: this.scale.calculateX(e)
                                    }, i)
                                }, this), this.options.bezierCurve && e.each(h, function (t, i) {
                                    var s = i > 0 && i < h.length - 1 ? this.options
                                        .bezierCurveTension : 0;
                                    t.controlPoints = e.splineCurve(a(t, h, i), t, o(t, h, i),
                                            s), t.controlPoints.outer.y > this.scale.endPoint ?
                                        t.controlPoints.outer.y = this.scale.endPoint : t
                                        .controlPoints.outer.y < this.scale.startPoint && (t
                                            .controlPoints.outer.y = this.scale.startPoint), t
                                        .controlPoints.inner.y > this.scale.endPoint ? t
                                        .controlPoints.inner.y = this.scale.endPoint : t
                                        .controlPoints.inner.y < this.scale.startPoint && (t
                                            .controlPoints.inner.y = this.scale.startPoint)
                                }, this), s.lineWidth = this.options.datasetStrokeWidth, s
                                .strokeStyle = t.strokeColor, s.beginPath(), e.each(h, function (t,
                                    i) {
                                    if (0 === i) s.moveTo(t.x, t.y);
                                    else if (this.options.bezierCurve) {
                                        var e = a(t, h, i);
                                        s.bezierCurveTo(e.controlPoints.outer.x, e.controlPoints
                                            .outer.y, t.controlPoints.inner.x, t
                                            .controlPoints.inner.y, t.x, t.y)
                                    } else s.lineTo(t.x, t.y)
                                }, this), s.stroke(), this.options.datasetFill && h.length > 0 && (s
                                    .lineTo(h[h.length - 1].x, this.scale.endPoint), s.lineTo(h[0]
                                        .x, this.scale.endPoint), s.fillStyle = t.fillColor, s
                                    .closePath(), s.fill()), e.each(h, function (t) {
                                    t.draw()
                                })
                        }, this)
                    }
                })
            }.call(this),
            function () {
                "use strict";
                var t = this,
                    i = t.Chart,
                    e = i.helpers,
                    s = {
                        scaleShowLabelBackdrop: !0,
                        scaleBackdropColor: "rgba(255,255,255,0.75)",
                        scaleBeginAtZero: !0,
                        scaleBackdropPaddingY: 2,
                        scaleBackdropPaddingX: 2,
                        scaleShowLine: !0,
                        segmentShowStroke: !0,
                        segmentStrokeColor: "#fff",
                        segmentStrokeWidth: 2,
                        animationSteps: 100,
                        animationEasing: "easeOutBounce",
                        animateRotate: !0,
                        animateScale: !1,
                        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
                    };
                i.Type.extend({
                    name: "PolarArea",
                    defaults: s,
                    initialize: function (t) {
                        this.segments = [], this.SegmentArc = i.Arc.extend({
                            showStroke: this.options.segmentShowStroke,
                            strokeWidth: this.options.segmentStrokeWidth,
                            strokeColor: this.options.segmentStrokeColor,
                            ctx: this.chart.ctx,
                            innerRadius: 0,
                            x: this.chart.width / 2,
                            y: this.chart.height / 2
                        }), this.scale = new i.RadialScale({
                            display: this.options.showScale,
                            fontStyle: this.options.scaleFontStyle,
                            fontSize: this.options.scaleFontSize,
                            fontFamily: this.options.scaleFontFamily,
                            fontColor: this.options.scaleFontColor,
                            showLabels: this.options.scaleShowLabels,
                            showLabelBackdrop: this.options.scaleShowLabelBackdrop,
                            backdropColor: this.options.scaleBackdropColor,
                            backdropPaddingY: this.options.scaleBackdropPaddingY,
                            backdropPaddingX: this.options.scaleBackdropPaddingX,
                            lineWidth: this.options.scaleShowLine ? this.options.scaleLineWidth : 0,
                            lineColor: this.options.scaleLineColor,
                            lineArc: !0,
                            width: this.chart.width,
                            height: this.chart.height,
                            xCenter: this.chart.width / 2,
                            yCenter: this.chart.height / 2,
                            ctx: this.chart.ctx,
                            templateString: this.options.scaleLabel,
                            valuesCount: t.length
                        }), this.updateScaleRange(t), this.scale.update(), e.each(t, function (t, i) {
                            this.addData(t, i, !0)
                        }, this), this.options.showTooltips && e.bindEvents(this, this.options
                            .tooltipEvents,
                            function (t) {
                                var i = "mouseout" !== t.type ? this.getSegmentsAtEvent(t) : [];
                                e.each(this.segments, function (t) {
                                    t.restore(["fillColor"])
                                }), e.each(i, function (t) {
                                    t.fillColor = t.highlightColor
                                }), this.showTooltip(i)
                            }), this.render()
                    },
                    getSegmentsAtEvent: function (t) {
                        var i = [],
                            s = e.getRelativePosition(t);
                        return e.each(this.segments, function (t) {
                            t.inRange(s.x, s.y) && i.push(t)
                        }, this), i
                    },
                    addData: function (t, i, e) {
                        var s = i || this.segments.length;
                        this.segments.splice(s, 0, new this.SegmentArc({
                            fillColor: t.color,
                            highlightColor: t.highlight || t.color,
                            label: t.label,
                            value: t.value,
                            outerRadius: this.options.animateScale ? 0 : this.scale
                                .calculateCenterOffset(t.value),
                            circumference: this.options.animateRotate ? 0 : this.scale
                                .getCircumference(),
                            startAngle: 1.5 * Math.PI
                        })), e || (this.reflow(), this.update())
                    },
                    removeData: function (t) {
                        var i = e.isNumber(t) ? t : this.segments.length - 1;
                        this.segments.splice(i, 1), this.reflow(), this.update()
                    },
                    calculateTotal: function (t) {
                        this.total = 0, e.each(t, function (t) {
                            this.total += t.value
                        }, this), this.scale.valuesCount = this.segments.length
                    },
                    updateScaleRange: function (t) {
                        var i = [];
                        e.each(t, function (t) {
                            i.push(t.value)
                        });
                        var s = this.options.scaleOverride ? {
                            steps: this.options.scaleSteps,
                            stepValue: this.options.scaleStepWidth,
                            min: this.options.scaleStartValue,
                            max: this.options.scaleStartValue + this.options.scaleSteps * this.options
                                .scaleStepWidth
                        } : e.calculateScaleRange(i, e.min([this.chart.width, this.chart.height]) / 2,
                            this.options.scaleFontSize, this.options.scaleBeginAtZero, this.options
                            .scaleIntegersOnly);
                        e.extend(this.scale, s, {
                            size: e.min([this.chart.width, this.chart.height]),
                            xCenter: this.chart.width / 2,
                            yCenter: this.chart.height / 2
                        })
                    },
                    update: function () {
                        this.calculateTotal(this.segments), e.each(this.segments, function (t) {
                            t.save()
                        }), this.reflow(), this.render()
                    },
                    reflow: function () {
                        e.extend(this.SegmentArc.prototype, {
                            x: this.chart.width / 2,
                            y: this.chart.height / 2
                        }), this.updateScaleRange(this.segments), this.scale.update(), e.extend(this
                            .scale, {
                                xCenter: this.chart.width / 2,
                                yCenter: this.chart.height / 2
                            }), e.each(this.segments, function (t) {
                            t.update({
                                outerRadius: this.scale.calculateCenterOffset(t.value)
                            })
                        }, this)
                    },
                    draw: function (t) {
                        var i = t || 1;
                        this.clear(), e.each(this.segments, function (t, e) {
                            t.transition({
                                circumference: this.scale.getCircumference(),
                                outerRadius: this.scale.calculateCenterOffset(t.value)
                            }, i), t.endAngle = t.startAngle + t.circumference, 0 === e && (t
                                .startAngle = 1.5 * Math.PI), e < this.segments.length - 1 && (
                                this.segments[e + 1].startAngle = t.endAngle), t.draw()
                        }, this), this.scale.draw()
                    }
                })
            }.call(this),
            function () {
                "use strict";
                var t = this,
                    i = t.Chart,
                    e = i.helpers;
                i.Type.extend({
                    name: "Radar",
                    defaults: {
                        scaleShowLine: !0,
                        angleShowLineOut: !0,
                        scaleShowLabels: !1,
                        scaleBeginAtZero: !0,
                        angleLineColor: "rgba(0,0,0,.1)",
                        angleLineWidth: 1,
                        pointLabelFontFamily: "'Arial'",
                        pointLabelFontStyle: "normal",
                        pointLabelFontSize: 10,
                        pointLabelFontColor: "#666",
                        pointDot: !0,
                        pointDotRadius: 3,
                        pointDotStrokeWidth: 1,
                        pointHitDetectionRadius: 20,
                        datasetStroke: !0,
                        datasetStrokeWidth: 2,
                        datasetFill: !0,
                        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].strokeColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>'
                    },
                    initialize: function (t) {
                        this.PointClass = i.Point.extend({
                                strokeWidth: this.options.pointDotStrokeWidth,
                                radius: this.options.pointDotRadius,
                                display: this.options.pointDot,
                                hitDetectionRadius: this.options.pointHitDetectionRadius,
                                ctx: this.chart.ctx
                            }), this.datasets = [], this.buildScale(t), this.options.showTooltips && e
                            .bindEvents(this, this.options.tooltipEvents, function (t) {
                                var i = "mouseout" !== t.type ? this.getPointsAtEvent(t) : [];
                                this.eachPoints(function (t) {
                                    t.restore(["fillColor", "strokeColor"])
                                }), e.each(i, function (t) {
                                    t.fillColor = t.highlightFill, t.strokeColor = t
                                        .highlightStroke
                                }), this.showTooltip(i)
                            }), e.each(t.datasets, function (i) {
                                var s = {
                                    label: i.label || null,
                                    fillColor: i.fillColor,
                                    strokeColor: i.strokeColor,
                                    pointColor: i.pointColor,
                                    pointStrokeColor: i.pointStrokeColor,
                                    points: []
                                };
                                this.datasets.push(s), e.each(i.data, function (e, n) {
                                    var o;
                                    this.scale.animation || (o = this.scale.getPointPosition(n,
                                            this.scale.calculateCenterOffset(e))), s.points
                                        .push(new this.PointClass({
                                            value: e,
                                            label: t.labels[n],
                                            datasetLabel: i.label,
                                            x: this.options.animation ? this.scale
                                                .xCenter : o.x,
                                            y: this.options.animation ? this.scale
                                                .yCenter : o.y,
                                            strokeColor: i.pointStrokeColor,
                                            fillColor: i.pointColor,
                                            highlightFill: i.pointHighlightFill || i
                                                .pointColor,
                                            highlightStroke: i.pointHighlightStroke || i
                                                .pointStrokeColor
                                        }))
                                }, this)
                            }, this), this.render()
                    },
                    eachPoints: function (t) {
                        e.each(this.datasets, function (i) {
                            e.each(i.points, t, this)
                        }, this)
                    },
                    getPointsAtEvent: function (t) {
                        var i = e.getRelativePosition(t),
                            s = e.getAngleFromPoint({
                                x: this.scale.xCenter,
                                y: this.scale.yCenter
                            }, i),
                            n = 2 * Math.PI / this.scale.valuesCount,
                            o = Math.round((s.angle - 1.5 * Math.PI) / n),
                            a = [];
                        return (o >= this.scale.valuesCount || 0 > o) && (o = 0), s.distance <= this.scale
                            .drawingArea && e.each(this.datasets, function (t) {
                                a.push(t.points[o])
                            }), a
                    },
                    buildScale: function (t) {
                        this.scale = new i.RadialScale({
                                display: this.options.showScale,
                                fontStyle: this.options.scaleFontStyle,
                                fontSize: this.options.scaleFontSize,
                                fontFamily: this.options.scaleFontFamily,
                                fontColor: this.options.scaleFontColor,
                                showLabels: this.options.scaleShowLabels,
                                showLabelBackdrop: this.options.scaleShowLabelBackdrop,
                                backdropColor: this.options.scaleBackdropColor,
                                backdropPaddingY: this.options.scaleBackdropPaddingY,
                                backdropPaddingX: this.options.scaleBackdropPaddingX,
                                lineWidth: this.options.scaleShowLine ? this.options.scaleLineWidth : 0,
                                lineColor: this.options.scaleLineColor,
                                angleLineColor: this.options.angleLineColor,
                                angleLineWidth: this.options.angleShowLineOut ? this.options
                                    .angleLineWidth : 0,
                                pointLabelFontColor: this.options.pointLabelFontColor,
                                pointLabelFontSize: this.options.pointLabelFontSize,
                                pointLabelFontFamily: this.options.pointLabelFontFamily,
                                pointLabelFontStyle: this.options.pointLabelFontStyle,
                                height: this.chart.height,
                                width: this.chart.width,
                                xCenter: this.chart.width / 2,
                                yCenter: this.chart.height / 2,
                                ctx: this.chart.ctx,
                                templateString: this.options.scaleLabel,
                                labels: t.labels,
                                valuesCount: t.datasets[0].data.length
                            }), this.scale.setScaleSize(), this.updateScaleRange(t.datasets), this.scale
                            .buildYLabels()
                    },
                    updateScaleRange: function (t) {
                        var i = function () {
                                var i = [];
                                return e.each(t, function (t) {
                                    t.data ? i = i.concat(t.data) : e.each(t.points, function (t) {
                                        i.push(t.value)
                                    })
                                }), i
                            }(),
                            s = this.options.scaleOverride ? {
                                steps: this.options.scaleSteps,
                                stepValue: this.options.scaleStepWidth,
                                min: this.options.scaleStartValue,
                                max: this.options.scaleStartValue + this.options.scaleSteps * this.options
                                    .scaleStepWidth
                            } : e.calculateScaleRange(i, e.min([this.chart.width, this.chart.height]) / 2,
                                this.options.scaleFontSize, this.options.scaleBeginAtZero, this.options
                                .scaleIntegersOnly);
                        e.extend(this.scale, s)
                    },
                    addData: function (t, i) {
                        this.scale.valuesCount++, e.each(t, function (t, e) {
                            var s = this.scale.getPointPosition(this.scale.valuesCount, this.scale
                                .calculateCenterOffset(t));
                            this.datasets[e].points.push(new this.PointClass({
                                value: t,
                                label: i,
                                x: s.x,
                                y: s.y,
                                strokeColor: this.datasets[e].pointStrokeColor,
                                fillColor: this.datasets[e].pointColor
                            }))
                        }, this), this.scale.labels.push(i), this.reflow(), this.update()
                    },
                    removeData: function () {
                        this.scale.valuesCount--, this.scale.labels.shift(), e.each(this.datasets,
                            function (t) {
                                t.points.shift()
                            }, this), this.reflow(), this.update()
                    },
                    update: function () {
                        this.eachPoints(function (t) {
                            t.save()
                        }), this.reflow(), this.render()
                    },
                    reflow: function () {
                        e.extend(this.scale, {
                                width: this.chart.width,
                                height: this.chart.height,
                                size: e.min([this.chart.width, this.chart.height]),
                                xCenter: this.chart.width / 2,
                                yCenter: this.chart.height / 2
                            }), this.updateScaleRange(this.datasets), this.scale.setScaleSize(), this.scale
                            .buildYLabels()
                    },
                    draw: function (t) {
                        var i = t || 1,
                            s = this.chart.ctx;
                        this.clear(), this.scale.draw(), e.each(this.datasets, function (t) {
                            e.each(t.points, function (t, e) {
                                    t.hasValue() && t.transition(this.scale.getPointPosition(e,
                                        this.scale.calculateCenterOffset(t.value)), i)
                                }, this), s.lineWidth = this.options.datasetStrokeWidth, s
                                .strokeStyle = t.strokeColor, s.beginPath(), e.each(t.points,
                                    function (t, i) {
                                        0 === i ? s.moveTo(t.x, t.y) : s.lineTo(t.x, t.y)
                                    }, this), s.closePath(), s.stroke(), s.fillStyle = t.fillColor,
                                s.fill(), e.each(t.points, function (t) {
                                    t.hasValue() && t.draw()
                                })
                        }, this)
                    }
                })
            }.call(this);

    </script>

    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>
        window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')

    </script>

    <script>
        ;
        (function ($, window, document, Math, undefined) {

            'use strict';

            var chartinator = function (el, options) {

                var o = this;

                var $tableS = $(el);
                var $chartS = $tableS;

                o.fontFamily = $('body').css('font-family').replace(/["']{1}/gi, "") ||
                    'Arial, Helvetica, sans-serif';

                o.optionsInit = {

                    urlJSAPI: 'https://www.google.com/jsapi',

                    googleSheetKey: false,


                    columns: false,


                    colIndexes: false,


                    rows: false,

                    tableSel: false,


                    dataTitle: false,

                    createTable: false,


                    ignoreRow: [],

                    ignoreCol: [],


                    transpose: false,


                    tooltipConcat: false,


                    annotationConcat: false,

                    chartType: 'BarChart',


                    chartId: 'c24_chart_' + Math.random().toString(36).substr(2, 9),

                    chartClass: 'chtr-chart',

                    tableId: 'c24_table_' + Math.random().toString(36).substr(2, 9),

                    tableClass: 'chtr-table',

                    chartAspectRatio: false,


                    chartZoom: 0,


                    chartOffset: false,

                    barChart: {


                        fontSize: false,

                        fontName: o.fontFamily,

                        chartArea: {
                            left: '20%',
                            top: 40,
                            width: '75%',
                            height: '85%'
                        },

                        legend: {
                            position: 'bottom'
                        }
                    },

                    pieChart: {


                        fontSize: false,

                        fontName: o.fontFamily,

                        chartArea: {
                            left: '6%',
                            top: 40,
                            width: '94%',
                            height: '100%'
                        }
                    },

                    columnChart: {

                        fontSize: false,

                        fontName: o.fontFamily,

                        chartArea: {
                            left: '15%',
                            top: 40,
                            width: '85%',
                            height: '70%'
                        },

                        legend: {
                            position: 'bottom'
                        }
                    },

                    lineChart: {


                        fontSize: false,

                        fontName: o.fontFamily,

                        chartArea: {
                            left: '15%',
                            top: 40,
                            width: '80%',
                            height: '70%'
                        },

                        legend: {
                            position: 'bottom'
                        }
                    },

                    areaChart: {


                        fontSize: false,

                        fontName: o.fontFamily,

                        chartArea: {
                            left: '15%',
                            top: 40,
                            width: '80%',
                            height: '70%'
                        },

                        legend: {
                            position: 'bottom'
                        }
                    },

                    calendar: {


                        cellScaleFactor: 0.017,

                        titleTextStyle: {


                            color: '#000',
                            fontWeight: 'bold',
                            fontName: o.fontFamily,


                            fontSize: 'h3'
                        },

                        calendar: {
                            monthLabel: {


                                fontSize: false,

                                fontName: o.fontFamily
                            },
                            dayOfWeekLabel: {


                                fontSize: false,

                                fontName: o.fontFamily
                            }
                        },
                        tooltip: {

                            textStyle: {
                                color: '#000',
                                fontName: o.fontFamily,
                                fontSize: 16
                            }
                        }
                    },

                    table: {

                        formatter: {

                            type: 'none',

                            column: 1
                        },

                        allowHtml: true,

                        cssClassNames: {
                            headerRow: 'headerRow',
                            tableRow: 'tableRow',
                            oddTableRow: 'oddTableRow',
                            selectedTableRow: 'selectedTableRow',
                            hoverTableRow: 'hoverTableRow',
                            headerCell: 'headerCell',
                            tableCell: 'tableCell',
                            rowNumberCell: 'rowNumberCell'
                        }
                    },

                    showTable: 'hide',

                    showTableCSS: {
                        'position': 'static',
                        'top': 0,
                        'width': ''
                    },
                    hideTableCSS: {
                        'position': 'absolute',
                        'top': '-99999px',
                        'width': $tableS.width()
                    },
                    showChartCSS: {},
                    hideChartCSS: {
                        'opacity': 0
                    }

                }; //  o.optionsInit close

                // The Google Chart options object
                o.chartOptions = {};

                // The Google Chart options object clone
                o.cchartOptions = {};

                // Window resize event timer function
                o.timer = false;

                // Chart Id - The id to apply to the chart container element
                o.chartId = o.optionsInit.chartId;

                // Table Id - The id to apply to the table element
                o.tableId = o.optionsInit.tableId;

                // The table has data boolean
                o.tableHasData = false;

                o.tableCaption = false;

                // The Google Sheet data object - Data returned
                o.googleSheetData = false;

                // Data array - the array of collected data to send to Google Charts
                o.dataArray = [];

                // Set chartPackage - Default: corechart - The Google Chart Package to load.
                o.chartPackage = 'corechart';

                // Array of chart types included in the Google Charts corechart package
                o.coreCharts = ['BarChart', 'ColumnChart', 'PieChart', 'AreaChart', 'BubbleChart',
                    'CandlestickChart', 'ComboChart', 'Histogram', 'LineChart', 'ScatterChart',
                    'SteppedAreaChart'
                ];

                // Init chart parent
                o.chartParent = false;

                // Init the window width
                o.windowWidth = false;

                // Init chart parent width
                o.chartParentWidth = false;

                //  Initiate Chart ======================================================================
                o.init = function (el, options) {

                    //  Merge options
                    o.options = $.extend(true, {}, o.optionsInit, options);

                    // Update chartId
                    o.chartId = options.chartId || $chartS.attr('id') || o.options.chartId;

                    // Define table and chart elements --------------------------------------------------

                    // Set table element
                    if (o.options.tableSel) {
                        $tableS = ($(o.options.tableSel + ' td').length) ? $(o.options.tableSel) : $tableS;
                    }

                    // Check table for data
                    o.tableHasData = $tableS.find('td').length;

                    if ($chartS[0] === $tableS[0]) { // table and chart are the same element

                        if (o.tableHasData) { // chart element does not exist

                            // Reset Chart id
                            o.chartId = o.options.chartId;

                            // Insert a new chart element after the table
                            $chartS = $('<div id="' + o.chartId +
                                '" class="' + o.chartId + ' ' + o.options.chartClass +
                                '"></div>').insertAfter($tableS);

                        } else { // table does not exist
                            $tableS = false;
                        }
                    }

                    $chartS
                        .addClass(o.chartId + ' ' + o.options.chartClass)
                        .attr('id', o.chartId);

                    if (o.tableHasData) {

                        o.tableId = options.tableId || $tableS.attr('id') || o.options.tableId;

                        $tableS
                            .addClass(o.tableId + ' ' + o.options.tableClass)
                            .attr('id', o.tableId);

                        o.tableCaption = $tableS.find('caption');

                    } else {

                        o.tableId = o.options.tableId;
                    }

                    o.chartParent = $chartS.parent();

                    if (o.options.googleSheetKey) {

                        o.getGoogleSheet(o.options.googleSheetKey, o.setupChart);
                    } else {
                        o.setupChart();
                    }

                };

                o.getGoogleSheet = function (key, callBack) {

                    $.ajax({
                            type: 'GET',
                            url: 'https://spreadsheets.google.com/spreadsheet/pub?key=' + key +
                                '&output=csv',
                            dataType: 'text'
                        })
                        .done(function (data) {
                            o.googleSheetData = data;
                            callBack();
                        })
                        .fail(function (e) {
                            o.googleSheetData = e;
                            callBack();
                            console.log('Google Sheet failed');
                        });
                };

                o.setupChart = function () {

                    o.dataArray = o.collectData();

                    if (!o.dataArray.length) {

                        o.showTableChart('show', 'remove');
                        console.log('No data found in data array');
                        return;
                    }

                    if (o.coreCharts.indexOf(o.options.chartType) === -1) {

                        o.chartPackage = o.options.chartType.toLowerCase();
                    }


                    if (o.options.chartOptions) {
                        o.chartOptions = o.options.chartOptions;
                    } else if (o.options[o.camelCase(o.options
                            .chartType)]) {
                        o.chartOptions = o.options[o.camelCase(o.options.chartType)];
                    }

                    o.cchartOptions = $.extend(true, {}, o.chartOptions);

                    if (o.options.createTable) {

                        var tableTitle = o.options.dataTitle || o.cchartOptions.title || 'The Chart Data';

                        if (o.tableHasData) {
                            $tableS.replaceWith(o.generateTable(o.dataArray, tableTitle, o.tableId, o
                                .options.tableClass));
                        } else {
                            $tableS = o.generateTable(o.dataArray, tableTitle, o.tableId, o.options
                                .tableClass).insertBefore($chartS);
                        }
                    } else if (o.tableHasData && o.options.dataTitle) {
                        o.tableCaption.text(o.options.dataTitle);
                    }

                    // Load Google Chart --------------------------------------------------

                    // Hide chart and HTML table
                    o.showTableChart('hide', 'hide');

                    try {

                        $.ajax({
                                url: o.options.urlJSAPI,
                                dataType: 'script',
                                cache: true
                            })
                            .done(function () {

                                google.load('visualization', '1', {
                                    packages: [o.chartPackage],
                                    callback: o.drawChart
                                });

                                o.addResize();
                            })
                            .fail(function () {

                                o.showTableChart('show', 'remove');
                            });
                    } catch (e) {

                        o.showTableChart('show', 'remove');
                        console.log(e);
                    }

                };


                o.collectData = function () {

                    var dataArray = [];

                    if (o.googleSheetData && !o.googleSheetData.statusText) {
                        dataArray = o.formatSheet(o.googleSheetData);
                    } else if (o.googleSheetData) {
                        console.log(o.googleSheetData);
                    }


                    if (o.tableHasData) {
                        dataArray = o.getTableData($tableS);
                    }

                    if (o.options.columns) {
                        if (dataArray[0] && dataArray[0][0] && dataArray[0][0]
                            .label) {
                            if (o.options.colIndexes) {
                                for (var i = 0; i < o.options.colIndexes.length; i++) {
                                    dataArray[0].splice(o.options.colIndexes[i], 0, o.options.columns[i]);
                                }
                            } else {
                                dataArray[0] = o.options.columns;
                            }
                        } else {
                            dataArray.unshift(o.options.columns);
                        }
                    }

                    if (o.options.rows && dataArray.length) {
                        if (o.options.colIndexes) {
                            for (var i = 0; i < o.options.rows
                                .length; i++) {
                                for (var j = 0; j < o.options.colIndexes
                                    .length; j++) {

                                    dataArray[i + 1].splice(o.options.colIndexes[j], 0, o.options.rows[i][
                                        j
                                    ]);
                                }
                            }
                        } else {
                            $.merge(dataArray, o.options.rows);
                        }
                    }

                    return dataArray;

                };

                // Draw the chart
                o.drawChart = function () {

                    // Create dataTable -----------------------------------------------------------
                    o.data = new google.visualization.arrayToDataTable(o.dataArray);

                    if (!o.data || !o.data.getNumberOfRows()) { // No data

                        // Show table remove chart
                        o.showTableChart('show', 'remove');

                        console.log('Google Charts data table failed');
                        return;
                    }

                    // Format data ----------------------------------------------------------------
                    if (o.cchartOptions.formatter && o.cchartOptions.formatter.type !== 'none') {
                        var formatter = new google.visualization[o.cchartOptions.formatter.type](o
                            .cchartOptions.formatter);
                        formatter.format(o.data, o.cchartOptions.formatter
                            .column); // Apply formatter to column
                    }

                    // Adjust options -------------------------------------------------------------

                    // Set chart Title
                    if (o.tableHasData) {
                        o.cchartOptions.title = o.cchartOptions.title || o.tableCaption.text() || '';
                    }

                    // Set the Calendar cell size if a calendar chart
                    if (o.options.chartType === 'Calendar') {
                        o.cchartOptions.calendar.cellSize = o.cchartOptions.calendar.cellSize || $chartS
                            .width() * o.cchartOptions.cellScaleFactor;
                    }

                    // Set font sizes
                    if (o.cchartOptions.fontSize && isNaN(parseInt(o.cchartOptions.fontSize, 10))) {
                        o.cchartOptions.fontSize = o.getFontSize(o.cchartOptions.fontSize, 16);
                    }
                    if (o.cchartOptions.titleTextStyle && o.cchartOptions.titleTextStyle.fontSize && isNaN(
                            parseInt(o.cchartOptions.titleTextStyle.fontSize, 10))) {
                        o.cchartOptions.titleTextStyle.fontSize = o.getFontSize(o.cchartOptions
                            .titleTextStyle.fontSize, 16);
                    }
                    if (o.cchartOptions.calendar) {
                        if (o.cchartOptions.calendar.monthLabel && o.cchartOptions.calendar.monthLabel
                            .fontSize && isNaN(parseInt(o.cchartOptions.calendar.monthLabel.fontSize, 10))
                        ) {
                            o.cchartOptions.calendar.monthLabel.fontSize = o.getFontSize(o.cchartOptions
                                .calendar.monthLabel.fontSize, 16);
                        }
                        if (o.cchartOptions.calendar.dayOfWeekLabel && o.cchartOptions.calendar
                            .dayOfWeekLabel.fontSize && isNaN(parseInt(o.cchartOptions.calendar
                                .dayOfWeekLabel.fontSize, 10))) {
                            o.cchartOptions.calendar.dayOfWeekLabel.fontSize = o.getFontSize(o.cchartOptions
                                .calendar.dayOfWeekLabel.fontSize, 16);
                        }
                    }

                    // Set Chart dimensions
                    o.setDimensions();

                    // Revise Chart Options -------------------------------------------------------------
                    if (o.options.chartType === 'BarChart' && !o.options.chartAspectRatio && !o.chartOptions
                        .height) { // Height not set

                        var fontSize = o.cchartOptions.fontSize || o.getFontSize('body', 16);
                        // Define height based on font size and number of rows
                        o.cchartOptions.height = fontSize * 2 * o.data.getNumberOfRows();
                    }


                    o.chart = new google.visualization[o.options.chartType]($chartS.get(0));

                    google.visualization.events.addListener(o.chart, 'ready', function (e) {
                        o.showTableChart(o.options.showTable, 'show');

                        o.windowWidth = $(window).width();

                        o.chartParentWidth = o.chartParent.width();

                        if (o.options.chartZoom || o.options.chartOffset) {

                            var transform = '';

                            var $chartCanvas = $chartS.children(':last');

                            var top = 0;
                            var left = 0;

                            var zoom = parseFloat(o.options.chartZoom) || 0;
                            var tooltipZoom = 1 / zoom || 1;
                            var offsetX = parseInt(o.options.chartOffset[0]) || 0;
                            var offsetY = parseInt(o.options.chartOffset[1]) || 0;
                            offsetX = offsetX * $chartS.width() * zoom / 100;
                            offsetY = offsetY * $chartS.height() * zoom / 100;

                            // Zoom
                            if (zoom) {
                                transform = 'scale(' + zoom + ')';
                                top = ((($chartS.height() * zoom) - $chartS.height()) / 2) / zoom;
                                left = ((($chartS.width() * zoom) - $chartS.width()) / 2) / zoom;
                            }

                            // Offset
                            if (offsetX || offsetY) {
                                transform += ' translate(' + offsetX + 'px,' + offsetY + 'px)';
                                top -= offsetY;
                                left -= offsetX;
                            }

                            // Transform chart and prevent overflow
                            $chartCanvas.css('transform', transform);
                            $chartS.css('overflow', 'hidden');

                            // Add style to head to Adjust tooltip
                            $('<style> .' + o.chartId + ' .google-visualization-tooltip { ' +
                                'top: ' + top + 'px !important; ' +
                                'left: ' + left + 'px !important; ' +
                                'transform: scale(' + tooltipZoom + ')} </style>').appendTo(
                                'head');
                        }

                        //Style calendar chart
                        if (o.options.chartType === 'Calendar') {
                            $chartS.find('text:contains("' + o.cchartOptions.title + '")').css({
                                fill: o.cchartOptions.titleTextStyle.color,
                                fontWeight: o.cchartOptions.titleTextStyle.fontWeight,
                                fontSize: o.cchartOptions.titleTextStyle.fontSize,
                                fontFamily: o.cchartOptions.titleTextStyle.fontName
                            });

                            // Add style to head to style tooltip
                            $('<style> .' + o.chartId + ' .google-visualization-tooltip span { ' +
                                'color: ' + o.cchartOptions.tooltip.textStyle.color +
                                ' !important; ' +
                                'font-size: ' + o.cchartOptions.tooltip.textStyle.fontSize +
                                'px !important; ' +
                                'font-family: "' + o.cchartOptions.tooltip.textStyle.fontName +
                                '" !important; ' +
                                '} </style>').appendTo('head');
                        }
                    });
                    google.visualization.events.addListener(o.chart, 'error', function (e) {
                        // Show table remove chart
                        o.showTableChart('show', 'remove');
                        console.log(e);
                    });
                    //google.visualization.events.addListener( o.chart, 'select', function () {
                    //    // Review tooltip object
                    //    console.log( $( '.google-visualization-tooltip' ) );
                    //});

                    // Draw chart
                    o.chart.draw(o.data, o.cchartOptions);

                }; // o.drawChart close

                // Format Google Sheets csv data
                // Returns an array of formatted data
                o.formatSheet = function (data) {

                    // The array of data to return
                    var dataArray = [];

                    // Format Google Sheet csv data
                    if (data && !data.statusText) {

                        try {

                            // The array of all rows
                            var rows = data.split(/\r\n|\n/);

                            // The Array of column headings
                            var columns = [];

                            // Create cells
                            for (var i = 0; i < rows.length; i++) { // Each row
                                var row = rows[i].split(',');
                                rows[i] = row;
                            }

                            if (o.options.transpose) {
                                rows = o.transpose(rows);
                            }

                            columns = rows[0];

                            // Get and format columns
                            for (var i = 0; i < columns.length; i++) {

                                if (columns[i].toUpperCase() === 'TOOLTIP') {
                                    columns[i] = {
                                        type: 'string',
                                        role: 'tooltip'
                                    };
                                } else if (columns[i].toUpperCase() === 'ANNOTATION') {
                                    columns[i] = {
                                        type: 'string',
                                        role: 'annotation'
                                    };
                                } else {
                                    columns[i] = {
                                        label: columns[i]
                                    };
                                }
                            }

                            // Add data to dataArray
                            dataArray = rows;
                            dataArray[0] = columns;

                            // Format data
                            dataArray = o.formatData(dataArray);
                        } catch (e) {

                            // Formatting of sheet data failed
                            console.log(e);
                        }
                    }

                    return dataArray;
                };

                // Get data from an HTML table
                // Accepts a jQuery html table object
                // Returns a formatted data array
                o.getTableData = function ($tableHTML) {

                    // The data table Array - The array of column and row data extracted from the HTML table
                    var dataTable = [];

                    try {

                        // The rows - The collection of HTML table rows
                        var $rows = $tableHTML.find('tr').not($tableHTML.find('tfoot tr'));

                        // The array of data collected from all rows
                        var rowsArr = [];

                        // Add cells as objects to rowsArr
                        $rows.each(function (row) {

                            rowsArr.push([]);

                            $(this).find('td, th').each(function (col) {

                                var $cell = $(this);
                                var cellObj = {};

                                // Construct the cell object
                                if ($cell.attr('data-type')) {
                                    cellObj.type = $cell.attr('data-type');
                                }
                                if ($cell.attr('data-role')) {
                                    cellObj.role = $cell.attr('data-role');
                                }
                                cellObj.label = $cell.text();

                                // add cell object to rowsArr
                                rowsArr[row].push(cellObj);
                            });
                        });

                        // Transpose data
                        if (o.options.transpose) {
                            rowsArr = o.transpose(rowsArr);
                        }

                        // Add columns to dataTable
                        dataTable.push(rowsArr[0]);

                        // Change cell data back to values - excluding headings
                        for (var i = 1; i < rowsArr.length; i++) { // each row

                            // The Array of row data
                            var rowData = [];

                            for (var j = 0; j < rowsArr[i].length; j++) { // each cell

                                // Add cell to row
                                var cellData = rowsArr[i][j].label || '';
                                rowData.push(cellData);
                            }

                            // add row to dataTable
                            if (rowData.length > 0) {
                                dataTable.push(rowData);
                            }
                        }

                        // Format data
                        dataTable = o.formatData(dataTable);
                    } catch (e) { //  Could not extract data

                        console.log(e);
                        return [];
                    }
                    return dataTable;
                };

                // Format the data - infer data types and add and remove columns
                // Returns an array of formatted data
                o.formatData = function (data) {

                    // The formatted data array - The array of reformatted data
                    var formattedData = data;

                    try {

                        // Array of columns to remove
                        var removeColArr = [];

                        // Dynamic column types array - An array listing the active dynamic column types
                        var dynColTypesArr = [];

                        // The dynamic columns Array - An array of objects containing dynamic column metadata
                        var dynColumns = [];

                        // Remove ignore rows filter function
                        var filterRows = function (n, i) {
                            return (o.options.ignoreRow.indexOf(i) === -1);
                        };

                        // Remove ignore columns filter function
                        var filterCols = function (n, i) {
                            return (o.options.ignoreCol.indexOf(i) === -1);
                        };

                        // Remove dynamic columns filter function
                        var filterDynamic = function (n, i) {
                            return (removeColArr.indexOf(i) === -1);
                        };

                        // Get active dynamic column types
                        if (o.options.tooltipConcat) {
                            dynColTypesArr.push('tooltip');
                        }
                        if (o.options.annotationConcat) {
                            dynColTypesArr.push('annotation');
                        }

                        // Remove ignored rows
                        formattedData = $.grep(formattedData, filterRows);

                        // Remove ignored columns
                        for (var j = 0; j < formattedData.length; j++) { // each row

                            // Remove columns
                            formattedData[j] = $.grep(formattedData[j], filterCols);
                        }

                        // If dynamic tooltip or annotation remove existing tooltip and annotation columns
                        // and add dynamic columns
                        if (dynColTypesArr.length) {

                            // The primary axis heading - used to construct dynamic tooltips and annotations
                            var domain = '';

                            // Get column indexes to remove
                            for (var i = 0; i < formattedData[0].length; i++) { // each column heading

                                var role = formattedData[0][i].role || '';

                                // Add annotation and tooltip column indexes to remove to removeColArr
                                if (role && dynColTypesArr.indexOf(role) !== -1) {
                                    removeColArr.push(i);
                                }
                            }

                            // Remove selected annotation and tooltip columns
                            for (var j = 0; j < formattedData.length; j++) { // each row

                                // Remove columns
                                formattedData[j] = $.grep(formattedData[j], filterDynamic);
                            }

                            // Add dynamic tooltip and annotation col headers
                            for (var i = 0; i < formattedData[0].length; i++) { // each header col

                                var role = formattedData[0][i].role || '';
                                var label = formattedData[0][i].label || '';

                                // Get domain for use with tooltip and annotation
                                if (role === 'domain' || i === 0) {
                                    domain = formattedData[0][i];
                                }

                                if ((!role || dynColTypesArr.indexOf(role) === -1) && i >
                                    0) { // not a dynamic column

                                    // Add dynamic column if needed
                                    for (var j = 0; j < dynColTypesArr
                                        .length; j++) { // each dynamic col type

                                        i++;

                                        // Insert the dynamic column
                                        formattedData[0].splice(i, 0, {
                                            type: 'string',
                                            role: dynColTypesArr[j]
                                        });

                                        // Add column metadata to dynColumns
                                        dynColumns.push({
                                            index: i,
                                            domain: domain,
                                            role: dynColTypesArr[j],
                                            label: label
                                        });
                                    }
                                }
                            }

                            // Add dynamic columns data
                            for (var i = 1; i < formattedData.length; i++) { // each data row
                                for (var j = 0; j < dynColumns.length; j++) { // each dynamic column

                                    var dynData = '';

                                    // Get dynamic column type
                                    if (dynColumns[j].role === 'toolip') {
                                        dynData = o.options.tooltipConcat;
                                    } else if (dynColumns[j].role === 'annotation') {
                                        dynData = o.options.annotationConcat;
                                    }

                                    // Replace keywords
                                    dynData = dynData.replace(new RegExp('domain', 'g'), dynColumns[j]
                                        .domain);
                                    dynData = dynData.replace(new RegExp('label', 'g'), dynColumns[j]
                                        .label);
                                    dynData = dynData.replace(new RegExp('data', 'g'), formattedData[i][
                                        dynColumns[j].index
                                    ]);

                                    // Insert into formattedData
                                    formattedData[i].splice(dynColumns[j].index, 0, dynData);

                                }
                            }
                        }

                        // Format row data according to data types
                        for (var i = 1; i < formattedData.length; i++) { // each row

                            // The Array of row data
                            var rowData = [];

                            for (var j = 0; j < formattedData[i].length; j++) { // each cell

                                // Initiate cell metadata
                                var colType = formattedData[0][j].type || '';
                                var colRole = formattedData[0][j].role || '';
                                var cellData = formattedData[i][j] || '';

                                // Format data and add to cellData array
                                if (['tooltip', 'annotation'].indexOf(colRole) === -
                                    1) { // Not a tooltip/annotation
                                    if (colType === 'date' || colType === 'datetime') {
                                        cellData = new Date(cellData);
                                    } else if (colType === 'number') {
                                        cellData = parseFloat(cellData);
                                    } else if (colType === 'boolean') {
                                        var str = cellData.toLowerCase();
                                        cellData = (str !== 'false' && str !== '0' && str !== 'no' &&
                                            str !== '');
                                    } else if (colType === 'timeofday') {
                                        cellData = cellData.getTime();
                                    } else if (j !== 0) { // not the first column
                                        if (!isNaN(parseFloat(cellData))) {
                                            cellData = parseFloat(cellData);
                                        } else if (new Date(cellData) !== 'Invalid Date' && !isNaN(new Date(
                                                cellData))) {
                                            cellData = new Date(cellData);
                                        }
                                    }
                                }

                                // Add cell to row
                                rowData.push(cellData);
                            }

                            // Replace row with formatted data
                            if (rowData.length > 0) {
                                formattedData[i] = rowData;
                            }
                        }
                    } catch (e) { //  Could not extract data

                        console.log(e);
                        return [];
                    }
                    return formattedData;
                };

                // Generate HTML table jQuery object from chart data
                // Returns a jQuery object defining the table
                o.generateTable = function (data, tableTitle, tableId, tableClass) {

                    // The html string
                    var html = '<table id="' + tableId +
                        '" class="' + tableId + ' ' + tableClass +
                        '"><caption>' + tableTitle + '</caption><thead><tr>';

                    // Add header columns to html
                    for (var i = 0; i < data[0].length; i++) {
                        if (data[0][i].role && data[0][i].role === 'tooltip') {
                            html += '<th>Tooltip</th>';
                        } else if (data[0][i].role && data[0][i].role === 'annotation') {
                            html += '<th>Annotation</th>';
                        } else if (data[0][i].label) {
                            html += '<th>' + data[0][i].label + '</th>';
                        }
                    }
                    html += '</tr></thead><tbody>';

                    // Add rows to html
                    for (var i = 1; i < data.length; i++) {
                        html += '<tr>';
                        for (var j = 0; j < data[i].length; j++) {
                            var align = isNaN(data[i][j]) ? 'left' : 'right';
                            html += '<td align="' + align + '">' + data[i][j] + '</td>';
                        }
                        html += '</tr>';
                    }
                    html += '</tbody></table>';

                    return $(html);
                };

                // Add window resize event
                o.addResize = function () {
                    // Window event handlers
                    $(window).on({

                        // Reset on screen resize
                        'resize': function () {

                            // Adjust layout
                            clearTimeout(o.timer);
                            o.timer = setTimeout(function () {

                                // Test if width has resized - as opposed to height
                                if ($(window).width() !== o.windowWidth) {

                                    // Save the chart style
                                    var elStyle = $chartS.attr('style');

                                    // Remove js styles from chart
                                    $chartS.removeAttr('style');

                                    // Test if chart parent has changed width
                                    if (o.chartParent.width() !== o.chartParentWidth) {

                                        // Recalculate calculated option values ---------------------

                                        // Recalculate calendar cellSize
                                        if (o.cchartOptions.calendar && !o.options
                                            .calendar.calendar.cellSize) {
                                            o.cchartOptions.calendar.cellSize = $chartS
                                                .width() * 0.017;
                                        }

                                        // Set Chart dimensions
                                        o.setDimensions();

                                        // Redraw chart ---------------------------------------------
                                        o.chart.draw(o.data, o.cchartOptions);

                                    } else { // parent has not changed width

                                        // Re-apply the chart style
                                        $chartS.attr('style', elStyle);
                                    }
                                }
                            }, 500);
                        }
                    });
                };

                // Show, hide or remove chart and table
                o.showTableChart = function (table, chart) { //  Values: 'show', 'hide', or 'remove'

                    var tableLen = $tableS ? $tableS.length : false;
                    var chartLen = $chartS ? $chartS.length : false;

                    // Table
                    if (table === 'show' && tableLen) {
                        $tableS.css('opacity', 0);
                        $tableS.css(o.options.showTableCSS);
                        $tableS.fadeTo(400, 1);
                    } else if (table === 'hide' && tableLen) {
                        $tableS.css(o.options.hideTableCSS);
                    } else if (table === 'remove' && tableLen) {
                        $tableS.css('display', 'none');
                    }

                    // Chart
                    if (chart === 'show' && chartLen) {
                        $chartS.css('opacity', 0);
                        $chartS.css(o.options.showChartCSS);
                        $chartS.fadeTo(400, 1);
                    } else if (chart === 'hide' && chartLen) {
                        $chartS.css(o.options.showChartCSS);
                    } else if (chart === 'remove' && chartLen) {
                        $chartS.css('display', 'none');
                    }
                };

                //  Get font size function
                // Returns an integer
                o.getFontSize = function (selector, dSize) {
                    return parseInt($(selector).css('fontSize'), 10) || dSize;
                };

                // Transpose data array function
                // Returns the transposed array of data
                o.transpose = function (arr) {

                    var tArr = new Array(arr[0].length);
                    for (var i = 0; i < arr[0].length; i++) {
                        tArr[i] = new Array(arr.length);
                        for (var j = 0; j < arr.length; j++) {
                            tArr[i][j] = arr[j][i];
                        }
                    }
                    return tArr;
                };

                // Set chart width and height values
                o.setDimensions = function () {

                    // Store the chart parent width
                    o.chartParentWidth = o.chartParent.width();

                    // Set chart width and height
                    if (o.options.chartAspectRatio) {
                        if (o.chartOptions.width && !o.chartOptions.height) {
                            o.cchartOptions.height = o.chartOptions.width / o.options.chartAspectRatio;
                        } else if (!o.chartOptions.width && o.chartOptions.height) {
                            o.cchartOptions.width = o.chartOptions.height * o.options.chartAspectRatio;
                        } else if (!o.chartOptions.width && !o.chartOptions.height) {
                            o.cchartOptions.width = $chartS.width();
                            o.cchartOptions.height = $chartS.width() / o.options.chartAspectRatio;
                        }
                    } else if (!o.chartOptions.width && !o.chartOptions.height) {
                        o.cchartOptions.width = $chartS.width();
                    }
                };

                // camelCase function - converts text to camelCase
                // Returns a camelCased string
                o.camelCase = function (str) {
                    return str.replace(/(?:^\w|[A-Z]|\b\w|\s+)/g, function (match, index) {
                        if (+match === 0) return ''; // or if (/\s+/.test(match)) for white spaces
                        return index === 0 ? match.toLowerCase() : match.toUpperCase();
                    });
                };

                // initialize --------------------------------------------------------------------------
                o.init(el, options);
                return this;

            }; //  chartinator close

            //  Create the plugin ======================================================================
            $.fn.chartinator = function (options) {
                //  Enable multi-element support
                return this.each(function () {
                    var $el = $(this);
                    if (!$el.data('chartinator')) {
                        $(this).data('chartinator', new chartinator(this, options));
                    }
                });
            };
        })(jQuery, window, document, Math);

    </script>
    <script type="text/javascript">
        jQuery(function ($) {

            var chart3 = $('#geoChart').chartinator({
                tableSel: '.geoChart',

                columns: [{
                    role: 'tooltip',
                    type: 'string'
                }],

                colIndexes: [2],

                rows: [
                    ['China - 2015'],
                    ['Colombia - 2015'],
                    ['France - 2015'],
                    ['Italy - 2015'],
                    ['Japan - 2015'],
                    ['Kazakhstan - 2015'],
                    ['Mexico - 2015'],
                    ['Poland - 2015'],
                    ['Russia - 2015'],
                    ['Spain - 2015'],
                    ['Tanzania - 2015'],
                    ['Turkey - 2015']
                ],

                ignoreCol: [2],

                chartType: 'GeoChart',

                chartAspectRatio: 1.5,

                chartZoom: 1.75,

                chartOffset: [-12, 0],

                chartOptions: {

                    width: null,

                    backgroundColor: '#fff',

                    datalessRegionColor: '#F5F5F5',

                    region: 'world',

                    resolution: 'countries',

                    legend: 'none',

                    colorAxis: {

                        colors: ['#679CCA', '#337AB7']
                    },
                    tooltip: {

                        trigger: 'focus',

                        isHtml: true
                    }
                }


            });
        });

    </script>


    <style>
        .leftBtns .btn {
            color: #333333;
            background: none !important;
            font-size: 15px;
            border: 1px solid #e61d2f;
            margin: 10px 5px;
            font-weight: bold;

            -webkit-box-shadow: 10px 10px 5px -10px gray;
            -moz-box-shadow: 10px 10px 5px -10px gray;
            box-shadow: 10px 10px 5px -10px gray;
        }



        .leftBtns .btn:hover {
            color: #ffffff;
            background: #e61d2f !important;
            border: 1px solid #e61d2f;
            transition: .1s;
        }

        .leftBtns .btn-myPrimary-add {
            background-color: #e61d2f;

            width: 110px;
        }

        .leftBtns .btn-myPrimary {
            background-color: #e61d2f;

            /* width: 97px; */
            width: 110px;


        }

        .leftBtns .btn-mysecondary {
            background-color: #0a549d;
            /* width: 97px; */
            width: 110px;



        }

        .leftBtns .btn {
            margin: 5px 0px;
            height: 59px;
        }

        .labels {
            margin-left: 12px;
            font-weight: bold;
            font-size: 20px;
            color: #0a549d;
        }

        body {
            margin: 0;
            padding: 0;
        }


        .btn-my {
            border: 1px solid #3498db;
            background: none;
            padding: 10px 20px;
            font-size: 20px;
            font-family: "montserrat";
            cursor: pointer;
            margin: 10px;
            transition: 0.8s;
            position: relative;
            overflow: hidden;
        }



        .btn1 {
            color: #3498db;
            border-radius: 10px;
        }

        .btn1:hover {
            color: #333;
        }

        .btn-my::before {
            content: "";
            position: absolute;
            left: 0;
            width: 100%;
            height: 0%;
            background: #3498db;
            z-index: -1;
            transition: 0.8s;
        }

        .btn1::before {
            top: 0;
            border-radius: 0 0 50% 50%;
        }

        .btn1:hover::before {
            height: 180%;
        }

        @keyframes btn-anim4 {
            0% {
                bottom: -100%;
            }

            50%,
            100% {
                bottom: 100%;
            }
        }

        .nav-pills {
            float: right !important;
            background-color: #0a549d;
            border-radius: 15px;
        }

        input {
            outline: none;
        }

        .login-box {
            text-align: center;
        }

        .login-box a {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            color: #d01818;
            font-size: 20px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            /* margin-top: 40px; */
            font-weight: 700;
            letter-spacing: 4px
        }

        .login-box a:hover {
            background: #d01818;
            color: #fff !important;
            border-radius: 5px;
            box-shadow: 0 0 5px #d01818,
                0 0 25px#d01818,
                0 0 50px #d01818,
                0 0 100px #d01818;
        }

        .login-box a span {
            position: absolute;
            display: block;
        }

        .login-box a span:nth-child(1) {
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #d01818);
            animation: btn-anim1 1s linear infinite;
        }

        @keyframes btn-anim1 {
            0% {
                left: -100%;
            }

            50%,
            100% {
                left: 100%;
            }
        }

        .login-box a span:nth-child(2) {
            top: -100%;
            right: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(180deg, transparent, #d01818);
            animation: btn-anim2 1s linear infinite;
            animation-delay: .25s
        }

        @keyframes btn-anim2 {
            0% {
                top: -100%;
            }

            50%,
            100% {
                top: 100%;
            }
        }

        .login-box a span:nth-child(3) {
            bottom: 0;
            right: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(270deg, transparent, #d01818);
            animation: btn-anim3 1s linear infinite;
            animation-delay: .5s
        }

        @keyframes btn-anim3 {
            0% {
                right: -100%;
            }

            50%,
            100% {
                right: 100%;
            }
        }

        .login-box a span:nth-child(4) {
            bottom: -100%;
            left: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(360deg, transparent, #d01818);
            animation: btn-anim4 1s linear infinite;
            animation-delay: .75s
        }

        input:focus~label,
        input:valid~label {
            top: -25px;
            left: 0;
            color: #f1c40f;
            font-size: 12px;
        }

        .clearmain {
            clear: both;
        }

        .nav-pills .nav-link {
            border-radius: .25rem;
            color: #fff;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #e61d2f;
            border-radius: 15px;
            padding: 10px;

        }

        i::before {
            margin-right: 30px;
        }

        @media only screen and (max-width: 600px) {
            .profile_details {
                display: none;
            }

            .col-md-3 {
                position: relative;
                width: auto !important;
                padding-right: 15px;
                padding-left: 15px;
            }



            #staticBackdrop::-webkit-scrollbar-track {
                border: 1px solid #000;
                padding: 2px 0;
                background-color: #66ff33;
            }

            #staticBackdrop::-webkit-scrollbar {
                width: 12px;
            }

            #staticBackdrop::-webkit-scrollbar-thumb {
                border-radius: 10px;
                box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
                background-color: #66ff33 !important;
                border: 1px solid #000;
            }
        }

        ::-webkit-scrollbar {
            width: 10px;

        }

        ::-webkit-scrollbar-track {
            background-color: #e61d2f !important;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #0a549d !important;
        }

        .page-container.sidebar-collapsed-back .left-content {
            transition: all 100ms linear;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            transition: all 0.3s ease;
            float: right;
            width: 84% !important;
        }
        @media (max-width: 1366px){
.left-content {
    width: 84% !important;
}
        }

    </style>
    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">

</head>

<body onload="loadFields()">



    @include('dashboardhtml')



    <script>
        var toggle = true;

        $(".sidebar-icon").click(function () {
            if (toggle) {
                $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                $("#menu span").css({
                    "position": "absolute"
                });
            } else {
                $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                setTimeout(function () {
                    $("#menu span").css({
                        "position": "relative"
                    });
                }, 400);
            }
            toggle = !toggle;
        });

    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <script>
        function loadFields() {
            dailySaleAmount();
            loadAutos();
        }

        function updateModelData() {
            var AID = $('#model').find(":selected").val();

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    var a = this.response;
                    var data = JSON.parse(a);
                    var price = data[0].Price;
                    var description = data[0].Description;
                    document.getElementById("unitPrice").value = price;
                    document.getElementById("description").value = description;
                }
            };
            //alert("ljd");
            xhttp.open("GET", "./getAutoData/" + AID, true);

            xhttp.send();
        }

        function loadAutos() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("model").innerHTML = this.response;
                    $('#model').selectpicker('refresh');
                }
            };
            //alert("ljd");
            xhttp.open("GET", "./loadAutos/", true);

            xhttp.send();
        }



        $(document).ready(function () {
                $("#killme").click(function () {
                    $('.bd-example-modal-lg').modal('hide');
                })
            })
            (function () {
                "use strict";

                // custom scrollbar

                $("html").niceScroll({
                    styler: "fb",
                    cursorcolor: "#68ae00",
                    cursorwidth: '6',
                    cursorborderradius: '10px',
                    background: '#FFFFFF',
                    spacebarenabled: false,
                    cursorborder: '0',
                    zindex: '1000'
                });

                $(".scrollbar1").niceScroll({
                    styler: "fb",
                    cursorcolor: "#68ae00",
                    cursorwidth: '6',
                    cursorborderradius: '0',
                    autohidemode: 'false',
                    background: '#FFFFFF',
                    spacebarenabled: false,
                    cursorborder: '0'
                });



                $(".scrollbar1").getNiceScroll();
                if ($('body').hasClass('scrollbar1-collapsed')) {
                    $(".scrollbar1").getNiceScroll().hide();
                }

            })(jQuery);

    </script>
    <script>
        function dailySaleAmount() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText;
                    var a = JSON.parse(data);
                    document.getElementById("saleAmount").innerHTML = a[0].DailySale;

                }
            }

            xhttp.open("GET", "./dailySaleAmount/", true);
            xhttp.send();


        }



        function bar_group() {
            group_ident = 1, $(".bar_group").each(function () {
                $(this).addClass("group_ident-" + group_ident), $(this).data("gid", group_ident), group_ident++
            })
        }

        function get_max() {
            $(".bar_group").each(function () {
                var t = [];
                $(this).children().each(function () {
                    t.push($(this).attr("value"))
                }), max_arr["group_ident-" + $(this).data("gid")] = t, void 0 !== $(this).attr("max") ? $(
                    this).data("bg_max", $(this).attr("max")) : $(this).data("bg_max", Math.max.apply(null,
                    t))
            })
        }

        function data_labels() {
            $(".bar_group__bar").each(function () {
                void 0 !== $(this).attr("label") && $('<p class="b_label">' + $(this).attr("label") + "</p>")
                    .insertBefore($(this))
            })
        }

        function show_values() {
            $(".bar_group__bar").each(function () {
                "true" == $(this).attr("show_values") && ($(this).css("margin-bottom", "40px"), void 0 !== $(
                    this).attr("unit") ? ($(this).append('<p class="bar_label_min">0 ' + $(this).attr(
                    "unit") + "</p>"), $(this).append('<p class="bar_label_max">' + $(this).parent()
                    .data("bg_max") + " " + $(this).attr("unit") + "</p>")) : ($(this).append(
                    '<p class="bar_label_min">0</p>'), $(this).append('<p class="bar_label_max">' +
                    $(this).parent().data("bg_max") + "</p>")))
            })
        }

        function show_tooltips() {
            $(".bar_group__bar").each(function () {
                "true" == $(this).attr("tooltip") && ($(this).css("margin-bottom", "40px"), $(this).append(
                    '<div class="b_tooltip"><span>' + $(this).attr("value") +
                    '</span><div class="b_tooltip--tri"></div></div>'))
            })
        }

        function in_view(t) {
            var a = $(t),
                i = $(window),
                s = i.scrollTop(),
                r = s + i.height(),
                n = a.offset().top,
                o = n + a.height();
            r > o - 45 && a.css("width", a.attr("value") / a.parent().data("bg_max") * 100 + "%")
        }

        function bars() {
            bar_group(), get_max(), data_labels(), show_tooltips(), show_values()
        }
        max_arr = {}, $(".bar_group__bar").each(function () {
            in_view($(this))
        }), $(window).scroll(function () {
            $(".bar_group__bar").each(function () {
                in_view($(this))
            })
        }), bars();

    </script>
    <script>
        function infoPass() {

            var customerName = "Waqas";
            var id = "78";


            window.location.href = "./pm/" + customerName;
            //redirect


        }

        function calculation() {
            var price = document.getElementById("unitPrice").value;
            var quantity = document.getElementById("quantity").value;

            var total = price * quantity;
            document.getElementById("totalPrice").value = total;
        }

        function createQuotation() {
            // <input type="text" name="phone_number" id="qvt" placeholder="Quotation Validity Time"
            // required />
            // <input type="text" name="phone_number" id="dt" placeholder="Delivery Time"
            // required />
            // <input type="text" name="phone_number" id="paymentTo" placeholder="Payment To"
            // required />
            var customerName = document.getElementById("customerName").value;
            var fatherName = "";
            var CNIC = "";
            var city = "";
            var address = document.getElementById("address").value;
            var contact = document.getElementById("contact").value;
            var description = document.getElementById("description").value;
            var color = document.getElementById("color").value;
            var unitPrice = document.getElementById("unitPrice").value;
            var quantity = document.getElementById("quantity").value;
            var totalPrice = document.getElementById("totalPrice").value;
            var model = document.getElementById("model").value;
            var det = document.getElementById("dt").value;
            var qvt = document.getElementById("qvt").value;
            var payTo = document.getElementById("paymentTo").value;

            var data = [customerName, fatherName, CNIC, city, address, contact, description, color, unitPrice, quantity,
                totalPrice, model, det, qvt, payTo
            ];

            var quotationData = JSON.stringify(data);

            var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    alert("Quotation =" + this.responseText + " is generated");


                    window.open("/testpdf/5");


                }
            };
            // var MenuID=$('#Menus').find(":selected").val();
            xhttp.open("GET", "./createQuotation/" + quotationData, true);
            xhttp.send();

        }

    </script>

    <script>
        var doughnutData = [{
                value: 30,
                color: "#e61d2f"
            },
            {
                value: 50,
                color: "#0a549d"
            },
            {
                value: 100,
                color: "#e61d2f"
            },
            {
                value: 40,
                color: "#0a549d"
            },
        ];
        new Chart(document.getElementById("doughnut").getContext("2d")).Doughnut(
            doughnutData);

    </script>

</body>

</html>
