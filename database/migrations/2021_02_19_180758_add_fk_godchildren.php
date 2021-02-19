<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkGodchildren extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('godchildren', function (Blueprint $table) {

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
        Schema::create('godchildren', function (Blueprint $table) {
            $table->dropForeign(['godfather_register']);
        });
    }
}
