<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_registers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cate_id');
            $table->string('name');
            $table->mediumText('small_description');
            $table->string('orignal_price');
            $table->string('selling_price');
            $table->string('slug');
            $table->string('image');
            $table->string('qty');
            $table->string('tax');
            $table->tinyInteger('status');
            $table->tinyInteger('trending');
            $table->mediumText('meta_title');

            $table->mediumText('meta_description');

            $table->mediumText('meta_keywords');

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
        Schema::dropIfExists('product_registers');
    }
}
