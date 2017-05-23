@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row margin-bottom-10">
      <div class="row" id="formtambah">
        <center><h1>Edit Seminar</h1></center>
        <br><br>
        <div class="col-md-10 col-md-offset-1">

          <form class="form-horizontal" role="form" id="form-tambah" action="{{asset('dashboard/seminar/' . $seminar->id_seminar)}}" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="judul" class="col-lg-2 control-label">Judul <span class="require">*</span></label>
              <div class="col-lg-8">
                <input type="text" name="judul" class="form-control" id="judul" value="{{$seminar->judul}}">
                <span id="helpBlockJudul" class="help-block">
                  {{ $errors->has('judul') ? $errors->first('judul') : ''}}
                </span>
              </div>
            </div>
            <div class="form-group">
              <label for="tgl_seminar" class="col-lg-2 control-label">Tanggal <span class="require">*</span></label>
              <div class="col-lg-8">
                <input type="date" name="tgl_seminar" class="form-control" id="tgl_seminar" value="{{$seminar->tgl_seminar->toDateString()}}">
                <span id="helpBlockTgl_seminar" class="help-block">
                  {{ $errors->has('tgl_seminar') ? $errors->first('tgl_seminar') : ''}}
                </span>
              </div>
            </div>
            <div class="form-group">
              <label for="tempat" class="col-lg-2 control-label">Tempat <span class="require">*</span></label>
              <div class="col-lg-8">
                <input type="text" name="tempat" class="form-control" id="tempat" value="{{$seminar->tempat}}">
                <span id="helpBlockTempat" class="help-block">
                  {{ $errors->has('tempat') ? $errors->first('tempat') : ''}}
                </span>
              </div>
            </div>
            <div class="form-group">
              <label for="deskripsi" class="col-lg-2 control-label">Deskripsi <span class="require">*</span></label>
              <div class="col-lg-8">
                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3">{{$seminar->deskripsi}}</textarea>
                <span id="helpBlockDeskripsi" class="help-block">
                  {{ $errors->has('deskripsi') ? $errors->first('deskripsi') : ''}}
                </span>
              </div>
            </div>
            <div class="form-group">
              <label for="harga" class="col-lg-2 control-label">Harga <span class="require">*</span></label>
              <div class="col-lg-8">
                <input type="number" min="1" name="harga" class="form-control" id="harga" value="{{$seminar->harga}}">
                <span id="helpBlockHarga" class="help-block">
                  {{ $errors->has('harga') ? $errors->first('harga') : ''}}
                </span>
              </div>
            </div>
            <div class="form-group">
              <label for="tiket-tiket_tersedia" class="col-lg-2 control-label">Tiket Tersedia <span class="require">*</span></label>
              <div class="col-lg-8">
                <input type="number" min="1" name="tiket_tersedia" class="form-control" id="tiket_tersedia" value="{{$seminar->tiket_tersedia}}">
                <span id="helpBlockTiket_tersedia" class="help-block">
                  {{ $errors->has('tiket_tersedia') ? $errors->first('tiket_tersedia') : ''}}
                </span>
              </div>
            </div>
            <div class="form-group">
              <label for="gambar" class="col-lg-2 control-label">Gambar <span class="require">*</span></label>
              <div class="col-lg-8">
                <input type="file" name="gambar" class="form-control" id="gambar">
                <span id="helpBlockGambar" class="help-block">
                  {{ $errors->has('gambar') ? $errors->first('gambar') : ''}}
                </span>
              </div>
            </div>
            <div class="form-group">
              <label for="id_kategori" class="col-lg-2 control-label">Kategori <span class="require">*</span></label>
              <div class="col-lg-8">
                <select name="id_kategori" class="form-control" id="id_kategori">

                  @foreach ($kategoris as $kategori)
                    <option value="{{$kategori->id_kategori}}" @if ($seminar->id_kategori == $kategori->id_kategori)
                      selected="true"
                    @endif>{{$kategori->nama_kategori}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-2">

              </div>
              <div class="col-lg-8">
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-success">Edit</button>
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
