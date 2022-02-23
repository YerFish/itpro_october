<?php namespace Itpro\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateItproProjectsTechnologies extends Migration
{
    public function up()
    {
        Schema::create('itpro_projects_technologies', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('itpro_projects_technologies');
    }
}
