<?php namespace Dontliem1\Simsimvegan\Updates;

use Winter\Storm\Database\Schema\Blueprint;
use Winter\Storm\Database\Updates\Migration;
use Winter\Storm\Support\Facades\Schema;

class BuilderTableCreateDontliem1SimsimveganBookRecipe extends Migration
{
    public function up()
    {
        Schema::create('dontliem1_simsimvegan_book_recipe', function(Blueprint $table)
        {
            $table->integer('book_id')->unsigned();
            $table->integer('recipe_id')->unsigned();
            $table->primary(['book_id', 'recipe_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dontliem1_simsimvegan_book_recipe');
    }
}