<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('tables', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->timestamps();
        // });
        Schema::create("topics", function(Blueprint $table){
            $table->increments("id");
            $table->string("topicname", 100)->unique();
            $table->timestamps(); //created_at, update_at
        });
        Schema::create("blocks", function(Blueprint $table){
            $table->increments("id");
            $table->integer("topicid")->unsigned();
            $table->foreign("topicid")->references("id")->on("topics")->onDelete("cascade");
            $table->string("title", 100);
            $table->longText("content")->nullable();
            $table->string("imagePath", 255)->nullable();
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
        Schema::dropIfExists('topics');
        Schema::dropIfExists('blocks');
    }
}
