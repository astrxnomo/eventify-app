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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('status');  
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('category');  
            $table->unsignedBigInteger('location_id');
            $table->foreign('location_id')->references('id')->on('location');
            $table->string('name');
            $table->text('description');
            $table->string('img_url');
            $table->integer('capacity');
            $table->integer('price');
            $table->datetime('date');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
