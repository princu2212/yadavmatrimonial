<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatrimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matrimonials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('age');
            $table->string('gender');
            $table->string('height')->nullable();
            $table->string('education')->nullable();;
            $table->string('marital_status');
            $table->string('work');
            $table->string('phone')->nullable();
            $table->string('gotra')->nullable();
            $table->string('address');
            $table->text('about')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('birth_time')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('rashi')->nullable();
            $table->string('village');
            $table->string('block')->nullable();
            $table->string('city');
            $table->string('district');
            $table->string('current_address');
            $table->string('permanent_address')->nullable();
            $table->string('fathers_name');
            $table->string('mothers_name');
            $table->string('dada_name')->nullable();
            $table->string('dadi_name')->nullable();
            $table->string('nana_name')->nullable();
            $table->string('nani_name')->nullable();
            $table->string('total_members');
            $table->string('no_of_brothers');
            $table->string('no_of_sisters');
            $table->string('hobby')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('matrimonials');
    }
}
