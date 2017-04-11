@extends('admin.layouts.master')

@section('title','User | Administrator KEPO.ID')
@section('title_page', 'User')
@section('title_icon', 'users')
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
<a href="{{ url('admin/user/create') }}" class="button primary">CREATE</a>

  <table class="border bordered">
    <thead>
    <tr>
        <td class="sortable-column sort-asc" style="width: 100px">ID</td>
        <td class="sortable-column">Nama</td>
        <td class="sortable-column">Tanggal Lahir</td>
        <td class="sortable-column">Jenis Kelamin</td>
        <td class="sortable-column">Email</td>
        <td class="sortable-column">Password</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
        <tr>
            <td>{{ $user->id_user }}</td>
            <td>{{ $user->nama }}</td>
            <td>{{ $user->tgl_lahir }}</td>
            <td>{{ $user->jenis_kelamin }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ str_limit($user->password, 10) }}</td>
            <td>
              <center>
                <a href="{{ url('admin/user/' . $user->id_user .'/edit') }}" class="button success">Edit</a>
                <form action="{{asset('admin/user/' . $user->id_user)}}" method="post" style="display:inline">
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
