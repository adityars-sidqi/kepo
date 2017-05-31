@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row margin-bottom-5">
      <div class="col-md-12">
        <h1>Daftar Seminar</h1>
      </div>
    </div>
    <div class="row margin-bottom-20" >
      <div class="col-md-12">
        <a class="btn btn-success" href="{{ url('dashboard/seminar/create') }}" role="button" >Add Seminar</a>
      
        <table id="daftarseminar" class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>Judul</th>
              <th>Tanggal</th>
              <th>Tempat</th>
              <th>Deskripsi</th>
              <th>Harga</th>
              <th>Tiket Tersedia</th>
              <th>Gambar</th>
              <th>Kategori</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="seminar-list" name="seminar-list">
            @foreach ($seminars as $seminar)
              <tr id="seminar{{$seminar->id_seminar}}">
                <td>{{ $seminar->judul }}</td>
                <td>{{ $seminar->tgl_seminar->toFormattedDateString() }}</td>
                <td>{{ $seminar->tempat }}</td>
                <td>{{ str_limit($seminar->deskripsi, 20) }} </td>
                <td>Rp. {{ $seminar->harga}}</td>
                <td>{{ $seminar->tiket_tersedia}}</td>
                <td>{{ $seminar->gambar}}</td>
                <td>{{ $seminar->kategori->nama_kategori}}</td>
                <td>
                  <center>
                    <a href="{{ url('dashboard/seminar/' . $seminar->slug .'/edit') }}" class="btn btn-warning">Edit</a>
                    <form action="{{asset('dashboard/seminar/' . $seminar->id_seminar)}}" method="post" style="display:inline">
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
      </div>
    </div>
  </div>

@endsection
