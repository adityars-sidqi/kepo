<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('images/icon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Kepo Hub</title>

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/daterangepicker.css') }}" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css" />

    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/icon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/icon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/icon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/icon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/icon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/icon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/icon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/icon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/icon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('images/icon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/icon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/icon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/icon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/icon/manifest.json') }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
  <body>
    <!-- header -->
    @include('layouts/header')
    <div class="container margin-bottom-10">
      <div class="row">
        <div class="col-md-12">
          <!-- end header -->

          @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))

            <p class="alert alert-{{ $msg }}">{!! Session::get('alert-' . $msg) !!} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
            @endif
          @endforeach

        </div>
      </div>
    </div>

    <!-- content -->
    @yield('content')
    <!-- end content -->

    <!-- footer -->
    @include('layouts/footer')
    <!-- end footer -->

    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="bs-example-modal-sm">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title" id="titlelogin">Login</h4>
          </div>
          <div class="modal-body">
            <form class="form" action="{{ asset('login/peserta')}}" method="post" role="form" id="formpeserta" style="display:none">
              <div class="row">
                <div class="col-md-12">
                  <div id="emaillogin" class="form-group">
                    <label class="control-label">Email Address <span class="required">*</span></label>
                    <input type="text"  name="emaillogin" data-required="1" class="form-control"/>
                  </div>

                  <div id="passwordlogin" class="form-group">
                    <label class="control-label">Password <span class="required">*</span></label>
                    <input type="password"  name="passwordlogin" data-required="1" class="form-control"/>
                  </div>

                  <div class="form-group">
                    {{ csrf_field() }}
                    <input type="submit" id="loginpeserta" name="loginpeserta" class="btn btn-primary btnlogin" value="Login Peserta">
                  </div>

                </div>
              </div>
            </form>
            <form class="form" action="{{ asset('login/organisasi')}}" method="post" role="form" id="formorganisasi" style="display:none">
              <div class="row">
                <div class="col-md-12">
                  <div id="emaillogin" class="form-group">
                    <label class="control-label">Email Address <span class="required">*</span></label>
                    <input type="text"  name="emaillogin" data-required="1" class="form-control"/>
                  </div>

                  <div id="passwordlogin" class="form-group">
                    <label class="control-label">Password <span class="required">*</span></label>
                    <input type="password"  name="passwordlogin" data-required="1" class="form-control"/>
                  </div>

                  <div class="form-group">
                    {{ csrf_field() }}
                    <input type="submit" id="loginorganisasi" name="loginorganisasi" class="btn btn-primary btnlogin" value="Login Organisasi">
                  </div>

                </div>
              </div>
            </form>
            <div class="row" id="tombolpilihlogin">
              <div class="col-md-5 col-sm-5 col-xs-5">
                <button type="button" class="btn btn-primary" name="btnpeserta" id="btnpeserta">Login Peserta</button>
              </div>
              <div class="col-md-5 col-sm-5 col-xs-5">
                <button type="button" class="btn btn-primary" name="btnorganisasi" id="btnorganisasi">Login Organisasi</button>
              </div>
            </div>
            <br>
            <a href="/register" id="linkregister">Register</a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary pull-left" id="btncancel" style="display:none">Cancel</button>
            <button type="button" data-dismiss="modal" class="btn default">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/daterangepicker.js') }}"></script>
    <script src="{{ asset('js/web.js') }}"></script>
  </body>
</html>
