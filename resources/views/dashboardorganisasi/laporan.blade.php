@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row margin-bottom-10">
      <h1>Laporan Peserta Seminar</h1>
    </div>
    <div class="row">
      <table id="dashboard-laporan" class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Jumlah Peserta</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Jakarta Smart City</td>
            <td>50</td>
            <td><a href="#" class="btn btn-success"><span class="glyphicon glyphicon-download"></span> Download Laporan</a></td>
          </tr>
          <tr>
            <td>1</td>
            <td>Jakarta Smart City</td>
            <td>50</td>
            <td><a href="#" class="btn btn-success"><span class="glyphicon glyphicon-download"></span> Download Laporan</a></td>
          </tr>
          <tr>
            <td>1</td>
            <td>Jakarta Smart City</td>
            <td>50</td>
            <td><a href="#" class="btn btn-success"><span class="glyphicon glyphicon-download"></span> Download Laporan</a></td>
          </tr>
          <tr>
            <td>1</td>
            <td>Jakarta Smart City</td>
            <td>50</td>
            <td><a href="#" class="btn btn-success"><span class="glyphicon glyphicon-download"></span> Download Laporan</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
