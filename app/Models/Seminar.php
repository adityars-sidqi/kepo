<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    protected $primaryKey = 'id_seminar';
    public $timestamps = false;
    public function kategori()
    {
        return $this->belongsTo('App\Models\Kategori', 'id_kategori');
    }

    public function organisasi()
    {
        return $this->belongsTo('App\Models\Organisasi', 'id_organisasi');
    }
}
