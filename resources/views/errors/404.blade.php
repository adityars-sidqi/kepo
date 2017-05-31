@extends('layouts.app')

@section('content')
  <div class="main margin-bottom-5">
  	<div class="container">
      <div class="row" style="margin-bottom: 94px"></div>
      <div class="row margin-bottom-20">
        <div class="col-md-6 hidden-xs" id="number">
          Not Found
        </div>
        <div class="col-xs-12 visible-xs" id="number" style="font-size:50px">
          Not Found
        </div>
        <div class="col-md-6" id="details">
          <h3>Oops! We can't find what you're looking for</h3>
          <p>Try another page or go back to <a href="/">home </a>
            <br/>
            <br/>
            <br/>
          </p>
        </div>
      </div>
      <div class="row margin-bottom-20"></div>
  	</div>
  </div>
@endsection
