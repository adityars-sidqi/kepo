@extends('admin.layouts.master')

@section('title','Seminar | Administrator KEPO.ID')
@section('title_page', 'Seminar')
@section('title_icon', 'database')
@section('style_page')
  #DataTables_Table_0_wrapper{
    display:inline;
  }
@endsection
@section('script_page')
  $(document).ready(function() {
    $('table').DataTable( {
        "iDisplayLength": 3,
        "bLengthChange": false,
        "columns": [
            { "width": "6%" },
            null,
            { "width": "12%" },
            { "width": "12%" },
            null,
            null,
            null,
            null,
            null,
            null,
            { "width": "16%" }
          ]
    } );
  } );
@endsection
@section('content')
<a href="{{ url('admin/seminar/create') }}" class="button primary">CREATE</a>

  <table class="border bordered">
    <thead>
    <tr>
        <td class="sortable-column sort-asc" style="width: 100px">ID</td>
        <td class="sortable-column">Nama Seminar</td>
        <td class="sortable-column">Tanggal</td>
        <td class="sortable-column">Tempat</td>
        <td class="sortable-column">Deskripsi</td>
        <td class="sortable-column">Jumlah Tiket</td>
        <td class="sortable-column">Harga</td>
        <td class="sortable-column">Gambar</td>
        <td class="sortable-column">Kategori</td>
        <td class="sortable-column">Organisasi</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
      @foreach ($seminars as $seminar)
        <tr>
            <td>{{ $seminar->id_seminar }}</td>
            <td>{{ $seminar->nama_seminar }}</td>
            <td>{{ $seminar->tgl_seminar }}</td>
            <td>{{ $seminar->tempat }}</td>
            <td>{{ str_limit($seminar->deskripsi, 10) }}</td>
            <td>{{ $seminar->jumlah_tiket }}</td>
            <td>{{ $seminar->harga }}</td>
            <td>{{ str_limit($seminar->gambar, 10) }}</td>
            <td>{{ $seminar->kategori->nama_kategori }}</td>
            <td>{{ $seminar->organisasi->nama }}</td>
            <td>
              <center>
                <a href="{{ url('admin/seminar/' . $seminar->id_seminar .'/edit') }}" class="button success">Edit</a>
                <form action="{{asset('admin/seminar/' . $seminar->id_seminar)}}" method="post" style="display:inline">
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
