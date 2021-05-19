<footer>
    <div class="container-fluid footer-content footer-dark">
        <div class="row footer-top">
            <div class="col-lg-3 info-cheers">
                <img src="{{ asset('public/assets/img/cheers-logoph.png')}}" alt="">
            </div>

            <div class="col-lg-2 internal-link">
                <h6>Links</h6>
                <ul >
                    <li><a href="index.php">Home</a></li>
                    <li><a href="cheers-alkaline.php">Alkaline</a></li>
                    <li><a href="cheers-natural.php">Natural</a></li>
                    <li><a href="why-cheers.php">Why Cheers</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
                
            </div>

            <div class="col-lg-2 internal-link">
                <h6>Links</h6>
                <ul >
                    <li><a href="blog.php">News Update</a></li>
                    <li><a href="">Events & Promo</a></li>
                    <li><a href="login.php">Sign In</a></li>
                </ul>
            </div>

            <div class="col-lg-2 internal-link">
                <h6>Support</h6>
                <ul >
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="">Career</a></li>
                    <li><a href="">Tukar Sampah</a></li>
                    <li><a href="">CSR</a></li>
                    <li><a href="">What's On</a></li>
                </ul>
            </div>

            <div class="col-lg-3 contact-info">
                <div class="infocontact-section">
                    <div class="d-flex">
                        <div class="col-2 text-center">
                            <i class="fad fa-phone"></i>
                        </div>
                        <div class="col-10">
                            <h6>Phone (Hotline)</h6>
                            <p> 0807 - 1 - CHEERS (243377)</p>
                        </div>
                    </div>
                </div>
                
                <div class="infocontact-section">
                    <div class="d-flex">
                        <div class="col-2 text-center">
                            <i class="fad fa-envelope"></i>
                        </div>
                        <div class="col-10">
                            <h6>E-Mail</h6>
                            <p>info@saycheers.com</p>
                        </div>
                    </div>
                </div>

                <div class="infocontact-section">
                    <div class="d-flex">
                        <div class="col-2 text-center">
                            <i class="fad fa-map-marker-alt"></i>
                        </div>
                        <div class="col-10">
                            <h6>Location</h6>
                            <p>Jl. Raya Surabaya-Malang KM. 52,2 <br> Pandaan, 67161, Jawa Timur, <br> Indonesia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row footer-bottom">
            <div class="col-lg-4">
                <p>Copyright &copy; <span id="year"></span> Say Cheers</p>
            </div>
            <div class="col-lg-4 offset-lg-2">
                <div class="row">
                    <div class="col-lg-4 text-right">
                        <div>
                            <a href="{{ route('localization.switch', 'en') }}" class="mr-2">EN</a>
                            <span class="mr-2">|</span>
                            <a href="{{ route('localization.switch', 'id') }}">ID</a>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <a href="#">Terms of use</a>
                    </div>
                    <div class="col-lg-4 text-center">
                        <a href="#">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<a class="fixed-cta" href="https://wa.me/6287777243377">
    <div class="wacta">
        <div class="d-flex justify-content-center align-items-center">
            <div class="icon-cta">
                <i class="fab fa-whatsapp fa-2x"></i>
            </div>
            <h6 class="desktop-cta"><span style="font-weight: 500; font-size: 14px;">Chat us on</span><br> Whatsapp</h6>
            <h6 class="mobile-cta">Chat us on Whatsapp</h6>
        </div>
    </div>
</a>