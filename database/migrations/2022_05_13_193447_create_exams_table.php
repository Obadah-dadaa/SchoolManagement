<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('student_id');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->integer('subject_id');
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
            $table->integer('grade_id');
            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('cascade');
            $table->integer('section_id');
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
            $table->enum('type', ['شفهي', 'مذاكرة', 'نهائي'])->default('مذاكرة');
            $table->integer('mark');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('exams');
    }
}
