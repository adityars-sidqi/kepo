@extends('admin.layouts.master')

@section('title','Kategori | Administrator KEPO.ID')
@section('title_page', 'Kategori')
@section('title_icon', 'list')
@section('style_page')
  #DataTables_Table_0_wrapper{
    display:inline;
  }
@endsection
@section('script_page')
  $(document).ready(function() {
    $('table').DataTable( {
        "iDisplayLength": 5,
        "bLengthChange": false,

        "columns": [
            null,
            null,
            { "width": "20%" }
          ]
    } );
  } );
@endsection
@section('content')
<a href="{{ url('admin/kategori/create') }}" class="button primary">CREATE</a>

  <table class="border bordered">
    <thead>
    <tr>
        <td class="sortable-column sort-asc" style="width: 100px">ID</td>
        <td class="sortable-column">Kategori</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
      @foreach ($kategoris as $kategori)
        <tr>
            <td>{{ $kategori->id_kategori }}</td>
            <td>{{ $kategori->nama_kategori }}</td>
            <td>
              <center>
                <a href="{{ url('admin/kategori/' . $kategori->id_kategori .'/edit') }}" class="button success">Edit</a>
                <form action="{{asset('admin/kategori/' . $kategori->id_kategori)}}" method="post" style="display:inline">
                    <input type="hidden" name="_method" value="delete">
                    {{ csrf_field() }}
                    <input type="submit" name="submit" value="Delete" class="button danger">
                </form>
              </center>
            </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
