<?php

use App\Models\PsychologicalCounselor;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psychological_counselors', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('name', 200);
            $table->string('phone_number', 15);
            $table->string('email', 300);
            $table->string('password', 64);
            $table->rememberToken();
            $table->timestamps();
        });
        PsychologicalCounselor::create([
            'name' => 'خالد اسماعيل',
            'phone_number' => '0987654321',
            'email' => 'khaledIsmaeel@gmail.com',
            'password' => Hash::make('khaled12345678')
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('psychological_counselors');
    }
};
