<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
    protected $primaryKey = 'id_organisasi';

    public function seminar()
    {
      return $this->hasMany('App\Models\Admin\Seminar', 'id_organisasi');
    }
}
