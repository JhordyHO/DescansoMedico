<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::create('usuario',function (Blueprint $table){
            $table->increments('idusuario');
            $table->string('dni',8)->unique();
            $table->string('password',200);
            $table->string('photo',200)->nullable();
            $table->string('nombre',50);
            $table->string('apellido',50);
            $table->rememberToken();
        });
        Schema::create('role',function (Blueprint $table){
            $table->increments('idrole');
            $table->string('name',50);
            $table->string('description',500);
            $table->boolean('active');
            $table->timestamps();
        });
        Schema::create('access',function (Blueprint $table){
            $table->increments('idaccess');
            $table->string('nombre',100);
            $table->string('url',300);
            $table->string('description',300);
            $table->string('icon',100);
            $table->char('estado',2);
            $table->integer('main_url')->unsigned()->nullable();
            $table->foreign('main_url')
                ->references('idaccess')->on('access');
        });
        Schema::create('role_user',function (Blueprint $table){
            $table->integer('id_user')->unsigned()->default(0);
            $table->integer('id_role')->unsigned()->default(0);
            // config relation user
            $table->foreign('id_user')
                ->references('idusuario')->on('usuario')
                ->onDelete('cascade');
            //----------------------------------
            $table->foreign('id_role')
                ->references('idrole')->on('role')
                ->onDelete('cascade');
        });
        Schema::create('access_role',function (Blueprint $table){
            $table->integer('id_role')->unsigned()->default(0);
            $table->integer('id_access')->unsigned()->default(0);

            $table->foreign('id_role')
                ->references('idrole')->on('role')
                ->onDelete('cascade');

            $table->foreign('id_access')
                ->references('idaccess')->on('access')
                ->onDelete('cascade');

        });
    }
}
