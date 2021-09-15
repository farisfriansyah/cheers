@extends('layouts.appdef')

@section('content')

<section id="cheers-search" class="search-sect" style="margin-top: 120px;">
    <div class="myfullpad">
        <div class="row">
            <form id="search-form" method="post" action="{{ url('blog/search') }}">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" name="search" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="button-addon2">
                    <button class="btn btn-danger btn-cheerslight" type="submit" id="button-addon2" style="border-radius: 0px 10px 10px 0px;">Search</button>
                </div>
            </form>
        </div>
    </div>
</section>

<section id="cheers-bloglist" class="blogcomponent">
    <div class="myfullpad">
        <div class="row g-2">
            <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-6 col-sm-12">
                <h3 class="titleof-category">Search Blog Result</h3>
                @foreach($search_blogs as $gr)
                <div class="card blog-card mb-1">
                    <div class="row g-0">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 card-image">
                            <img src="{{ $baseurl.$gr['image'] }}" class="card-img rounded">
                        </div>

                        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12">
                            <div class="card-body">
                                <div class="title-section text-left">
                                    <span style="font-size: 14px; font-weight: 500;">BLOG</span><br>
                                    <a href="{{ url('blog/view/'.$gr['Tipe'].'/'.$gr['slug']) }}"><h5>{{ $gr['title_'.$locale] }}</h5></a>
                                    <span class="metablog"><i class="fad fa-calendar-day"></i> {{ strftime("%d %B %Y", strtotime($gr['created_at'])) }}</span> 
                                    <span class="metablog"><i class="fad fa-user"></i> Admin</span>
                                    <span class="metablog"><i class="fad fa-hourglass"></i> {{ $gr['duration'] }}min read</span>
                                    <div class="need-normal">{!! strip_tags(htmlspecialchars_decode(substr($gr['content_'.$locale], 0, 250))).'...' !!}</div> 
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                @endforeach
                {{-- <nav aria-label="pagination-story">
                    {{ $search_blogs->links("pagination::bootstrap-4") }}
                </nav> --}}
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 sticky-rightcontent">
                <div class="sticky-content">
                    <h3 class="titleof-category">Trending</h3>

                    <div class="row g-1">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            @php $count_td = 1; @endphp
                            @foreach ($trending as $trd)
                            
                            <div class="card blog-card mb-1">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <h3 class="number-listblog">0{{ $count_td }}</h3>
                                    </div>

                                    <div class="col-10">
                                        <div class="card-body">
                                            <div class="title-section text-left">
                                                <a href="{{ url('blog/view/'.$trd['url'].'/'.$trd['slug']) }}"><h5>{{ $trd['title_'.$locale] }}</h5></a>
                                                <span class="metablog"><i class="fad fa-calendar-day"></i> {{ strftime("%d %B %Y", strtotime($trd['created_at'])) }}</span> 
                                                <span class="metablog"><i class="fad fa-user"></i> Admin</span>
                                                <span class="metablog"><i class="fad fa-hourglass"></i> {{ $trd['duration'] }} min read</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            @php $count_td++; @endphp
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection