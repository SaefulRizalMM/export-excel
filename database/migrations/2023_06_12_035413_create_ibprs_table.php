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
        Schema::create('ibprs', function (Blueprint $table) {
            $table->id();
            $table->string('data1');
            $table->string('data2');
            $table->string('data3');
            $table->string('data4');
            $table->string('data5');
            $table->string('data6');
            $table->string('data7');
            $table->string('data8');
            $table->string('data9');
            $table->string('data10');
            $table->string('data11');
            $table->string('data12');
            $table->string('data13');
            $table->string('data14');
            $table->string('data15');
            $table->string('data16');
            $table->string('data17');
            $table->string('data18');
            $table->string('data19');
            $table->string('data20');
            $table->string('data21');
            $table->string('data22');
            $table->string('data23');
            $table->string('data24');
            $table->string('data25');
            $table->string('data26');
            $table->string('data27');
            $table->string('data28');
            $table->string('data29');
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
        Schema::dropIfExists('ibprs');
    }
};
