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
    Schema::create('professionals', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->foreignId('profession_id')->constrained()->cascadeOnDelete();
        $table->foreignId('location_id')->constrained()->cascadeOnDelete();
        $table->foreignId('service_id')->constrained()->cascadeOnDelete();
        $table->foreignId('nationality_id')->constrained()->cascadeOnDelete();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professionals');
    }
};
