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
        Schema::create('title', function (Blueprint $table) {
            $table->bigIncrements('Reg_id');
            $table->string('Stu_SVName');
            $table->string('Stu_Title');
            $table->string('Stu_Objective');
            $table->string('Stu_Scope');
            $table->string('Stu_ProbStat');
            $table->string('Stu_SoftUse');
            $table->string('Stu_ToolsUse');
            $table->string('Stu_Approach');
            $table->string('Stu_Status')->nullable();
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
        Schema::dropIfExists('title');
    }
};
