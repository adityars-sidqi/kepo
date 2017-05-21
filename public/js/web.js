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

  $('#password').keyup(function(event) {
    var panjang = $(this).val().length;

    if (panjang < 6) {
      $('#helpBlockPassword').html('The password must be at least 6 characters.');
    } else {
      $('#helpBlockPassword').html('');
    }
  }).change(function(event) {
    var panjang = $(this).val().length;

    if (panjang < 6) {
      $('#helpBlockPassword').html('The password must be at least 6 characters.');
    } else {
      $('#helpBlockPassword').html('');
    }
  });;

  $('#confirm-password').keyup(function(event) {
    var panjang = $(this).val().length;

    if (panjang < 6) {
      $('#helpBlockConfirmPassword').html('The password must be at least 6 characters.');
    } else {
      $('#helpBlockConfirmPassword').html('');
    }
    cekpasswordmatch();
  });

  function cekpasswordmatch() {
    var password = $('#password').val();
    var confirmPassword = $('#confirm-password').val();

    if (password != confirmPassword) {
      $('#helpBlockConfirmPassword').text('Passwords do not match!');
    } else {
      $('#helpBlockConfirmPassword').text('Passwords match!').css({
        color: 'rgb(72, 198, 34)'
      });;
    }
  }

  $('#btncancel').click(function(event) {
    $('#formpeserta').hide('400');
    $('#formorganisasi').hide('400');
    $('#btncancel').hide('400');
    $('#titlelogin').html('Login');
    $('#tombolpilihlogin').show('400');
  });

  $('#btnpeserta').click(function(event) {
    $('#titlelogin').html('Login As Peserta');
    $('#formpeserta').show('400');
    $('#tombolpilihlogin').hide('400');
    $('#btncancel').show('400');
  });

  $('#btnorganisasi').click(function(event) {
    $('#titlelogin').html('Login As Organisasi');
    $('#formorganisasi').show('400');
    $('#tombolpilihlogin').hide('400');
    $('#btncancel').show('400');
  });





});
