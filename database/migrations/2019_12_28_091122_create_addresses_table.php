<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('flat_no', 45)->nullable();
            $table->string('house', 45)->nullable();
            $table->string('building_name', 45)->nullable();
            $table->string('post_code', 45)->nullable();
            $table->string('town_or_city', 45)->nullable();
            $table->string('country', 45)->default('bangladeshi');
            $table->string('street')->nullable();
            $table->enum('address_type', config('enums.user.address_types'))->nullable();
            $table->nullableMorphs('addressable');
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
        Schema::dropIfExists('addresses');
    }
}
