<nav class="navbar navbar-expand-lg nav-product fixed-top">
    <div class="container-fluid mynavpad">
      <a class="navbar-brand" href="index.php">
        <img src="{{ $baseurl.$head[0]['logo']}}" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="#navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
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
              <li><a class="dropdown-item" href="{{ url('/cheers-alkaline') }}">Cheers Alkaline</a></li>
              <li><a class="dropdown-item" href="{{ url('/cheers-natural') }}">Cheers Natural</a></li>
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

          <li class="nav-item">
            <a class="nav-link" href="https://recycheers.saycheers.com/">#CAMPAIGN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/contact') }}">CONTACT</a>
          </li>
        </ul>

        <div class="d-flex">
          <a href="{{ route('localization.switch', 'en') }}" style="margin-right: 10px;">EN</a>
          |
          <a href="{{ route('localization.switch', 'id') }}" style="margin-left: 10px;">ID</a>
        </div>

        <a href="login.php" class="btn btn-danger btn-lgn d-flex" type="submit">MEMBERSHIP</a>
      </div>
    </div>
  </nav>