<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
    protected $primaryKey = 'id_organisasi';
    public $timestamps = false;
    public function seminar()
    {
        return $this->hasMany('App\Models\Seminar', 'id_organisasi');
    }
}
