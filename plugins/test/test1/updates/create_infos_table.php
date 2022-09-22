<?php namespace Test\Test1\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateInfosTable extends Migration
{
    public function up()
    {
        Schema::create('test_test1_infos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('test_test1_infos');
    }
}
