@extends('admin.layouts.master')

@section('title','Edit Seminar | Administrator KEPO.ID')
@section('title_page', 'Edit Seminar')
@section('title_icon', 'database')

@section('content')
  <br>
  <form class="" action="{{asset('admin/seminar/' . $seminar->id_seminar)}}" method="POST" enctype="multipart/form-data">
    <div class="flex-grid">
      <div class="row cells2">
        <div class="cell colspan6">
          <div class="input-control text {{ $errors->has('nama_seminar') ? 'error' : ''}}" data-role="input" >
              <label for="nama_seminar">Nama Seminar:</label>
              <input type="text" name="nama_seminar" id="nama_seminar" value="{{ $seminar->nama_seminar }}">
          </div>
            {{ $errors->has('nama_seminar') ? $errors->first('nama_seminar') : ''}}
          <br>
          <br>
          <div class="input-control text {{ $errors->has('tgl_seminar') ? 'error' : ''}}" data-role="input" >
              <label for="tgl_seminar">Tanggal Seminar:</label>
              <input type="date" name="tgl_seminar" id="tgl_seminar" value="{{ $seminar->tgl_seminar }}">
          </div>
            {{ $errors->has('tgl_seminar') ? $errors->first('tgl_seminar') : ''}}
          <br>
          <br>
          <div class="input-control text {{ $errors->has('tempat') ? 'error' : ''}}" data-role="input" >
              <label for="tempat">Tempat:</label>
              <input type="text" name="tempat" id="tempat" value="{{ $seminar->tempat }}">
          </div>
            {{ $errors->has('tempat') ? $errors->first('tempat') : ''}}
          <br>
          <br>
          <div class="input-control textarea {{ $errors->has('deskripsi') ? 'error' : ''}}" data-role="input" data-text-auto-resize="true" data-text-max-height="175">
              <label for="deskripsi">Deskripsi:</label>
              <textarea name="deskripsi">{{ $seminar->deskripsi }}</textarea>
          </div>
            {{ $errors->has('deskripsi') ? $errors->first('deskripsi') : ''}}
          <br>
          <br>
        </div>
        <div class="cell colspan6">
          <div class="input-control text {{ $errors->has('jumlah_tiket') ? 'error' : ''}}" data-role="input" >
              <label for="jumlah_tiket">Jumlah Tiket:</label>
              <input type="text" name="jumlah_tiket" id="jumlah_tiket" value="{{ $seminar->jumlah_tiket }}">
          </div>
            {{ $errors->has('jumlah_tiket') ? $errors->first('jumlah_tiket') : ''}}
          <br>
          <br>
          <div class="input-control text {{ $errors->has('harga') ? 'error' : ''}}" data-role="input" >
              <label for="harga">Harga:</label>
              <input type="text" name="harga" id="harga" value="{{ $seminar->harga }}">
          </div>
            {{ $errors->has('harga') ? $errors->first('harga') : ''}}
          <br>
          <br>
          <div class="input-control file {{ $errors->has('gambar') ? 'error' : ''}}" data-role="input" >
              <label for="gambar">Gambar:</label>
              <input type="file" name="gambar" id="gambar"><button class="button"><span class="mif-folder"></span></button>
          </div>
            {{ $errors->has('gambar') ? $errors->first('gambar') : ''}}
          <br>
          <br>
          <div class="input-control select {{ $errors->has('id_kategori') ? 'error' : ''}}" data-role="input" >
              <label for="id_kategori">Kategori:</label>
              <select name="id_kategori">
                    <option value="{{ $seminar->kategori->id_kategori }}" selected="true" >{{ $seminar->kategori->nama_kategori }}</option>
                  @foreach ($kategoris as $kategori)
                    <option value="{{ $kategori->id_kategori }}">{{ $kategori->nama_kategori }}</option>
                  @endforeach
              </select>
          </div>
            {{ $errors->has('id_kategori') ? $errors->first('id_kategori') : ''}}
          <br>
          <br>
          <div class="input-control select {{ $errors->has('id_organisasi') ? 'error' : ''}}" data-role="input" >
              <label for="id_organisasi">Organisasi:</label>
              <select name="id_organisasi">
                      <option value="{{ $seminar->organisasi->id_organisasi }}" selected="true" >{{ $seminar->organisasi->nama }}</option>
                  @foreach ($organisasis as $organisasi)
                    <option value="{{ $organisasi->id_organisasi }}">{{ $organisasi->nama }}</option>
                  @endforeach
              </select>
          </div>
            {{ $errors->has('id_organisasi') ? $errors->first('id_organisasi') : ''}}
          <br>
          <br>
        </div>
      </div>
      <div class="row">
        <div class="cell">
          <input type="hidden" name="_method" value="PUT">
          {{ csrf_field() }}
          <input class="button success" type="submit" value="Edit">
        </div>
      </div>
    </div>
  </form>
@endsection
