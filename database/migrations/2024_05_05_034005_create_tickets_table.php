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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('event_id');
            $table->foreign('event_id')->references('id')->on('events');  
            $table->string('name');
            $table->string('qr_url');

            #$table->unsignedBigInteger('event_name');
            #$table->foreign('event_name')->references('name')->on('events');
            #$table->unsignedBigInteger('event_date');
            #$table->foreign('event_date')->references('date')->on('events');  

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
