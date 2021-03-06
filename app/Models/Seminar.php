<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    protected $primaryKey = 'id_seminar';
    public $timestamps = false;

    protected $dates = [
        'tgl_seminar'
    ];

    public function kategori()
    {
        return $this->belongsTo('App\Models\Kategori', 'id_kategori');
    }

    public function organisasi()
    {
        return $this->belongsTo('App\Models\Organisasi', 'id_organisasi');
    }

    public function transaksis()
    {
        return $this->belongsToMany('App\Models\Transaksi', 'detail_transaksis', 'id_seminar', 'id_transaksi')->withPivot('jumlah_tiket', 'total');
    }
}
