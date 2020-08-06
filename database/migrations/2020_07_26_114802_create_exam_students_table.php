<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_students', function (Blueprint $table) {
            $table->id();

            $table->uuid('student_profile_id');
            $table->foreign('student_profile_id')->references('id')->on('student_profiles');

            $table->bigInteger('exam_id')->unsigned();
            $table->foreign('exam_id')->references('id')->on('exams')->onDelete('cascade');

            $table->json('questionary');

            $table->enum('done',[true,false]);

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
        Schema::dropIfExists('exam_students');
    }
}
