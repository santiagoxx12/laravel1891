<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->string('description');
            $table->integer('cantidad');
            $table->date('date_exp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function store(): void
    {
        Schema::dropIfExists('products');
    }
};
