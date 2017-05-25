@extends('layouts.app')

@section('content')
  <div class="main margin-bottom-5">
      <div class="container">
        <div class="row margin-bottom-20">
          <div class="col-xs-12 margin-bottom-20 visible-xs">
            <img src="{{ asset('storage/seminar/'.$seminar->gambar) }}" class="img-responsive" alt=""> <!-- img thumb -->
          </div>
          <div class="col-md-3 col-sm-4 margin-bottom-20 hidden-xs">
            <a data-rel="fancybox-button" title="" href="{{ asset('storage/seminar/'.$seminar->gambar) }}" class="fancybox-button">
              <img src="{{ asset('storage/seminar/'.$seminar->gambar) }}" class="img-responsive" data-bigimgsrc="{{ asset('storage/seminar/'.$seminar->gambar) }}" alt="">
            </a> <!-- img poster -->
  			  </div>
          <div class="col-md-9 detailEvent">
            <h1>{{ $seminar->judul }}</h1>
            <div>
              <table class="table table-borderless table-hover" >
                <tbody>
                  <tr>
                    <td>Date</td>
                    <td> : </td>
                    <td>
                      <span>{{ $seminar->tgl_seminar->toFormattedDateString()}}</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Place</td>
                    <td> : </td>
                    <td id="id-venue-event">{{ $seminar->tempat }}</td>
                  </tr>
                  <tr>
                    <td>Available Ticket</td>
                    <td> : </td>
                    <td>
                      {{ $seminar->tiket_tersedia}} Tickets
                    </td>
                  </tr>
                  <tr>
                    <td>Price</td>
                    <td> : </td>
                    <td>
                      Rp. {{ $seminar->harga}}
                    </td>
                  </tr>
                  <tr>
                    <td>Organized by</td>
                    <td> : </td>
                    <td>{{ $seminar->organisasi->nama }}</td>
                  </tr>
                  <tr>
                    <td>Category</td>
                    <td> : </td>
                    <td>{{ $seminar->kategori->nama_kategori }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <hr>
          </div>
        </div>
      </div>
    </div>
    <div class="main margin-bottom-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 tab-style-1">
            <ul class="nav nav-tabs" role="tablist">
              <li class="active">
                <a href="#tickets" data-toggle="tab" aria-controls="tickets" role="tab" aria-expanded="true">Tickets</a>
              </li>
              <li>
                <a href="#deskripsi" data-toggle="tab" aria-controls="deskripsi" role="tab" aria-expanded="false" >Description</a>
              </li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane fade in active" id="tickets">
                <div class="row voffset3">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="inputJumlahTiket" class="col-sm-2 control-label">Amount Ticket</label>
                        <div class="col-sm-10">
                          @if (session()->get('jenis') == 'peserta')
                            <form action="{{ asset('seminar/'.$seminar->slug.'/buy') }}" method="post">
                          @endif
                          <input type="number" class="form-control" name="jumlah_tiket" id="jumlah_tiket" min="1" aria-describedby="helpBlocJumlahTiket" >
                          <span id="helpBlocJumlahTiket" class="help-block">
                            {{ $errors->has('jumlah_tiket') ? $errors->first('jumlah_tiket') : ''}}
                          </span>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="deskripsi">
                <div class="row voffset3">
                  <div class="col-md-12">
                    <div class="form-group">
                      <p>
                        {{ $seminar->deskripsi }}
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="main margin-bottom-20">
      <div class="container">
        <div class="row" id="id-b-ticket-btn-pane">
          <div class="col-md-3 text-right pull-right padding-top-15">
            @if (session()->get('jenis') == 'peserta')
              {{ csrf_field() }}
              <button type="submit" class="demo-loading-btn btn-lg btn btn-block btn-success add-to-cart"><span id="id-tkt-buy-btn-lbl">Buy Ticket</span></button>
            </form>
            @elseif (session()->get('jenis') == 'organisasi')
              <button type="button" data-loading-text="Loading..." class="demo-loading-btn btn-lg btn btn-block btn-success add-to-cart"><span id="id-tkt-buy-btn-lbl">Login As Peserta To Buy</span></button>
            @else
              <button type="button" data-loading-text="Loading..." class="demo-loading-btn btn-lg btn btn-block btn-success add-to-cart"><span id="id-tkt-buy-btn-lbl">Login To Buy</span></button>
            @endif
          </div>
        </div>
      </div>
    </div>
@endsection
