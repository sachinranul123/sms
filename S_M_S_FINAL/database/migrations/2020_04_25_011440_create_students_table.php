~<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('student_id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->date('dob');
            $table->string('nic_number')->nullable();
            $table->string('contact_number');
            $table->string('email')->unique()->nullable();
            $table->string('school_attends')->nullable();
            $table->date('reg_date')->nullable();
            $table->string('stu_grade')->nullable();
            $table->longText('status');
            $table->string('gardians_fname');
            $table->string('gardians_lname');
            $table->string('relation_to')->nullable();
            $table->string('address');
            $table->string('gardian_contact');
            $table->mediumText('image')->nullable();
            $table->softDeletes();
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
        //
    }
}
