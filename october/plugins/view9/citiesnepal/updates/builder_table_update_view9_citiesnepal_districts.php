<?php namespace View9\Citiesnepal\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateView9CitiesnepalDistricts extends Migration
{
    public function up()
    {
        Schema::table('view9_citiesnepal_districts', function($table)
        {
            $table->string('name')->change();
            $table->integer('province_id')->unsigned()->change();
        });
    }
    
    public function down()
    {
        Schema::table('view9_citiesnepal_districts', function($table)
        {
            $table->string('name', 191)->change();
            $table->integer('province_id')->unsigned(false)->change();
        });
    }
}
