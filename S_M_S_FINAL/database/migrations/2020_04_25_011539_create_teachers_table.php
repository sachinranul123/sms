<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){

        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('teacher_id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->integer('contact_1');
            $table->integer('contact_2')->nullable();
            $table->string('email')->nullable();
            $table->string('nic_number');
            $table->date('dob');
            $table->string('address');
            $table->string('job_type')->nullable();
            $table->string('teach_subject')->nullable();
            $table->mediumText('image')->nullable();
            $table->date('reg_date');
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
        Schema::dropIfExists('teachers');
    }
}
