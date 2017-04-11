@extends('admin.layouts.master')

@section('title','Edit User | Administrator KEPO.ID')
@section('title_page', 'Edit User')
@section('title_icon', 'users')

@section('content')
  <br>
  <form class="" action="{{asset('admin/user/' . $user->id_user)}}" method="POST">
    <div class="input-control text {{ $errors->has('nama') ? 'error' : ''}}" data-role="input" >
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="{{$user->nama}}">
    </div>
      {{ $errors->has('nama') ? $errors->first('nama') : ''}}
    <br>
    <br>
    <div class="input-control text {{ $errors->has('tgl_lahir') ? 'error' : ''}}" data-role="input" >
        <label for="tgl_lahir">Tanggal Lahir:</label>
        <input type="date" name="tgl_lahir" id="tgl_lahir" value="{{$user->tgl_lahir}}">
    </div>
      {{ $errors->has('tgl_lahir') ? $errors->first('tgl_lahir') : ''}}
    <br>
    <div class="input-control radio {{ $errors->has('jenis_kelamin') ? 'error' : ''}}" data-role="input" >
        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <label class="input-control radio small-check">
          <input type="radio" name="jenis_kelamin" value="Pria" {{ $user->jenis_kelamin == 'Pria' ? 'checked=true' : ''}} >
            <span class="check"></span>
            <span class="caption">Pria</span>
        </label>
        <label class="input-control radio small-check">
          <input type="radio" name="jenis_kelamin" value="Wanita" {{ $user->jenis_kelamin == 'Wanita' ? 'checked=true' : ''}}>
            <span class="check"></span>
            <span class="caption">Wanita</span>
        </label>
    </div>
      {{ $errors->has('jenis_kelamin') ? $errors->first('jenis_kelamin') : ''}}
    <br>
    <br>
    <div class="input-control text {{ $errors->has('email') ? 'error' : ''}}" data-role="input" >
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" value="{{$user->email}}">
    </div>
      {{ $errors->has('email') ? $errors->first('email') : ''}}
    <br>
    <br>
    <div class="input-control password {{ $errors->has('password') ? 'error' : ''}}" data-role="input" >
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" value="{{decrypt($user->password)}}">
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
