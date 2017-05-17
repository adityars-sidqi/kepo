@extends('admin.layouts.master')

@section('title','Peserta | Administrator KEPO.ID')
@section('title_page', 'Peserta')
@section('script_page')
  $('#peserta').dataTable( {
    "iDisplayLength": 5,
    "bLengthChange": false,
    "columns": [
        { "width": "6%" },
        null,
        { "width": "12%" },
        { "width": "12%" },
        null,
        null,
        null,
        null,
        { "width": "16%" }
      ]
    }
  );
@endsection
@section('content')
  <a class="btn btn-primary" href="{{ url('admin/peserta/create') }}" role="button" >CREATE</a>
  <br>
  <br>
  @include('admin/layouts/flash_message')
  <table id="peserta" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
          <tr>
              <td>ID</td>
              <td>Nama</td>
              <td>Tanggal Lahir</td>
              <td>Jenis Kelamin</td>
              <td>Email</td>
              <td>Password</td>
              <td>Kode Aktivasi</td>
              <td>Status</td>
              <td>Action</td>
          </tr>
        </thead>
        <tbody>
      @foreach ($pesertas as $peserta)
        <tr>
            <td>{{ $peserta->id_peserta }}</td>
            <td>{{ $peserta->nama }}</td>
            <td>{{ $peserta->tgl_lahir }}</td>
            <td>{{ $peserta->jenis_kelamin }}</td>
            <td>{{ $peserta->email }}</td>
            <td>{{ str_limit($peserta->password, 10) }}</td>
            <td>{{ str_limit($peserta->kode_aktivasi, 10) }}</td>
            <td>{{ $peserta->status }}</td>
            <td>
              <center>
                <a href="{{ url('admin/peserta/' . $peserta->id_peserta .'/edit') }}" class="btn btn-success">Edit</a>
                <form action="{{ asset('admin/peserta/' . $peserta->id_peserta)}}" method="post" style="display:inline">
                    <input type="hidden" name="_method" value="delete">
                    {{ csrf_field() }}
                    <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                </form>
              </center>
            </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
