$(document).ready(function () {
    const $firstQuestion = $(".question-btn").first();
    const firstTargetId = $firstQuestion.data("toggle");
    const $firstTarget = $("#" + firstTargetId);

    $firstTarget.slideDown();
    $firstQuestion.find(".accordion__icon").addClass("rotate-180");

    $(".question-btn").click(function () {
        const targetId = $(this).data("toggle");
        const $target = $("#" + targetId);

        $(".answer").not($target).slideUp();
        $(".accordion__icon")
            .not($(this).find(".accordion__icon"))
            .removeClass("rotate-180")
            .addClass("rotate-0");

        $target.slideToggle();

        const $icon = $(this).find(".accordion__icon");
        if ($icon.hasClass("rotate-180")) {
            $icon.removeClass("rotate-180").addClass("rotate-0");
        } else {
            $icon.removeClass("rotate-0").addClass("rotate-180");
        }
    });

    // Accordion configuration done

    const header = $("header");

    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 300) {
            header.addClass("sticky");
        } else {
            header.removeClass("sticky");
        }
    });
    // Header Sticky added

    // Header Menu Active Class added

    $(".toggle-menu").click(function () {
        $(".header__menus").toggleClass("show-menu");
        const hamburgerIcon = $(this).find(".hamburger-icon");
        const closeIcon = $(this).find(".close-icon");

        if ($(".header__menus").hasClass("show-menu")) {
            // Show the close icon and hide the hamburger icon
            hamburgerIcon.hide();
            closeIcon.show();
        } else {
            // Show the hamburger icon and hide the close icon
            hamburgerIcon.show();
            closeIcon.hide();
        }
    });

    // Header Toggle Menu

    // Toggle menu Integration

    // Add smooth scrolling to all links
    $("a").on("click", function (event) {
        if (this.hash !== "") {
            var hash = this.hash;
            $("html, body").animate(
                {
                    scrollTop: $(hash).offset().top,
                },
                800,
                function () {
                    window.location.hash = hash;
                }
            );
        } // End if
    });
    // Smooth Scroll Animation
});
AOS.init();

function closeNav() {
    const navbar = $("#navbar");
    const hamburgerIcon = $(".toggle-menu").find(".hamburger-icon");
    const closeIcon = $(".toggle-menu").find(".close-icon");

    if (navbar.hasClass("show-menu")) {
        navbar.removeClass("show-menu");
        // Show the hamburger icon and hide the close icon
        hamburgerIcon.show();
        closeIcon.hide();
    }
}
