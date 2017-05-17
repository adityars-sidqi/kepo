@extends('admin.layouts.master')

@section('title','Organisasi | Administrator KEPO.ID')
@section('title_page', 'Organisasi')
@section('script_page')
  $('#organisasi').dataTable( {
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
  <a class="btn btn-primary" href="{{ url('admin/organisasi/create') }}" role="button" >CREATE</a>
  <br>
  <br>
  @include('admin/layouts/flash_message')
  <table id="organisasi" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
            <td>ID</td>
            <td>Nama</td>
            <td>Telepon</td>
            <td>Alamat</td>
            <td>Email</td>
            <td>Password</td>
            <td>Kode Aktivasi</td>
            <td>Status</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>
          @foreach ($organisasis as $organisasi)
            <tr>
                <td>{{ $organisasi->id_organisasi }}</td>
                <td>{{ $organisasi->nama }}</td>
                <td>{{ $organisasi->telp }}</td>
                <td>{{ $organisasi->alamat }}</td>
                <td>{{ $organisasi->email }}</td>
                <td>{{ str_limit($organisasi->password, 10) }}</td>
                <td>{{ str_limit($organisasi->kode_aktivasi, 10) }}</td>
                <td>{{ $organisasi->status }}</td>
                <td>
                  <center>
                    <a href="{{ url('admin/organisasi/' . $organisasi->id_organisasi .'/edit') }}" class="btn btn-success">Edit</a>
                    <form action="{{asset('admin/organisasi/' . $organisasi->id_organisasi)}}" method="post" style="display:inline">
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
