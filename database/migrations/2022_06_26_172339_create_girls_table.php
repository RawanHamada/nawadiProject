<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGirlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('girls', function (Blueprint $table) {
            $table->id();
            $table->string('name',20);
            $table->string('civil_record',20);
            $table->string('first_phone',13)->unique();
            $table->string('second_phone',13)->unique();
            $table->string('class',13)->unique;
            $table->string('school',100);
            $table->string('neighborhood',100);
            $table->string('age',100);
            $table->enum('move',['yes','no'])->default('yes');
            $table->json('photo');
            $table->string('employee');
            $table->enum('condition',['yes','no'])->default('no');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('girls');
    }
}
