<?php namespace Kevinlyh\User\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKevinlyhUserUsers extends Migration
{
    public function up()
    {
        Schema::create('kusers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 64);
            $table->string('surname', 64)->default('\'\'');
            $table->string('email', 255);
            $table->string('password', 255);
            $table->string('phone', 20);
            $table->integer('sort_order')->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kusers');
    }
}
