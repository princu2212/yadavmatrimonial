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
            $table->string('work')->nullable();
            $table->string('phone')->nullable();
            $table->string('gotra')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('rashi')->nullable();
            $table->string('village');
            $table->string('district');
            $table->string('address')->nullable();
            $table->string('fathers_name');
            $table->string('mothers_name');
            $table->string('total_members');
            $table->string('no_of_brothers');
            $table->string('no_of_sisters');
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
