@extends('layouts.app')

@section('content')
  <div class="main margin-bottom-5">
  	<div class="container">
      <div class="row" style="margin-bottom: 91px"></div>
      <div class="row margin-bottom-20">

      <div class="alert alert-success" role="alert" style="height: 100px; padding-top: 40px">
          <strong>Success!</strong> The first stage of your sign up has been successful. To complete the process please check your email at {{ $email }} for a validation request
      </div>
      </div>
      <div class="row margin-bottom-20"></div>
      <div class="row margin-bottom-20"></div>
      <div class="row margin-bottom-20"></div>
  	</div>
  </div>
@endsection
