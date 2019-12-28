<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 50)->nullable();
            $table->string('first_name', 50);
            $table->string('last_name', 50)->nullable();
            $table->string('designation', 45)->nullable();
            $table->date('dob')->nullable();
            $table->string('marital_status', 50)->nullable();
            $table->string('phone', 23)->unique()->nullable();
            $table->string('religion')->nullable();
            $table->string('education')->nullable();
            $table->string('gender')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
