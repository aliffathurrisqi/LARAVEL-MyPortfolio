<nav class="navbar navbar-expand-lg bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="/img/website/logo.png" height="25px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item pt-1 pb-1 ps-3 pe-3">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item pt-1 pb-1 ps-3 pe-3">
            <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item pt-1 pb-1 ps-3 pe-3">
            <a class="nav-link {{ ($title === "Contact") ? 'active' : '' }}" href="/contact">Contact</a>
          </li>
          {{-- <li class="nav-item pt-1 pb-1 ps-3 pe-3">
            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Contact
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" target="_blank" href="https://www.linkedin.com/in/aliffathurrisqi/">Linkedin</a></li>
              <li><a class="dropdown-item" target="_blank" href="https://wa.me/6282322442293">Whatsapp</a></li>
              <li><a class="dropdown-item" target="_blank" href="#">Instagram</a></li>
            </ul>
          </li> --}}
        </ul>
      </div>
    </div>
  </nav>