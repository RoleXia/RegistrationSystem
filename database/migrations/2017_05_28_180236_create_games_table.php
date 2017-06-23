<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function(Blueprint $table){
            $table->increments('id');
            $table->string('lib');
            $table->timestamps();
        });

        Schema::create('games', function(Blueprint $table) {

            $table->increments('id');

            $table->string('lib', 100);

            $table->tinyInteger('complexity');

            $table->string('img_name', 100);

            $table->mediumText('description');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('games');
        Schema::drop('tags');
    }
}
