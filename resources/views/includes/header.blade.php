<nav class="navbar navbar-expand-lg nav-default fixed-top">
    <div class="container-fluid mynavpad">
      <div class="d-flex">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="{{ asset('public/assets/img/cheers-logoph.png')}}" alt="">
        </a>
        <div class="d-block">
          <div class="d-flex">
            <div class="d-flex contact-us">
              <a href="{{ url('/contact') }}">Contact</a>
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
          <div class="">
            <button class="navbar-toggler" type="button"  data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="#navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <i class="far fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarTogglerDemo01">
              <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">HOME</a>
                  </li>
      
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/whycheers') }}">WHY CHEERS?</a>
                  </li>
      
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                      PRODUCT
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      @foreach ($products as $pd)
                      <li><a class="dropdown-item" href="{{ url('/'.$pd['url']) }}">{{ $pd['name'] }}</a></li>
                      @endforeach
                      {{-- <li><a class="dropdown-item" href="{{ url('/cheers-natural') }}">Cheers Natural</a></li> --}}
                    </ul>
                  </li>
      
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                      CHEERS UPDATE
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="{{ url('/blog') }}">Blog</a></li>
                      <li><a class="dropdown-item" href="{{ url('/event') }}">Event & Promo</a></li>
                    </ul>
                  </li>
      
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ url('/login') }}" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                      MEMBERSHIP
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="{{ url('/login') }}">Membership</a></li>
                    </ul>
                  </li>
      
                  <li class="nav-item">
                    <a class="nav-link" href="https://recycheers.saycheers.com/">#CAMPAIGN</a>
                  </li>
                </ul>
              
              <a href="{{ url('/login') }}" class="btn btn-danger btn-lgn d-flex" type="submit">MEMBERSHIP</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</nav>