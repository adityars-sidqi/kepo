@extends('admin.layouts.master')

@section('title','Seminar | Administrator KEPO.ID')
@section('title_page', 'Seminar')
@section('script_page')
  $('#seminar').dataTable( {
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
        null,
        null,
        { "width": "16%" }
      ]
    }
  );
@endsection
@section('content')
  <a class="btn btn-primary" href="{{ url('admin/seminar/create') }}" role="button" >CREATE</a>
  <br>
  <br>
  @include('admin/layouts/flash_message')
  <table id="seminar" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
          <tr>
              <td>ID</td>
              <td>Judul</td>
              <td>Tanggal</td>
              <td>Tempat</td>
              <td>Deskripsi</td>
              <td>Tiket Tersedia</td>
              <td>Harga</td>
              <td>Gambar</td>
              <td>Kategori</td>
              <td>Organisasi</td>
              <td>Action</td>
          </tr>
      </thead>
  <tbody>
      @foreach ($seminars as $seminar)
        <tr>
            <td>{{ $seminar->id_seminar }}</td>
            <td>{{ $seminar->judul }}</td>
            <td>{{ $seminar->tgl_seminar }}</td>
            <td>{{ $seminar->tempat }}</td>
            <td>{{ str_limit($seminar->deskripsi, 10) }}</td>
            <td>{{ $seminar->tiket_tersedia }}</td>
            <td>{{ $seminar->harga }}</td>
            <td>{{ str_limit($seminar->gambar, 10) }}</td>
            <td>{{ $seminar->kategori->nama_kategori }}</td>
            <td>{{ $seminar->organisasi->nama }}</td>
            <td>
              <center>
                <a href="{{ url('admin/seminar/' . $seminar->id_seminar .'/edit') }}" class="btn btn-success">Edit</a>
                <form action="{{asset('admin/seminar/' . $seminar->id_seminar)}}" method="post" style="display:inline">
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
