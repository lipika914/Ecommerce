<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign ('user_id') ->references('id')->on('users')->onDelete('cascade');
            $table->string('ip_address')->nullable();
            $table->string('name');
            $table->string('ph_num');
            $table->string('email');
            $table->text('shipping_address');
            $table->text('message')->nullable();
			 $table->boolean('is_paid')->default(0);
            $table->boolean('is_completed')->default(0);
            $table->boolean('is_seen_by_admin')->default(0);

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
        Schema::dropIfExists('orders');
    }
}
