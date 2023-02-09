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
        Schema::create('superviseeevaluation', function (Blueprint $table) {
            $table->id();
            $table->string('StudentID');
            $table->string('StudentName');
            $table->string('ProjectTitle');
            $table->string('StudentCategory');
            $table->string('TotalEva1');
            $table->string('TotalEva3');
            $table->string('Comment');
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
        Schema::dropIfExists('superviseeevaluation');
    }
};
