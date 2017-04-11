<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $primaryKey = 'id_user';

    public function konfirmasi()
    {
      return $this->hasOne('App\Models\Konfirmasi', 'id_user');
    }
}
