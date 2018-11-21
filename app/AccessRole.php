<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccessRole extends Model
{
    protected $table = 'access_role';
    protected $primaryKey = 'id_accessrole';
    public $timestamps = false;

    public function Access(){
        return $this->belongsTo('App\Access','id_access');
    }
}
