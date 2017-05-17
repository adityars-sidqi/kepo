@extends('layouts.app')

@section('content')
  <div class="container">
        <div class="row">
          <div class="col-md-9 col-sm-12 col-xs-12" id="slider">
            <div class="carousel slide" data-ride="carousel" data-interval="2000" data-pause="hover">

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="{{asset('images/1.jpg')}}" class="img-responsive" alt="...">
                  <div class="carousel-caption">
                   ...
                  </div>
                </div>
                <div class="item">
                  <img src="{{asset('images/2.jpg') }}"  class="img-responsive" alt="...">
                  <div class="carousel-caption">
                   ...
                  </div>
                </div>
                <div class="item">
                  <img src="{{asset('images/3.jpg') }}" class="img-responsive" alt="...">
                  <div class="carousel-caption">
                   ...
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="col-md-3" id="eventTerbaru">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active">
                <a href="#newevent" aria-controls="home" role="tab" data-toggle="tab" class="tabaktiv">New Event</a>
              </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane row fade hidden-xs active in" id="newevent">
                <div class="col-md-12">
                  <ul id="tabnew" class="list-unstyled" style="padding-top:15px;">
                    <li><a href="#">Seminar Terbaru</a></li>
                    <li><a href="#">Seminar Terbaru</a></li>
                    <li><a href="#">Seminar Terbaru</a></li>
                    <li><a href="#">Seminar Terbaru</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-12 col-xs-12" id="divdaterange">
          <div class='input-group' id="inputdaterange">
            <span class="input-group-addon" >
              <span class="glyphicon glyphicon-calendar"></span>
            </span>
            <input type='text' name="daterange" />
          </div>
        </div>
      </div>

      <div class="main">
        <div class="container">
          <div class="row margin-bottom-10">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <a href="#" class="gambarseminar">
                <img class="img-responsive img-thumbnail" src="{{asset('images/1.jpg')}}" alt="Generic placeholder image">
              </a>
              <h5>
                <a href="#" class="judul">Dukungan Intelligent System Dalam Perencanaan Ruang Kota DKI Jakarta</a>
              </h5>
              <h6>Organized by : BEM FIKTI Universitas Gunadarma</h6>
              <h6>27 Mei 2017</h6>
              <div class="tempat">
                <i class="fa fa-map-marker"></i> Amfiteater Terbuka Jiwa Jawa Resort, Sukapura , Probolinggo, Jawa Timur
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <a href="#" class="gambarseminar">
                <img class="img-responsive img-thumbnail" src="{{asset('images/1.jpg')}}" alt="Generic placeholder image">
              </a>
              <h5>
                <a href="#" class="judul">Dukungan Intelligent System Dalam Perencanaan Ruang Kota DKI Jakarta</a>
              </h5>
              <h6>Organized by : BEM FIKTI Universitas Gunadarma</h6>
              <h6>27 Mei 2017</h6>
              <div class="tempat">
                <i class="fa fa-map-marker"></i> Amfiteater Terbuka Jiwa Jawa Resort, Sukapura , Probolinggo, Jawa Timur
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <a href="#" class="gambarseminar">
                <img class="img-responsive img-thumbnail" src="{{asset('images/1.jpg')}}" alt="Generic placeholder image">
              </a>
              <h5>
                <a href="#" class="judul">Dukungan Intelligent System Dalam Perencanaan Ruang Kota DKI Jakarta</a>
              </h5>
              <h6>Organized by : BEM FIKTI Universitas Gunadarma</h6>
              <h6>27 Mei 2017</h6>
              <div class="tempat">
                <i class="fa fa-map-marker"></i> Amfiteater Terbuka Jiwa Jawa Resort, Sukapura , Probolinggo, Jawa Timur
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <a href="#" class="gambarseminar">
                <img class="img-responsive img-thumbnail" src="{{asset('images/1.jpg')}}" alt="Generic placeholder image">
              </a>
              <h5>
                <a href="#" class="judul">Dukungan Intelligent System Dalam Perencanaan Ruang Kota DKI Jakarta</a>
              </h5>
              <h6>Organized by : BEM FIKTI Universitas Gunadarma</h6>
              <h6>27 Mei 2017</h6>
              <div class="tempat">
                <i class="fa fa-map-marker"></i> Amfiteater Terbuka Jiwa Jawa Resort, Sukapura , Probolinggo, Jawa Timur
              </div>
            </div>
          </div>
          <div class="row margin-bottom-10">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <a href="#" class="gambarseminar">
                <img class="img-responsive img-thumbnail" src="{{asset('images/1.jpg')}}" alt="Generic placeholder image">
              </a>
              <h5>
                <a href="#" class="judul">Dukungan Intelligent System Dalam Perencanaan Ruang Kota DKI Jakarta</a>
              </h5>
              <h6>Organized by : BEM FIKTI Universitas Gunadarma</h6>
              <h6>27 Mei 2017</h6>
              <div class="tempat">
                <i class="fa fa-map-marker"></i> Amfiteater Terbuka Jiwa Jawa Resort, Sukapura , Probolinggo, Jawa Timur
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <a href="#" class="gambarseminar">
                <img class="img-responsive img-thumbnail" src="{{asset('images/1.jpg')}}" alt="Generic placeholder image">
              </a>
              <h5>
                <a href="#" class="judul">Dukungan Intelligent System Dalam Perencanaan Ruang Kota DKI Jakarta</a>
              </h5>
              <h6>Organized by : BEM FIKTI Universitas Gunadarma</h6>
              <h6>27 Mei 2017</h6>
              <div class="tempat">
                <i class="fa fa-map-marker"></i> Amfiteater Terbuka Jiwa Jawa Resort, Sukapura , Probolinggo, Jawa Timur
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <a href="#" class="gambarseminar">
                <img class="img-responsive img-thumbnail" src="{{asset('images/1.jpg')}}" alt="Generic placeholder image">
              </a>
              <h5>
                <a href="#" class="judul">Dukungan Intelligent System Dalam Perencanaan Ruang Kota DKI Jakarta</a>
              </h5>
              <h6>Organized by : BEM FIKTI Universitas Gunadarma</h6>
              <h6>27 Mei 2017</h6>
              <div class="tempat">
                <i class="fa fa-map-marker"></i> Amfiteater Terbuka Jiwa Jawa Resort, Sukapura , Probolinggo, Jawa Timur
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <a href="#" class="gambarseminar">
                <img class="img-responsive img-thumbnail" src="{{asset('images/1.jpg')}}" alt="Generic placeholder image">
              </a>
              <h5>
                <a href="#" class="judul">Dukungan Intelligent System Dalam Perencanaan Ruang Kota DKI Jakarta</a>
              </h5>
              <h6>Organized by : BEM FIKTI Universitas Gunadarma</h6>
              <h6>27 Mei 2017</h6>
              <div class="tempat">
                <i class="fa fa-map-marker"></i> Amfiteater Terbuka Jiwa Jawa Resort, Sukapura , Probolinggo, Jawa Timur
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
