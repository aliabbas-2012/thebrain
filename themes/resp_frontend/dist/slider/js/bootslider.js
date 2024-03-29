function bootslider(target, options) {
    function timerinit() {
        count = -10;
        $progress.css({width: "0%"})
    }
    function fullvideo() {
        var e = $active.width();
        var t = $active.height() - 7;
        $(".bs-video-fullscreen iframe").css({width: e + "px", height: t + "px"})
    }
    var settings = $.extend({animationIn: "fadeInUp", animationOut: "flipOutX", timeout: 5e3, responsive: "resize", autoplay: true, preload: true, pauseOnHover: true, pagination: true, thumbnails: true, mousewheel: true, keyboard: true, touchscreen: true}, options);
    var self = this;
    var $this = $(target);
    var $slides = $(".bs-slide", $this);
    var $active = $(".active", $this) ? $(".active", $this) : $slides.eq(0);
    var $length = $slides.length - 1;
    var $next = $(".bs-next", $this);
    var $prev = $(".bs-prev", $this);
    var $loader = $(".bs-loader", $this);
    var $pagination = $(".bs-pagination", $this);
    var $thumbnails = $(".bs-thumbnails", $this);
    var $progress = $(".bs-progress .progress-bar", $this);
    var timeout;
    var $current;
    var animated;
    var settleTime = 800;
    var margin;
    setTimeout(function() {
        margin = -$active.height()
    }, settleTime);
    self.init = function() {
        var e = 0;
        $(".bs-background img").each(function() {
            var t = $(this).attr("src");
            var n = $(new Image).attr("src", t);
            n.load(function() {
                ++e;
                if (e == $length || settings.preload == false) {
                    $loader.fadeOut(500);
                    if (settings.touchscreen == true) {
                        self.add("touchscreen")
                    }
                    if (settings.mousewheel == true) {
                        self.add("mousewheel")
                    }
                    if (settings.keyboard == true) {
                        self.add("keyboard")
                    }
                    if (settings.pagination == true) {
                        self.add("pagination")
                    } else {
                        $pagination.hide()
                    }
                    if (settings.thumbnails == true) {
                        self.add("thumbnails")
                    } else {
                        $thumbnails.hide()
                    }
                    $slides.addClass("animated");
                    $("[data-animate-in]", $slides).each(function() {
                        $(this).addClass("animated")
                    });
                    $("[data-animate-out]", $slides).each(function() {
                        $(this).addClass("animated")
                    });
                    $active.addClass("active");
                    $active.addClass("visible");
                    var t = $active.attr("data-animate-in") ? $active.attr("data-animate-in") : settings.animationIn;
                    $active.addClass(t);
                    $current = $active.index();
                    $("[data-animate-in]", $active).each(function() {
                        var e = $(this);
                        var t = e.attr("data-animate-in");
                        var n = e.attr("data-animate-out");
                        var r = e.attr("data-delay") ? e.attr("data-delay") : 0;
                        e.removeClass(n);
                        if (r === 0) {
                            e.addClass("visible");
                            e.addClass(t)
                        } else {
                            setTimeout(function() {
                                e.addClass("visible");
                                e.addClass(t)
                            }, r)
                        }
                    })
                }
            })
        })
    };
    self.gotoslide = function(e) {
        var t = $current;
        if (e == t)
            return;
        if (animated == 1)
            return;
        if (e > $length)
            e = 0;
        else if (e < 0)
            e = $length;
        animated = 1;
        $("ul li", $pagination).eq(t).removeClass("active");
        $("ul li", $pagination).eq(e).addClass("active");
        $("ul li", $thumbnails).eq(t).removeClass("active");
        $("ul li", $thumbnails).eq(e).addClass("active");
        if (settings.autoplay == true)
            timerinit();
        $("iframe", $this).each(function() {
            $(this).attr("src", $(this).attr("src"))
        });
        var n = $slides.eq(t);
        n.removeClass("active");
        var r = n.attr("data-animate-out") ? n.attr("data-animate-out") : settings.animationOut;
        var i = $active.attr("data-animate-in") ? $active.attr("data-animate-in") : settings.animationIn;
        n.addClass(r);
        $("[data-animate-out]", n).each(function() {
            var e = $(this);
            var t = e.attr("data-animate-out");
            e.addClass(t)
        });
        $active = $slides.eq(e);
        $active.addClass("active").addClass("visible");
        var s = $active.attr("data-animate-in") ? $active.attr("data-animate-in") : settings.animationIn;
        $active.removeClass(s).addClass(s);
        $("[data-animate-in]", $active).removeClass("visible");
        $("[data-animate-in]", $active).each(function() {
            var e = $(this);
            var t = e.attr("data-animate-in");
            var n = e.attr("data-animate-out") ? e.attr("data-animate-out") : "fadeOut";
            var r = e.attr("data-delay") ? e.attr("data-delay") : 0;
            var i = e.attr("data-delay-out") ? e.attr("data-delay-out") : 0;
            e.removeClass(n);
            if (r === 0) {
                e.addClass("visible");
                e.addClass(t)
            } else {
                setTimeout(function() {
                    e.addClass("visible");
                    e.addClass(t);
                    if (i !== 0) {
                        setTimeout(function() {
                            e.removeClass(t);
                            e.addClass(n)
                        }, i)
                    }
                }, r)
            }
        });
        if (e > t)
            $active.css({"margin-top": margin});
        else
            n.css({"margin-top": margin});
        setTimeout(function() {
            n.removeClass("visible").removeClass(r).removeClass(i);
            if (e > t)
                $active.css({"margin-top": 0});
            else
                n.css({"margin-top": 0});
            animated = 0
        }, settleTime);
        timeout = $active.attr("data-timeout") ? $active.attr("data-timeout") : settings.timeout;
        $current = e
    };
    (function($) {
        $.timer = function(func, time, autostart) {
            this.set = function(func, time, autostart) {
                this.init = true;
                if (typeof func == "object") {
                    var paramList = ["autostart", "time"];
                    for (var arg in paramList) {
                        if (func[paramList[arg]] != undefined) {
                            eval(paramList[arg] + " = func[paramList[arg]]")
                        }
                    }
                    func = func.action
                }
                if (typeof func == "function") {
                    this.action = func
                }
                if (!isNaN(time)) {
                    this.intervalTime = time
                }
                if (autostart && !this.isActive) {
                    this.isActive = true;
                    this.setTimer()
                }
                return this
            };
            this.once = function(e) {
                var t = this;
                if (isNaN(e)) {
                    e = 0
                }
                window.setTimeout(function() {
                    t.action()
                }, e);
                return this
            };
            this.play = function(e) {
                if (!this.isActive) {
                    if (e) {
                        this.setTimer()
                    } else {
                        this.setTimer(this.remaining)
                    }
                    this.isActive = true
                }
                return this
            };
            this.pause = function() {
                if (this.isActive) {
                    this.isActive = false;
                    this.remaining -= new Date - this.last;
                    this.clearTimer()
                }
                return this
            };
            this.stop = function() {
                this.isActive = false;
                this.remaining = this.intervalTime;
                this.clearTimer();
                return this
            };
            this.toggle = function(e) {
                if (this.isActive) {
                    this.pause()
                } else if (e) {
                    this.play(true)
                } else {
                    this.play()
                }
                return this
            };
            this.reset = function() {
                this.isActive = false;
                this.play(true);
                return this
            };
            this.clearTimer = function() {
                window.clearTimeout(this.timeoutObject)
            };
            this.setTimer = function(e) {
                var t = this;
                if (typeof this.action != "function") {
                    return
                }
                if (isNaN(e)) {
                    e = this.intervalTime
                }
                this.remaining = e;
                this.last = new Date;
                this.clearTimer();
                this.timeoutObject = window.setTimeout(function() {
                    t.go()
                }, e)
            };
            this.go = function() {
                if (this.isActive) {
                    this.action();
                    this.setTimer()
                }
            };
            if (this.init) {
                return new $.timer(func, time, autostart)
            } else {
                this.set(func, time, autostart);
                return this
            }
        }
    })(jQuery);
    this.pauseTimer = function() {
        timer.pause()
    };
    this.playTimer = function() {
        timer.play()
    };
    if (settings.autoplay == true) {
        var count = 0;
        var timer = $.timer(function() {
            count++;
            timeout = $active.attr("data-timeout") ? $active.attr("data-timeout") : settings.timeout;
            if (count >= timeout / 100) {
                self.gotoslide($current + 1)
            }
            $progress.css({width: count * 11e3 / timeout + "%"})
        }, 100, true);
        if (settings.pauseOnHover == true) {
            $slides.hover(function() {
                self.pauseTimer()
            }, function() {
                self.playTimer()
            })
        }
        timer.go()
    } else {
        $progress.closest(".progress").hide(0)
    }
    $next.click(function() {
        self.gotoslide($current + 1)
    });
    $prev.click(function() {
        self.gotoslide($current - 1)
    });
    this.add = function(e) {
        switch (e) {
            case"touchscreen":
                {
                    $this.swipe({swipe: function(e, t) {
                            if (t == "left") {
                                self.gotoslide($current + 1)
                            }
                            if (t == "right") {
                                self.gotoslide($current - 1)
                            }
                        }})
                }
                break;
            case"mousewheel":
                {
                    $this.bind("mousewheel", function(e, t) {
                        if (t < 0) {
                            self.gotoslide($current + 1)
                        }
                        if (t > 0) {
                            self.gotoslide($current - 1)
                        }
                        e.stopPropagation();
                        e.preventDefault()
                    })
                }
                break;
            case"keyboard":
                {
                    $(document).keydown(function(e) {
                        if (e.keyCode == 37) {
                            self.gotoslide($current - 1)
                        }
                        if (e.keyCode == 39) {
                            self.gotoslide($current + 1)
                        }
                    })
                }
                break;
            case"pagination":
                {
                    var t;
                    for (t = 1; t <= $length + 1; t++)
                        $("ul", $pagination).append('<li><a href="javascript:void(0);">' + t + "</a></li>");
                    $("ul li", $pagination).eq($active.index()).addClass("active");
                    $("ul li a", $pagination).click(function() {
                        var e = $(this).closest("li").index();
                        self.gotoslide(e)
                    })
                }
                break;
            case"thumbnails":
                {
                    var t;
                    var n = 100 / ($length + 1);
                    if (n > 25)
                        n = 25;
                    for (t = 0; t <= $length; t++) {
                        var r = $(".bs-background img").eq(t).attr("src");
                        var i = $(".bs-background img").eq(t).attr("alt");
                        $("ul", $thumbnails).append('<li style="width: ' + n + '%" class="bs-thumbnail"><a href="javascript:void(0);"><img src="' + r + '" alt="' + i + '" /></a></li>')
                    }
                    $("ul li", $thumbnails).eq($active.index()).addClass("active");
                    $("ul li a", $thumbnails).click(function() {
                        var e = $(this).closest("li").index();
                        self.gotoslide(e)
                    })
                }
                break
            }
    };
    $(".bs-video").fitVids();
    $(".bs-video, .bs-video-fullscreen").hover(function() {
        self.pauseTimer()
    }, function() {
        self.playTimer()
    });
    $(window).resize(function() {
        fullvideo();
        margin = -$active.height()
    }).trigger("resize")
}