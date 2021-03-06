<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $primaryKey = 'id_transaksi';
    public $timestamps = false;
    protected $dates = [
      'tgl_transaksi'
  ];
    public function peserta()
    {
        return $this->belongsTo('App\Models\Peserta', 'id_peserta');
    }
    
    public function seminars()
    {
        return $this->belongsToMany('App\Models\Seminar', 'detail_transaksis', 'id_transaksi', 'id_seminar')->withPivot('jumlah_tiket', 'total');
    }
    public function konfirmasi()
    {
        return $this->hasOne('App\Models\Konfirmasi', 'id_transaksi');
    }
}
