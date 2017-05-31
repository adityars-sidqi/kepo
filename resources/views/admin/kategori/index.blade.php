@extends('admin.layouts.master')

@section('title','Kategori | Administrator KEPO.ID')
@section('title_page', 'Kategori')
@section('script_page')
    $('#kategori').dataTable( {
      "iDisplayLength": 5,
      "bLengthChange": false,
      "columns": [
          null,
          null,
          { "width": "15%" }
        ]
      }
    );
@endsection
@section('content')
  <a class="btn btn-primary" href="{{ url('admin/kategori/create') }}" role="button" >CREATE</a>
  <br>
  <br>
  @include('admin/layouts/flash_message')
  <table id="kategori" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kategori</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($kategoris as $kategori)
            <tr>
              <td>{{ $kategori->id_kategori }}</td>
              <td>{{ $kategori->nama_kategori }}</td>
              <td>
                <center>
                  <a href="{{ url('admin/kategori/' . $kategori->id_kategori .'/edit') }}" class="btn btn-success">Edit</a>
                  <form action="{{asset('admin/kategori/' . $kategori->id_kategori) }}" method="post" style="display:inline">
                      <input type="hidden" name="_method" value="delete">
                      {{ csrf_field() }}
                      <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                  </form>
                </center>
              </td>
            </tr>
          @endforeach
        </tbody>
    </table>
@endsection
