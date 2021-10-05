var CSRF_TOKEN =  $('meta[name="csrf-token"]').attr('content');
var URL  = $('meta[name="url"]').attr('content');

$(document).ready(function () {
    
    $('.alert').hide();

    $('#ch-username').on("input", function() {
        var isi     = $(this).val();
        $.ajax({
            type: "POST",
            url: URL+"/reg/check_unique",
            dataType: "json",
            data: {_token: CSRF_TOKEN,'where':'id','value':isi}
        }).done(function(msg){
            if(msg==1){
                $("#divCheckUsername").html("Username is exists!").addClass('text-danger').removeClass('text-success');
                $('#btn-register').prop('disabled', true);
            }
            else{
                $("#divCheckUsername").html("").addClass('text-success').removeClass('text-danger');
                $('#btn-register').prop('disabled', false);
            }
        
        });

    });

    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    $('#ch-email').on("input", function() {
        let isi = $(this).val();
        let validasi = isEmail(isi);
        if(!validasi){
            $("#divCheckEmail").html("Email is invalid").addClass('text-danger').removeClass('text-success');
            $('#btn-register').prop('disabled', true);
        }
        else{
            $("#divCheckEmail").html("").addClass('text-success').removeClass('text-danger');

            $.ajax({
                type: "POST",
                url: URL+"/reg/check_unique",
                dataType: "json",
                data: {_token: CSRF_TOKEN,'where':'email','value':isi}
            }).done(function(msg){
                if(msg==1){
                    $("#divCheckEmail").html("Email is exists!").addClass('text-danger').removeClass('text-success');
                    $('#btn-register').prop('disabled', true);
                }
                else{
                    $("#divCheckEmail").html("").addClass('text-success').removeClass('text-danger');
                    $('#btn-register').prop('disabled', false);
                }
            
            });

        }
    });


    // $('#btn-register').prop('disabled', true);
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


    /** LOGIN **/
    // $('.alert-danger').delay(1000).fadeOut("slow");
    // $('#frm_login').on('submit', function(){
    //    

    // });

    new Date().getFullYear();
    $("#year").innerHTML = new Date().getFullYear();

    $(window).scroll(function () {
        if ($(this).scrollTop() > 70) {
            $('.navbar').addClass('bg-white', 2000, 'fade');
            $('.navbar .top-navbar').addClass('hidenavtop', 5000, 'slideUp');
            $('.fixed-cta').addClass('show', 2000, 'fade');
        } else {
            $('.navbar').removeClass('bg-white', 2000, 'fade');
            $('.navbar .top-navbar').removeClass('hidenavtop', 5000, 'slideDown');
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

    if(slider){
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
    }

    $('.regi-datepicker').datepicker({
        format: 'dd M yyyy'
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
    
    var containerEl = document.querySelector('#cheers-faq .accordion .container');
    var mixer;

    if (containerEl) {
        mixer = mixitup(containerEl);
    }
    
});

function checkLogin()
{
    $status = true;

    let id   = $('#ch-username').val();
    let pass = $('#ch-password').val();
    
    $.ajax({
        type: "POST",
        url: URL+"/login/check",
        dataType: "json",
        data: {_token: CSRF_TOKEN,'id':id,'password':pass}
    }).done(function(msg){
        if(msg[0] == false){
            $('.alert').show();
            $('#login_error').html(msg[1]).addClass('text-danger');
            $status = false;
        }
        else{
            $('.alert').hide();
            $('#login_error').html('');
            // window.location.href = "{{ route('login/do/"+id+"')}}";
        }
    });

    return $status;
}