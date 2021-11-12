@extends('layouts.alkaline')

@section('content')

<header id="cheers-lighttheme" class="cheers-sustainability" style="background: url('{{ asset('public/assets/img/sustainability-1.png')}}') no-repeat;">
    <div class="img-overlay">
    </div>
    <div class="heropro-type">
        <div class="title-box">
            <div class="myfullpad">
                <div class="row">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6">
                        <h3>Our Pledge</h3>
                        <figure>
                            <blockquote class="blockquote">
                              <p><em>"I am only one, but still I am one. I cannot do everything, but still I can do something. And because I can’t do everything, I will not refuse to do something that I can do."</em></p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                <cite title="Source Title">Edward Everett Hale </cite>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="cheers-introsustain">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-12 col-sm-12">
                <div class="title-section text-center">
                    <h3>@lang('brandstory.brand-title')</h3>
                    <p class="text-left">@lang('brandstory.brand-midtext')</p>
                </div>
                
            </div>
            <div class="col-md-12">
                <img class="img-fluid rounded" src="{{ asset('public/assets/img/sustainability/reforest2.jpg')}}">
            </div>
        </div>
    </div>
</section>

<section id="sustainability-recycheers">
    <div class="overlay">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-12 col-sm-12 subs-form">
                    <div class="container-fluid mb-5">
                        <div class="subs-text text-center">
                            <img src="{{ asset('public/assets/img/sustainability/recycheers.png')}}" >
                            <p>@lang('welcome.homeMemberSub')</p>
                            <a href="btn btn-cheerlight">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cheers-contentofsustain">
    <div class="cheers-sustaincontent">
        <div class="container">
            <div class="row sorted-area">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 align-self-center campaign-info">
                    <div class="container">
                        <div class="title-section text-left">
                            <h3>One - Roof System Production</h3>
                            
                            <p>@lang('welcome.homeRecycheersSub')</p>
                            {{-- <a href="https://recycheers.saycheers.com/" class="btn btn-danger btn-cheerslight">@lang('welcome.homeRecycheersBtnRegis')</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center align-self-center campaign-image">
                    <img src="{{ asset('public/assets/img/sustainability/oneroof.jpg')}}" class="img-campaign rounded" alt="campaign">
                </div>
            </div>
        </div>
    </div>
    
    <div class="cheers-sustaincontent">
        <div class="container">
            <div class="row sorted-area">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 align-self-center campaign-info">
                    <div class="container">
                        <div class="title-section text-left">
                            <h3>Solar Energy </h3>
                            
                            <p>@lang('welcome.homeRecycheersSub')</p>
                            {{-- <a href="https://recycheers.saycheers.com/" class="btn btn-danger btn-cheerslight">@lang('welcome.homeRecycheersBtnRegis')</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center align-self-center campaign-image">
                    <img src="{{ asset('public/assets/img/sustainability/solarenergi.jpg')}}" class="img-campaign rounded" alt="campaign">
                </div>
            </div>
        </div>
    </div>
    
    <div class="cheers-sustaincontent">
        <div class="container">
            <div class="row sorted-area">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 align-self-center campaign-info">
                    <div class="container">
                        <div class="title-section text-left">
                            <h3>Reforestation</h3>
                            
                            <p>@lang('welcome.homeRecycheersSub')</p>
                            {{-- <a href="https://recycheers.saycheers.com/" class="btn btn-danger btn-cheerslight">@lang('welcome.homeRecycheersBtnRegis')</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center align-self-center campaign-image">
                    <img src="{{ asset('public/assets/img/sustainability/reforest1.jpg')}}" class="img-campaign rounded" alt="campaign">
                </div>
            </div>
        </div>
    </div>
</section>



@endsection