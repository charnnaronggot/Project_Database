<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->text('firstname') ;
            $table->text('lastname') ;
            $table->text('extention') ;
            $table->text('email') ->unique();
            $table->text('password') ;
            $table->text('officerCode')  ->nullable();
            $table->text('reportTo')  ->nullable();
            $table->text('jobTitle')  ->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
