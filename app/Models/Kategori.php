<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $primaryKey = 'id_kategori';
    public $timestamps = false;
    
    public function seminar()
    {
        return $this->hasMany('App\Models\Seminar', 'id_kategori');
    }
}
