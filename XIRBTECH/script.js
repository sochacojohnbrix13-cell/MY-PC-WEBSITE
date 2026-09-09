{


    /* ========================================
       NAVBAR SCROLL EFFECT
    ======================================== */

    $(window).on("scroll", function () {

        if ($(window).scrollTop() > 50) {

            $(".navbar").css(
                "background",
                "rgba(5, 7, 11, 0.98)"
            );

        } else {

            $(".navbar").css(
                "background",
                "rgba(8, 11, 18, 0.92)"
            );

        }

    });



    /* ========================================
       MOBILE NAVBAR
    ======================================== */

    $(".navbar-nav .nav-link").on("click", function () {

        $(".navbar-collapse").collapse("hide");

    });



    /* ========================================
       CATEGORY CARD HOVER
    ======================================== */

    $(".category-card").hover(

        function () {

            $(this)
                .find(".category-icon")
                .css("transform", "scale(1.08)");

        },

        function () {

            $(this)
                .find(".category-icon")
                .css("transform", "scale(1)");

        }

    );



    /* ========================================
       SMOOTH PAGE TRANSITION
    ======================================== */

    $("a").on("click", function (event) {

        let link = $(this).attr("href");

        if (
            link &&
            link !== "#" &&
            !link.startsWith("http") &&
            !link.startsWith("#")
        ) {

            event.preventDefault();

            $("body").fadeOut(150, function () {

                window.location.href = link;

            });

        }

    });


});