@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row margin-bottom-10">
      <div class="row" id="formtambah">
        <center><h1>Tambah Seminar</h1></center>
        <br><br>
        <div class="col-md-10 col-md-offset-1">

          <form class="form-horizontal" role="form" id="form-tambah" action="{{ asset('dashboard/seminar') }}" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="judul" class="col-lg-2 control-label">Judul <span class="require">*</span></label>
              <div class="col-lg-8">
                <input type="text" name="judul" class="form-control" id="judul" value="">
              </div>
            </div>
            <div class="form-group">
              <label for="tgl_seminar" class="col-lg-2 control-label">Tanggal <span class="require">*</span></label>
              <div class="col-lg-8">
                <input type="date" name="tgl_seminar" class="form-control" id="tgl_seminar" value="">
              </div>
            </div>
            <div class="form-group">
              <label for="tempat" class="col-lg-2 control-label">Tempat <span class="require">*</span></label>
              <div class="col-lg-8">
                <input type="text" name="tempat" class="form-control" id="tempat" value="">
              </div>
            </div>
            <div class="form-group">
              <label for="deskripsi" class="col-lg-2 control-label">Deskripsi <span class="require">*</span></label>
              <div class="col-lg-8">
                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="harga" class="col-lg-2 control-label">Harga <span class="require">*</span></label>
              <div class="col-lg-8">
                <input type="number" min="1" name="harga" class="form-control" id="harga" value="">
              </div>
            </div>
            <div class="form-group">
              <label for="tiket-tiket_tersedia" class="col-lg-2 control-label">Tiket Tersedia <span class="require">*</span></label>
              <div class="col-lg-8">
                <input type="number" min="1" name="tiket_tersedia" class="form-control" id="tiket_tersedia" value="">
              </div>
            </div>
            <div class="form-group">
              <label for="gambar" class="col-lg-2 control-label">Gambar <span class="require">*</span></label>
              <div class="col-lg-8">
                <input type="file" name="gambar" class="form-control" id="gambar">
              </div>
            </div>
            <div class="form-group">
              <label for="id_kategori" class="col-lg-2 control-label">Kategori <span class="require">*</span></label>
              <div class="col-lg-8">
                <select name="id_kategori" class="form-control" id="id_kategori">
                  @foreach ($kategoris as $kategori)
                    <option value="{{$kategori->id_kategori}}">{{$kategori->nama_kategori}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-2">

              </div>
              <div class="col-lg-8">
                {{ csrf_field() }}
                <input type="submit" name="btn-save" value="Simpan" class="btn btn-success" id="btn-save">
                <a href="{{asset('dashboard/seminar')}}"  class="btn btn-default pull-right">Cancel</a>
              </div>
            </div>
          </form>
        </div>
        <!-- end form tambah -->
      </div>
    </div>
  </div>
@endsection
