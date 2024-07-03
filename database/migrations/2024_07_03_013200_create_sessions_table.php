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
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            //dispensor
            $table->foreignId('dispensor_id')->constrained();
            //user
            $table->foreignId('user_id')->constrained();
            //approved quantity
            $table->integer('qty_approved');
            //dispened quantity
            $table->integer('qty_dispensed');
            //status
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
