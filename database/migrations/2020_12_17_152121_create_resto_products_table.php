<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestoProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resto_products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->mediumText('short_description');
            $table->string('image');
            $table->integer('user_id');
            $table->integer('resto_category_id');
            $table->double('price', 10, 2)->nullable();
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
        Schema::dropIfExists('resto_products');
    }
}
