<nav class="navbar navbar-expand-lg  ">
    <div class="container-fluid ">
      <a class="navbar-brand text-decoration-none text-secondary" href="#">BackOffice</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav w-100 d-flex justify-content-center align-items-center">
          <a class="nav-link text-decoration-none text-white btn btn-secondary   shadow-none mx-2 " aria-current="page" href="{{route('home.index')}}">Home</a>
          <a class="nav-link text-decoration-none text-white btn btn-secondary shadow-none mx-2" href="{{route('feature.index')}}">Features</a>
          <a class="nav-link text-decoration-none text-white btn btn-secondary shadow-none mx-2" href="{{route('about.index')}}">About</a>
          <a class="nav-link text-decoration-none text-white btn btn-secondary shadow-none mx-2" href="{{route('service.index')}}">Services</a>
          <a class="nav-link text-decoration-none text-white btn btn-secondary shadow-none mx-2" href="{{route('portfolio.index')}}">Portfolio</a>
          <a class="nav-link text-decoration-none text-white btn btn-secondary shadow-none mx-2" href="{{route('contact.index')}}">Contact</a>
        </div>
      </div>
    </div>
  </nav>