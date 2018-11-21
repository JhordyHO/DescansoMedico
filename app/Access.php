<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Access extends Model
{
    protected $table = 'access';
    protected $primaryKey = 'idaccess';
    public $timestamps = false;

    public function MainAccess(){
        return $this->hasMany('App\Access','main_url');
    }
    public function AccessRole(){
        return $this->belongsTo('App\AccessRole','idaccess');
    }
}
