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
        Schema::create('comic', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('slug',255)->unique();
            $table->text('description')->nullable();
            $table->decimal(4, 2);
            $table->string('series', 50); 
            $table->dateTime('sale_date');
            $table->string('type');           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comic');
    }
};
