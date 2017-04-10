@extends('admin.layouts.master')

@section('title','Create Kategori | Administrator KEPO.ID')
@section('title_page', 'Create Kategori')
@section('title_icon', 'list')

@section('content')
  <br>
  <form class="" action="{{asset('admin/kategori')}}" method="post">
    <div class="input-control text {{ $errors->has('nama_kategori') ? 'error' : ''}}" data-role="input" >
        <label for="nama_kategori">Nama Kategori:</label>
        <input type="text" name="nama_kategori" id="nama_kategori">
    </div>
      {{ $errors->has('nama_kategori') ? $errors->first('nama_kategori') : ''}}
    <br>
    <br>
      {{ csrf_field() }}
    <input class="button success" type="submit" value="Create">
  </form>
@endsection
