<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $primaryKey = 'id_peserta';
    public $timestamps = false;
    public function konfirmasi()
    {
        return $this->hasOne('App\Models\Konfirmasi', 'id_peserta');
    }
    public function transaksi()
    {
        return $this->hasMany('App\Models\Transaksi', 'id_peserta');
    }
}
