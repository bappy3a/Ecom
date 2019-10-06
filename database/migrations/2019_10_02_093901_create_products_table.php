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
            $table->string('name');
            $table->integer('price');
            $table->integer('descount')->nullable();
            $table->longText('description')->nullable();
            $table->string('color')->nullable();
            $table->string('quantity')->nullable();
            $table->integer('category_id');
            $table->integer('sub_category');
            $table->integer('brand_id')->nullable();
            $table->string('image');
            $table->longText('long_description')->nullable();
            $table->integer('seller_id')->default(0);
            $table->integer('admin_id')->default(0);
            $table->string('compositions')->nullable();
            $table->string('style')->nullable();
            $table->string('properties')->nullable();
            $table->string('specification')->nullable();
            $table->string('product_ran');
            $table->integer('publication_status')->nullable();
            $table->integer('noti_fai')->default(0);
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
