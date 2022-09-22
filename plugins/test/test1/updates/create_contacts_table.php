<?php namespace Test\Test1\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateContactsTable extends Migration
{
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('country');
            $table->string('city');
            $table->string('street');
            $table->string('phone');
            $table->string('email');
            $table->integer('dom_id')->unsigned();
            $table->foreign('dom_id')->references('id')->on('domains')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
