<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->bigInteger('user_id')->nullable()->unsigned();
            $table->foreign ('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('book_id')->unsigned();
            $table->foreign ('book_id')->references('id')->on('book__banks')->onDelete('cascade');
            $table->bigInteger('order_id')->nullable()->unsigned();
            $table->foreign ('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->string('ip_address');
            $table->string('price');
            $table->integer('product_quantity')->default(1);
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
        Schema::dropIfExists('carts');
    }
}
