@extends('layouts.appdef')

@section('content')

<main id="cheers-hero">
    <div class="row d-flex align-items-center g-0">
        <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-6 col-sm-12 order-md-2 bg-imgHero">
            <img src="{{ asset('public/assets/img/cheers-all.png')}}" alt="cheers-alkaline">
        </div>
        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-12 order-md-1">
            <div class="hero-title">
                <img src="{{ asset('public/assets/img/cheers-logo.png')}}" alt="">
                <h3 class="h3-display">Cheers Healthy</h3><h1>Drinking Water</h1>
                <hr class="cheers-separator">
                <p class="lead">@lang('welcome.heroSubtitle')</p>
                <a href="{{ url('/cheers-alkaline') }}" class="btn btn-danger btn-cheerslight">@lang('welcome.heroBtn')</a>
            </div>

            <div class="socmed">
                <a href="https://www.facebook.com/CheersWater/">Facebook</a>
                <a href="https://twitter.com/CheersWater">Twitter</a>
                <a href="https://www.youtube.com/channel/UCRu-4WLrHdPyeKtCsJV7otg">Youtube</a>
                <a href="https://www.instagram.com/cheerswater/">Instagram</a>
            </div>
        </div>
        
    </div>
</main>

<section id="cheers-about">
    <div class="container">
        <div class="row g-0">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 about-img">
                <img src="{{ asset('public/assets/img/about-home.png')}}" alt="" style="width: 340px;">
            </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-6 col-sm-12">
                <div class="container">
                    <div class="title-section text-left">
                        <h3><span style="font-size: 16px; font-weight: 500;">Why</span> <br> Cheers</h3>
                        <hr class="cheers-separator">
                        <p>@lang('welcome.homeWhycheersSub')</p>
                        <a href="{{ url('/whycheers') }}" class="btn btn-danger btn-outcheerslight mt-3">@lang('welcome.homeWhycheersBtn')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="cheers-event">
    <div class="container">
        <div class="text-left">
            <h3>Promo</h3>
            <hr class="cheers-separator">
            
        </div>
        <div class="row mb-5">
            @foreach ($data['promos'] as $prm)
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 order-md-2 promo-part">
                <a href="#">
                    <div class="card card-promo">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <div class="cardpromo-img">
                                    <div class="promoicon">
                                        <div id="burst-12"><div><i class="fad fa-percentage"></i></div></div>
                                        
                                    </div>
                                    <img src="{{ $baseurl.$prm['image'] }}" class="promo-img rounded" alt="...">
                                </div>
                               
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h6 class="card-title">Promo</h6>
                                    <p class="card-text">{!! $prm['description'] !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
           
        </div>
        <div class="row g-0">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 order-md-2 align-self-center title-part">
                <div class="container">
                    <div class="title-section text-left">
                        <h3>Event</h3>
                        <hr class="cheers-separator">
                        <p>@lang('welcome.homeEventSub')</p>
                        <a href="{{ url('event') }}" class="btn btn-danger btn-outcheerslight">@lang('welcome.homeEventBtnAll')</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 order-md-1 align-self-center event-part">
                
                <div id="eventPromo" class="owl-carousel owl-theme" >
                    <!-- Carousel Event -->
                    @foreach ($data['events'] as $evn)
                    <div class="card mb-3" >
                        <div class="row g-0">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <img src="{{ $baseurl.$evn['image'] }}"  alt="cheers-musicevent" class="banner-event">
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="card-body">
                                    <h6>EVENT AND PROMO</h6>
                                    <h4 class="card-title">{{ $evn['name'] }}</h4>
                                    <div class="row">
                                        <div class="col-1 agenda-part">
                                            <i class="fad fa-calendar-alt"></i>
                                        </div>
                                        <div class="col-5 agenda-part">
                                            <span>{{ strftime("%d %B %Y", strtotime($evn['startdate'])).' - '.strftime("%d %B %Y", strtotime($evn['enddate'])) }}</span>
                                        </div>
                                        <div class="col-1 agenda-part">
                                            <i class="fad fa-map-marker-alt"></i>
                                        </div>
                                        <div class="col-5 agenda-part">
                                            <span>{{ $evn['lokasi'] }}</span>
                                        </div>
                                    </div>
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="nav-overview-tab" data-bs-toggle="tab" data-bs-target="#nav-overview" type="button" role="tab" aria-controls="nav-overview" aria-selected="true">@lang('welcome.homeEventOverview')</button>
                                            <button class="nav-link" id="nav-terms-tab" data-bs-toggle="tab" data-bs-target="#nav-terms" type="button" role="tab" aria-controls="nav-terms" aria-selected="false">@lang('welcome.homeEventTnc')</button>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-overview" role="tabpanel" aria-labelledby="nav-overview-tab">
                                            <p class="card-text">{!! $evn['overview'] !!}</p>
                                        </div>
                                        <div class="tab-pane fade" id="nav-terms" role="tabpanel" aria-labelledby="nav-terms-tab">
                                            <p class="card-text">{!! $evn['tnc'] !!}</p>
                                        </div>
                                    </div>
                                    
                                </div>
                                <a href="{{ url('event/view/'.$evn['id']) }}">
                                    <div class="card-footer">
                                        <span>@lang('welcome.homeEventBtnView')</span> 
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- Carousel Event -->
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section id="cheers-blog">
    <div class="container">
        <div class="title-section-ct">
            <h3>Blog</h3>
            <hr class="cheers-separator-center">
        </div>

        <div class="container-fluid">
            <div class="row">
                @foreach ($data['blogs'] as $blg)
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12 pt-2 blog-part">
                    <div class="blog-grid">
                        <div class="blog-img">
                            <div class="date">
                                <span>{{ strftime("%d", strtotime($blg['created_at'])) }}</span>
                                <label>{{ strftime("%B", strtotime($blg['created_at'])) }}</label>
                            </div>
                            <a href="{{ url('blog/view/'.$blg['url'].'/'.$blg['id']) }}">
                                <img src="{{ $baseurl.$blg['image'] }}" title="" alt="{{ $blg['title_'.$locale] }}">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h5><a href="{{ url('blog/view/'.$blg['url'].'/'.$blg['id']) }}">{{ $blg['title_'.$locale] }}</a></h5>
                            <p>{!!  substr($blg['content_'.$locale], 0, 140).'...' !!}</p>
                            <div class="btn-bar">
                                <a href="{{ url('blog/view/'.$blg['url'].'/'.$blg['id']) }}" class="px-btn-arrow">
                                    <span>@lang('welcome.homeBlogCta')</span>
                                    <i class="fad fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>

<section id="cheers-campaign">
    <div class="row g-0">
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 align-self-center campaign-info">
            <div class="container">
                <div class="title-section text-left">
                    <h3><span style="font-weight: 500; font-size: 16px;">#careaboutearth</span><br>RECYCHEERS</h3>
                    <hr class="cheers-separator">
                    <p>@lang('welcome.homeRecycheersSub')</p>
                    <a href="https://recycheers.saycheers.com/" class="btn btn-danger btn-cheerslight">@lang('welcome.homeRecycheersBtnRegis')</a>
                    <a href="#" class="btn btn-link"><i class="fad fa-play"></i> @lang('welcome.homeRecycheersBtnWatch')</a>
                </div>
            </div>
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 align-self-center campaign-image">
            <img src="{{ asset('public/assets/img/cheers-pilah-sampah.jpg')}}" class="img-campaign" alt="campaign">
        </div>
    </div>
</section>

<section id="cheers-subscribe">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">

                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 subs-form text-left">
                    <div class="container-fluid mb-5">
                        <div class="subs-text">
                            <h3>Membership</h3>
                            <p>@lang('welcome.homeMemberSub')</p>
                        </div>
                    </div>
                    
                    <div class="container-fluid">
                        <form action="#">
                            <div class="row g-0">
                                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-12 form-group form-cheerssubs">
                                    <label for="subscribeForm" class="form-label">@lang('welcome.homeMemberPlaceholder')</label>
                                    <input class="form-class input-subs" type="email" id="subscribeForm" placeholder="@lang('welcome.homeMemberPlaceholder')">
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 align-self-end">
                                    <button type="submit" class="btn btn-danger btn-cheerslight">@lang('welcome.homeMemberRegis')</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="cheers-find">
    <div class="container">
        <div class="title-section-ct">
            <h3><span style="font-weight: 500;">Find Our</span> Product</h3>
            <hr class="cheers-separator-center">
            <span>@lang('welcome.homeFindProdSub')</span>
        </div>

        <div class="find-product text-center">
            <a href="https://www.tokopedia.com/cheersalkaline">
                <img src="{{ asset('public/assets/img/tokopedia.png')}}" alt="">
            </a>
            <a href="https://shopee.co.id/cheersalkalineofficial">
                <img src="{{ asset('public/assets/img/shopee.png')}}" alt="">
            </a>
        </div>
    </div>
</section>

@endsection