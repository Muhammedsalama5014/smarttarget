(function($) {
    'use strict';

    /**  Returns the animation css prefix supported by the browser  */
    var _prefix = (function(domNode) {
        var prefixs = ['webkit', 'Moz', 'o', 'ms'],
            props;

        for (var i in prefixs) {
            props = prefixs[i] + 'Transition';
            if (domNode.style[props] !== undefined) {
                return '-' + prefixs[i].toLowerCase() + '-';
            }
        }
        return false;
    })(document.createElement('div'));

    /** Default configuration parameters */
    var DEFAULT = {
        /** dom structure class name */
        selectors: {
            sections: '.sections',
            section: '.section',
            page: '.page',
            active: '.active'
        },
        /** Current page index */
        index: 0,
        /** Animation curve */
        timing: 'ease',
        /** Animation time */
        duration: 500,
        /** Whether to loop */
        loop: false,
        /** Whether to display paging dot */
        pagination: true,
        /** Whether to support keyboard operation */
        keyboard: false,
        /** Sliding direction */
        direction: 'vertical',
        /** Swipe start event */
        beforeScroll: null,
        /** Event after the end of the slide */
        afterScroll: null
    };

    function FsScroll(element, options) {
        this.element = element;
        this.options = $.extend({}, DEFAULT, options || {});
        this.init();
    }

    FsScroll.prototype = {
        /** Initialize properties, event entry */
        init: function() {
            this.selectors = this.options.selectors;
            this.sections = this.element.find(this.selectors.sections);
            this.section = this.element.find(this.selectors.section);
            this.isVertical = this.options.direction === 'vertical' ? true : false;
            this.pagesCount = this.pagesCount();
            this.index = (this.options.index >= 0 && this.options.index < this.pagesCount) ? this.options.index : 0;
            this.canScroll = true;

            this._addPosition();

            if (!this.isVertical || this.index) {
                this._initLayout();
            }

            if (this.options.pagination) {
                this._initPagination();
            }

            this._initEvent();
        },

        /** Get the number of sliding pages */
        pagesCount: function() {
            return this.section.length;
        },

        /** Turn forward one page */
        prev: function() {
            if (this.index) {
                this.index--;
            } else {
                this.index = this.pagesCount - 1;
            }
            this._scrollPage();
        },

        /** Turn back one page */
        next: function() {
            if (this.index === this.pagesCount - 1) {
                this.index = 0;
            } else {
                this.index++;
            }
            this._scrollPage();
        },

        /**
         * Get the distance of each swipe
         */
        _getScrollLength: function() {
            return this.isVertical ? this.element.height() : this.element.width();
        },

        /** In order to correctly calculate the position of each page, the relative positioning of the parent container must be added */
        _addPosition: function() {
            var position = this.sections.css('position');
            if (!position || position !== 'relative') {
                this.sections.css('position', 'relative');
            }
        },

        /** Initialize the horizontal sliding layout */
        _initLayout: function() {
            if (!this.isVertical) {
                var width = this.pagesCount * 100 + '%',
                    pageWidth = (100 / this.pagesCount).toFixed(2) + '%';
                this.sections.width(width);
                this.section.width(pageWidth).css('float', 'left');
            }

            if (this.index) {
                this._scrollPage(true);
            }
        },

        /** Initialize paging */
        _initPagination: function() {
            var pageCls = this.selectors.page.substring(1),
                pageHtml = '<div class="slider-buttons"><span class="slider-upper-arrow dull"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="20" viewBox="0 0 30 20" fill="none"> <path d="M30 15.4743L22.4279 7.98717L14.8559 0.5L0 15.1895L4.07399 19.2177L14.8559 8.55642L25.9259 19.5025L30 15.4743Z"/> </svg></span><ul class=' + pageCls + '>';

            for (var i = 0; i < this.pagesCount; i++) {
                pageHtml += '<li></li>';
            }
            pageHtml += '</ul><span class="slider-down-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="20" viewBox="0 0 30 20" fill="none"> <path d="M1.3091e-06 4.02859L7.57205 11.5158L15.1441 19.0029L30 4.31343L25.926 0.285223L15.1441 10.9465L4.07413 0.000379203L1.3091e-06 4.02859Z"/> </svg></span></div>';
            this.element.append(pageHtml);

            var pages = this.element.find(this.selectors.page);
            this.pageItem = pages.find('li');
            this.activeCls = this.selectors.active.substring(1);
            this.pageItem.eq(this.index).addClass(this.activeCls);

            if (this.isVertical) {
                pages.addClass('vertical');
            } else {
                pages.addClass('horizontal');
            }
        },

        /** Initialization event */
        _initEvent: function() {
            var self = this;

            /** Bind mouse wheel events
             * The firefox scroll wheel event is DOMMouseScroll
             */
            self.element.on('mousewheel DOMMouseScroll', function(e) {
                if (!$(".banner-container").hasClass("ended")) {
                    if ($(window).scrollTop() !== 0) {
                        $(window).scrollTop(0);
                    }
                    e.preventDefault();
                }
                var delta = e.originalEvent.wheelDelta || -e.originalEvent.detail;
                if (self.canScroll) {
                    if (delta > 0 && (self.options.loop || self.index)) {
                        if ($(window).scrollTop() == 0) {
                            self.prev();
                        }
                    } else if (delta < 0 && (self.options.loop || self.index < self.pagesCount - 1)) {
                        self.next();
                    }
                }
            });

            /** Bind keyboard events */
            if (self.options.keyboard) {
                $(document).on('keyup', function(e) {
                    var keyCode = e.keyCode;
                    if (keyCode === 37 || keyCode === 38) {
                        if ($(window).scrollTop() === 0 && !$("[data-fs-scroll] .page.vertical li:first-child").hasClass("active")) {
                            self.prev();
                            console.log("this is ruaned", $("html, body").scrollTop() === 0, $("html, body").offset().top)
                        }
                    } else if (keyCode === 39 || keyCode === 40) {
                        if (!$("[data-fs-scroll] .page.vertical li:last-child").hasClass("active")) {
                            self.next();
                        }
                    }
                })
            }

            /** Slider Arrow buttons START */
            $(".slider-upper-arrow").click(function() { // Up Arrow
                if ($(window).scrollTop() === 0 && !$("[data-fs-scroll] .page.vertical li:first-child").hasClass("active")) {
                    self.prev();
                }
            });

            $(".slider-down-arrow").click(function() { // Down Arrow
                if (!$("[data-fs-scroll] .page.vertical li:last-child").hasClass("active")) {
                    self.next();
                }
            });
            /** Slider Arrow buttons END */

            /** Mobile device banner slide on touch START */
            var startingY, currentY, movestatus;
            $(document).on('touchstart', function(e) {
                startingY = e.originalEvent.touches[0].pageY;
                if (!$("[data-fs-scroll] .page.vertical li:last-child").hasClass("active") && $(window).scrollTop() === 0) {
                    document.body.classList.add("stop-scrolling");
                } else {
                    document.body.classList.remove("stop-scrolling");
                }
            });

            $(document).on('touchmove', function(e) {
                currentY = e.originalEvent.touches[0].pageY;
                movestatus = true;
            });

            $(document).on('touchend', function(e) {
                if (movestatus) {
                    var delta = currentY - startingY;
                    if (delta > 0) {
                        if ($(window).scrollTop() === 0 && !$("[data-fs-scroll] .page.vertical li:first-child").hasClass("active")) {
                            self.prev();
                        }
                    } else {
                        if (!$("[data-fs-scroll] .page.vertical li:last-child").hasClass("active")) {
                            self.next();
                        }
                    }
                    currentY = null;
                    startingY = null;
                    movestatus = false;
                }
            });
            /** Mobile device banner slide on touch END */

            /**
             * Window resize event
             * Get the offset of the current page, relative to the offset of the viewport, slide only when the offset exceeds half
             */
            var timer = null;
            $(window).on('resize', function() {
                clearTimeout(timer);
                timer = setTimeout(function() {
                    // The offset on the first page is always 0 during the zooming process and does not affect
                    if (!self.index) {
                        return;
                    }

                    var offset = self.section.eq(self.index).offset();
                    var scrollLength = self._getScrollLength();
                    var offsetDelta = self.isVertical ? offset.top : offset.left;
                    if (Math.abs(offsetDelta) > scrollLength / 2) {
                        if (offsetDelta > 0) {
                            self.index--;
                        } else {
                            self.index++;
                        }
                    }
                    self._scrollPage();
                }, 200)
            });

            /** Paging click event */
            self.element.on('click', this.selectors.page + ' li', function(e) {
                self.index = $(this).index();
                self._scrollPage();
            });

            /** Triggered after the transition animation ends */
            if (_prefix) {
                self.sections.on('transitionend webkitTransitionEnd oTransitionEnd otransitionend', function() {
                    self.canScroll = true;
                    self._afterScroll();
                })
            }
        },

        /** Swipe to the current page */
        _scrollPage: function(init) {
            var self = this,
                dest = self.section.eq(self.index).position();

            if (!dest) return;

            self.canScroll = false;
            this._beforeScroll();

            if (_prefix) {
                var translate = self.isVertical ? 'translateY(-' + dest.top + 'px)' : 'translateX(-' + dest.left + 'px)';
                self.sections.css(_prefix + 'transition', 'all ' + self.options.duration + 'ms ' + self.options.timing);
                // self.sections.css(_prefix + 'transform', translate);
            } else {
                // Compatible with jquery animation function that does not support css3 transition animation
                var animateCss = self.isVertical ? { top: -dest.top } : { left: -dest.left };
                self.sections.animate(animateCss, self.options.duration, function() {
                    self.canScroll = true;
                    self._afterScroll();
                })
            }

            if (self.options.pagination && !init) {
                self.pageItem.eq(self.index).addClass(self.activeCls).siblings('li').removeClass(self.activeCls);
            }

            // Add 'dull' class to upper arrow if first slide is active
            if ($("[data-fs-scroll] .page.vertical li:first-child").hasClass("active")) {
                $(".slider-upper-arrow").addClass("dull");
            } else {
                $(".slider-upper-arrow").removeClass("dull");
            }

            // Add 'dull' class to down arrow if last slide is active
            if ($("[data-fs-scroll] .page.vertical li:last-child").hasClass("active")) {
                $(".slider-down-arrow").addClass("dull");
            } else {
                $(".slider-down-arrow").removeClass("dull");
            }
        },

        /** Swipe to start processing */
        _beforeScroll: function() {
            var self = this;
            if (self.options.beforeScroll && $.type(self.options.beforeScroll) === 'function') {
                self.options.beforeScroll.call(self, self.section.eq(self.index), self.index);
            }
        },

        /** Sliding end processing */
        _afterScroll: function() {
            var self = this;
            if (self.options.afterScroll && $.type(self.options.afterScroll) === 'function') {
                self.options.afterScroll.call(self, self.section.eq(self.index), self.index);
            }
        }
    }

    /**
     * The jquery prototype object of the binding plug-in
     */
    $.fn.fsScroll = function(options) {
        return this.each(function() {
            var self = $(this),
                instance = self.data('fsScroll');

            if (!instance) {
                instance = new FsScroll(self, options);
                self.data('fsScroll', instance);
            }

            if (typeof options === 'string' && instance[options]) {
                return instance[options]();
            }
        })
    }

    $(function() {
        $('[data-fs-scroll]').fsScroll();
    })

})(jQuery);