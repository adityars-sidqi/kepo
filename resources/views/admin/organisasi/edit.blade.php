@extends('admin.layouts.master')

@section('title','Edit Organisasi | Administrator KEPO.ID')
@section('title_page', 'Edit Organisasi')

@section('content')
    <form class="form-horizontal" action="{{asset('admin/organisasi/' . $organisasi->id_organisasi)}}" method="post">
        <div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
            <label for="nama" class="col-sm-2 col-xs-3 control-label">Nama</label>
            <div class="col-xs-8 col-md-4">
                <input type="text" name="nama" class="form-control" id="nama" value="{{ $organisasi->nama }}" aria-describedby="helpBlockNama" placeholder="Nama">
                <span id="helpBlockNama" class="help-block">
                  {{ $errors->has('nama') ? $errors->first('nama') : ''}}
                </span>
            </div>
        </div>
        <div class="form-group {{ $errors->has('telp') ? 'has-error' : ''}}">
            <label for="telp" class="col-sm-2 col-xs-3 control-label">Telepon</label>
            <div class="col-xs-8 col-md-4">
                <input type="text" name="telp" class="form-control" id="telp" value="{{ $organisasi->telp }}" aria-describedby="helpBlockTelp" placeholder="Telepon">
                <span id="helpBlockTelp" class="help-block">
                  {{ $errors->has('telp') ? $errors->first('telp') : ''}}
                </span>
            </div>
        </div>
        <div class="form-group {{ $errors->has('alamat') ? 'has-error' : ''}}">
            <label for="alamat" class="col-sm-2 col-xs-3 control-label">Alamat</label>
            <div class="col-xs-8 col-md-4">
                <textarea name="alamat" class="form-control" rows="4" id="alamat" aria-describedby="helpBlockAlamat" placeholder="Alamat">{{ $organisasi->alamat }}</textarea>
                <span id="helpBlockAlamat" class="help-block">
                  {{ $errors->has('alamat') ? $errors->first('alamat') : ''}}
                </span>
            </div>
        </div>
        <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
            <label for="email" class="col-sm-2 col-xs-3 control-label">Email</label>
            <div class="col-xs-8 col-md-4">
                <input type="text" name="email" class="form-control" id="email" value="{{ $organisasi->email }}" aria-describedby="helpBlockEmail" placeholder="Email">
                <span id="helpBlockEmail" class="help-block">
                  {{ $errors->has('email') ? $errors->first('email') : ''}}
                </span>
            </div>
        </div>
        <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
            <label for="password" class="col-sm-2 col-xs-3 control-label">Password</label>
            <div class="col-xs-8 col-md-4">
                <input type="password" name="password" class="form-control" id="password" value="{{ decrypt($organisasi->password) }}" aria-describedby="helpBlockPassword" placeholder="Password">
                <span id="helpBlockPassword" class="help-block">
                  {{ $errors->has('password') ? $errors->first('password') : ''}}
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
