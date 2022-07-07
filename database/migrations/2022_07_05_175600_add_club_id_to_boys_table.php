<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClubIdToBoysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('boys', function (Blueprint $table) {
            $table->foreignId('club_id')
            ->nullable()
            ->constrained('clubs')
            // ->after('move')
            ->nullOnDelete();

            $table->foreignId('city_id')
            ->nullable()
            ->constrained('cities')
            ->nullOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('boys', function (Blueprint $table) {
            $table->dropColumn('club_id');
        });
    }
}
