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
            $table->json('product_ids');
            $table->unsignedInteger('user_id')->nullable();
            $table->string('orderId');
            $table->string('firstName');
            $table->string('lastName')->nullable();
            $table->string('companyName')->nullable();
            $table->string('country');
            $table->text('addressline1');
            $table->text('addressline2')->nullable();
            $table->string('order_status');
            $table->string('city');
            $table->string('postalCode');
            $table->string('phone');
            $table->string('email');
            $table->string('orderTotal');
            $table->unsignedInteger('IsCouponApplied')->nullable();
            $table->text('notes')->nullable();
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
