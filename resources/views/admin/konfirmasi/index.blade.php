@extends('admin.layouts.master')

@section('title','Konfirmasi | Administrator KepoHub.com')
@section('title_page', 'Konfirmasi')
@section('script_page')
    $('#konfirmasi').dataTable( {
      "iDisplayLength": 5,
      "bLengthChange": false,
      "columns": [
          null,
          null,
          null,
          null,
          null,
          null,
          null,
          null,
          null,
          null,
          { "width": "10%" }
        ]
      }
    );
@endsection
@section('content')
  @include('admin/layouts/flash_message')

  <table id="konfirmasi" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Peserta</th>
                <th>Nama Peserta</th>
                <th>Bank Pengirim</th>
                <th>Atas Nama</th>
                <th>Jumlah Transfer</th>
                <th>ID Transaksi</th>
                <th>ID Admin</th>
                <th>Nama Admin</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($konfirmasis as $konfirmasi)
            <tr>
              <td>{{ $konfirmasi->id_konfirmasi }}</td>
              <td>{{ $konfirmasi->id_peserta }}</td>
              <td>{{ $konfirmasi->peserta->nama }}</td>
              <td>{{ $konfirmasi->bank_pengirim }}</td>
              <td>{{ $konfirmasi->atas_nama }}</td>
              <td>{{ $konfirmasi->jumlah_transfer }}</td>
              <td>{{ $konfirmasi->id_transaksi }}</td>
              <td>{{ $konfirmasi->status == 1 ? $konfirmasi->id_admin : '-'  }}</td>
              <td>{{ $konfirmasi->status == 1 ? $konfirmasi->admin->nama : '-'    }}</td>
              <td>
                <center>
                  @if ($konfirmasi->status == 0)
                    -
                  @else
                    <a class="btn btn-success btn-xs">Sudah dikonfirmasi</a>
                  @endif
                </center>
              </td>
              <td>
                <a href="{{ url('admin/konfirmasi/' . $konfirmasi->id_konfirmasi ) }}" class="btn btn-info">Lihat</a>
              </td>
            </tr>
          @endforeach
        </tbody>
    </table>
@endsection
