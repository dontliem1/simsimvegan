<?php namespace Dontliem1\Simsimvegan\Updates;

use Winter\Storm\Database\Schema\Blueprint;
use Winter\Storm\Database\Updates\Migration;
use Winter\Storm\Support\Facades\Schema;

class BuilderTableCreateDontliem1SimsimveganIngridients extends Migration
{
    public function up()
    {
        Schema::create('dontliem1_simsimvegan_ingridients', function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->text('content')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dontliem1_simsimvegan_ingridients');
    }
}
