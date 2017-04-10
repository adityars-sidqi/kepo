@extends('admin.layouts.master')

@section('title','Edit Kategori | Administrator KEPO.ID')
@section('title_page', 'Edit Kategori')
@section('title_icon', 'list')

@section('content')
  <br>
  <form class="" action="{{asset('admin/kategori/' . $kategori->id_kategori)}}" method="POST">
    <div class="input-control text {{ $errors->has('nama_kategori') ? 'error' : ''}}" data-role="input" >
        <label for="nama_kategori">Nama Kategori:</label>
        <input type="text" name="nama_kategori" id="nama_kategori" value="{{$kategori->nama_kategori}}">
    </div>
      {{ $errors->has('nama_kategori') ? $errors->first('nama_kategori') : ''}}
    <br>
    <br>
    <input type="hidden" name="_method" value="PUT">
      {{ csrf_field() }}
    <input class="button success" type="submit" value="Edit">
  </form>
@endsection
