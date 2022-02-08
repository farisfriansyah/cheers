@extends('layouts.alkaline')

@section('content')

<header id="cheers-alkaline" class="cheers-product">
    <div id="slide-carousel" class="owl-carousel">
        @php $j=1; @endphp
        @foreach ($detail as $left)
        <div class="set-{{ $j }}">
            <div class="img-overlay">
                <div class="cheers-bg-product cheers-bgp-{{ $j }}" style="
                background: url('{{ $baseurl.$left['background'] }}') no-repeat;">
                </div>
            </div>
            <div class="row d-flex g-0 heropro-type">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 pro-leftsection">
                    <div class="bg-imgHero">
                        <div class="owl-carousel1">
                            <div class="content-left">
                                <div class="content-text">
                                    <div class="title-cheproduct">
                                        <h3>{{ $left['typeName'] }} ({{ $left['volume'] }})</h3>
                                    </div>
                                    
                                    <p>{{ $left['desc_'.$locale] }}</p>
                                </div>

                                <div class="content-img">
                                    <img src="{{ $baseurl.$left['image'] }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 pro-rightsection">
                    <div class="content-right">
                        <div class="content-point align-self-center">
                            <div class="title-product">
                                <h3>{{ $left['productName'] }}</h3>
                                <p>{{ $left['subtitle_'.$locale] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @php $j++; @endphp
        @endforeach
    </div>

    <div class="row g-0 card-listproduct">
        @foreach ($detail as $right)
        <div class="card-cheersproduct" style="background: url('{{ $baseurl.$right['background'] }}') no-repeat;">
            <div class="overlay-card"></div>
            <div class="row g-0 textpro-card">
                <div class="col-7 textpro-left">
                    <h6>{{ $right['typeName'] }}</h6>
                    <h5>{{ $right['volume'] }}</h5>
                    <p>{{ $right['productName'] }}</p>
                </div>
                <div class="col-5 textpro-right">
                    <img src="{{ $baseurl.$right['image'] }}">
                </div>
            </div>
        </div>
        @endforeach
    </div>
</header>

<section id="why-product" class="why-theproduct why-alkaline">
    <div class="title-section-ct">
        <h3>@lang('cheers-alkaline.alkaline-whyAlkaline')</h3>
        <hr class="cheers-separator-center">
        <span>{{ $head[0]['why_'.$locale] }}</span>
    </div>

    <div class="container text-center">
        <div class="row">
            <div class="col-md-8">
                <img src="{{ asset('public/assets/img/ph-chart-eng.jpg')}}" class="img-fluid">
            </div>
            <div class="col-md-4">
                <ul class="cheers-benefit"><h5>@lang('cheers-alkaline.alkaline-benefit')</h5>
                    <li><i class="fas fa-check"></i> <p>@lang('cheers-alkaline.alkaline-benefit-1')</p></li>
                    <li><i class="fas fa-check"></i> <p>@lang('cheers-alkaline.alkaline-benefit-2')</p></li>
                    <li><i class="fas fa-check"></i> <p>@lang('cheers-alkaline.alkaline-benefit-3')</p></li>
                    <li><i class="fas fa-check"></i> <p>@lang('cheers-alkaline.alkaline-benefit-4')</p></li>
                    <li><i class="fas fa-check"></i> <p>@lang('cheers-alkaline.alkaline-benefit-5')</p></li>
                    <li><i class="fas fa-check"></i> <p>@lang('cheers-alkaline.alkaline-benefit-6')</p></li>
                </ul>
            </div>
        </div>
        
    </div>
</section>

@endsection