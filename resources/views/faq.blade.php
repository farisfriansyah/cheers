@extends('layouts.appdef')

@section('content')


<section id="cheers-faq">
    <div class="container">
        <div class="title-section-ct">
            <h3><span style="font-weight: 500;">Frequently</span> Asked Question</h3>
            <hr class="cheers-separator-center">
            <!-- <span>Dapatkan produk CHEERS dengan lebih mudah dengan WA kami di sini atau belanja online di Tokopedia dan
                Shopee. CHEERS to our healthier lifestyle!</span> -->
        </div>
    </div>  
    
    <div class="container d-flex justify-content-center btns-category">
        <button class="btn btn-danger btn-outcheerslight" type="button" data-filter="all">Semua Pertanyaan</button>
        <button class="btn btn-danger btn-outcheerslight" type="button" data-filter=".ph">Tentang PH 8.5</button>
        <button class="btn btn-danger btn-outcheerslight" type="button" data-filter=".produk">Tentang Produk</button>
        <button class="btn btn-danger btn-outcheerslight" type="button" data-filter=".cheers">Tentang Cheers</button>
    </div>
    

    <div class="container">
        

        <div class="accordion accordion-flush" id="accordionExample">
            <div class="container">
                <div class="accordion-item mix ph">
                    <h2 class="accordion-header" id="heading-1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                            Apa pengertian pH?
                        </button>
                    </h2>
                    <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        pH adalah derajat/satuan yang digunakan untuk menyatakan tingkat asam atau basa yang dimiliki oleh suatu larutan/air atau makanan.
                        </div>
                    </div>
                </div>
                <div class="accordion-item mix ph">
                    <h2 class="accordion-header" id="heading-2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                            Berapa pH Cheers Alkaline?
                        </button>
                    </h2>
                    <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Cheers Alkaline Water memiliki pH up to 8.5 tergolong dalam air minum pH basa/pH tinggi.
                        </div>
                    </div>
                </div>
                <div class="accordion-item mix ph">
                    <h2 class="accordion-header" id="heading-3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                            Apa perbedaan air demineral dengan Cheers Alkaline?
                        </button>
                    </h2>
                    <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Air demineral dalam proses produksinya menggunakan teknologi Reverse Osmosis (RO) sehingga menghilangkan kandungan mineral di dalam air. Maka TDS air bisa nol. Sementara Cheers Alkaline Water adalah air mineral dalam proses produksinya menggunakan teknologi Alpha Ion Alkalizer (AIA) sehingga menghasilkan air minum dengan pH tinggi.
                        </div>
                    </div>
                </div>

                <div class="accordion-item mix ph">
                    <h2 class="accordion-header" id="heading-4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                            Apakah aman minum obat menggunakan air Cheers alkaline?
                        </button>
                    </h2>
                    <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Tentu saja aman, pH Cheers Alkaline up to 8.5 (Sesuai dengan regulasi BPOM) tidak   mempengaruhi kinerja obat pada umumnya.
                        </div>
                    </div>
                </div>

                <div class="accordion-item mix ph">
                    <h2 class="accordion-header" id="heading-5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                            Apakah Cheers Alkaline aman dikonsumsi sehari-hari?
                        </button>
                    </h2>
                    <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Cheers Alkaline Water memiliki pH up to 8.5 yang sesuai dengan regulasi pemerintahan yang berlaku (BPOM dan SNI) sehingga sangat aman dikonsumsi setiap hari dan tidak memiliki efek samping.
                        </div>
                    </div>
                </div>

                <div class="accordion-item mix ph">
                    <h2 class="accordion-header" id="heading-6">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                            Apakah Cheers aman dikonsumsi untuk orang dengan penyakit ginjal?
                        </button>
                    </h2>
                    <div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="heading-6"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Untuk orang dengan fungsi ginjal yang terganggu sebanarnya aman minum Cheers. Hanya lebih disarankan minum air tanpa banyak muatan mineral agar tidak memberatkan kerja ginjal.
                        </div>
                    </div>
                </div>

                <div class="accordion-item mix produk">
                    <h2 class="accordion-header" id="heading-7">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
                            Apa perbedaan kangen water dan Cheers Alkaline ?
                        </button>
                    </h2>
                    <div id="collapse-7" class="accordion-collapse collapse" aria-labelledby="heading-7"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Apabila dibandingkan dengan Kangenwater: Cheers Alkaline Water diproduksi di pabrik yang sudah mendapatkan ISO dan di-audit secara rutin oleh lembaga-lembaga pemerintah sehingga produk yang dihasilkan memiliki kualitas yang konsisten dan sudah sesuai dengan standar kesehatan dan keamanan pangan.
                        </div>
                    </div>
                </div>

                <div class="accordion-item mix produk">
                    <h2 class="accordion-header" id="heading-8">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">
                            Apa perbedaan air minum Cheers dengan air oksigen?
                        </button>
                    </h2>
                    <div id="collapse-8" class="accordion-collapse collapse" aria-labelledby="heading-8"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Sebenarnya setiap air yang terjaga sumbernya itu mengandung oksigen. Tentang air oksigen belum ada bukti klinis yang menyebutkan secara khusus mengenai perbedaan bermakna antara air
    minum biasa dengan air beroksigen. Jadi bisa dikatakan jika manfaat air yang biasa Anda minum sama saja dengan manfaat air beroksigen. Penelitian yang dilakukan oleh British Journal of Sport Medicine juga mendukung pernyataan tersebut berkata bahwa air minum beroksigen tidak memiliki keunggulan lebih dibandingkan air minum biasa.

                        </div>
                    </div>
                </div>

                <div class="accordion-item mix produk">
                    <h2 class="accordion-header" id="heading-9">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-9" aria-expanded="false" aria-controls="collapse-9">
                            Ada berapa varian produk Cheers?
                        </button>
                    </h2>
                    <div id="collapse-9" class="accordion-collapse collapse" aria-labelledby="heading-9"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Varian produck Cheers ada dua. Cheers Alkaline dengan tutup merah dan Cheers Natural dengan tutup tosca.
                        </div>
                    </div>
                </div>

                <div class="accordion-item mix cheers">
                    <h2 class="accordion-header" id="heading-10">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10">
                            Bagaimana cara menjadi agen Cheers?
                        </button>
                    </h2>
                    <div id="collapse-10" class="accordion-collapse collapse" aria-labelledby="heading-10"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Untuk menjadi agen Cheers tinggal hubungi Customer Service kami by WA di <a href="https://wa.me/6287777243377"><strong>0877 77 243377</strong></a> atau email ke <a href="mailto:info@saycheers.com"><strong>info@saycheers.com</strong></a>
                        </div>
                    </div>
                </div>

                <div class="accordion-item mix cheers">
                    <h2 class="accordion-header" id="heading-11">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-11" aria-expanded="false" aria-controls="collapse-11">
                            Apakah Cheers punya sosial media?
                        </button>
                    </h2>
                    <div id="collapse-11" class="accordion-collapse collapse" aria-labelledby="heading-11"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Tentu saja. Dapatkan update informasi dan promo menarik di: instagram : <a href="https://www.instagram.com/cheerswater/"><strong>@cheerswater</strong></a>, facebook : <a href="https://www.facebook.com/CheersWater/"><strong>Cheers Water</strong></a>, Youtube : <a href="https://www.youtube.com/channel/UCRu-4WLrHdPyeKtCsJV7otg"><strong>@cheerswater</strong></a>, twitter : <a href="https://twitter.com/CheersWater"><strong>cheerswater</strong></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection