<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
  /**
  * Run the migrations.
  * Se crea la tabla orders con los siguientes campos y se hace relacion a la
  * llave foreana que hacer ferencia a los libros y a las ordenes.
  * @return void
  */
  public function up()
  {
    Schema::create('order_details', function (Blueprint $table)
    {
      $table->bigIncrements('id');
      $table->integer('quantity');
      $table->bigInteger('book_id')->unsigned();
      $table->bigInteger('order_id')->unsigned();
      $table->timestamps();

      $table->foreign('book_id')->references('id')->on('books');
      $table->foreign('order_id')->references('id')->on('orders');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('order_details');
  }
}
