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
    Schema::table('candidates', function (Blueprint $table) {
        if (!Schema::hasColumn('candidates', 'nationality')) {
            $table->string('nationality')->after('country');
        }

        if (!Schema::hasColumn('candidates', 'gender')) {
            $table->string('gender')->after('nationality');
        }
    });
}

public function down(): void
{
    Schema::table('candidates', function (Blueprint $table) {
        if (Schema::hasColumn('candidates', 'nationality')) {
            $table->dropColumn('nationality');
        }

        if (Schema::hasColumn('candidates', 'gender')) {
            $table->dropColumn('gender');
        }
    });
}

};
