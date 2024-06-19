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
        Schema::create('books', function (Blueprint $table) {
            $table->id('B_id');
            $table->string('B_th');
            $table->string('B_en');
            $table->string('Bloc_img');
            $table->string('Bloc_php');
            $table->string('Bcre_name');
            $table->string('Bcre_lname');
            $table->string('Bedit_name');
            $table->string('Bedit_lname');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
