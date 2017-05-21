@extends('layouts.app')

@section('content')
  <div class="main" style="margin-bottom: 26px">
    <div class="container">
      <div class="row margin-bottom-20">
        <h1>Transaction - 10114320</h1>
        <table id="transactionsingle" class="table table-striped table-bordered table-hover table-responsive" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>Judul Seminar</th>
              <th>Price</th>
              <th>Qty</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Jakarta Smart City</td>
              <td>Rp. 50000</td>
              <td>2</td>
              <td>Rp. 100000</td>
            </tr>
            <tr>
              <td>Jakarta Smart Home</td>
              <td>Rp. 60000</td>
              <td>2</td>
              <td>Rp. 120000</td>
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
          <div class="panel panel-default" id="panel-confirmation">
            <div class="panel-body">
              <form class="form-horizontal" action="index.html" role="form" id="id-form-register" method="post">
                <fieldset>
                  <legend>Confirmation Payment</legend>
                  <div class="form-group">
                    <label for="nama-bank" class="col-lg-3 control-label">Bank <span class="require">*</span></label>
                    <div class="col-lg-8">
                      <input type="text" name="nama_bank" class="form-control" id="nama-bank">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nama-pengirim" class="col-lg-3 control-label">Sender Name <span class="require">*</span></label>
                    <div class="col-lg-8">
                      <input type="text" name="nama_pengirim" class="form-control" id="nama-pengirim">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="total-transfer" class="col-lg-3 control-label">Total Transfer (Rp) <span class="require">*</span></label>
                    <div class="col-lg-8">
                      <input type="number" min="1" name="total_transfer" class="form-control" id="total-transfer">
                    </div>
                  </div>
                </fieldset>
                <div class="col-md-3"></div>
                <div class="col-md-8">
                  <input type="submit" class="btn btn-success pull-right" value="Confirmation">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="row margin-bottom-20 ">
        <div class="col-lg-12 "></div>
      </div>
    </div>
  </div>
@endsection
