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
            $table->increments('id');
            $table->integer('owner_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->integer('location_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('img')->nullable();
            $table->integer('capacity');
            $table->decimal('price', 10, 2)->nullable();
            $table->dateTime('date');
            $table->timestamp('create_date')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->foreign('owner_id')->references('id')->on('users');
            $table->foreign('status_id')->references('id')->on('statuses');
            $table->foreign('location_id')->references('id')->on('locations');
            $table->foreign('category_id')->references('id')->on('categories');
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
