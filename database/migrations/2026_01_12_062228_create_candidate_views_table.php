<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('candidate_views', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('candidate_id');
        $table->string('company_name');
        $table->string('email');
        $table->string('phone');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidate_views');
    }
};
