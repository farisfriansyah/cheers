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
                        <h3><span style="font-size: 16px; font-weight: 500;">Kenapa</span> <br> Cheers?</h3>
                        <hr class="cheers-separator">
                        <p style="text-indent: 50px;"><span style="color: #D8261C; font-weight: 500;">CHEERS Healthy Drinking Water</span> adalah air minum sehat dan berkualitas, berasal dari sumber mata air alami pegunungan yang terlindungi, diproses secara cermat dengan Sterilisasi Multifiltrasi, Ozonisasi, dan UV Treatment,  untuk memastikan tidak adanya kandungan bakteri di dalamnya. </p> 
                        <p style="text-indent: 50px;"><span style="color: #D8261C; font-weight: 500;">CHEERS Healthy Drinking Water</span> dikemas secara higienis tanpa kandungan bahan kimia, dan ramah lingkungan. Minumlah Cheers Healthy Drinking Water minimal 8 gelas setiap harinya, nikmati kesegaran dan kealamiannya.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="whycheers-product">

    <div class="title-section-ct">
        <h3>Products</h3>
        <hr class="cheers-separator-center">
        <span>Ada dua jenis produk CHEERS Healthy Drinking Water <br> yang bisa menemani aktivitas kamu setiap hari</span>
    </div>

    <div class="row g-0">
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 whycheerspro whycheerspro-left">
            <div class="container">
                <div class="row g-0">
                    <div class="col-6 title-product">
                        <h4>Cheers Alkaline</h4>
                        <h6 class="text-white">Produk unggulan dengan manfaat kesehatan yang lebih optimal.</h6>
                        <p>Diproduksi dengan menggunakan teknologi mutakhir Jepang Alpha Ion Alkalizer sehingga menghasilkan air minum dengan pH tinggi (up to 8.5). Membantu menetralkan kondisi pH dalam tubuh sehingga daya tahan tubuh lebih terjaga.</p>
                        <a href="cheers-alkaline.php" class="link-button"><em>Read more..</em></a>
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
                            <h6 class="text-white">Produk air mineral Cheers dengan manfaat mineral yang lebih baik. </h6>
                            <p>Diproduksi dari sumber air terlindungi dengan mempertahankan manfaat mineral alam yang baik untuk tubuh. Diproses secara higienis tanpa bahan kimia tambahan, menjamin Cheers Natural Spring Water baik untukmu. Healthier, Fresher, Better.</p>
                            <a href="cheers-natural.php" class="link-button"><em>Read more..</em></a>
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
        <h3><span style="font-weight: 500;">Proses</span> Produksi</h3>
        <hr class="cheers-separator-center">
        <span>Seluruh proses produksi dilakukan secara terintegrasi dan higienis, tanpa tersentuh tangan manusia. </span>
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
                    <h3><span style="font-weight: 500;">Sumber </span>Mata Air</h3>
                    <hr class="cheers-separator">
                    <p>CHEERS Healthy Drinking Water diambil dari sumber mata air alami terlindungi, yang telah melalui seleksi dan penelitian bertahun-tahun oleh para ahli kami, sehingga selalu terjaga kualitas dan kesegarannya. </p>
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
                    <h3><span style="font-weight: 500;">Jaminan </span>Kualitas</h3>
                    <hr class="cheers-separator">
                    <p>Setiap harinya, para ahli kami bertugas untuk meneliti dan memastikan bahwa setiap tetes air mineral yang diproduksi bebas dari bakteri, jamur, dan bahan-bahan berbahaya lainnya.</p>
                    <p>Kami juga mengukur tingkat basa (alkali), kejernihan, dan kandungan mineralnya. Ini adalah bagian dari komitmen <strong> Healthy Drinking Water</strong> untuk memberikan jaminan kualitas produk untuk kesehatan konsumen. </p>
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
                    <h3><span style="font-weight: 500;">Jaringan </span>Pemasaran</h3>
                    <hr class="cheers-separator">
                    <p>Melalui cabang dan agen kami yang tersebar di seluruh nusantara dan mancanegara, CHEERS Healthy Drinking Water didistribusikan hingga ke tangan konsumen. Ini merupakan kebanggan bagi kami, PT Atlantic Biruraya dimana produk kami mendapat pengakuan baik dari dalam maupun dari luar negeri. </p> 
                    <h5>Armada Distribusi</h5> 
                    <p>Armada menjadi bagian penting dalam jalur distribusi kami. Ratusan unit armada truk kami setiap harinya bertugas mendistribusikan produk CHEERS Healthy Drinking Water dari pabrik hingga ke tangan konsumen. Kami juga mengoperasikan truk mini karena kepraktisan dan kemudahan menjelajah jalan-jalan sempit.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="cheers-recognition">

    <div class="row g-0">
        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-12 title-recognition">
            <div class="title-section text-left">
                <h3>Penghargaan & Pengakuan</h3>
                <hr class="cheers-separator">
                <p>Penghargaan dan pengakuan yang telah diraih antara lain : </p>
            </div>
        </div>
        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-12 award">
            <div class="box-compo">
                <h6>Penghargaan</h6>
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
                <h6>Sertifikat</h6>

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
                    <img src="assets/img/logos/aspadin.jpg" class="rounded">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
