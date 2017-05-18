<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <style media="screen">
    #main {
      background-color: rgb(225, 225, 225);
    }

    #rowpanel {
      margin-top: 18px;
    }

    #panel-email {
      border-radius: 0px
    }

    #panel-heading {
      background-color: rgb(52, 152, 219);
      color: white;
      border-radius: 0px;
    }

    .col-centered {
      float: none;
      margin: 0 auto;
    }

    #body {
      margin-bottom: 50px;
    }

    #footer {
      background-color: white;
    }

    #alamat {
      font-size: 13px;
    }

    #col-footer {
      padding-top: 20px;
    }
  </style>
</head>

<body id="main">
  <div class="container-fluid">
    <div class="container">
      <div class="row" id="rowpanel">
        <div class="col-md-7 col-centered">
          <div class="panel panel-default" id="panel-email">
            <div class="panel-heading" id="panel-heading">
              <h1 class="text-center">Hi {{ $peserta->nama }}, just one more step! </h1>
              <h4>Please click the following link to complete your Kepo Hub Account registration process.</h4>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-5 col-centered" id="body">
                  <a href="{{ asset('verification/peserta/'. $peserta->id_peserta .'/'. $peserta->kode_aktivasi)  }}" class="btn btn-success btn-lg">CONFIRM REGISTRATION</a>
                </div>
              </div>
            </div>
            <div class="panel-footer" id="footer">
              <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-4">
                  <img src="{{ asset('images/logo-kepohub.png')}}" alt="" class="img-responsive">
                </div>
                <div class="col-md-8 col-sm-8 col-xs-8" id="col-footer">
                  <p id="alamat">This email has been sent to you by <a href="https://www.kepohub.com">kepohub.com</a><br> Universitas Gunadarma, Kampus D <br> Jl. Margonda Raya No.100 Pd. Cina, Beji, Kota Depok, Jawa Barat</p>
                </div>
              </div>
            </div>
          </div>
          <center>
            <h5>Copyright &copy; Kepo Hub 2017. All rights reserved.</h5>
          </center>
        </div>
      </div>

    </div>


  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>
