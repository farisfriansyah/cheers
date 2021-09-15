@extends('layouts.login')

@section('content')

<div class="container-fluid full-height">
    <div class="row row-height">
        <div class="col-lg-6 content-left">
            <div class="content-left-wrapper">
                <div>
                    <figure></figure>
                </div>
            </div>
            <!-- /content-left-wrapper -->
        </div>
        <!-- /content-left -->

        <div class="col-lg-6 content-right" id="start">
            <form id="wrapped" method="POST">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="ch-username" placeholder="Username" required="required">
                    <label for="ch-username">Username</label>
                </div>
                
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="ch-password" name="ch-password" placeholder="Password" required="required">
                    <label for="ch-password">Password</label>
                </div>

                <p id="divCheckPassword" class="form-text"></p>

                <div class="d-flex justify-content-between intern-link">
                    <a href="{{ url('/registration') }}" class="">
                        Register
                    </a>

                    <a href="#" class="">
                        Forgot password?
                    </a>
                </div>

                <button type="submit" href="#" id="btn-register" class="btn btn-danger btn-cheerslight text-center">Continue ></button>
            </form>
        </div>
        <!-- /content-right-->
    </div>
    <!-- /row-->
</div>
<!-- /container-fluid -->




@endsection