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
        Schema::create('empresa', function (Blueprint $table) {
            $table->bigIncrements('emp_id');
            $table->string('emp_nom');
            $table->string('emp_tel');            
            $table->string('emp_rtn');            
            $table->string('emp_email');            
            $table->string('emp_password');
            $table->bigInteger('user_id')->unsigned();          
            $table->timestamps();
            $table->foreign('user_id')->references('user_id')->on('usuario');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresa');
    }
};
