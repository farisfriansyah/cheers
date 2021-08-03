@extends('layouts.appdef')

@section('content')

<section id="cheers-blogheader">
    <div class="myfullpad">
        <div class="row g-0">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <img src="{{ asset('public/assets/img/SVG/assets-blog.svg')}}" class="img-fluid" >
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 blog-highlight">
                <div class="container">
                    <div id="highlight-blog" class="owl-carousel owl-theme">
                        

                        @foreach ($great->sortByDesc('created_at') as $gra)

                        <div class="title-section text-left">
                            <span style="font-size: 16px; font-weight: 500;">BLOG</span> <br>
                            <a href="{{ url('blog/view/'.$gra['url'].'/'.$gra['slug']) }}"><h3>{{ $gra['title_'.$locale] }}</h3></a>
                            <span class="metablog"><i class="fad fa-calendar-day"></i> {{ strftime("%d %B %Y", strtotime($gra['created_at'])) }}</span> 
                            <span class="metablog"><i class="fad fa-user"></i> Admin</span>
                            <span class="metablog"><i class="fad fa-hourglass"></i> {{ $gra['duration'] }} min read</span>
                            <hr class="cheers-separator">
                            <div>{!! substr($gra['content_'.$locale], 0, 200).'...' !!}</div> 

                            <a href="{{ url('blog/view/'.$gra['url'].'/'.$gra['slug']) }}">Read More</a>
                        </div>

                        @endforeach
                  
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="cheers-search" class="search-sect">
    <div class="myfullpad">
        <div class="row">
            <form class="" id="">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="button-addon2">
                    <button class="btn btn-danger btn-cheerslight" type="button" id="button-addon2" style="border-radius: 0px 10px 10px 0px;">Search</button>
                </div>
            </form>
        </div>
    </div>
</section>

<section id="cheers-bloglist" class="blogcomponent">
    <div class="myfullpad">
        <div class="row g-2">
            <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-6 col-sm-12">
                <h3 class="titleof-category">Feels Great</h3>
                @foreach ($great->sortByDesc('created_at') as $gr)
                <div class="card blog-card mb-1">
                    <div class="row g-0">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 card-image">
                            <img src="{{ $baseurl.$gr['image'] }}" class="card-img rounded">
                        </div>

                        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12">
                            <div class="card-body">
                                <div class="title-section text-left">
                                    <span style="font-size: 14px; font-weight: 500;">BLOG</span><br>
                                    <a href="{{ url('blog/view/'.$gr['url'].'/'.$gr['slug']) }}"><h5>{{ $gr['title_'.$locale] }}</h5></a>
                                    <span class="metablog"><i class="fad fa-calendar-day"></i> {{ strftime("%d %B %Y", strtotime($gr['created_at'])) }}</span> 
                                    <span class="metablog"><i class="fad fa-user"></i> Admin</span>
                                    <span class="metablog"><i class="fad fa-hourglass"></i> {{ $gr['duration'] }}min read</span>
                                    <div>{!! substr($gr['content_'.$locale], 0, 250).'...' !!}</div> 
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                @endforeach
               

                <nav aria-label="pagination-feels">
                    {{ $great->links("pagination::bootstrap-4") }}
                    {{-- <ul class="pagination justify-content-end">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul> --}}
                </nav>

                <div class="mt-5">
                    <h3 class="titleof-category">Story of the week</h3>
                    <div class="row g-0 mt-2">
                        @foreach ($story->sortByDesc('created_at') as $str)
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="card blog-card mb-1">
                                <div class="row g-0">
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 card-image">
                                        <img src="{{ $baseurl.$str['image'] }}" class="card-img rounded">
                                    </div>

                                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                        <div class="card-body">
                                            <div class="title-section text-left">
                                                <a href="{{ url('blog/view/'.$str['url'].'/'.$str['slug']) }}"><h5>{{ $str['title_'.$locale] }}</h5></a>
                                                <span class="metablog"><i class="fad fa-calendar-day"></i> {{ strftime("%d %B %Y", strtotime($str['created_at'])) }}</span> 
                                                <span class="metablog"><i class="fad fa-user"></i> Admin</span>
                                                <span class="metablog"><i class="fad fa-hourglass"></i> {{ $str['duration'] }} min read</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
 
                    </div>
                    <nav aria-label="pagination-story">
                        {{ $story->links("pagination::bootstrap-4") }}
                    </nav>
                </div>
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