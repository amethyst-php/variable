<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateVariablesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create(Config::get('amethyst.variable.data.variable.table'), function (Blueprint $table) {
            $table->increments('id');
            $table->string('key');
            $table->string('value');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists(Config::get('amethyst.variable.data.variable.table'));
    }
}
