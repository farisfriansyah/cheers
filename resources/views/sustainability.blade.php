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
                        <h3>@lang('sustainability.sustainability-title')</h3>
                        <figure>
                            <blockquote class="blockquote">
                              <p><em>"@lang('sustainability.sustainability-quotes')"</em></p>
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
                    <h3>@lang('sustainability.sustainability-greenprotit')</h3>
                    <p class="text-left">@lang('sustainability.sustainability-greenprotext1')</p>
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
                            <p>@lang('sustainability.sustainability-introText')</p>
                            <a href="https://recycheers.saycheers.com/" class="btn btn-cheerslight">@lang('sustainability.sustainability-introButton')</a>
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
                            <h3>@lang('sustainability.sustainability-tit1')</h3>
                            
                            <p>@lang('sustainability.sustainability-text1')</p>
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
                            <h3>@lang('sustainability.sustainability-tit2') </h3>
                            
                            <p>@lang('sustainability.sustainability-text2')</p>
                            <p>@lang('sustainability.sustainability-text21')</p>
                            {{-- <a href="https://recycheers.saycheers.com/" class="btn btn-danger btn-cheerslight">@lang('welcome.homeRecycheersBtnRegis')</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center align-self-center campaign-image">
                    <img src="{{ asset('public/assets/img/sustainability/solarenergi.jpg')}}" class="img-campaign rounded" alt="Sustainability">
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
                            <h3>@lang('sustainability.sustainability-tit3')</h3>
                            
                            <p>@lang('sustainability.sustainability-text3')</p>
                            <p>@lang('sustainability.sustainability-text31')</p>
                            {{-- <a href="https://recycheers.saycheers.com/" class="btn btn-danger btn-cheerslight">@lang('welcome.homeRecycheersBtnRegis')</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center align-self-center campaign-image">
                    <img src="{{ asset('public/assets/img/sustainability/reforest1.jpg')}}" class="img-campaign rounded" alt="Sustainability">
                </div>
            </div>
        </div>
    </div>
</section>



@endsection