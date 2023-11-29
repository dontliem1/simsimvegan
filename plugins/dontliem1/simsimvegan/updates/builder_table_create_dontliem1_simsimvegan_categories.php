<?php namespace Dontliem1\Simsimvegan\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateDontliem1SimsimveganCategories extends Migration
{
    public function up()
    {
        Schema::create('dontliem1_simsimvegan_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->integer('sort_order')->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dontliem1_simsimvegan_categories');
    }
}