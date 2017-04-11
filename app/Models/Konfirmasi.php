<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Konfirmasi extends Model
{
    protected $primaryKey = 'id_konfirmasi';

    public function admin()
    {
      return $this->belongsTo('App\Models\Admin' , 'id_admin');
    }

    public function user()
    {
      return $this->belongsTo('App\Models\User' , 'id_user');
    }
}
