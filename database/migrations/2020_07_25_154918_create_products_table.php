<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('category_id');
            $table->string('tags', 255)->nullable();
            $table->string('title');
            $table->string('slug');
            $table->string('status')->nullable();
            $table->string('retailPrice');
            $table->string('wholesalePrice')->nullable();
            $table->mediumText('meta_description');
            $table->mediumText('description')->nullable();
            $table->string('warranty')->nullable();
            $table->string('policy')->nullable();
            $table->string('new')->nullable();
            $table->string('thumbnail')->nullable();
            $table->json('gallery')->nullable();
            $table->mediumText('additional_info')->nullable();
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
        Schema::dropIfExists('products');
    }
}
