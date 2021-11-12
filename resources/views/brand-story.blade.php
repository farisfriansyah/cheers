@extends('layouts.alkaline')

@section('content')

<header id="cheers-lighttheme" class="cheers-brand" style="background: url('{{ asset('public/assets/img/cheersstory-1.jpg')}}') no-repeat;">
    <div class="img-overlay">
    </div>
    <div class="heropro-type">
        <div class="title-box">
            <div class="myfullpad">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <h3>@lang('brandstory.brand-title')</h3>
                        <h6>@lang('brandstory.brand-subtitle')</h6>
                        <p>@lang('brandstory.brand-text')</p>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="cheers-story">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-12 col-sm-12">
                <div class="title-section text-center">
                    <h3 class="text-center">@lang('brandstory.brand-beg')</h3>
                    <p class="text-left">@lang('brandstory.brand-begtext')</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="story-img imgstr-1">
    
</section>

<section class="cheers-story">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-12 col-sm-12">
                <div class="title-section text-center">
                    <p class="text-left">@lang('brandstory.brand-midtext')</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="story-img imgstr-2">
    
</section>

<section class="cheers-story">
    <div class="container">
        <div class="title-section text-center">
            <h3 class="text-center">@lang('brandstory.brand-now')</h3>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <p class="text-left">@lang('brandstory.brand-nowtext1')</p>
                </div>
                <div class="col-md-6">
                    <p class="text-left">@lang('brandstory.brand-nowtext2')</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="story-img imgstr-3">
    
</section>

<section class="cheers-story">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-12 col-sm-12">
                <div class="title-section text-center">
                    <p class="text-left">@lang('brandstory.brand-now-1-text')</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="story-img imgstr-4">
    
</section>

<section class="cheers-story">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-12 col-sm-12">
                <div class="title-section text-center">
                    <p class="text-left">@lang('brandstory.brand-now-2-text')</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="story-img imgstr-5">
    
</section>

<section class="cheers-story">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-12 col-sm-12">
                <div class="title-section text-center">
                    <p class="text-left">@lang('brandstory.brand-now-3-text')</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection