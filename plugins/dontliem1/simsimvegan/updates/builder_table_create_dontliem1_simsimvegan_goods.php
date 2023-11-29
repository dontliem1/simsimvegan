<?php namespace Dontliem1\Simsimvegan\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateDontliem1SimsimveganGoods extends Migration
{
    public function up()
    {
        Schema::create('dontliem1_simsimvegan_goods', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('price')->unsigned();
            $table->integer('original_price')->nullable()->unsigned();
            $table->integer('buyable_id')->nullable()->unsigned();
            $table->string('buyable_type')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dontliem1_simsimvegan_goods');
    }
}