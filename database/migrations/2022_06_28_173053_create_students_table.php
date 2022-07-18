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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string("mat_no");
            $table->string("surname");
            $table->string("firstname");
            $table->string("othername")->nullable();
            $table->date("dob");
            $table->string("phone")->unique();
            $table->string("email")->unique();
            $table->foreignId("department_id")->constrained();
            $table->foreignId("school_id")->constrained();
            $table->foreignId("course_id")->constrained();
            $table->foreignId("level_id")->constrained();
            $table->integer("status")->default(1);
            $table->text("passport");
            $table->text('qr_hash');
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
        Schema::dropIfExists('students');
    }
};
