<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top p-0">
  <div class="container-fluid colorNav p-0 mb-0">
    
    <a class="navbar-brand" href="#"><img src="/img/italianpizzeria.png" alt="" height="120px"></a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
      <!-- Links centrati -->
      <ul class="navbar-nav nav-links mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{route('home')}}">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('menu')}}">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contacts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#gallery">Gallery</a>
        </li>
      </ul>

      <!-- Icona Instagram a destra -->
      <ul class="navbar-nav ms-lg-auto d-flex flex-row align-items-center mb-2 mb-lg-0 icon-nav">
        <li class="nav-item">
          <a href="https://www.instagram.com/pugliamia_pizzeria_giliair/">
            <i class="bi bi-instagram"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
