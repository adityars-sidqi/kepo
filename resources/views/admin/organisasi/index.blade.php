@extends('admin.layouts.master')

@section('title','Organisasi | Administrator KEPO.ID')
@section('title_page', 'Organisasi')
@section('title_icon', 'organization')
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
            { "width": "6%" },
            null,
            { "width": "12%" },
            { "width": "12%" },
            null,
            null,
            { "width": "16%" }
          ]
    } );
  } );
@endsection
@section('content')
<a href="{{ url('admin/organisasi/create') }}" class="button primary">CREATE</a>

  <table class="border bordered">
    <thead>
    <tr>
        <td class="sortable-column sort-asc" style="width: 100px">ID</td>
        <td class="sortable-column">Nama</td>
        <td class="sortable-column">Telepon</td>
        <td class="sortable-column">Alamat</td>
        <td class="sortable-column">Email</td>
        <td class="sortable-column">Password</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
      @foreach ($organisasis as $organisasi)
        <tr>
            <td>{{ $organisasi->id_organisasi }}</td>
            <td>{{ $organisasi->nama }}</td>
            <td>{{ $organisasi->telp }}</td>
            <td>{{ $organisasi->alamat }}</td>
            <td>{{ $organisasi->email }}</td>
            <td>{{ str_limit($organisasi->password, 10) }}</td>
            <td>
              <center>
                <a href="{{ url('admin/organisasi/' . $organisasi->id_organisasi .'/edit') }}" class="button success">Edit</a>
                <form action="{{asset('admin/organisasi/' . $organisasi->id_organisasi)}}" method="post" style="display:inline">
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
