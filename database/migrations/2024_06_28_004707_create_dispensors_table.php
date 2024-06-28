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
        Schema::create('dispensors', function (Blueprint $table) {
            $table->id();
            $table->string('serialNumber')->unique();
            $table->string('productName');
            $table->string('productDescription');
            //productPrice
            $table->decimal('productPrice', 8, 2);
            //store product photo in db with blob and file name
            $table->string('productPhotoFilename');
            $table->binary('productPhoto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dispensors');
    }
};
