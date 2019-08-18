<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCart2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart2s', function (Blueprint $table) {
          $table->bigIncrements('id');
			$table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('book_id');
            $table->unsignedInteger('order_id');
            $table->string('ip_address');
            $table->integer('user_id')->unsigned();
            $table->string('price');
            $table->integer('product_quantity')->default(1);
            $table->timestamps();
			 
			 $table->foreign ('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
				
				 $table->foreign ('order_id')
                ->references('id')->on('orders')
                ->onDelete('cascade');
				
				 $table->foreign ('book_id')
                ->references('id')->on('book_banks')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart2s');
    }
}
