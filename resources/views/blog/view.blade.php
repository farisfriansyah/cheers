@extends('layouts.appdef')

@section('content')


<section id="cheers-blogview" class="blogcomponent">
    <div class="myfullpad">
        <div class="row g-2">
            <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-6 col-sm-12">
                <article>
                    @foreach ($data as $dt)
                    <div class="title-section text-left">
                        
                        <h3 class="titleof-category">{{ $dt['title_'.$locale] }}</h3>
                        <span class="metablog"><i class="fad fa-calendar-day"></i> {{ strftime("%d %B %Y", strtotime($dt['created_at'])) }}</span> 
                        <span class="metablog"><i class="fad fa-user"></i> Admin</span>
                        <span class="metablog"><i class="fad fa-hourglass"></i> {{ $dt['duration'] }} min read</span>
                    </div>

                    <div class="blog-detail">
                        <img src="{{ $baseurl.$dt['image'] }}" class="img-fluid bloghead-img">

                        <div class="text-blog">
                           {!! $dt['content_'.$locale] !!}
                        </div>
                    </div>
                    @endforeach
                </article>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 sticky-rightcontent">
                <div class="sticky-content">
                    <h3 class="titleof-category">Trending</h3>

                    <div class="row g-1">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            @php $trd_=1; @endphp
                        
                            <div class="card blog-card mb-1">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <h3 class="number-listblog">0{{ $trd_ }}</h3>
                                    </div>

                                    <div class="col-10">
                                        <div class="card-body">
                                            <div class="title-section text-left">
                                                <a href="{{ url('blog/view/'.$trd['url'].'/'.$trd['id']) }}"><h5>{{ $trd['title_'.$locale] }}</h5></a>
                                                <span class="metablog"><i class="fad fa-calendar-day"></i> {{ strftime("%d %B %Y", strtotime($trd['created_at'])) }}</span> 
                                                <span class="metablog"><i class="fad fa-user"></i> Admin</span>
                                                <span class="metablog"><i class="fad fa-hourglass"></i> {{ $trd['duration'] }}min read</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            @php $trd_++; @endphp
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection