<?php namespace Dontliem1\Simsimvegan\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateDontliem1SimsimveganBooks extends Migration
{
    public function up()
    {
        Schema::create('dontliem1_simsimvegan_books', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->text('introduction')->nullable();
            $table->integer('sort_order')->default(0);
            $table->integer('good_id')->unsigned()->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dontliem1_simsimvegan_books');
    }
}