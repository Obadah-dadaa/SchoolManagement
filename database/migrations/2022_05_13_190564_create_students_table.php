<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Student;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('first_name', 200);
            $table->string('last_name', 200);
            $table->integer('parent_id');
            $table->foreign('parent_id')->references('id')->on('parents')->onDelete('cascade');
            $table->integer('grade_id');
            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('cascade');
            $table->integer('section_id');
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
            $table->boolean('bus_subscribe')->default('0');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}
