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
                        <div class="title-section text-left">
                            <span style="font-size: 16px; font-weight: 500;">BLOG</span> <br>
                            <a href="{{ url('/blog/view/1') }}"><h3>Pola hidup sehat, rahasia ampuh pencegahan kanker</h3></a>
                            <span class="metablog"><i class="fad fa-calendar-day"></i> 29 Sep 2020 20:00</span> 
                            <span class="metablog"><i class="fad fa-user"></i> Admin</span>
                            <span class="metablog"><i class="fad fa-hourglass"></i> 3min read</span>
                            <hr class="cheers-separator">
                            <p>Kebiasaan untuk hidup sehat masih saja sulit dilakukan. Hal ini bisa dilihat dari gaya hidup dan pola makan yang semakin tidak terkontrol. Ditambah tingkat polusi yang meningkatkan radikal bebas.</p> 

                            <a href="{{ url('/blog/view/1') }}">Read More</a>
                        </div>

                        <div class="title-section text-left">
                            <span style="font-size: 16px; font-weight: 500;">BLOG</span> <br> 
                            <a href="{{ url('/blog/view/1') }}"><h3>5 Manfaat bersepeda bikin hidup lebih sehat</h3></a>
                            <span class="metablog"><i class="fad fa-calendar-day"></i> 29 Sep 2020 20:00</span> 
                            <span class="metablog"><i class="fad fa-user"></i> Admin</span>
                            <span class="metablog"><i class="fad fa-hourglass"></i> 3min read</span>
                            <hr class="cheers-separator">
                            <p>Tubuh yang sehat berawal dari pola hidup sehat pula. Olahraga merupakan salah satu gaya hidup sehat yang harus dilakukan. Saat ini bersepeda menjadi olahraga yang sedang digandrungi. Dibalik animo tinggi masyarakat akan olahraga bersepeda, ternyata manfaatnya pun banyak lho.</p> 

                            <a href="{{ url('/blog/view/1') }}">Read More</a>
                        </div>

                        <div class="title-section text-left">
                            <span style="font-size: 16px; font-weight: 500;">BLOG</span> <br>
                            <a href="{{ url('/blog/view/1') }}"><h3>5 Rahasia ginjal sehat dan kuat</h3></a>
                            <span class="metablog"><i class="fad fa-calendar-day"></i> 29 Sep 2020 20:00</span> 
                            <span class="metablog"><i class="fad fa-user"></i> Admin</span>
                            <span class="metablog"><i class="fad fa-hourglass"></i> 3min read</span>
                            <hr class="cheers-separator">
                            <p>Ginjal adalah salah satu organ vital yang berperan menyaring racun dari dalam tubuh. Oleh karena itu menjaga ginjal tetap sehat adalah keharusan. Namun, tahukah kamu? Menjaga ginjal tetap sehat sebenarnya tidak sulit kok. Yuk coba tips dari Cheers berikut ini.</p> 

                            <a href="{{ url('/blog/view/1') }}">Read More</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section id="cheers-bloglist" class="blogcomponent">
    <div class="myfullpad">
        <div class="row g-2">
            <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-6 col-sm-12">
                <h3 class="titleof-category">Feels Great</h3>
                <div class="card blog-card mb-1">
                    <div class="row g-0">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 card-image">
                            <img src="{{ asset('public/assets/img/pola-hidup.png')}}" class="card-img rounded">
                        </div>

                        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12">
                            <div class="card-body">
                                <div class="title-section text-left">
                                    <span style="font-size: 14px; font-weight: 500;">BLOG</span><br>
                                    <a href="{{ url('/blog/view/1') }}"><h5>Pola hidup sehat, rahasia ampuh pencegahan kanker</h5></a>
                                    <span class="metablog"><i class="fad fa-calendar-day"></i> 29 Sep 2020 20:00</span> 
                                    <span class="metablog"><i class="fad fa-user"></i> Admin</span>
                                    <span class="metablog"><i class="fad fa-hourglass"></i> 3min read</span>
                                    <p>Kebiasaan untuk hidup sehat masih saja sulit dilakukan. Hal ini bisa dilihat dari gaya hidup dan pola makan yang semakin tidak terkontrol. Ditambah tingkat polusi yang meningkatkan radikal bebas.</p> 
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="card blog-card mb-1">
                    <div class="row g-0">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 card-image">
                            <img src="{{ asset('public/assets/img/manfaat.png')}}" class="card-img rounded">
                        </div>

                        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12">
                            <div class="card-body">
                                <div class="title-section text-left">
                                    <span style="font-size: 14px; font-weight: 500;">BLOG</span><br>
                                    <a href="{{ url('/blog/view/1') }}"><h5>5 Manfaat bersepeda bikin hidup lebih sehat</h5></a>
                                    <span class="metablog"><i class="fad fa-calendar-day"></i> 29 Sep 2020 20:00</span> 
                                    <span class="metablog"><i class="fad fa-user"></i> Admin</span>
                                    <span class="metablog"><i class="fad fa-hourglass"></i> 3min read</span>
                                    <p>Tubuh yang sehat berawal dari pola hidup sehat pula. Olahraga merupakan salah satu gaya hidup sehat yang harus dilakukan. Saat ini bersepeda menjadi olahraga yang sedang digandrungi. Dibalik animo tinggi masyarakat akan olahraga bersepeda, ternyata manfaatnya pun banyak lho.</p> 
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="card blog-card mb-1">
                    <div class="row g-0">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 card-image">
                            <img src="{{ asset('public/assets/img/ginjal-sehat.jpg')}}" class="card-img rounded">
                        </div>

                        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12">
                            <div class="card-body">
                                <div class="title-section text-left">
                                    <span style="font-size: 14px; font-weight: 500;">BLOG</span><br>
                                    <a href="{{ url('/blog/view/1') }}"><h5>5 Rahasia ginjal sehat dan kuat</h5></a>
                                    <span class="metablog"><i class="fad fa-calendar-day"></i> 29 Sep 2020 20:00</span> 
                                    <span class="metablog"><i class="fad fa-user"></i> Admin</span>
                                    <span class="metablog"><i class="fad fa-hourglass"></i> 3min read</span>
                                    <p>Ginjal adalah salah satu organ vital yang berperan menyaring racun dari dalam tubuh. Oleh karena itu menjaga ginjal tetap sehat adalah keharusan. Namun, tahukah kamu? Menjaga ginjal tetap sehat sebenarnya tidak sulit kok. Yuk coba tips dari Cheers berikut ini.</p> 
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <nav aria-label="pagination-feels">
                    <ul class="pagination justify-content-end">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>

                <div class="mt-5">
                    <h3 class="titleof-category">Story of the week</h3>
                    <div class="row g-0 mt-2">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="card blog-card mb-1">
                                <div class="row g-0">
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 card-image">
                                        <img src="{{ asset('public/assets/img/pola-hidup.png')}}" class="card-img rounded">
                                    </div>

                                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                        <div class="card-body">
                                            <div class="title-section text-left">
                                                <a href="{{ url('/blog/view/1') }}"><h5>Pola hidup sehat, rahasia ampuh pencegahan kanker</h5></a>
                                                <span class="metablog"><i class="fad fa-calendar-day"></i> 29 Sep 2020 20:00</span> 
                                                <span class="metablog"><i class="fad fa-user"></i> Admin</span>
                                                <span class="metablog"><i class="fad fa-hourglass"></i> 3min read</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="card blog-card mb-1">
                                <div class="row g-0">
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 card-image">
                                        <img src="{{ asset('public/assets/img/manfaat.png')}}" class="card-img rounded">
                                    </div>

                                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                        <div class="card-body">
                                            <div class="title-section text-left">
                                                <a href="{{ url('/blog/view/1') }}"><h5>5 Manfaat bersepeda bikin hidup lebih sehat</h5></a>
                                                <span class="metablog"><i class="fad fa-calendar-day"></i> 29 Sep 2020 20:00</span> 
                                                <span class="metablog"><i class="fad fa-user"></i> Admin</span>
                                                <span class="metablog"><i class="fad fa-hourglass"></i> 3min read</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="card blog-card mb-1">
                                <div class="row g-0">
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 card-image">
                                        <img src="{{ asset('public/assets/img/ginjal-sehat.jpg')}}" class="card-img rounded">
                                    </div>

                                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                        <div class="card-body">
                                            <div class="title-section text-left">
                                                <a href="{{ url('/blog/view/1') }}"><h5>5 Rahasia ginjal sehat dan kuat</h5></a>
                                                <span class="metablog"><i class="fad fa-calendar-day"></i> 29 Sep 2020 20:00</span> 
                                                <span class="metablog"><i class="fad fa-user"></i> Admin</span>
                                                <span class="metablog"><i class="fad fa-hourglass"></i> 3min read</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="card blog-card mb-1">
                                <div class="row g-0">
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 card-image">
                                        <img src="{{ asset('public/assets/img/pola-hidup.png')}}" class="card-img rounded">
                                    </div>

                                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                        <div class="card-body">
                                            <div class="title-section text-left">
                                                <a href="blog-1.php"><h5>Pola hidup sehat, rahasia ampuh pencegahan kanker</h5></a>
                                                <span class="metablog"><i class="fad fa-calendar-day"></i> 29 Sep 2020 20:00</span> 
                                                <span class="metablog"><i class="fad fa-user"></i> Admin</span>
                                                <span class="metablog"><i class="fad fa-hourglass"></i> 3min read</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav aria-label="pagination-story">
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 sticky-rightcontent">
                <div class="sticky-content">
                    <h3 class="titleof-category">Trending</h3>

                    <div class="row g-1">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="card blog-card mb-1">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <h3 class="number-listblog">01</h3>
                                    </div>

                                    <div class="col-10">
                                        <div class="card-body">
                                            <div class="title-section text-left">
                                                <a href="{{ url('/blog/view/1') }}"><h5>Pola hidup sehat, rahasia ampuh pencegahan kanker</h5></a>
                                                <span class="metablog"><i class="fad fa-calendar-day"></i> 29 Sep 2020 20:00</span> 
                                                <span class="metablog"><i class="fad fa-user"></i> Admin</span>
                                                <span class="metablog"><i class="fad fa-hourglass"></i> 3min read</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="card blog-card mb-1">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <h3 class="number-listblog">02</h3>
                                    </div>

                                    <div class="col-10">
                                        <div class="card-body">
                                            <div class="title-section text-left">
                                                <a href="{{ url('/blog/view/1') }}"><h5>5 Manfaat bersepeda bikin hidup lebih sehat</h5></a>
                                                <span class="metablog"><i class="fad fa-calendar-day"></i> 29 Sep 2020 20:00</span> 
                                                <span class="metablog"><i class="fad fa-user"></i> Admin</span>
                                                <span class="metablog"><i class="fad fa-hourglass"></i> 3min read</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="card blog-card mb-1">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <h3 class="number-listblog">03</h3>
                                    </div>

                                    <div class="col-10">
                                        <div class="card-body">
                                            <div class="title-section text-left">
                                                <a href="{{ url('/blog/view/1') }}"><h5>5 Rahasia ginjal sehat dan kuat</h5></a>
                                                <span class="metablog"><i class="fad fa-calendar-day"></i> 29 Sep 2020 20:00</span> 
                                                <span class="metablog"><i class="fad fa-user"></i> Admin</span>
                                                <span class="metablog"><i class="fad fa-hourglass"></i> 3min read</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection