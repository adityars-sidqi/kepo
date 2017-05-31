@php
  $i=0;
  $jumlahData = 4;
@endphp
@if ($seminars->count() == 0)
  <div class="row margin-bottom-20" style="margin-bottom: 70px"></div>
  <div class="row margin-bottom-10" style="margin-bottom:83px">
    <div class="col-md-12">
      <h2 class="text-center text-danger">There is no data seminar</h2>
    </div>
  </div>
@endif
@foreach ($seminars as $seminar)
  @php
    if ($i++ % $jumlahData == 0) {
      echo "<div class='row margin-bottom-10'>";
    }
  @endphp

      <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="{{ asset('seminar/'.$seminar->slug) }}" class="gambarseminar">
          <img class="img-responsive img-thumbnail" src="{{asset('storage/seminar/'.$seminar->gambar)}}" alt="Generic placeholder image">
        </a>
        <h4>
          <a href="{{ asset('seminar/'.$seminar->slug) }}" class="judul">{{ $seminar->judul }}</a>
        </h4>
        <h5>Organized by : {{ $seminar->organisasi->nama }}</h5>
        <h5>{{ $seminar->tgl_seminar->toFormattedDateString() }}</h5>
        <div class="tempat">
          <i class="fa fa-map-marker"></i> {{ $seminar->tempat }}
        </div>
      </div>
  @php
    if ($i % $jumlahData == 0 || $i == $seminars->count()) {
        echo "</div>";
    }
  @endphp
@endforeach
<div class="row">
  <div class="col-md-12">
    {{ $seminars->appends(['startp' => request()->input('startp'), 'endp' => request()->input('endp')])->links() }}
  </div>
</div>
