  <div class="cell size-x200" id="cell-sidebar" style="background-color: #71b1d1; height: 100%">
      <ul class="sidebar">
          <li {{ Request::is('admin') ? 'class=active' : ''}}><a href="{{asset('admin')}}">
              <span class="mif-home icon"></span>
              <span class="title">dashboard</span>
          </a></li>
          <li {{ Request::is('admin/kategori') || Request::is('admin/kategori/*')? 'class=active' : ''}}><a href="{{ asset('admin/kategori') }}">
              <span class="mif-list icon"></span>
              <span class="title">kategori</span>
          </a></li>
          <li {{ Request::is('admin/seminar') || Request::is('admin/seminar/*')? 'class=active' : ''}}><a href="{{ asset('admin/seminar') }}">
              <span class="mif-database icon"></span>
              <span class="title">seminar</span>
          </a></li>
          <li {{ Request::is('admin/user') || Request::is('admin/user/*')? 'class=active' : ''}}><a href="{{ asset('admin/user') }}">
              <span class="mif-users icon"></span>
              <span class="title">user</span>
          </a></li>
          <li {{ Request::is('admin/organisasi') || Request::is('admin/organisasi/*')? 'class=active' : ''}}><a href="{{ asset('admin/organisasi') }}">
              <span class="mif-organization icon"></span>
              <span class="title">organisasi</span>
          </a></li>
      </ul>
  </div>
