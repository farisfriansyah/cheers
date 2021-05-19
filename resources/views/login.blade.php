@extends('layouts.login')

@section('content')

<main id="cheers-login">
    <div class="row d-flex g-0">
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 order-md-2 bg-imgHero">
            <div class="hero-login">
                <h3 class="text-center"><span style="font-weight: 500;">Welcome</span> Back</h3>
                <hr class="cheers-separator">
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control input-subs" id="email" placeholder="name@example.com">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control input-subs" id="password" placeholder="Your password">
                    </div>

                    <div class="d-flex justify-content-between intern-link">
                        <a href="registration.php" class="">
                            Register
                        </a>

                        <a href="#" class="">
                            Forgot password?
                        </a>
                    </div>

                    <button type="submit" href="#cheers-about" class="btn btn-danger btn-cheerslight text-center">Sign In</button>
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