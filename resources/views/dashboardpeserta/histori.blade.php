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
            @foreach ($transaksis as $transaksi)
            <tr>
              <td>{{ $transaksi->id_transaksi }}</td>
              <td>{{ $transaksi->tgl_transaksi->toDateString() }}</td>
              <td>Rp. {{ $transaksi->grand_total }}</td>
              <td>
                @if ($transaksi->konfirmasi == null)
                  <a href="{{ asset('transaction/'.$transaksi->id_transaksi)}}" class="btn btn-info">Confirmation Payment</a>
                @else
                  @if ($transaksi->konfirmasi->status == 1)
                    <a href="{{ asset('transaction/'.$transaksi->id_transaksi)}}" class="btn btn-success">Print Your Tickets</a>
                  @else
                    <a href="{{ asset('transaction/'.$transaksi->id_transaksi)}}" class="btn btn-warning">On Process</a>
                  @endif
                @endif
              </td>
            </tr>
            @endforeach
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
