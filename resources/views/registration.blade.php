@extends('layouts.login')

@section('content')

<main id="cheers-registration">
    <div class="row d-flex g-0">
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 order-md-2 bg-imgHero">
            <div class="hero-login">
                <h3 class="text-center">Registration</h3>
                <hr class="cheers-separator">
                <form>
                    <div class="mb-3">
                        <label for="ch-email" class="form-label">Email address</label>
                        <input type="email" class="form-control input-subs" id="ch-email" placeholder="name@example.com" required="required">
                    </div>

                    <div class="mb-3">
                        <label for="ch-password" class="form-label">Password</label>
                        <input type="password" class="form-control input-subs" id="ch-password" name="ch-password" placeholder="Your password" required="required">
                    </div>

                    <div class="mb-3">
                        <label for="ch-Confirmpassword" class="form-label">Retype Password</label>
                        <input type="password" class="form-control input-subs" id="ch-Confirmpassword" name="ch-confirmpassword" placeholder="Retype password" required="required">
                    </div>

                    <p id="divCheckPassword" class="form-text"></p>

                    <div class="d-flex justify-content-between intern-link">
                        <a href="{{ url('/login') }}" class="">
                            Sign In
                        </a>

                        <a href="#" class="">
                            Forgot password?
                        </a>
                    </div>

                    <button type="submit" href="#" id="btn-register" class="btn btn-danger btn-cheerslight text-center">Sign Up</button>
                </form>

                <!-- <div class="socmed justify-content-between">
                    <a href="#">Facebook</a>
                    <a href="#">Twitter</a>
                    <a href="#">Youtube</a>
                    <a href="#">Instagram</a>
                </div> -->
            </div>
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 order-md-1 align-self-center img-login">
            <img src="{{ asset('public/assets/img/loginbg2.png')}}" alt="cheers-alkaline">
        </div>
        
    </div>
</main>


@endsection