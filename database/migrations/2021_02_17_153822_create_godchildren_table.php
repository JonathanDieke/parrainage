<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGodchildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('godchildren', function (Blueprint $table) {
            $table->string('register');
            $table->string('name');
            $table->string('lname');
            $table->string('godfather_register');
            $table->timestamps();

            $table->primary('register');
            $table->foreign('godfather_register')
                        ->references('register')
                        ->on('godfathers')
                        ->onUpdate('cascade')
                        ->onDelete('cascade')
                        ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('godchildren');
    }
}
