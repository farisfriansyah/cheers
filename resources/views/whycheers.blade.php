@extends('layouts.appdef')

@section('content')

<section id="cheers-whycheers">
    <div class="container">
        <div class="row g-0">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <img src="{{ asset('public/assets/img/cheers-why.jpg')}}" class="img-fluid" >
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="container">
                    <div class="title-section text-left">
                        <h3><span style="font-size: 16px; font-weight: 500;">@lang('whycheers.why-WhyST')</span> <br> Cheers?</h3>
                        <hr class="cheers-separator">
                        <p style="text-indent: 50px;">
                            <span style="color: #D8261C; font-weight: 500;">CHEERS Healthy Drinking Water</span> 
                            @lang('whycheers.why-text1')</p> 
                        <p style="text-indent: 50px;">
                            <span style="color: #D8261C; font-weight: 500;">CHEERS Healthy Drinking Water</span> 
                            @lang('whycheers.why-text2')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="whycheers-product">

    <div class="title-section-ct">
        <h3>@lang('whycheers.why-prodtitle')</h3>
        <hr class="cheers-separator-center">
        <span>@lang('whycheers.why-prodsubtitle')</span>
    </div>

    <div class="row g-0">
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 whycheerspro whycheerspro-left">
            <div class="container">
                <div class="row g-0">
                    <div class="col-6 title-product">
                        <h4>Cheers Alkaline</h4>
                        <h6 class="text-white">@lang('whycheers.why-prodAlkSub')</h6>
                        <p>@lang('whycheers.why-prodAlkText')</p>
                        <a href="cheers-alkaline.php" class="link-button"><em>@lang('whycheers.why-prodbtnRM')..</em></a>
                    </div>
                    <div class="col-6 img-product">
                        <img src="{{ asset('public/assets/img/product/cheers-550ml.png')}}">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 whycheerspro whycheerspro-right">
            <div class="container">
                <div class="row g-0">
                    <div class="col-6 title-product">
                        <div class="">
                            <h4>Cheers Natural</h4>
                            <h6 class="text-white">@lang('whycheers.why-prodNatSub')</h6>
                            <p>@lang('whycheers.why-prodNatText')</p>
                            <a href="cheers-natural.php" class="link-button"><em>@lang('whycheers.why-prodbtnRM')..</em></a>
                        </div>
                    </div>
                    <div class="col-6 img-product">
                        <div class="">
                            <img src="{{ asset('public/assets/img/product/natural-600ml.png')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="cheers-timeline" style="z-index: 2;">

    <div class="title-section-ct">
        <h3><span style="font-weight: 500;">@lang('whycheers.why-prodprocTit1')</span> @lang('whycheers.why-prodprocTit2')</h3>
        <hr class="cheers-separator-center">
        <span>@lang('whycheers.why-prodprocSub')</span>
    </div>

    <div class="timelineImg">
        <div class="container">
            <div id="timeline-content">
                <img src="{{ asset('public/assets/img/pprocess.png')}}" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section id="cheers-sourced">
    <div class="row g-0">
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 order-md-2 align-self-center campaign-image">
            <img src="{{ asset('public/assets/img/source.jpg')}}" class="img-campaign" alt="cheers-source">
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 order-md-1 align-self-center campaign-info">
            <div class="container">
                <div class="title-section text-left">
                    <h3><span style="font-weight: 500;">@lang('whycheers.why-sourceTit1') </span>@lang('whycheers.why-sourceTit2')</h3>
                    <hr class="cheers-separator">
                    <p>@lang('whycheers.why-sourceText')</p>
                </div>
            </div>
        </div>
        
    </div>
</section>

<section id="cheers-qa">
    <div class="row g-0">
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 align-self-center campaign-info">
            <img src="{{ asset('public/assets/img/cheers-box.jpg')}}" class="img-campaign" alt="box">
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 align-self-center campaign-image">
            
            <div class="container">
                <div class="title-section text-left">
                    <h3><span style="font-weight: 500;">@lang('whycheers.why-qualityTit1') </span>@lang('whycheers.why-qualityTit2')</h3>
                    <hr class="cheers-separator">
                    <p>@lang('whycheers.why-qualityText1')</p>
                    <p>@lang('whycheers.why-qualityText2') </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="cheers-marketingNetwork">
    <div class="row g-0">
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 order-md-2 align-self-center campaign-image">
            <img src="{{ asset('public/assets/img/distribution-fleet.jpg')}}" class="img-campaign" alt="cheers-marketingnetwork">
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 order-md-1 align-self-center campaign-info">
            <div class="container">
                <div class="title-section text-left">
                    <h3><span style="font-weight: 500;">@lang('whycheers.why-marketingTit1') </span>@lang('whycheers.why-marketingTit2')</h3>
                    <hr class="cheers-separator">
                    <p>@lang('whycheers.why-markertingText')</p> 
                    <h5>@lang('whycheers.why-armadaTit')</h5> 
                    <p>@lang('whycheers.why-armadaText')</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="cheers-recognition">

    <div class="row g-0">
        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-12 title-recognition">
            <div class="title-section text-left">
                <h3>@lang('whycheers.why-rewardTit')</h3>
                <hr class="cheers-separator">
                <p>@lang('whycheers.why-rewardText')</p>
            </div>
        </div>
        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-12 award">
            <div class="box-compo">
                <h6>@lang('whycheers.why-award')</h6>
                <div class="img-box mb-3">
                    <img src="{{ asset('public/assets/img/logos/sparklingsurabaya.jpg')}}" class="rounded">
                </div>
                <div class="img-box mb-3">
                    <img src="{{ asset('public/assets/img/logos/muri.jpg')}}" class="rounded">
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 certificate">
            <div class="box-compo">
                <h6>@lang('whycheers.why-recog')</h6>

                <div class="row g-0">
                    <div class="col-6">
                        <img src="{{ asset('public/assets/img/logos/iso.jpg')}}" class="rounded">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('public/assets/img/logos/mui.jpg')}}" class="rounded">
                    </div>

                    <div class="col-6">
                        <img src="{{ asset('public/assets/img/logos/sni.jpg')}}" class="rounded">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('public/assets/img/logos/bpom.jpg')}}" class="rounded">
                    </div>
                </div>
            </div>

            <div class="box-compo mt-3">
                <h6>Membership</h6>

                <div class="d-flex">
                    <img src="{{ asset('public/assets/img/logos/aspadin.jpg')}}" class="rounded">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
