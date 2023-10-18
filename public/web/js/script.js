if ($('body').hasClass('home')) {
    $('.banner-container').fsScroll({
        keyboard: true,
        loop: false,

        beforeScroll: function(el, index) {
            // el.find('h2').addClass('text-animate');
            el.prev().prop("checked", true);
            $('.section').removeClass('previous-slide').removeClass('current-active');
            el.addClass('current-active').addClass('last-active');
            el.prevAll('.section').addClass('previous-slide').removeClass('last-active');
        },

        afterScroll: function(el, index) {
            if ($("[data-fs-scroll] .page.vertical li:last-child").hasClass("active")) {
                $(".banner-container").addClass("ended");
            } else {
                $(".banner-container").removeClass("ended");
            }
            // el.find('h2').removeClass('text-animate');
        }
    });

    // Prevent scroll if banner in view and last slide is not active
    $(window).on("keydown", function(e) {
        var keyCode = e.keyCode;
        if (keyCode === 39 || keyCode === 40) {
            if (!$("[data-fs-scroll] .page.vertical li:last-child").hasClass("active")) {
                e.preventDefault();
                console.log("this is running")
            }
        }
    }, false);
}