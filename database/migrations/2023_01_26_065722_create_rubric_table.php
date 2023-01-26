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
        Schema::create('rubric', function (Blueprint $table) {
            $table->bigIncrements('Rubric_id');
            $table->string('Competency');
            $table->string('Excellent_grade');
            $table->string('Good_grade');
            $table->string('Moderate_grade');
            $table->string('Weak_grade');
            $table->string('VWweak_grade');
            $table->string('Fail_grade');
            $table->string('Weightage');
            $table->string('Mark_given');
            $table->string('Final_percent');
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
        Schema::dropIfExists('rubric');
    }
};
