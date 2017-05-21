<!-- Begin Pre Header -->
<div class="pre-header">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 additional-shop-info">
        <ul class="list-unstyled list-inline">
          <li><a href="#" class="linkHeaderTop">Sell Your Events with us!</a></li>
          <li><a href="#" class="linkHeaderTop">Our Services</a></li>
        </ul>
      </div>
      <div class="col-md-6 col-sm-6 additional-nav">
        <ul class="list-unstyled list-inline">
          @if (session()->get('jenis') == 'peserta')
            <li><a href="#" class="linkHeaderTop">{{ $namapeserta->nama }}</a></li>
            <li><a href="{{ asset('logout/peserta') }}" class="linkHeaderTop">Logout</a></li>
          @elseif (session()->get('jenis') == 'organisasi')
            <li><a href="#" class="linkHeaderTop">{{ $namaorganisasi->nama }}</a></li>
            <li><a href="{{ asset('logout/organisasi') }}" class="linkHeaderTop">Logout</a></li>
          @else
            <li><a href="{{ asset('register') }}" class="linkHeaderTop">Register</a></li>
            <li><a  data-toggle="modal" href="#bs-example-modal-sm" class="linkHeaderTop">Login</a></li>
          @endif
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- End pre header  -->

<nav class="navbar navbar-default">
  <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="/" class="site-logo">
        <img src="{{asset('images/logo-kepohub.png')}}" height="41" width="140" alt="KepoHub" class="img-responsive hidden-xs">
        <img src="{{asset('images/logo-kepohub-m.png')}}" height="41" width="140" alt="KepoHub" class="img-responsive visible-xs">
      </a>
    </div>

    <div id="navbar" class="navbar-collapse collapse">

      <ul class="nav navbar-nav navbar-right" id="menu">
        <li class="menu-header {{ Request::is('/') ? 'active' : ''}}"><a href="{{asset('/')}}" >Home</a></li>
        <li class="menu-header {{ Request::is('seminar') || Request::is('seminar/*') ? 'active' : ''}}"><a href="/seminar">Seminar</a></li>
        <li class="menu-header dropdown" id="ddCat">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Category</a>
          <ul class="dropdown-menu" id="ddMenu">
            @foreach ($kategoris as $kategori)
              <li><a href="{{ asset('seminar/'.$kategori->nama_kategori)}}">{{$kategori->nama_kategori}}</a></li>
            @endforeach
          </ul>
        </li>
        @if (session()->get('jenis') == 'organisasi')
          <li class="menu-header {{ Request::is('dashboard') || Request::is('dashboard/*') ? 'active' : ''}}"><a href="{{asset('dashboard')}}">Dashboard</a></li>
        @else
          <li class="menu-header {{ Request::is('support') || Request::is('support/*') ? 'active' : ''}}"><a href="{{asset('support')}}">Support</a></li>
        @endif

      </ul>

    </div><!--/.nav-collapse -->
  </div>
</nav>
