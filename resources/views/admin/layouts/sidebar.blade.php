  <div class="cell size-x200" id="cell-sidebar" style="background-color: #71b1d1; height: 100%">
      <ul class="sidebar">
          <li {{ Request::is('admin') ? 'class=active' : ''}}><a href="{{asset('admin')}}">
              <span class="mif-home icon"></span>
              <span class="title">dashboard</span>
          </a></li>
          <li {{ Request::is('admin/kategori') ? 'class=active' : ''}}><a href="{{ asset('admin/kategori') }}">
              <span class="mif-list icon"></span>
              <span class="title">kategori</span>
          </a></li>
          <li><a href="#">
              <span class="mif-drive-eta icon"></span>
              <span class="title">Virtual machines</span>
              <span class="counter">0</span>
          </a></li>
          <li><a href="#">
              <span class="mif-cloud icon"></span>
              <span class="title">Cloud services</span>
              <span class="counter">0</span>
          </a></li>
          <li><a href="#">
              <span class="mif-database icon"></span>
              <span class="title">SQL Databases</span>
              <span class="counter">0</span>
          </a></li>
          <li><a href="#">
              <span class="mif-cogs icon"></span>
              <span class="title">Automation</span>
              <span class="counter">0</span>
          </a></li>
          <li><a href="#">
              <span class="mif-apps icon"></span>
              <span class="title">all items</span>
              <span class="counter">0</span>
          </a></li>
      </ul>
  </div>
