<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta name="url" content="{{ url('/') }}">

{!! SEOMeta::generate() !!}
{!! OpenGraph::generate() !!}
{!! Twitter::generate() !!}
{!! JsonLd::generate() !!}

<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('public/assets/vendor/bootstrap/dist/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('public/assets/vendor/fontawesome-pro/css/all.min.css')}}">
<link rel="stylesheet" href="{{ asset('public/assets/vendor/aos/dist/aos.css')}}">
<link rel="stylesheet" href="{{ asset('public/assets/vendor/fullcalendar/main.css')}}">
<link rel="stylesheet" href="{{ asset('public/assets/vendor/datepicker/css/bootstrap-datepicker3.min.css')}}">
<link rel="stylesheet" href="{{ asset('public/assets/vendor/owlcarousel/dist/assets/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{ asset('public/assets/vendor/owlcarousel/dist/assets/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{ asset('public/assets/scss/style.css')}}">

<script type="text/javascript">
    var onSubmit = function(token) {
            // console.log(token);
            document.getElementById("CCcontactSubmit").disabled = false;
    };
    var offSubmit = function(token) {
            // console.log(token);
            document.getElementById("CCcontactSubmit").disabled = true;
    };
    var onloadCallback = function() {
        grecaptcha.render('CheersContact', {
          'sitekey' : '6LfcR3EdAAAAAKIO4VQUy8ru_lKJXJSWLfwm6Cnj',
          'callback' : onSubmit,
          'expired-callback' : offSubmit
        });
    };
    
</script>