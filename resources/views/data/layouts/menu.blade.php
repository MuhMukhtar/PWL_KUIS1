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
        <li><a href="{{'/barang'}}" class="{{ Request::is('barang') ? 'active' : ''}}">Barang</a></li>
        <li><a href="{{'/pelanggan'}}" class="{{ Request::is('pelanggan') ? 'active' : ''}}">Pelanggan</a></li>
        <li><a href="{{'/pegawai'}}" class="{{ Request::is('pegawai') ? 'active' : ''}}">Pegawai</a></li>
        <li><a href="{{'/supplier'}}" class="{{ Request::is('supplier') ? 'active' : ''}}">Supplier</a></li>
      </ul>
    </nav>   
  </div>
  
  