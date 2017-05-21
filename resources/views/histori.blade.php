@extends('layouts.app')

@section('content')
  <div class="main" style="margin-bottom: 26px">
    <div class="container">
      <div class="row margin-bottom-20">
        <h1>Transaction History</h1>
        <table id="transactionhistory" class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>ID Transaction</th>
              <th>Purchase Date</th>
              <th>Total</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>10114320</td>
              <td>15-08-2017</td>
              <td>Rp. 150000</td>
              <td>
                <button type="button" class="btn btn-success">Confirmation Payment</button>
              </td>
            </tr>
            <tr>
              <td>10114320</td>
              <td>15-08-2017</td>
              <td>Rp. 150000</td>
              <td>
                <button type="button" class="btn btn-success">Confirmation Payment</button>
              </td>
            </tr>
            <tr>
              <td>10114320</td>
              <td>15-08-2017</td>
              <td>Rp. 150000</td>
              <td>
                <button type="button" class="btn btn-success">Confirmation Payment</button>
              </td>
            </tr>
            <tr>
              <td>10114320</td>
              <td>15-08-2017</td>
              <td>Rp. 150000</td>
              <td>
                <button type="button" class="btn btn-success">Confirmation Payment</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="row margin-bottom-20">
        <div class="col-lg-12"></div>
      </div>
      <div class="row margin-bottom-20">
        <div class="col-lg-12"></div>
      </div>
    </div>
  </div>
@endsection
