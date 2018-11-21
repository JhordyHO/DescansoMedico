<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role';
    protected $primaryKey = 'idrole';

    public function AccessRole(){
        return $this->hasMany('App\AccessRole','id_role');
    }
}
