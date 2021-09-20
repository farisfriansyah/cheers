@extends('layouts.login')

@section('content')

<div class="container-fluid full-height">
    <div class="row row-height">
        <div class="col-lg-6 bg-content-left">
            <div class="content-left-wrapper">
                <div>
                    <figure></figure>
                </div>
            </div>
            <!-- /content-left-wrapper -->
        </div>
        <!-- /content-left -->

        <div class="col-lg-6 content-right">
            <form id="wrapped" method="POST">
                <div class="d-block">
                    <h3 class="text-center"><span style="font-weight: 500;">Welcome</span> Back</h3>
                    <hr class="cheers-separator">
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="ch-username" placeholder="Username" required="required">
                    <label for="ch-username">Username</label>
                </div>
                
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="ch-password" name="ch-password" placeholder="Password" required="required">
                    <label for="ch-password">Password</label>
                </div>

                <div class="d-flex justify-content-between intern-link">
                    <a href="{{ url('/registration') }}" class="">
                        Register
                    </a>

                    <a href="#" class="">
                        Forgot password?
                    </a>
                </div>

                <button type="submit" href="#" id="btn-login" class="btn btn-danger btn-cheerslight text-center">Login</button>
            </form>
        </div>
        <!-- /content-right-->
    </div>
    <!-- /row-->
</div>
<!-- /container-fluid -->




@endsection