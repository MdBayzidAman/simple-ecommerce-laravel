<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_id');
            $table->string('name');
            $table->text('desc');
            $table->json('image');
            $table->string('short_desc');
            $table->string('category');
            $table->integer('price');
            $table->integer('discount_price')->nullable();
            $table->string('author')->nullable();
            $table->string('author_id')->nullable();
            $table->json('color')->nullable();
            $table->string('product_model_number')->nullable();
            $table->string('brand')->nullable();
            $table->json('variant')->nullable();
            $table->json('size')->nullable();
            $table->string('warranty')->nullable();
            $table->string('region')->nullable();
            $table->string('delivery_cost')->default(1);
            $table->string('available_stoke')->nullable();
            $table->string('label')->nullable();
            $table->integer('total_rating')->nullable();
            $table->integer('average_rating')->nullable();
            $table->integer('total_question')->nullable()->default(0);
            $table->integer('ans_question')->nullable()->default(0);
            $table->integer('total_wishlist')->nullable()->default(0);
            $table->integer('total_order')->nullable()->default(0);
            $table->integer('total_shipment')->nullable()->default(0);
            $table->integer('total_revenue')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
