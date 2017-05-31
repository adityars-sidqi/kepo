@extends('layouts.app')

@section('content')
  <div class="main" style="margin-bottom: 26px">
    <div class="container">
      <div class="row margin-bottom-20">
        <h2>Transaction ID : {{ $transaksi->id_transaksi }}</h2>
        <h5>Transaction Date : {{ $transaksi->tgl_transaksi->toFormattedDateString() }}</h5>
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
            @foreach ($transaksi->seminars as $seminar)
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
              <td class="text-right"><strong>{{ $transaksi->grand_total }}</strong></td>
            </tr>
          </table>
        </div>
      </div>

      <div class="row margin-bottom-20">
        <div class="col-md-12 col-sm-12">
          <div class="panel panel-default" id="panel-confirmation">
            <div class="panel-body">
              @if ($transaksi->konfirmasi == null)
                <form class="form-horizontal" action="{{ asset('transaction/'. $transaksi->id_transaksi .'/confirmation')}}" role="form" id="confirmation-payment" method="post">
                  <fieldset>
                    <legend>Confirmation Payment</legend>
                    <div class="form-group">
                      <label for="bank_pengirim" class="col-lg-3 control-label">Bank <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input type="text" name="bank_pengirim" class="form-control" id="bank_pengirim" aria-describedby="helpBlockbank_pengirim" >
                        <span id="helpBlockbank_pengirim" class="help-block">
                          {{ $errors->has('bank_pengirim') ? $errors->first('bank_pengirim') : ''}}
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="atas_nama" class="col-lg-3 control-label">Sender Name <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input type="text" name="atas_nama" class="form-control" id="atas_nama" aria-describedby="helpBlockatas_nama" >
                        <span id="helpBlockatas_nama" class="help-block">
                          {{ $errors->has('atas_nama') ? $errors->first('atas_nama') : ''}}
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="jumlah_transfer" class="col-lg-3 control-label">Total Transfer (Rp) <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input type="number" min="1" name="jumlah_transfer" class="form-control" id="jumlah_transfer" aria-describedby="helpBlockjumlah_transfer" >
                        <span id="helpBlockjumlah_transfer" class="help-block">
                          {{ $errors->has('jumlah_transfer') ? $errors->first('jumlah_transfer') : ''}}
                        </span>
                      </div>
                    </div>
                  </fieldset>
                  <div class="col-md-3"></div>
                  <div class="col-md-8">
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-success pull-right" value="Confirmation">
                  </div>
                </form>
               @else
                <form class="form-horizontal">
                  <fieldset>
                    <legend>Confirmation Payment</legend>
                    <div class="form-group">
                      <label for="nama-bank" class="col-lg-3 control-label">Bank <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input type="text" name="nama_bank" class="form-control" id="nama-bank" value="{{ $transaksi->konfirmasi->bank_pengirim }}" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nama-pengirim" class="col-lg-3 control-label">Sender Name <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input type="text" name="nama_pengirim" class="form-control" id="nama-pengirim" value="{{ $transaksi->konfirmasi->atas_nama }}" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="total-transfer" class="col-lg-3 control-label">Total Transfer (Rp) <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input type="number" min="1" name="total_transfer" class="form-control" id="total-transfer" value="{{ $transaksi->konfirmasi->jumlah_transfer }}" readonly>
                      </div>
                    </div>
                    @if($transaksi->konfirmasi->status == 1)
                    <div class="form-group">
                      <label for="name-admin" class="col-lg-3 control-label">Confirmed By</label>
                      <div class="col-lg-8">
                        <input type="text" name="admin_name" class="form-control" id="name-admin" value="{{ $transaksi->konfirmasi->admin->nama }}" readonly>
                      </div>
                    </div>
                    @endif
                    <div class="form-group">
                      <label for="status" class="col-lg-3 control-label">Status</label>
                      <div class="col-lg-8">
                        @if ($transaksi->konfirmasi->status == 0)
                            <button type="button" class="btn btn-warning btn-xs">On Process</button>
                        @else
                            <button type="button" class="btn btn-success btn-xs">Confirmed</button>
                        @endif
                      </div>
                    </div>
                    @if ($transaksi->konfirmasi->status == 1)
                      <div class="form-group">
                        <div class="col-md-3"></div>
                        <div class="col-md-8">
                          <a href="{{ asset('transaction/'. $transaksi->id_transaksi .'/print') }}" class="btn btn-info">Print Your Tickets</a>
                        </div>
                      </div>
                    @endif
                  </fieldset>
                </form>
              @endif
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
