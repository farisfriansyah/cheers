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
                <a href="cheers-alkaline.php" class="btn btn-danger btn-cheerslight">@lang('welcome.heroBtn')</a>
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
                        <a href="why-cheers.php" class="btn btn-danger btn-outcheerslight mt-3">@lang('welcome.homeWhycheersBtn')</a>
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
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 order-md-2 promo-part">
                <a href="#">
                    <div class="card card-promo">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <div class="cardpromo-img">
                                    <div class="promoicon">
                                        <div id="burst-12"><div><i class="fad fa-percentage"></i></div></div>
                                        
                                    </div>
                                    <img src="{{ asset('public/assets/img/audience.jpg')}}" class="promo-img rounded" alt="...">
                                </div>
                               
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h6 class="card-title">Promo</h6>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 order-md-2 promo-part">
                <a href="#">
                    <div class="card card-promo">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <div class="cardpromo-img">
                                    <div class="promoicon">
                                        <div id="burst-12"><div><i class="fad fa-percentage"></i></div></div>
                                        
                                    </div>
                                    <img src="{{ asset('public/assets/img/audience.jpg')}}" class="promo-img rounded" alt="...">
                                </div>
                               
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h6 class="card-title">Promo</h6>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 order-md-2 promo-part">
                <a href="#">
                    <div class="card card-promo">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <div class="cardpromo-img">
                                    <div class="promoicon">
                                        <div id="burst-12"><div><i class="fad fa-percentage"></i></div></div>
                                        
                                    </div>
                                    <img src="{{ asset('public/assets/img/audience.jpg')}}" class="promo-img rounded" alt="...">
                                </div>
                               
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h6 class="card-title">Promo</h6>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 order-md-2 align-self-center title-part">
                <div class="container">
                    <div class="title-section text-left">
                        <h3>Event</h3>
                        <hr class="cheers-separator">
                        <p>@lang('welcome.homeEventSub')</p>
                        <a href="event.php" class="btn btn-danger btn-outcheerslight">@lang('welcome.homeEventBtnAll')</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 order-md-1 align-self-center event-part">
                
                <div id="eventPromo" class="owl-carousel owl-theme" >
                    <!-- Carousel Event -->
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <img src="{{ asset('public/assets/img/637C1194.jpg')}}"  alt="cheers-musicevent" class="banner-event">
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="card-body">
                                    <h6>EVENT AND PROMO</h6>
                                    <h4 class="card-title">Cheers COVID-19</h4>
                                    <div class="row">
                                        <div class="col-1 agenda-part">
                                            <i class="fad fa-calendar-alt"></i>
                                        </div>
                                        <div class="col-5 agenda-part">
                                            <span>1 - 31 December 2020</span>
                                        </div>
                                        <div class="col-1 agenda-part">
                                            <i class="fad fa-map-marker-alt"></i>
                                        </div>
                                        <div class="col-5 agenda-part">
                                            <span>Virtual E-Bike</span>
                                        </div>
                                    </div>
                                    <div class="nav-tab">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-overview-tab" data-toggle="tab" href="#nav-overview" role="tab" aria-controls="nav-overview" aria-selected="true">@lang('welcome.homeEventOverview')</a>
                                                <a class="nav-item nav-link" id="nav-terms-tab" data-toggle="tab" href="#nav-terms" role="tab" aria-controls="nav-terms" aria-selected="false">@lang('welcome.homeEventTnc')</a>
                                                
                                            </div>
                                        </nav>
                                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-overview" role="tabpanel" aria-labelledby="nav-overview-tab">
                                                <p class="card-text">Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.</p>
                                            </div>
                                            <div class="tab-pane fade" id="nav-terms" role="tabpanel" aria-labelledby="nav-terms-tab">
                                                <p class="card-text">Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <a href="event-detail.php">
                                    <div class="card-footer">
                                        <span>@lang('welcome.homeEventBtnView')</span> 
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel Event -->

                    <!-- Carousel Event -->
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <img src="{{ asset('public/assets/img/637C1448.jpg')}}"  alt="cheers-musicevent" class="banner-event">
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="card-body">
                                    <h6>EVENT AND PROMO</h6>
                                    <h4 class="card-title">Cheers Music Weekend</h4>
                                    <div class="row">
                                        <div class="col-1 agenda-part">
                                            <i class="fad fa-calendar-alt"></i>
                                        </div>
                                        <div class="col-5 agenda-part">
                                            <span>Saturday, 17 Okt 2020 19.00 WIB</span>
                                        </div>
                                        <div class="col-1 agenda-part">
                                            <i class="fad fa-map-marker-alt"></i>
                                        </div>
                                        <div class="col-5 agenda-part">
                                            <span>Lap. Brawijaya Surabaya</span>
                                        </div>
                                    </div>
                                    <div class="nav-tab">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-overview-tab" data-toggle="tab" href="#nav-overview" role="tab" aria-controls="nav-overview" aria-selected="true">@lang('welcome.homeEventOverview')</a>
                                                <a class="nav-item nav-link" id="nav-terms-tab" data-toggle="tab" href="#nav-terms" role="tab" aria-controls="nav-terms" aria-selected="false">@lang('welcome.homeEventTnc')</a>
                                                
                                            </div>
                                        </nav>
                                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-overview" role="tabpanel" aria-labelledby="nav-overview-tab">
                                                <p class="card-text">Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.</p>
                                            </div>
                                            <div class="tab-pane fade" id="nav-terms" role="tabpanel" aria-labelledby="nav-terms-tab">
                                                <p class="card-text">Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <a href="event-detail.php">
                                    <div class="card-footer">
                                        <span>@lang('welcome.homeEventBtnView')</span> 
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
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
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12 pt-2 blog-part">
                    <div class="blog-grid">
                        <div class="blog-img">
                            <div class="date">
                                <span>04</span>
                                <label>FEB</label>
                            </div>
                            <a href="blog-1.php">
                                <img src="{{ asset('public/{{ asset('public/assets/img/pola-hidup.png')}}')}}" title="" alt="blog-1">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h5><a href="blog-1.php">Pola hidup sehat, rahasia ampuh pencegahan kanker</a></h5>
                            <p>Kebiasaan untuk hidup sehat masih saja sulit dilakukan. Hal ini bisa dilihat dari gaya hidup dan pola makan yang semakin tidak terkontrol. Ditambah tingkat polusi yang meningkatkan radikal bebas.</p>
                            <div class="btn-bar">
                                <a href="blog-1.php" class="px-btn-arrow">
                                    <span>@lang('welcome.homeBlogCta')</span>
                                    <i class="fad fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12 pt-2 blog-part">
                    <div class="blog-grid">
                        <div class="blog-img">
                            <div class="date">
                                <span>04</span>
                                <label>FEB</label>
                            </div>
                            <a href="blog-2.php">
                                <img src="{{ asset('public/{{ asset('public/assets/img/manfaat.png')}}')}}" title="" alt="blog-2">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h5><a href="blog-2.php">5 Manfaat bersepeda bikin hidup lebih sehat</a></h5>
                            <p>Tubuh yang sehat berawal dari pola hidup sehat pula. Olahraga merupakan salah satu gaya hidup sehat yang harus dilakukan. Saat ini bersepeda menjadi olahraga yang sedang digandrungi. Dibalik animo tinggi masyarakat akan olahraga bersepeda, ternyata manfaatnya pun banyak lho.</p>
                            <div class="btn-bar">
                                <a href="blog-2.php" class="px-btn-arrow">
                                    <span>@lang('welcome.homeBlogCta')</span>
                                    <i class="fad fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12 pt-2 blog-part">
                    <div class="blog-grid">
                        <div class="blog-img">
                            <div class="date">
                                <span>04</span>
                                <label>FEB</label>
                            </div>
                            <a href="blog-3.php">
                                <img src="{{ asset('public/{{ asset('public/assets/img/ginjal-sehat.jpg')}}')}}" title="" alt="blog-3">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h5><a href="blog-3.php">5 Rahasia ginjal sehat dan kuat</a></h5>
                            <p>Ginjal adalah salah satu organ vital yang berperan menyaring racun dari dalam tubuh. Oleh karena itu menjaga ginjal tetap sehat adalah keharusan. Namun, tahukah kamu? Menjaga ginjal tetap sehat sebenarnya tidak sulit kok. Yuk coba tips dari Cheers berikut ini.</p>
                            <div class="btn-bar">
                                <a href="blog-3.php" class="px-btn-arrow">
                                    <span>@lang('welcome.homeBlogCta')</span>
                                    <i class="fad fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
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