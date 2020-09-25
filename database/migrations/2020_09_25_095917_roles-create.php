<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RolesCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('label');
            $table->string('color');
            $table->timestamps();
        });

        \DB::table('roles')->insert([
            ['code'=>'P', 'label'=>'Portieri', 'color'=>'#f6ab3c'],
            ['code'=>'D', 'label'=>'Difensori', 'color'=>'#4e97fe'],
            ['code'=>'C', 'label'=>'Centrocampisti', 'color'=>'#93bc85'],
            ['code'=>'A', 'label'=>'Attaccanti', 'color'=>'#ffc29f'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
