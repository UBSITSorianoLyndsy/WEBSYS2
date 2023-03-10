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
            $table->id(); //identity auto increment PK//unsinged(no negative)//signed(may negative)
            $table->timestamps(); //created at and updated at (2 columns) //by default can be null
            $table->string('studentId', 8)->unique(); //string no repeat // ->(dot) 
            $table->string('firstName', 100);
            $table->string('middleName', 100)->nullable();
            $table->string('lastName', 100);
            $table->integer('age')->nullable();
            $table->bigInteger('courseId'); //PK course table = Id

        });
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
