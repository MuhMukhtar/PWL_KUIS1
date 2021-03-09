<div class="tm-top-header-inner">
  <div class="tm-logo-container">
    <img src="img/logo.png" alt="Logo" class="tm-site-logo">
    <h1 class="tm-site-name tm-handwriting-font">Cafe House</h1>
  </div>
  <div class="mobile-menu-icon">
    <i class="fa fa-bars"></i>
  </div>
  <nav class="tm-nav">
    <ul>
      {{-- <li class="nav-item {{ Request::is('/') ? 'active' : ''}}">
        <a class="nav-link tm-nav-link" href="{{url('/')}}">Videos <span class="sr-only">(current)</span></a>
      </li> --}}
      {{-- <li class="nav-item {{ Request::is('/') ? 'active' : ''}}"> --}}
      <li><a href="{{'/'}}" class="{{ Request::is('/') ? 'active' : ''}}">Home</a></li>
      <li><a href="{{'/today-special'}}" class="{{ Request::is('today-special') ? 'active' : ''}}">Today Special</a></li>
      <li><a href="{{'/menu'}}" class="{{ Request::is('menu') ? 'active' : ''}}">Menu</a></li>
      <li><a href="{{'/contact'}}" class="{{ Request::is('contact') ? 'active' : ''}}">Contact</a></li>
    </ul>
  </nav>   
</div>

