@extends('layouts.alkaline')

@section('content')

<header id="cheers-lighttheme" class="cheers-campaign" style="background: url('{{ asset('public/assets/img/covercampaign.jpg')}}') no-repeat;">
    <div class="img-overlay">
    </div>
    <div class="heropro-type">
        <div class="title-box">
            <div class="myfullpad">
                <div class="row">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6">
                        <h3>@lang('campaign.campaign-title')</h3>
                        {{-- <p>@lang('campaign.campaign-text')</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>



<section class="cheers-contentofcampaign">
    @foreach ($campaigns as $cpg)

    <div class="cheers-campaigncontent">
        <div class="container">
            <div class="row sorted-area">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 align-self-center campaign-info">
                    <div class="container">
                        <div class="title-section text-left">
                            <h3>{{ $cpg['title_'.$locale] }}</h3>
                            
                            <div>{!! strip_tags($cpg['desc_'.$locale]) !!}</div>
                            @isset($cpg['link'])
                                <a href="{{ $cpg['link'] }}" class="btn btn-danger btn-cheerslight">@lang('sustainability.sustainability-introButton')</a>
                            @else
                                
                            @endisset
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center align-self-center campaign-image">
                    <img src="{{ $baseurl.$cpg['image'] }}" class="img-campaign rounded" alt="campaign">
                </div>
            </div>
        </div>
    </div>

    @endforeach
</section>



@endsection