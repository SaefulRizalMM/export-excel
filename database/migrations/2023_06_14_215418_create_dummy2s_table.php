<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dummy2s', function (Blueprint $table) {
            $table->id();
            $table->string('dummy1');
            $table->string('dummy2');
            $table->string('dummy3');
            $table->string('dummy4');
            $table->string('dummy5');
            $table->string('dummy6');
            $table->string('dummy7');
            $table->string('dummy8');
            $table->string('dummy9');
            $table->string('dummy10');
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
        Schema::dropIfExists('dummy2s');
    }
};
