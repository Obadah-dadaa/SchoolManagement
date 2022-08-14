<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Grade;
class CreateGradesTable extends Migration
{
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('name');
            $table->timestamps();
        });
        Grade::create([
            'name' => 'السابع',
        ]);
        Grade::create([
            'name' => 'الثامن',
        ]);
        Grade::create([
            'name' => 'التاسع',
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('grades');
    }
}
