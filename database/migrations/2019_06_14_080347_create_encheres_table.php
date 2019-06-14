<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncheresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encheres', function (Blueprint $table) {
            $table->increments('id');
            $table->float('montant');
            $table->string('email_offreur');
            $table->integer('image_id')->unsigned();
            $table->timestamps();


            $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encheres');
    }
}
