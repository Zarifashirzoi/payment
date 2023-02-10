<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name_on_card');
            $table->string('card_type')->default('visa');
            $table->string('card_number');
            $table->date('exp_date');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('street_address');
            $table->string('cvv');
            $table->string('unit')->nullable();
            $table->boolean('save_card')->default(false);
            $table->decimal('amount', 14,2);
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
};
