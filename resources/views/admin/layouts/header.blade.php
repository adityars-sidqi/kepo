  <div class="app-bar fixed-top darcula" data-role="appbar">
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
  </div>
