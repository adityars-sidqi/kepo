  {{-- <div class="app-bar fixed-top darcula" data-role="appbar">
      <a class="app-bar-element branding">KepoHub</a>
      <span class="app-bar-divider"></span>
      <ul class="app-bar-menu">
          <li><a href="{{asset('admin/')}}">Dashboard</a></li>
          <li><a href="{{ asset('admin/konfirmasi') }}">Konfirmasi</a></li>
      </ul>

      <div class="app-bar-element place-right">
          <span class="dropdown-toggle"><span class="mif-cog"></span> {{ ucfirst(session('nama')) }}</span>
          <div class="app-bar-drop-container padding10 place-right no-margin-top block-shadow fg-dark" data-role="dropdown" data-no-close="true" style="width: 220px">
              <h2 class="text-light">Quick settings</h2>
              <ul class="unstyled-list fg-dark">
                  <li><a href="{{ url('/admin/logout')}}" class="fg-white3 fg-hover-yellow">Exit</a></li>
              </ul>
          </div>
      </div>
  </div> --}}
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">KepoHub</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="{{asset('admin')}}">Dashboard</a></li>
          <li><a href="{{asset('admin/konfirmasi')}}">Konfirmasi</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown" >
          <a href="#" class="dropdown-toggle" id="account" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
          <ul  id="account-data" class="dropdown-menu">
            <li><a href="#">{{ session('nama') }}</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ asset('admin/logout')}}">Logout</a></li>
          </ul>
        </li>
        </ul>
      </div>
    </div>
  </nav>
