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
        
            $table->string('std_id')->unique();
            $table->string('title');
            $table->string('std_name');
            $table->string('std_email');
            $table->string('std_hp');
            $table->string('course');
            $table->timestamps();
        });
        DB::table('students')->insert([
            
            ['std_id' => 'CB19076', 'title' => 'Smart Attendance Management System',  'std_name' => 'Nurin Amani',  'std_email' => 'nurinamani@gmail.com', 'std_hp' => '0175288572', 'course' => 'Software Engineering'], 
            ['std_id' => 'CB19077', 'title' => 'House Management System',  'std_name' => 'Nurul Fatimah',  'std_email' => 'fatimah@gmail.com', 'std_hp' => '0175288575', 'course' => 'Software Engineering'],
            ['std_id' => 'CB19078', 'title' => 'Car Management System',  'std_name' => 'Nur Aqila',  'std_email' => 'nuraqila@gmail.com', 'std_hp' => '0175288577', 'course' => 'Software Engineering']
            ]);
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
