<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    protected $table = 'role_user';
    public $timestamps = false;

    public function Role(){
        return $this->belongsTo('App\Role','id_role');
    }
    public function User(){
        return $this->belongsTo('App\User','id_user');
    }

}
