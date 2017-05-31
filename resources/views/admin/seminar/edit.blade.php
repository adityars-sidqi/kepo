@extends('admin.layouts.master')

@section('title','Edit Seminar | Administrator KEPO.ID')
@section('title_page', 'Edit Seminar')

@section('content')
  <form class="form-horizontal" action="{{asset('admin/seminar/' . $seminar->id_seminar)}}" method="post" enctype="multipart/form-data">
    <div class="form-group {{ $errors->has('judul') ? 'has-error' : ''}}">
        <label for="judul" class="col-sm-2 col-xs-3 control-label">Judul Seminar</label>
        <div class="col-xs-8 col-md-4">
            <input type="text" name="judul" class="form-control" value="{{ $seminar->judul}}" id="judul" aria-describedby="helpBlockJudul" placeholder="Judul">
            <span id="helpBlockJudul" class="help-block">
              {{ $errors->has('judul') ? $errors->first('judul') : ''}}
            </span>
        </div>
    </div>
    <div class="form-group {{ $errors->has('tgl_seminar') ? 'has-error' : ''}}">
        <label for="tgl_seminar" class="col-sm-2 col-xs-3 control-label">Tanggal Seminar</label>
        <div class="col-xs-8 col-md-4">
            <input type="date" name="tgl_seminar" class="form-control" value="{{ $seminar->tgl_seminar}}" id="tgl_seminar" aria-describedby="helpBlockTgl_seminar" placeholder="Tanggal Seminar">
            <span id="helpBlockTgl_seminar" class="help-block">
              {{ $errors->has('tgl_seminar') ? $errors->first('tgl_seminar') : ''}}
            </span>
        </div>
    </div>
    <div class="form-group {{ $errors->has('tempat') ? 'has-error' : ''}}">
        <label for="tempat" class="col-sm-2 col-xs-3 control-label">Tempat</label>
        <div class="col-xs-8 col-md-4">
            <input type="text" name="tempat" class="form-control" value="{{ $seminar->tempat}}" id="tempat" aria-describedby="helpBlockTempat" placeholder="Tempat">
            <span id="helpBlockTempat" class="help-block">
              {{ $errors->has('tempat') ? $errors->first('tempat') : ''}}
            </span>
        </div>
    </div>
    <div class="form-group {{ $errors->has('deskripsi') ? 'has-error' : ''}}">
        <label for="deskripsi" class="col-sm-2 col-xs-3 control-label">Deskripsi</label>
        <div class="col-xs-8 col-md-4">
            <textarea name="deskripsi" class="form-control" rows="10" id="deskripsi" aria-describedby="helpBlockDeskripsi" placeholder="Deskripsi">{{ $seminar->deskripsi }}</textarea>
            <span id="helpBlockDeskripsi" class="help-block">
              {{ $errors->has('deskripsi') ? $errors->first('deskripsi') : ''}}
            </span>
        </div>
    </div>
    <div class="form-group {{ $errors->has('tiket_tersedia') ? 'has-error' : ''}}">
        <label for="tiket_tersedia" class="col-sm-2 col-xs-3 control-label">Tiket Tersedia</label>
        <div class="col-xs-8 col-md-4">
            <input type="number" name="tiket_tersedia" class="form-control" value="{{ $seminar->tiket_tersedia}}" id="tiket_tersedia" aria-describedby="helpBlockTiket_tersedia" placeholder="Tiket Tersedia">
            <span id="helpBlockTiket_tersedia" class="help-block">
              {{ $errors->has('tiket_tersedia') ? $errors->first('tiket_tersedia') : ''}}
            </span>
        </div>
    </div>
    <div class="form-group {{ $errors->has('harga') ? 'has-error' : ''}}">
        <label for="harga" class="col-sm-2 col-xs-3 control-label">Harga</label>
        <div class="col-xs-8 col-md-4">
            <input type="number" name="harga" class="form-control" value="{{ $seminar->harga}}" id="harga" aria-describedby="helpBlockHarga" placeholder="Harga">
            <span id="helpBlockHarga" class="help-block">
              {{ $errors->has('harga') ? $errors->first('harga') : ''}}
            </span>
        </div>
    </div>
    <div class="form-group {{ $errors->has('gambar') ? 'has-error' : ''}}">
        <label for="harga" class="col-sm-2 col-xs-3 control-label">Gambar</label>
        <div class="col-xs-8 col-md-4">
            <input type="file" name="gambar" aria-describedby="helpBlockGambar" id="gambar">
            <span id="helpBlockGambar" class="help-block">
              {{ $errors->has('gambar') ? $errors->first('gambar') : ''}}
            </span>
        </div>
    </div>
    <div class="form-group {{ $errors->has('id_kategori') ? 'has-error' : ''}}">
        <label for="id_kategori" class="col-sm-2 col-xs-3 control-label">Kategori</label>
        <div class="col-xs-8 col-md-4">
            <select class="form-control" name="id_kategori" id="id_kategori" aria-describedby="helpBlockKategori" placeholder="Kategori">
                <option value="{{ $seminar->id_kategori }}" selected="true" >{{ $seminar->kategori->nama_kategori}}</option>
                @foreach ($kategoris as $kategori)
                  <option value="{{ $kategori->id_kategori }}">{{ $kategori->nama_kategori }}</option>
                @endforeach
            </select>
            <span id="helpBlockKategori" class="help-block" >
              {{ $errors->has('id_kategori') ? $errors->first('id_kategori') : ''}}
            </span>
        </div>
    </div>
    <div class="form-group {{ $errors->has('id_organisasi') ? 'has-error' : ''}}">
        <label for="id_organisasi" class="col-sm-2 col-xs-3 control-label">Organisasi</label>
        <div class="col-xs-8 col-md-4">
            <select class="form-control" name="id_organisasi" id="id_organisasi" aria-describedby="helpBlockOrganisasi" placeholder="Organisasi">
              <option value="{{$seminar->id_organisasi}}" selected="true" >{{ $seminar->organisasi->nama}}</option>
              @foreach ($organisasis as $organisasi)
                  <option value="{{ $organisasi->id_organisasi }}">{{ $organisasi->nama }}</option>
                @endforeach
            </select>
            <span id="helpBlockOrganisasi" class="help-block" >
              {{ $errors->has('id_organisasi') ? $errors->first('id_organisasi') : ''}}
            </span>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <input type="hidden" name="_method" value="PUT">
          {{ csrf_field() }}
          <button type="submit" class="btn btn-success">Edit</button>
        </div>
    </div>
  </form>
@endsection
