$(document).ready(function() {

    const navbarMenu = document.getElementById("navbar");
    const burgerMenu = document.getElementById("burger");
    const overlayMenu = document.querySelector(".overlay");

    // Show and Hide Navbar Function
    const toggleMenu = () => {
        navbarMenu.classList.toggle("active");
        overlayMenu.classList.toggle("active");
    };

    // Collapsible Mobile Submenu Function
    const collapseSubMenu = () => {
        navbarMenu
            .querySelector(".menu-dropdown.active .submenu")
            .removeAttribute("style");
        navbarMenu.querySelector(".menu-dropdown.active").classList.remove("active");
    };

    // Toggle Mobile Submenu Function
    const toggleSubMenu = (e) => {
        if (e.target.hasAttribute("data-toggle") && window.innerWidth <= 991) {
            e.preventDefault();
            const menuDropdown = e.target.parentElement;

            // If Dropdown is Expanded, then Collapse It
            if (menuDropdown.classList.contains("active")) {
                collapseSubMenu();
            } else {
                // Collapse Existing Expanded Dropdown
                if (navbarMenu.querySelector(".menu-dropdown.active")) {
                    collapseSubMenu();
                }

                // Expanded the New Dropdown
                menuDropdown.classList.add("active");
                const subMenu = menuDropdown.querySelector(".submenu");
                subMenu.style.maxHeight = subMenu.scrollHeight + "px";
            }
        }
    };

    // Fixed Resize Window Function
    const resizeWindow = () => {
        if (window.innerWidth > 991) {
            if (navbarMenu.classList.contains("active")) {
                toggleMenu();
            }
            if (navbarMenu.querySelector(".menu-dropdown.active")) {
                collapseSubMenu();
            }
        }
    };

    // Initialize Event Listeners
    burgerMenu.addEventListener("click", toggleMenu);
    overlayMenu.addEventListener("click", toggleMenu);
    navbarMenu.addEventListener("click", toggleSubMenu);
    window.addEventListener("resize", resizeWindow);



    $('.cancel').click(function() {
        $('.navbar').removeClass("active");
        $('.overlay').removeClass("active");
    });

    $('.menu-item').click(function() {
        $('.menu-item ').removeClass("activelink");
        $(this).addClass("activelink");
    });


    ////////////////////////// End Menu

    $(window).scroll(function() {
        if ($(this).scrollTop() > 1) {
            $('.header').addClass("sticky");
        } else {
            if ($(this).scrollTop() < 1) {
                $('.header').removeClass("sticky");
            }
        }
    });

    // End Scroll Header

    $(window).scroll(function() {
        if ($(this).scrollTop() > 600) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });
    //Click event to scroll to top
    $('.scrollToTop').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 800);
        return false;
    });

    // End Scroll Top


    var colorLi = $(".color  li");
    colorLi
        .eq(0).css("backgroundColor", "transparent").end()
        .eq(1).css("backgroundColor", "transparent").end()

    colorLi.click(function() {
        $("link[href*='theme']").attr("href", $(this).attr("data-value"));
    });

    $('.color li').click(function() {
        $('.color li').removeClass("active");
        $(this).addClass("active");
    });


    // End colors dark


    $(document).ready(function() {
        $('.searchicon').click(function(event) {
            event.stopPropagation();
            $(".showboxsearch").fadeIn("slow");
        });
        $(".showboxsearch").on("click", function(event) {
            event.stopPropagation();
        });
    });

    $(document).on("click", function() {
        $(".showboxsearch").fadeOut();
    });


    // End Search


    $('.p-btn').click(function() {
        $(".bottoms").toggleClass('active');
    });
    // End icons teams

    $('.iconplay').click(function() {
        $(this).toggleClass('active');
    });

    // End play and stop voice

    $(".slider-clients").slick({
        dots: true,
        infinite: true,
        speed: 1000,
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
                breakpoint: 991,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                },
            },

            {
                breakpoint: 550,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
        ],
    });

    // End clients

    $(".slider-articles").slick({
        centerMode: true,
        slidesToShow: 3,
        //speed: 2000,
        dots: true,
        arrows: true,
        swipe: true,
        infinite: true,
        swipeToSlide: true,
        autoplay: true,
        //adaptiveHeight: true,
        //autoplaySpeed: 3000,
        responsive: [{
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });

    // End slider articles

    $(' .listlike li').click(function() {
        $(' .listlike li').removeClass("active");
        $(this).addClass("active");
    });

    // End icons like


    $('.btnshow').click(function() {
        $('.detelsuser').addClass("active");
        $('body').addClass("active");
    });

    $('.popup-close').click(function() {
        $('.detelsuser').removeClass("active");
        $('body').removeClass("active");
    });

    $('.pagination li a').click(function() {
        $('.pagination li a').removeClass("active");
        $(this).addClass("active");
    });


    $('a.nav__link[href*="#"]:not([href="#"])').click(function() {
        if (
            location.pathname.replace(/^\//, "") ==
            this.pathname.replace(/^\//, "") &&
            location.hostname == this.hostname
        ) {
            var target = $(this.hash);
            target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
            if (target.length) {
                $("html, body").animate({
                        scrollTop: target.offset().top,
                    },
                    1000
                );
                return false;
            }
        }
    });

    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });


    $('#audio-control').click(function() {
        if ($("#myVideo").prop('muted')) {
            $("#myVideo").prop('muted', false);
            // $(this).text('Mute');
            // or toggle class, style it with a volume icon sprite, change background-position
        } else {
            $("#myVideo").prop('muted', true);
            // $(this).text('Unmute');
        }
    });

    $('#audio-control').click(function() {
        $(this).toggleClass('active');
    });



    $('.sliderabout').carousel({
        num: 5,
        maxWidth: 500,
        maxHeight: 500,
        distance: 50,
        scale: 0.6,
        animationTime: 1000,
        showTime: 4000
    });






});



wow = new WOW({
    animateClass: 'animated',
    offset: 100,
    callback: function(box) {
        console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
    }
});
wow.init();