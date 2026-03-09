<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



return new class extends Migration {
    public function up()
    {
        Schema::table('candidates', function (Blueprint $table) {

            if (!Schema::hasColumn('candidates', 'nationality')) {
                $table->string('nationality')->nullable()->after('gender');
            }

            if (!Schema::hasColumn('candidates', 'gender')) {
                $table->string('gender')->nullable();
            }

            if (!Schema::hasColumn('candidates', 'country')) {
                $table->string('country')->nullable();
            }

        });
    }

    public function down()
    {
        Schema::table('candidates', function (Blueprint $table) {

            if (Schema::hasColumn('candidates', 'nationality')) {
                $table->dropColumn('nationality');
            }

            if (Schema::hasColumn('candidates', 'gender')) {
                $table->dropColumn('gender');
            }

            if (Schema::hasColumn('candidates', 'country')) {
                $table->dropColumn('country');
            }

        });
    }
};
