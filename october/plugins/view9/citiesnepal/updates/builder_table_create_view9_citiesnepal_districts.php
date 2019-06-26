<?php namespace View9\Citiesnepal\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateView9CitiesnepalDistricts extends Migration
{
    public function up()
    {
        Schema::create('view9_citiesnepal_districts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->integer('province_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('view9_citiesnepal_districts');
    }
}
