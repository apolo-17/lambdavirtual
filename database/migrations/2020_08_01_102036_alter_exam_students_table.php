<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterExamStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('exam_students', function (Blueprint $table) {
            $table->time('start',2)->after('questionary')->nullable();
            $table->time('finish',2)->after('start')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('exam_students', function (Blueprint $table) {
            $table->dropColumn('start');
            $table->dropColumn('finish');
        });
    }
}
