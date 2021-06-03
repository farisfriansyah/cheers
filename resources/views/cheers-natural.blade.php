@extends('layouts.natural')

@section('content')

<header id="cheers-natural" class="cheers-product">
    <div id="slide-carousel" class="owl-carousel">
        @php $i=1; @endphp 
        @foreach ($detail as $left)
        <div class="set-{{ $i }}">
            <div class="img-overlay">
                <div class="cheers-bg-product cheers-bgp-{{ $i }}" style="
                background: url('{{  $baseurl.$left['background'] }}') no-repeat;">
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
                                    
                                    <p>@lang('cheers-natural.natural-desc-120')
                                    {!! $left['desc_'.$locale] !!}
                                    </p>
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
                                <p> {!! $left['subtitle_'.$locale] !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        @php $i++; @endphp
        @endforeach

    </div>

    <div class="row g-0 card-listproduct">

        @php $j=1; @endphp
        @foreach ( $detail as $det)
        <div class="card-cheersproduct" style="background: url('{{  $baseurl.$det['background'] }}') no-repeat;">
            {{-- asset('public/assets/img/slider/source.jpg') --}}
            <div class="overlay-card"></div>
            <div class="row g-0 textpro-card">
                <div class="col-7 textpro-left">
                    <h6>{{ $det['typeName'] }}</h6>
                    <h5>{{ $det['volume'] }}</h5>
                    <p>{{ $det['productName'] }}</p>
                </div>
                <div class="col-5 textpro-right">
                    <img src="{{  $baseurl.$det['image'] }}">
                </div>
            </div>
        </div>
        @php $j++; @endphp
        @endforeach
        

    </div>
</header>

<section id="why-product" class="why-theproduct why-natural">
    <div class="title-section-ct">
        @foreach ($head as $item)
        <h3>@lang('cheers-natural.natural-whyNatural')</h3>
        <hr class="cheers-separator-center">
        <span>{{ $item['why_'.$locale] }}</span>
        @endforeach
    </div>

    <div class="container text-center">
        <img src="{{ asset('public/assets/img/natural-product.jpg')}}" class="img-fluid">
    </div>
</section>

@endsection