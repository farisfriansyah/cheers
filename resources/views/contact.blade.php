@extends('layouts.appdef')

@section('content')

<section id="cheers-contact">
    <div class="myfullpad">
        <div class="row g-0">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 contact-rightsection">
                <img src="{{ asset('public/assets/img/SVG/contact.svg')}}" class="img-fluid"> 
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 contact-leftsection">
                <div class="information-contact">
                    <div class="title-section text-left">
                        <h3><span style="font-weight: 500;">Contact</span> Us</h3>
                        <hr class="cheers-separator">
                        <p>Visit our site and talk about your drinking water needs with our team. Ranging from daily needs until the supply of old. Cheers Alkaline Water will hydration your drinking water needs.</p>
                    </div>
                    
                    <div class="contact-info">
                        <div class="infocontact-section">
                            <div class="d-flex">
                                <div class="col-1 text-center">
                                    <i class="fad fa-phone"></i>
                                </div>
                                <div class="col-11">
                                    <h6>Phone (Hotline)</h6>
                                    <p> 0807 - 1 - CHEERS (243377)</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="infocontact-section">
                            <div class="d-flex">
                                <div class="col-1 text-center">
                                    <i class="fad fa-envelope"></i>
                                </div>
                                <div class="col-11">
                                    <h6>E-Mail</h6>
                                    <p>info@saycheers.com</p>
                                </div>
                            </div>
                        </div>

                        <div class="infocontact-section">
                            <div class="d-flex">
                                <div class="col-1 text-center">
                                    <i class="fad fa-map-marker-alt"></i>
                                </div>
                                <div class="col-11">
                                    <h6>Location</h6>
                                    <p>Jl. Raya Surabaya-Malang KM. 52,2 <br> Pandaan 67161 Jawa Timur <br> Indonesia</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <p class="mb-0">Punya pertanyaan tentang Cheers?</p>
                        <a href="faq.php" class="btn btn-danger btn-outcheerslight">FAQ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection