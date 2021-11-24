<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffreOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offre_order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('offre_id');
            $table->unsignedBigInteger('order_id');
            $table->integer('quantity')->default(1);

            $table->foreign('offre_id')->references('id')->on('offres')->onDelete('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offre_order');
    }
}
