<?php namespace View9\Citiesnepal\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateView9CitiesnepalProvinces extends Migration
{
    public function up()
    {
        Schema::create('view9_citiesnepal_provinces', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('view9_citiesnepal_provinces');
    }
}
