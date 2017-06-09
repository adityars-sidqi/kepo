@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-sm-12 col-xs-12" id="slider">
        <div class="carousel slide" data-ride="carousel" data-interval="2000" data-pause="hover">
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            @foreach ($seminarfeaturedpertamas as $seminarfeaturedpertama)
              <div class="item active">
                <img src="https://kepohub.blob.core.windows.net/image/seminar/{{$seminarfeaturedpertama->gambar}}"
                class="img-responsive" alt="{{$seminarfeaturedpertama->slug}}">
                <div class="carousel-caption">
                  <a href="{{ asset('seminar/'.$seminarfeaturedpertama->slug) }}"
                    style="color:rgb(255, 255, 255); font-size: 24px">
                    {{ $seminarfeaturedpertama->judul }}
                  </a>
                </div>
              </div>
            @endforeach
            @foreach ($seminarfeatureds as $seminarfeatured)
              <div class="item">
                <img src="https://kepohub.blob.core.windows.net/image/seminar/{{$seminarfeatured->gambar}}"
                class="img-responsive" alt="{{$seminarfeatured->slug}}">
                <div class="carousel-caption">
                  <a href="{{ asset('seminar/'.$seminarfeatured->slug) }}"
                    style="color:rgb(255, 255, 255); font-size: 24px">
                    {{ $seminarfeatured->judul }}
                  </a>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>

      <div class="col-md-3 hidden-xs" id="eventTerbaru">
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
              <ul class="list-unstyled" >
                @foreach ($seminarterbarus as $seminarterbaru)
                  <li class="margin-bottom-10" ><a href="{{ asset('seminar/'.$seminarterbaru->slug) }}">
                    {{ $seminarterbaru->judul }}</a>
                  </li>
                @endforeach
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
            <input type='text' name="daterange" id="daterange"/>
          </div>
        </div>
  </div>

  <div class="main">
    <div class="container" id="seminars">
      @include('seminars')
    </div>
  </div>
@endsection
