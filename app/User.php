<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'usuario';

    protected $primaryKey = 'idusuario';

    public $timestamps = false;

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Persona(){
         return $this->hasMany('App\Persona','id_usuario');
    }

    public function RoleUser(){
         return $this->hasMany('App\RoleUser','id_user');
    }

    public function Role(){
        return $this->belongsToMany(Role::class,'role_user','id_user','id_role' ); // relacion de tabla intermedia
    }
    public function Config(){
        return $this->hasMany('App\Config','iduser');
    }
    public function Notify(){
        return $this->hasMany('App\Notificacion','id_user');
    }

    public function Company(){
        return  $this->hasMany(Web::class,'id_user_root');

    }

}
