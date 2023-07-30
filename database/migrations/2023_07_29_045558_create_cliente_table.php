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
        Schema::create('cliente', function (Blueprint $table) {
            $table->bigIncrements('clie_id');
            $table->string('clie_pnom');
            $table->string('clie_snom');            
            $table->string('clie_pape');            
            $table->string('clie_sape');            
            $table->string('clie_tel');
            $table->string('clie_edad'); 
            $table->string('clie_email'); 
            $table->string('clie_password'); 
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
        Schema::dropIfExists('cliente');
    }
};
