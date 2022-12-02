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
        //
        Schema::create('empleados', function (Blueprint $table) {

            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('emp_fname');
            $table->string('emp_lname');
            $table->date('emp_dob');
            $table->integer('salary');
            $table->bigInteger('sucursales_id')->unsigned();
            $table->timestamps();

                $table->foreign('sucursales_id')->references('id')->on('sucursales')->onDelete("cascade");
        });
    }// 137 -> emple
    // 039 -> empr

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
