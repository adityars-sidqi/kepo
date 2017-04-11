<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $primaryKey = 'id_kategori';

    public function seminar()
    {
      return $this->hasMany('App\Models\Admin\Seminar', 'id_kategori');
    }
}
