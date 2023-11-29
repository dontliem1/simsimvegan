<?php namespace Dontliem1\Simsimvegan\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateDontliem1SimsimveganRecipes extends Migration
{
    public function up()
    {
        Schema::create('dontliem1_simsimvegan_recipes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->integer('category_id')->unsigned();
            $table->text('content');
            $table->text('chefs_note')->nullable();
            $table->text('ingridients_lists')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dontliem1_simsimvegan_recipes');
    }
}