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
        Schema::create('medicals', function (Blueprint $table) {
            $table->id();
            $table->string('mat_no');
            $table->integer('cough');
            $table->integer('chest_pain');
            $table->integer('bloody_urine');
            $table->integer('excess_urine');
            $table->integer('black_stool');
            $table->integer('mucus_stool');
            $table->integer('epilepsy');
            $table->integer('eye_pain');
            $table->integer('eye_discharge');
            $table->integer('ear_pain');
            $table->integer('ear_discharge');
            $table->integer('breathing_diff');
            $table->integer('breathless_walk');
            $table->integer('groin');
            $table->integer('nect');
            $table->integer('tuberculosis');
            $table->integer('diabetes');
            $table->integer('mental');
            $table->integer('hypertension');

            $table->integer('hospital');
            $table->text('hosp_desc');
            $table->integer('accident');
            $table->text('acc_desc');
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
        Schema::dropIfExists('medicals');
    }
};
