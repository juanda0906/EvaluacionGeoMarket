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
        Schema::create('publications', function (Blueprint $table) {
                        
            $table->id();
            $table->string('titulo');
            $table->string('precio');
            $table->string('descripcion');
            $table->string('visivilidad');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('seller_id');

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('seller_id')->references('id')->on('sellers')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
