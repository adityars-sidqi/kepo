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
            <th class="col-xs-1 col-md-1">Action</th>
          </tr>
        </thead>
        <tbody>
          @if (!session()->has('seminar') || session()->get('seminar') == null)
            <tr>
              <td colspan="5"><center><h3>No data</h3></center></td>
            </tr>
          @else
            @foreach (session()->get('seminar') as $seminar)
              <tr>
                <td>{{ $seminar['judul'] }} </td>
                <td>Rp. {{ $seminar['harga'] }} </td>
                <td>{{ $seminar['jumlah_tiket'] }}</td>
                <td>Rp. {{ $seminar['sub_total'] }}</td>
                <td><a href="{{ asset('seminar/'.$seminar['slug'].'/delete') }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
              </tr>
            @endforeach
          @endif

        </tbody>
      </table>
      @if (session()->get('seminar') != null)
        <div class="col-lg-4 col-md-4 col-sm-4 pull-right">
          <table class="table table-responsive table-borderless">
            <tr>
              <td><strong>Grand Total</strong></td>
              <td><strong>Rp.</strong></td>
              <td class="text-right">
                <strong>
                  @php
                  $grand_total = 0;
                    foreach (session()->get('seminar') as $seminar_session) {
                      $grand_total += $seminar_session['sub_total'];
                    }
                    echo $grand_total;
                  @endphp
                </strong>
              </td>
            </tr>
          </table>
        </div>
      @endif

    </div>
    @if (session()->get('seminar') != null)
      <div class="row margin-bottom-20">
        <div class="col-md-12 col-sm-12">
          <input type="button" class="btn btn-lg btn-success pull-right" value="Checkout">
        </div>
      </div>
    @endif

  </div>
</div>
<div class="row margin-bottom-20 ">
  <div class="col-lg-12 "></div>
</div>
@endsection
