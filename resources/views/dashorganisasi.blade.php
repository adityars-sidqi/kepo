@extends('layouts.app')

@section('content')
  <div class="main margin-bottom-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>Dashboard Organization</h1>
        </div>
      </div>
      <div class="content-page">
        <div class="row">
          <div class="col-md-2 col-sm-2">
            <ul class="tabbable faq-tabbable">
              <li class="active">
                <a href="#seminar" id="seminar-tab" data-toggle="tab" aria-expanded="false">Seminar</a>
              </li>
              <li class="">
                <a href="#laporan" id="laporan-tab" data-toggle="tab" aria-expanded="false">Laporan</a>
              </li>
            </ul>
          </div>
          <div class="col-md-10 col-sm-10">
            <div class="tab-content" style="padding: 0px">
              <div class="tab-pane active" id="seminar">
                <div class="row margin-bottom-10">
                  <div class="col-md-6">
                    <a href="#tambah-seminar" id="tambah-tab" data-toggle="tab" class="btn btn-success">Tambah Seminar</a>
                  </div>
                </div>
                <!-- begin form tambah -->
                <div class="row" id="formtambah" style="display:none">
                  <form class="form-horizontal" action="index.html" role="form" id="form-tambah" method="post">
                    <a href="#list-seminar" id="list-seminar" data-toggle="tab" class="btn btn-success">List Seminar</a>
                    <div class="row">
                      <div class="col-md-6 col-md-offset-4">
                        <h2>Tambah Seminar</h2>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="judul" class="col-lg-2 control-label">Judul <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input type="text" name="judul" class="form-control" id="judul">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="tanggal" class="col-lg-2 control-label">Tanggal <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input type="date" name="tanggal" class="form-control" id="tanggal">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="tempat" class="col-lg-2 control-label">Tempat <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input type="text" name="tempat" class="form-control" id="tempat">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="deskripsi" class="col-lg-2 control-label">Deskripsi <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="harga" class="col-lg-2 control-label">Harga <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input type="number" min="1" name="harga" class="form-control" id="harga">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="tiket-tersedia" class="col-lg-2 control-label">Tiket Tersedia <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input type="number" min="1" name="tiket_tersedia" class="form-control" id="tiket-tersedia">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="gambar" class="col-lg-2 control-label">Gambar <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input type="file" name="gambar" class="form-control" id="gambar">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="kategori" class="col-lg-2 control-label">Kategori <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <select name="kategori" class="form-control" id="kategori">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-2">

                      </div>
                      <div class="col-lg-8">
                        <input type="submit" name="submit" value="Tambah" class="btn btn-success">
                      </div>
                    </div>
                  </form>
                  <!-- end form tambah -->
                </div>
                <div class="row" id="divseminar">
                  <table id="daftarseminar" class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Tempat</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Tiket Tersedia</th>
                        <th>Gambar</th>
                        <th>Kategori</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Jakarta Smart City</td>
                        <td>15-08-2017</td>
                        <td>Auditorium Universitas Gunadarma Kampus D</td>
                        <td>Lorem ipsum dolor sit amet, consectetur </td>
                        <td>Rp. 50000</td>
                        <td>50</td>
                        <td>asdasdasd.jpg</td>
                        <td>Pendidikan</td>
                        <td>
                          <a href="#" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
                          <a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                        </td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Jakarta Smart City</td>
                        <td>15-08-2017</td>
                        <td>Auditorium Universitas Gunadarma Kampus D</td>
                        <td>Lorem ipsum dolor sit amet, consectetur </td>
                        <td>Rp. 50000</td>
                        <td>50</td>
                        <td>asdasdasd.jpg</td>
                        <td>Pendidikan</td>
                        <td>
                          <a href="#" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
                          <a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                        </td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Jakarta Smart City</td>
                        <td>15-08-2017</td>
                        <td>Auditorium Universitas Gunadarma Kampus D</td>
                        <td>Lorem ipsum dolor sit amet, consectetur </td>
                        <td>Rp. 50000</td>
                        <td>50</td>
                        <td>asdasdasd.jpg</td>
                        <td>Pendidikan</td>
                        <td>
                          <a href="#" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
                          <a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                        </td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Jakarta Smart City</td>
                        <td>15-08-2017</td>
                        <td>Auditorium Universitas Gunadarma Kampus D</td>
                        <td>Lorem ipsum dolor sit amet, consectetur </td>
                        <td>Rp. 50000</td>
                        <td>50</td>
                        <td>asdasdasd.jpg</td>
                        <td>Pendidikan</td>
                        <td>
                          <a href="#" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
                          <a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                        </td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Jakarta Smart City</td>
                        <td>15-08-2017</td>
                        <td>Auditorium Universitas Gunadarma Kampus D</td>
                        <td>Lorem ipsum dolor sit amet, consectetur </td>
                        <td>Rp. 50000</td>
                        <td>50</td>
                        <td>asdasdasd.jpg</td>
                        <td>Pendidikan</td>
                        <td>
                          <a href="#" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
                          <a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                        </td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Jakarta Smart City</td>
                        <td>15-08-2017</td>
                        <td>Auditorium Universitas Gunadarma Kampus D</td>
                        <td>Lorem ipsum dolor sit amet, consectetur </td>
                        <td>Rp. 50000</td>
                        <td>50</td>
                        <td>asdasdasd.jpg</td>
                        <td>Pendidikan</td>
                        <td>
                          <a href="#" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
                          <a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane" id="laporan">
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
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row margin-bottom-20">
    <div class="col-md-12">

    </div>
  </div>
@endsection
