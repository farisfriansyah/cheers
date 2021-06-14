$(document).ready(function () {

    $('#btn-register').prop('disabled', true);
    $('#ch-Confirmpassword').on('keyup', function () {
        var password = $("#ch-password").val();
        var confirmPassword = $("#ch-Confirmpassword").val();

        if (password != confirmPassword) {
            $("#divCheckPassword").html("Passwords do not match!").addClass('text-danger').removeClass('text-success');
            $('#btn-register').prop('disabled', true);
        } else {
            $("#divCheckPassword").html("Passwords match.").addClass('text-success').removeClass('text-danger');
            $('#btn-register').prop('disabled', false);
        }
    });

    new Date().getFullYear();
    document.getElementById("year").innerHTML = new Date().getFullYear();

    $(window).scroll(function () {
        if ($(this).scrollTop() > 70) {
            $('.navbar').addClass('bg-white', 2000, 'fade');
            $('.fixed-cta').addClass('show', 2000, 'fade');
        } else {
            $('.navbar').removeClass('bg-white', 2000, 'fade');
            $('.fixed-cta').removeClass('show', 2000, 'fade');
        }
    });

    var highlightBlog = $('#highlight-blog');
    highlightBlog.owlCarousel({
        nav: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        items: 1,
        loop: true

    });

    var carouselBG = $('#slide-carousel');
    carouselBG.owlCarousel({
        autoplay: true,
        autoplayTimeout: 6000,
        autoplayHoverPause: false,
        items: 1,
        nav: false,
        loop: true,
        dots: true,
        dotsData: true,
        dotsContainer: '.card-listproduct'
    });

    $('.card-listproduct').on('click', '.card-cheersproduct', function (e) {
        carouselBG.trigger('to.owl.carousel', [$(this).index(), 300]);
    });

    const slider = document.querySelector('.card-listproduct');
    let isDown = false;
    let startX;
    let scrollLeft;

    slider.addEventListener('mousedown', (e) => {
        isDown = true;
        slider.classList.add('active');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });
    slider.addEventListener('mouseleave', () => {
        isDown = false;
        slider.classList.remove('active');
    });
    slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.classList.remove('active');
    });
    slider.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 3; //scroll-fast
        slider.scrollLeft = scrollLeft - walk;
        // console.log(walk);
    });
});

jQuery(document).ready(function ($) {

    var carousel = $("#owl-Prodcontrol");
    carousel.owlCarousel({
        autoplay: false,
        autoplayTimeout: 3000,
        autoplayHoverPause: false,
        loop: false,
        items: 4,
        margin: 0,
        nav: false,
        dots: true,
        dotsData: true
    });

    var carouseleventPromo = $('#eventPromo');
    carouseleventPromo.owlCarousel({
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        items: 1,
        nav: true,
        loop: false,
        dots: true
    });

    var mixer = mixitup('#cheers-faq .accordion .container');
});