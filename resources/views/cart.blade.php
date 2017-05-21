@extends('layouts.app')

@section('content')
  <div class="main" style="margin-bottom: 26px">
  <div class="container">
    <div class="row margin-bottom-20">
      <h1>Order Summary</h1>
      <table id="transactionsingle" class="table table-striped table-bordered table-hover table-responsive" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>Judul Seminar</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Total</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Jakarta Smart City</td>
            <td>Rp. 50000</td>
            <td>2</td>
            <td>Rp. 100000</td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
          </tr>
          <tr>
            <td>Jakarta Smart Home</td>
            <td>Rp. 60000</td>
            <td>2</td>
            <td>Rp. 120000</td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
          </tr>
        </tbody>
      </table>
      <div class="col-lg-4 col-md-4 col-sm-4 pull-right">
        <table class="table table-responsive table-borderless">
          <tr>
            <td>Sub Total</td>
            <td>Rp.</td>
            <td class="text-right">220000</td>
          </tr>
          <tr>
            <td>Order Processing Fee</td>
            <td>Rp.</td>
            <td class="text-right">100000</td>
          </tr>
          <tr>
            <td><strong>Grand Total</strong></td>
            <td><strong>Rp.</strong></td>
            <td class="text-right"><strong>230000</strong></td>
          </tr>
        </table>
      </div>
    </div>
    <div class="row margin-bottom-20">
      <div class="col-md-12 col-sm-12">
        <input type="button" class="btn btn-lg btn-success pull-right" value="Checkout">
      </div>
    </div>
  </div>
</div>
<div class="row margin-bottom-20 ">
  <div class="col-lg-12 "></div>
</div>
@endsection
