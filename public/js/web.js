$(document).ready(function() {

  var nav = $('nav');
  var origOffsetY = nav.offset().top;

  function scroll() {
    if ($(window).scrollTop() >= origOffsetY) {
      $('nav').addClass('navbar-fixed-top');

    } else {
      $('nav').removeClass('navbar-fixed-top');
    }


  }

  document.onscroll = scroll;

  $('input[name="daterange"]').daterangepicker({
    locale: {
      format: 'YYYY-MM-DD'
    }
  });

  $('#tambah-tab').click(function(event) {
    $('#tambah-tab').hide('400');
    $('#formtambah').show('400');
    $('#divseminar').hide('400');
  });

  $('#list-seminar').click(function(event) {
    $('#tambah-tab').show('400');
    $('#formtambah').hide('400');
    $('#divseminar').show('400');
  });

  $('#daftarseminar').DataTable({
    "iDisplayLength": 5,
    "bLengthChange": false,
    "columns": [
      null,
      null,
      null,
      null,
      null,
      null,
      null,
      null,
      null,
      {
        "width": "20%"
      }
    ]
  });

  $('#dashboard-laporan').DataTable({
    "iDisplayLength": 5,
    "bLengthChange": false
  });

  $('#transactionhistory').DataTable({
    "iDisplayLength": 5,
    "bLengthChange": false
  });
});
