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
            

            <form id="wrapped" method="POST" action="{{ url('reg/do_register') }}">
                @csrf
                <div class="d-block">
                    <h3 class="text-center">Registration</h3>
                    <hr class="cheers-separator">
                </div>
                
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="ch-username" placeholder="Username" required="required" name="id">
                    <label for="ch-username">Username</label>
                </div>
                <p id="divCheckUsername" class="form-text"></p>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="ch-fullname" placeholder="Fullname" required="required" name="fullname">
                    <label for="ch-fullname">Fullname</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="ch-phone" placeholder="Phone Number" required="required" name="phone">
                    <label for="ch-phone">Phone Number</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="ch-email" placeholder="Email" required="required" name="email">
                    <label for="ch-email">Email</label>
                </div>
                <p id="divCheckEmail" class="form-text"></p>

                <div class="row mb-3">
                    <div class="col-5">
                        <div class="form-floating">
                            <input type="text" id="ch-pob" class="form-control" placeholder="Place Of Birth" aria-label="Place Of Birth" name="birthplace">
                            <label for="ch-pob">Place Of Birth</label>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="form-floating">
                            <input type="text" id="ch-dob" class="form-control regi-datepicker" placeholder="Date of Birth" aria-label="Date of Birth" name="birthdate">
                            <label for="ch-dob">Date of Birth</label>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    
                    <div class="d-flex mt-2">
                        <label for="sex">Gender</label>
                        <div class="d-flex ms-5">
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" name="sex" id="Male" value="m">
                                <label class="form-check-label" for="Male">
                                Male
                                </label>
                            </div>
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" name="sex" id="Female" value="f">
                                <label class="form-check-label" for="Female">
                                Female
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="ch-password" name="password" placeholder="Password" required="required">
                    <label for="ch-password">Password</label>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control" id="ch-Confirmpassword" placeholder="Retype Password" required="required">
                    <label for="ch-Confirmpassword">Retype Password</label>
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

                <button type="submit"  id="btn-register" class="btn btn-danger btn-cheerslight text-center">Continue ></button>
            </form>
        </div>
        <!-- /content-right-->
    </div>
    <!-- /row-->
</div>
<!-- /container-fluid -->




@endsection