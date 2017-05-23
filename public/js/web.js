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
      {
        "width": "13%"
      }
    ]
  })

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


  $('#daterange').on('apply.daterangepicker', function(ev, picker) {
    var startp = $(this).val().substring(0, 10);
    var endp = $(this).val().substring(13, 23);

    $('#seminars').slideUp('400', function() {
      $.ajax({
          url: '/',
          method: 'GET',
          data: {
            'startp': startp,
            'endp': endp
          },
          dataType: 'json'
        })
        .done(function(data) {
          $('#seminars').html(data);
          $('#seminars').slideDown('400');
        })
        .fail(function() {
          console.log("error");
        })
    });
  });
  // var token = $('#_token').val();
  // //tampilin form untuk insert data baru
  // $('#tambah-tab').click(function(event) {
  //   $('#judul-form').text('Tambah Seminar');
  //   $('#tambah-tab').hide('400');
  //   $('#formtambah').show('400');
  //   $('#form-tambah').trigger('reset');
  //   $('#btn-save').val('add');
  //   $('#divseminar').hide('400');
  // });
  //
  // //balik lagi ke daftar data seminiar
  // $('#list-seminar').click(function(event) {
  //   $('#tambah-tab').show('400');
  //   $('#formtambah').hide('400');
  //   $('#divseminar').show('400');
  // });
  //
  //
  // var urlseminar = '/dashboard/seminar';

  // //tampilin form untuk edit data
  // $('.open-form').click(function(event) {
  //   var id_seminar = $(this).val();
  //
  //   $.get(urlseminar + '/' + id_seminar, function(data) {
  //     console.log(data);
  //
  //     $('#tambah-tab').hide('400');
  //     $('#formtambah').show('400');
  //     $('#btn-save').val('update');
  //     $('#divseminar').hide('400');
  //     $('#seminar_id').val(data.id_seminar);
  //     $('#judul-form').text('Edit Seminar');
  //     $('#judul').val(data.judul);
  //     $('#tgl_seminar').val(data.tgl_seminar.substring(0, 10));
  //     $('#tempat').val(data.tempat);
  //     $('#deskripsi').val(data.deskripsi);
  //     $('#tiket_tersedia').val(data.tiket_tersedia);
  //     $('#harga').val(data.harga);
  //     //$('#gambar').val(data.gambar);
  //     $('#id_kategori').val(data.id_kategori);
  //
  //
  //   })
  // });

  //delete seminar dan hapus dari daftar
  // $('.delete-seminar').click(function(event) {
  //   var id_seminar = $(this).val();
  //   $.ajaxSetup({
  //     headers: {
  //       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  //     }
  //   });
  //   $.ajax({
  //       url: urlseminar + '/' + id_seminar,
  //       type: 'delete'
  //     })
  //     .done(function(data) {
  //       console.log(data);
  //       $("#seminar" + id_seminar).remove();
  //     })
  //     .fail(function(data) {
  //       console.log('Error:', data);
  //     })
  //
  // });

  // $('#btn-save').click(function(event) {
  //
  //   event.preventDefault();
  //
  //   var form = new FormData($('#form-tambah')[0]);
  //   jQuery.each($('#gambar')[0].files, function(i, file) {
  //     form.append('gambar', file);
  //   });
  //   var formData = {
  //     judul: $('#judul').val(),
  //     tgl_seminar: $('#tgl_seminar').val(),
  //     tempat: $('#tempat').val(),
  //     deskripsi: $('#deskripsi').val(),
  //     tiket_tersedia: $('#tiket_tersedia').val(),
  //     harga: $('#harga').val(),
  //     gambar: $('#gambar')[0].files[0],
  //     id_kategori: $('#id_kategori').val()
  //   }
  //
  //   console.log(formData);
  //
  //   var state = $('#btn-save').val();
  //   var type = 'POST';
  //   var id_seminar = $('#seminar_id').val();
  //   var my_url = urlseminar;
  //
  //   if (state == 'update') {
  //     type = 'PUT';
  //     my_url += '/' + id_seminar;
  //
  //   }
  //
  //   $.ajaxSetup({
  //     headers: {
  //       'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
  //     }
  //   })
  //   $.ajax({
  //       url: my_url,
  //       type: type,
  //       data: formData,
  //       dataType: 'json',
  //       enctype: 'multipart/form-data',
  //       processData: false,
  //       contentType: false,
  //     })
  //     .done(function(data) {
  //       console.log(data);
  //       var seminar = '<tr id="seminar' + data.id_seminar + '"><td>' + data.judul + '</td><td>' + data.tgl_seminar.substring(0, 10) + '</td><td>' + data.tempat + '</td><td>' + data.deskripsi.substring(0, 20) + '</td><td>Rp. ' + data.harga + '</td><td>';
  //       seminar += data.tiket_tersedia + '</td><td>' + data.gambar + '</td><td>' + data.kategori.nama_kategori + '</td>';
  //       seminar += '<td><center><button class="btn btn-success open-form" value="' + data.id_seminar + '">Edit</button>';
  //       seminar += '<button class="btn btn-danger delete-seminar" value="' + data.id_seminar + '">Delete</button></center></td></tr>';
  //
  //       if (state == 'add') {
  //         $('#seminar-list').append(seminar);
  //       } else {
  //         $("#seminar" + id_seminar).replaceWith(seminar);
  //       }
  //       $('#form-tambah').trigger('reset');
  //       location.reload();
  //     })
  //     .fail(function(data) {
  //       console.log("error", data);
  //     })
  // });

});
