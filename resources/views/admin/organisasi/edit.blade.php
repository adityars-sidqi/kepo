@extends('admin.layouts.master')

@section('title','Edit Organisasi | Administrator KEPO.ID')
@section('title_page', 'Edit Organisasi')
@section('title_icon', 'organization')

@section('content')
  <br>
  <form class="" action="{{asset('admin/organisasi/' . $organisasi->id_organisasi)}}" method="POST">
    <div class="input-control text {{ $errors->has('nama') ? 'error' : ''}}" data-role="input" >
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="{{$organisasi->nama}}">
    </div>
      {{ $errors->has('nama') ? $errors->first('nama') : ''}}
    <br>
    <br>
    <div class="input-control text {{ $errors->has('telp') ? 'error' : ''}}" data-role="input" >
        <label for="telp">Telepon:</label>
        <input type="text" name="telp" id="telp" value="{{$organisasi->telp}}">
    </div>
      {{ $errors->has('telp') ? $errors->first('telp') : ''}}
    <br>
    <div class="input-control textarea {{ $errors->has('alamat') ? 'error' : ''}}" data-role="input" >
        <label for="jenis_kelamin">Alamat:</label>
        <textarea name="alamat">{{$organisasi->alamat}}</textarea>
    </div>
      {{ $errors->has('alamat') ? $errors->first('alamat') : ''}}
    <br>
    <br>
    <div class="input-control text {{ $errors->has('email') ? 'error' : ''}}" data-role="input" >
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" value="{{$organisasi->email}}">
    </div>
      {{ $errors->has('email') ? $errors->first('email') : ''}}
    <br>
    <br>
    <div class="input-control password {{ $errors->has('password') ? 'error' : ''}}" data-role="input" >
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" value="{{ decrypt($organisasi->password)}}">
        <button class="button helper-button reveal"><span class="mif-looks"></span></button>
    </div>
      {{ $errors->has('password') ? $errors->first('password') : ''}}
    <br>
    <br>
    <input type="hidden" name="_method" value="PUT">
      {{ csrf_field() }}
    <input class="button success" type="submit" value="Edit">
  </form>
@endsection
