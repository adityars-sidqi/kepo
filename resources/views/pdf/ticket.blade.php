<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Kepohub Ticket -{{ $transaksi->peserta->nama }} - {{ $transaksi->id_transaksi }}</title>
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
      content: url('https://kepohub.com/images/cXciH.png');
      display: inline-block;
      position: relative;
      top: -12px;
      left: 40px;
      padding: 0 3px;
      background: #f0f0f0;
      color: #8c8b8b;
      font-size: 18px;
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
  <div class="transaction_info">
    <table>
      <tr>
        <td>Transaction ID</td>
        <td>:</td>
        <td>{{ $transaksi->id_transaksi }}</td>
      </tr>
      <tr>
        <td>Transaction Date</td>
        <td>:</td>
        <td>{{ $transaksi->tgl_transaksi->toFormattedDateString() }}</td>
      </tr>
      <tr>
        <td>Peserta ID</td>
        <td>:</td>
        <td>{{ $transaksi->peserta->id_peserta }}</td>
      </tr>
      <tr>
        <td>Peserta Name</td>
        <td>:</td>
        <td>{{ $transaksi->peserta->nama }}</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Confirmed Payment by</td>
        <td>:</td>
        <td>{{ $transaksi->konfirmasi->admin->nama }}</td>
      </tr>
    </table>
  </div>
  <br>
  <hr class="style16">
  @foreach ($transaksi->seminars as $seminar)
     @for ($i=1; $i <= $seminar->pivot->jumlah_tiket ; $i++)
      <div class="detail">
        <table>
          <tr>
            <td>Ticket Number</td>
            <td>:</td>
            <td>{{ $transaksi->id_transaksi . $seminar->id_seminar . $transaksi->peserta->id_peserta . $i }}</td>
          </tr>
        </table>
        <table>
          <tr>
            <td>
              <h3>{{ $seminar->judul }}</h3>
            </td>
          </tr>
        </table>
        <table>
          <tr>
            <td>Place</td>
            <td>:</td>
            <td>{{ $seminar->tempat }}</td>
          </tr>
          <tr>
            <td>Date</td>
            <td>:</td>
            <td>{{ $seminar->tgl_seminar->toFormattedDateString() }}</td>
          </tr>
        </table>
      </div>
      <br>
      <hr class="style16">
    @endfor
  @endforeach
</body>

</html>
