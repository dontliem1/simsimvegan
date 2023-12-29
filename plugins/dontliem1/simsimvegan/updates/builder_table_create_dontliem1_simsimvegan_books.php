<?php namespace Dontliem1\Simsimvegan\Updates;

use Illuminate\Support\Facades\Schema;
use Winter\Storm\Database\Schema\Blueprint;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateDontliem1SimsimveganBooks extends Migration
{
    public function up()
    {
        Schema::create('dontliem1_simsimvegan_books', function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->integer('price')->unsigned();
            $table->integer('original_price')->nullable()->unsigned();
            $table->string('cover')->nullable();
            $table->string('description')->nullable();
            $table->string('color')->nullable();
            $table->text('introduction')->nullable();
            $table->mediumText('ingridients')->nullable();
            $table->text('notes')->nullable();
            $table->text('telegrams')->nullable();
            $table->integer('sort_order')->default(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('dontliem1_simsimvegan_books');
    }
}
