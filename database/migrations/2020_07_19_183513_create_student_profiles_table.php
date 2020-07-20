<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_profiles', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('name');
            $table->string('last_name');
            $table->string('phone_number');

            $table->bigInteger('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries');

            $table->string('department');
            $table->string('province');
            $table->string('district');
            $table->date('born_date');
            $table->enum('gender', ['F', 'M']);
            $table->string('dni');

            $table->bigInteger('university_id')->unsigned();
            $table->foreign('university_id')->references('id')->on('universities');

            $table->bigInteger('school_cycle_id')->unsigned();
            $table->foreign('school_cycle_id')->references('id')->on('school_cycles');

            $table->bigInteger('academic_degree_id')->unsigned();
            $table->foreign('academic_degree_id')->references('id')->on('academic_degrees');

            $table->bigInteger('english_level_id')->unsigned();
            $table->foreign('english_level_id')->references('id')->on('english_levels');

            $table->string('work');
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
        Schema::dropIfExists('student_profiles');
    }
}
