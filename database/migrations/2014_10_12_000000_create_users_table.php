<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('role')->udefault(0); //value 0=student, 1=coordinator, 2=lecturer
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });

        DB::table('users')->insert([
            //Coordinator
            ['id' => '1', 'name' => 'Danakorn',  'email' => 'danakorn@gmail.com',  'role' => '1', 'password' => '$2y$10$W6AOL8CM3PyfD0PsJ29k9OYD.xXssGErzRZKw5DKieiqnsx3irGZm'], //danakorn123

            //Lecturer
            ['id' => '2', 'name' => 'Zulfahmi',  'email' => 'zulfahmi@gmail.com',  'role' => '2', 'password' => '$2y$10$QstNUsCP5hzBpofmgvcEOeDDZOeLE3L4dgP4oegtpgbXGdAVyoG2.'], //zulfahmi123

            //Lecturer
            ['id' => '3', 'name' => 'Fatimah',  'email' => 'fatimah@gmail.com',  'role' => '0', 'password' => '$2y$10$hjx/UmImr3RdP2q3kSVURuLEo72I.5ZlvIjw71gkAvN29lQXfxVIK'], //fatimah123

            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
