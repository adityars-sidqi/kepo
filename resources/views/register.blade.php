@extends('layouts.app')

@section('content')
  <div class="main margin-bottom-20">
        <div class="container">
          <div class="col-md-12 margin-bottom-20">

          </div>
          <div class="col-md-12 margin-bottom-20">

          </div>
          <div class="row">
            <center><h1>Register</h1></center>
            <hr>
            <div class="col-md-5 col-sm-5 col-xs-12">
              <center><h3>Register As Peserta</h3></center>
              <p>Register as peserta to attend seminars organized by various organizations</p>
              <center><a href="/register/peserta" class="btn btn-primary btnlogin">Register</a></center>
            </div>
            <div class="col-md-1 col-sm-1 col-xs-1">

            </div>
            <div class="col-md-5 col-sm-5 col-xs-12">
              <center><h3>Register As Organisasi</h3></center>
              <p>Register as an organisasi to sell your seminars to our users</p>
              <center><a href="/register/organisasi" class="btn btn-primary btnlogin">Register</a></center>
            </div>
          </div>
          <div class="col-md-12 margin-bottom-20"></div>
          <div class="col-md-12 margin-bottom-20"></div>
        </div>
      </div>
@endsection
