@extends('admin.layouts.master')

@section('title','Create Kategori | Administrator KEPO.ID')
@section('title_page', 'Create Kategori')

@section('content')
  <form class="form-horizontal" action="{{asset('admin/kategori')}}" method="post">
      <div class="form-group {{ $errors->has('nama_kategori') ? 'has-error' : ''}}">
          <label for="nama_kategori" class="col-sm-2 col-xs-3 control-label">Nama Kategori</label>
          <div class="col-xs-8 col-md-4">
              <input type="text" name="nama_kategori" class="form-control" id="nama_kategori" placeholder="Nama Kategori"> {{ $errors->has('nama_kategori') ? $errors->first('nama_kategori') : ''}}
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
