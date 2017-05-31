@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row margin-bottom-10">
      <h1>Laporan Penjualan Tiket Seminar</h1>
    </div>
    <div class="row">
      <table id="dashboard-laporan" class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Jumlah Tiket Terjual</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($seminars as $seminar)
            <tr>
              <td>{{ $seminar->id_seminar }}</td>
              <td>{{ $seminar->judul }}</td>
              <td>{{ $seminar->jumlah_tiket }}</td>
              <td><a href="#" class="btn btn-success"><span class="glyphicon glyphicon-download"></span> Download Laporan</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row margin-bottom-20">

    </div>
  </div>
@endsection
