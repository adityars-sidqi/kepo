<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Laporan Penjualan Tiket - {{ $seminar->organisasi->nama }} - {{ $seminar->judul }}</title>
  <style media="screen">
    .page-break {
      page-break-after: always;
    }
    #logo {
      margin-right: 50px;
    }
    #judul {
      display: inline-block;
    }
    .style1 {
      border-top: 3px double #8c8b8b;
    }

    hr.style16 {
      border-top: 1px dashed #8c8b8b;
    }

    hr.style16:after {
      content: url(cXciH.png);
      display: inline-block;
      position: relative;
      top: -12px;
      left: 40px;
      padding: 0 3px;
      background: #f0f0f0;
      color: #8c8b8b;
      font-size: 18px;
    }

    table#list {
      border-collapse: collapse;
      width: 100%;
    }

    table#list th,
    table#list td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
  </style>
</head>

<body>
  <table>
    <tr>
      <td><img src="https://kepohub.com/images/logo-kepohub.png" width="150px" height="80px" id="logo"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><h1 style="margin:0px">Kepohub</h1> Ticketing System <br>
      <p style="font-size:12px">Universitas Gunadarma, Kampus D <br>
      Jl. Margonda Raya No.100 Pd. Cina, Beji, Kota Depok, Jawa Barat</p></td>
    </tr>
  </table>
  <hr class="style1">
  <div class="seminar_info">
    <table>
      <tr>
        <td>Seminar ID</td>
        <td>:</td>
        <td>{{ $seminar->id_seminar }}</td>
      </tr>
      <tr>
        <td>Seminar Title</td>
        <td>:</td>
        <td>{{ $seminar->judul }}</td>
      </tr>
      <tr>
        <td>Date</td>
        <td>:</td>
        <td>{{ $seminar->tgl_seminar->toFormattedDateString() }}</td>
      </tr>
      <tr>
        <td>Place</td>
        <td>:</td>
        <td>{{ $seminar->tempat }}</td>
      </tr>
      <tr>
        <td>Organized By</td>
        <td>:</td>
        <td>{{ $seminar->organisasi->nama }}</td>
      </tr>
    </table>
  </div>
  <br>
  <table id="list">
    <tr style="background-color: rgb(193, 193, 193)">
      <th>Ticket Number</th>
      <th>Peserta Name</th>
      <th>Email</th>
    </tr>
    @php $jumlah_tiket = 0 @endphp
    @foreach ($seminar->transaksis as $transaksi)
      @for ($i=1; $i <= $transaksi->pivot->jumlah_tiket ; $i++)
        <tr>
          <td>{{ $transaksi->id_transaksi . $seminar->id_seminar . $transaksi->peserta->id_peserta . $i }}</td>
          <td>{{ $transaksi->peserta->nama }}</td>
          <td>{{ $transaksi->peserta->email }}</td>
        </tr>
      @endfor
      @php $jumlah_tiket += $transaksi->pivot->jumlah_tiket; @endphp
    @endforeach
  </table>
  <br>

  <table style="float: right">
    <tr>
      <td>Jumlah Tiket Terjual</td>
      <td>:</td>
      <td>{{ $jumlah_tiket }}</td>
    </tr>
    <tr>
      <td>Jumlah Pendapatan</td>
      <td>:</td>
      <td>Rp. {{ $jumlah_tiket * $seminar->harga }}</td>
    </tr>
  </table>

</body>

</html>
