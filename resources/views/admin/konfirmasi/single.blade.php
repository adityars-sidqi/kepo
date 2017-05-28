@extends('admin.layouts.master');

@section('title', 'Konfirmasi | Administrator KepoHub.com');

@section('title_page', 'Konfirmasi ID : '.$konfirmasi->id_konfirmasi);

@section('content')
  <div class="row margin-bottom-20">
    <h4>Transaction ID : {{ $konfirmasi->transaksi->id_transaksi }}</h4>
    <h5>Transaction Date : {{ $konfirmasi->transaksi->tgl_transaksi->toFormattedDateString() }}</h5>
    <br>
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
        @foreach ($konfirmasi->transaksi->seminars as $seminar)
        <tr>
          <td>{{ $seminar->judul }}</td>
          <td>Rp. {{ $seminar->harga }}</td>
          <td>{{ $seminar->pivot->jumlah_tiket }} Tickets</td>
          <td>Rp. {{ $seminar->pivot->total }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="col-lg-4 col-md-4 col-sm-4 pull-right">
      <table class="table table-responsive table-borderless">
        <tr>
          <td><strong>Grand Total</strong></td>
          <td><strong>Rp.</strong></td>
          <td class="text-right"><strong>{{ $konfirmasi->transaksi->grand_total }}</strong></td>
        </tr>
      </table>
    </div>
  </div>
  <div class="row margin-bottom-20">
    <div class="col-md-12 col-sm-12">
      <div class="panel panel-default" id="panel-information-payment">
        <div class="panel-body">
          <fieldset>
            <legend>Information Payment</legend>
            <form class="form-horizontal">
              <div class="form-group">
                <label for="nama-bank" class="col-lg-3 control-label">Bank <span class="require">*</span></label>
                <div class="col-lg-8">
                  <input type="text" name="nama_bank" class="form-control" id="nama-bank" value="{{ $konfirmasi->bank_pengirim }}" readonly>
                </div>
              </div>
              <div class="form-group">
                <label for="nama-pengirim" class="col-lg-3 control-label">Sender Name <span class="require">*</span></label>
                <div class="col-lg-8">
                  <input type="text" name="nama_pengirim" class="form-control" id="nama-pengirim" value="{{ $konfirmasi->atas_nama }}" readonly>
                </div>
              </div>
              <div class="form-group">
                <label for="total-transfer" class="col-lg-3 control-label">Total Transfer (Rp) <span class="require">*</span></label>
                <div class="col-lg-8">
                  <input type="number" min="1" name="total_transfer" class="form-control" id="total-transfer" value="{{ $konfirmasi->jumlah_transfer }}" readonly>
                </div>
              </div>
              @if($konfirmasi->status == 0)
              <div class="form-group">
                <div class="col-md-3"></div>
                <div class="col-md-8">
                  <a href="{{ asset('admin/konfirmasi/' . $konfirmasi->id_konfirmasi.'/confirm') }}" class="btn btn-success">Confirm</a>
                    <form action="{{ asset('admin/konfirmasi/' . $konfirmasi->id_konfirmasi) }}" method="post" >
                    <input type="hidden" name="_method" value="delete">
                    {{ csrf_field() }}
                    <input type="submit" name="submit" value="Delete" class="btn btn-danger" >
                  </form>
                </div>
              </div>
              @else
                <div class="form-group">
                  <label for="name_admin" class="col-lg-3 control-label">Confirmed By</label>
                  <div class="col-lg-8">
                    <input type="text" name="name_admin" id="name_admin" class="form-control" value="{{ $konfirmasi->admin->nama }}" readonly>
                  </div>
                </div>
              @endif
            </form>

          </fieldset>
        </div>
      </div>
    </div>
  </div>
@endsection
