@extends('layouts.appdef')

@section('content')

<header id="cheers-lighttheme" class="cheers-detailEvent" style="background: url('{{ asset('public/assets/img/audience.jpg')}}') no-repeat;">
    <div class="img-overlay">
    </div>
    <div class="heropro-type">
        <div class="title-box">
            <!--  you dont need the user-login-box html  -->
            <!--  for demo purposes only and its shit  -->
            <div class="myfullpad">
                <div class="row g-0">
                    <div class="col-xxl-6 col-xl-6 col-xxl-6 col-lg-6 col-md-6 col-sm-12 left-headevent">
                        <div class="text-box">
                            <h3>CHEERS MUSIC EVENT</h3>
                            <span class="metaeventstd"><i class="fad fa-calendar-day"></i> 29 Sep 2020 20:00</span>
                            <span class="metaeventstd"><i class="fad fa-map-marker-alt"></i> Lap. Brawijaya</span> 
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-xxl-6 col-lg-6 col-md-6 col-sm-12 align-self-center right-headevent">
                        <div class="the-buttonregist"> 
                            <a href="" class="btn btn-danger btn-outcheerswhite"><i class="fad fa-share-square"></i> Share</a>
                            <a href="https://recycheers.saycheers.com/" class="btn btn-danger btn-cheerslight"><i class="fad fa-money-check-edit"></i> Registration</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section id="cheers-eventIntro">
    <div class="container">
        <div class="row g-0">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 about-img">
                <img src="{{ asset('public/assets/img/637C1448.jpg')}}"  alt="cheers-musicevent" class="img-fluid rounded banner-event">
            </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-6 col-sm-12">
                <div class="container">
                    <div class="title-section text-left">
                        <h3><span style="font-size: 16px; font-weight: 500;">ABOUT</span> <br> Cheers Music Event</h3>
                        <hr class="cheers-separator">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book./p>
                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="cheers-stars" style="background: url('{{ asset('public/assets/img/audience.jpg')}}');">
    <div class="overlay">
        <div class="myfullpad">
            <div class="row g-0">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12">

                </div>

                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 list-stars">
                    <div class="subs-text">
                        <h3><span style="font-weight: 500;">Our Guest</span> Stars</h3>
                        <p>Molestie ac feugiat sed lectus. Cursus sit amet dictum sit amet. Egestas diam in arcu cursus euismod quis viverra. Eget gravida cum sociis natoque penatibus et magnis.</p>

                        <div class="row g-0">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 list-card">
                                <div class="eventglass-card mb-1">
                                    <div class="row g-0 box-intro">
                                        <div class="col-3">
                                            <img src="{{ asset('public/assets/img/isyana.jpg')}}" class="card-img rounded">
                                        </div>

                                        <div class="col-9 align-self-center">
                                            <div class="card-body">
                                                <div class="title-section text-left">
                                                    <h5>Isyana Sarasvati</h5>
                                                    <p>Singer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 list-card">
                                <div class="eventglass-card mb-1">
                                    <div class="row g-0 box-intro">
                                        <div class="col-3">
                                            <img src="{{ asset('public/assets/img/raisa.png')}}" class="card-img rounded">
                                        </div>

                                        <div class="col-9 align-self-center">
                                            <div class="card-body">
                                                <div class="title-section text-left">
                                                    <h5>Raisa</h5>
                                                    <p>Singer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="cheers-eventinfo">
    <div class="myfullpad">
        <div class="row mb-5">
            <div class="col-lg-12">

            </div>
        </div>
    </div>
</section>
@endsection