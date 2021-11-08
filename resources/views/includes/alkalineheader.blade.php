<nav class="navbar navbar-expand-lg nav-product fixed-top">
  <div class="container-fluid mynavpad">
    <a class="navbar-brand" href="{{ url('/') }}">
      <img src="{{ asset('public/assets/img/cheers-logoph.png')}}" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="#navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <i class="far fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarTogglerDemo01">
      <div class="d-flex flex-column w-100">
        <div class="top-navbar">
          <div class="d-flex contact-us">
            <a href="{{ url('/contact') }}">Contact Us</a>
          </div>
          
          <div class="d-flex multilang">
            <a href="{{ route('localization.switch', 'en') }}" style="margin-right: 10px;">EN</a>
            |
            <a href="{{ route('localization.switch', 'id') }}" style="margin-left: 10px;">ID</a>
          </div>

          <div class="d-flex socmed-head">
            <a href="https://www.facebook.com/CheersWater/">
                <i class="fab rounded fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com/CheersWater">
                <i class="fab rounded fa-twitter"></i>
            </a>
            <a href="https://www.youtube.com/channel/UCRu-4WLrHdPyeKtCsJV7otg">
                <i class="fab rounded fa-youtube"></i>
            </a>
            <a href="https://www.instagram.com/cheerswater/">
                <i class="fab rounded fa-instagram"></i>
            </a>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-center main-nav">
          <div>
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">HOME</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">BRAND STORY</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                  PRODUCT
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="{{ url('/whycheers') }}">Why Cheers?</a></li>
                  <li><a class="dropdown-item" href="{{ url('/cheers-alkaline') }}">Cheers Alkaline</a></li>
                  <li><a class="dropdown-item" href="{{ url('/cheers-natural') }}">Cheers Natural</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                  CHEERS UPDATE
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="{{ url('/event') }}">Event & Promo</a></li>
                  <li><a class="dropdown-item" href="{{ url('/blog') }}">Blog</a></li>
                  <li><a class="dropdown-item" href="#">On Media</a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="">SUSTAINABILITY</a>
              </li>

              {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                  SUSTAINABILITY
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="https://recycheers.saycheers.com/">#Campaign</a></li>
                </ul>
              </li> --}}

              <li class="nav-item">
                <a class="nav-link" href="">CAREER</a>
              </li>

              <li class="nav-item only-mbl">
                <a class="nav-link" href="">CONTACT</a>
              </li>
            </ul>
          </div>
          <div>
            <a href="https://membership.saycheers.com/" class="btn btn-danger btn-lgn" type="submit">MEMBERSHIP</a>
          </div>
        </div>
    </div>
  </div>
</nav>