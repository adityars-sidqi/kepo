<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Konfirmasi extends Model
{
    protected $primaryKey = 'id_konfirmasi';
    public $timestamps = false;
    public function admin()
    {
        return $this->belongsTo('App\Models\Admin', 'id_admin');
    }

    public function peserta()
    {
        return $this->belongsTo('App\Models\Peserta', 'id_peserta');
    }

    public function transaksi()
    {
        return $this->hasOne('App\Models\Transaksi', 'id_transaksi');
    }
}
