@extends('admin.layouts.master')

@section('title','Create Organisasi | Administrator KEPO.ID')
@section('title_page', 'Create Organisasi')
@section('title_icon', 'organization')

@section('content')
  <br>
  <form class="" action="{{asset('admin/organisasi')}}" method="POST">
    <div class="input-control text {{ $errors->has('nama') ? 'error' : ''}}" data-role="input" >
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama">
    </div>
      {{ $errors->has('nama') ? $errors->first('nama') : ''}}
    <br>
    <br>
    <div class="input-control text {{ $errors->has('telp') ? 'error' : ''}}" data-role="input" >
        <label for="telp">Telepon:</label>
        <input type="text" name="telp" id="telp" >
    </div>
      {{ $errors->has('telp') ? $errors->first('telp') : ''}}
    <br>
    <div class="input-control textarea {{ $errors->has('alamat') ? 'error' : ''}}" data-role="input" >
        <label for="jenis_kelamin">Alamat:</label>
        <textarea name="alamat"></textarea>
    </div>
      {{ $errors->has('alamat') ? $errors->first('alamat') : ''}}
    <br>
    <br>
    <div class="input-control text {{ $errors->has('email') ? 'error' : ''}}" data-role="input" >
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
    </div>
      {{ $errors->has('email') ? $errors->first('email') : ''}}
    <br>
    <br>
    <div class="input-control password {{ $errors->has('password') ? 'error' : ''}}" data-role="input" >
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" >
        <button class="button helper-button reveal"><span class="mif-looks"></span></button>
    </div>
      {{ $errors->has('password') ? $errors->first('password') : ''}}
    <br>
    <br>
      {{ csrf_field() }}
    <input class="button success" type="submit" value="Edit">
  </form>
@endsection
