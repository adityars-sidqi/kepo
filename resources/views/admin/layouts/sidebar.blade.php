      <div class="col-xs-3 col-sm-2 col-md-2 sidebar" style="display:block">
        <ul class="nav nav-sidebar">
          <li {{ Request::is('admin') ? 'class=active' : ''}}>
            <a href="{{asset('admin')}}">Dashboard  </a>
          </li>
          <li {{ Request::is('admin/kategori') || Request::is('admin/kategori/*') ? 'class=active' : ''}}>
            <a href="{{asset('admin/kategori')}}">Kategori </a>
          </li>
          <li {{ Request::is('admin/seminar') || Request::is('admin/seminar/*') ? 'class=active' : ''}}>
            <a href="{{asset('admin/seminar')}}">Seminar</a>
          </li>
          <li {{ Request::is('admin/peserta') || Request::is('admin/peserta/*') ? 'class=active' : ''}}>
            <a href="{{asset('admin/peserta')}}">Peserta</a>
          </li>
          <li {{ Request::is('admin/organisasi') || Request::is('admin/organisasi/*') ? 'class=active' : ''}}>
            <a href="{{asset('admin/organisasi')}}">Organisasi</a>
          </li>
        </ul>
      </div>
