<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    protected $primaryKey = 'id_seminar';

    public function kategori()
    {
      return $this->belongsTo('App\Models\Admin\Kategori' , 'id_kategori');
    }

    public function organisasi()
    {
      return $this->belongsTo('App\Models\Admin\Organisasi' , 'id_organisasi');
    }
}
