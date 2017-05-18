<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $primaryKey = 'id_admin';
    public $timestamps = false;
    public function konfirmasi()
    {
        return $this->hasMany('App\Models\Konfirmasi', 'id_admin');
    }
}
