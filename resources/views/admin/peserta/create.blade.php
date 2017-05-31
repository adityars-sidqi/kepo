@extends('admin.layouts.master')

@section('title','Create Peserta | Administrator KEPO.ID')
@section('title_page', 'Create Peserta')
@section('title_icon', 'users')

@section('content')
  <form class="form-horizontal" action="{{asset('admin/peserta')}}" method="post">
      <div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
          <label for="nama" class="col-sm-2 col-xs-3 control-label">Nama</label>
          <div class="col-xs-8 col-md-4">
              <input type="text" name="nama" class="form-control" id="nama" aria-describedby="helpBlockNama" placeholder="Nama">
              <span id="helpBlockNama" class="help-block">
                {{ $errors->has('nama') ? $errors->first('nama') : ''}}
              </span>
          </div>
      </div>
      <div class="form-group {{ $errors->has('tgl_lahir') ? 'has-error' : ''}}">
          <label for="tgl_lahir" class="col-sm-2 col-xs-3 control-label">Tanggal Lahir</label>
          <div class="col-xs-8 col-md-4">
              <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" aria-describedby="helpBlockTgl_lahir" placeholder="Tanggal Lahir">
              <span id="helpBlockTgl_lahir" class="help-block">
                {{ $errors->has('tgl_lahir') ? $errors->first('tgl_lahir') : ''}}
              </span>
          </div>
      </div>
      <div class="form-group {{ $errors->has('jenis_kelamin') ? 'has-error' : ''}}">
          <label for="jenis_kelamin" class="col-sm-2 col-xs-3 control-label">Jenis Kelamin</label>
          <div class="col-xs-8 col-md-4">
              <label class="radio-inline">
                  <input type="radio" name="jenis_kelamin" id="jenis_kelamin" aria-describedby="helpBlockJenis_kelamin" value="Pria"> Pria
              </label>
              <label class="radio-inline">
                  <input type="radio" name="jenis_kelamin" id="jenis_kelamin" aria-describedby="helpBlockJenis_kelamin" value="Wanita"> Wanita
              </label>
              <span id="aria-describedby="helpBlockJenis_kelamin"" class="help-block">
                {{ $errors->has('jenis_kelamin') ? $errors->first('jenis_kelamin') : ''}}
              </span>
          </div>
      </div>
      <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
          <label for="email" class="col-sm-2 col-xs-3 control-label">Email</label>
          <div class="col-xs-8 col-md-4">
              <input type="text" name="email" class="form-control" id="email" aria-describedby="helpBlockEmail" placeholder="Email">
              <span id="helpBlockEmail" class="help-block">
                {{ $errors->has('email') ? $errors->first('email') : ''}}
              </span>
          </div>
      </div>
      <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
          <label for="password" class="col-sm-2 col-xs-3 control-label">Password</label>
          <div class="col-xs-8 col-md-4">
              <input type="password" name="password" class="form-control" id="password" aria-describedby="helpBlockPassword" placeholder="Password">
              <span id="helpBlockPassword" class="help-block">
                {{ $errors->has('password') ? $errors->first('password') : ''}}
              </span>
          </div>
      </div>
      <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            {{ csrf_field() }}
            <button type="submit" class="btn btn-primary">Create</button>
          </div>
      </div>
  </form>
@endsection
