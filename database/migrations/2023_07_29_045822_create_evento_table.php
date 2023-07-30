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
        Schema::create('evento', function (Blueprint $table) {
            $table->bigIncrements('even_id');
            $table->string('even_nom');
            $table->string('even_desc');
            $table->dateTime('even_date');
            $table->string('even_adrs');
            $table->bigInteger('emp_id')->unsigned(); 
            $table->bigInteger('cat_id')->unsigned(); 
            $table->timestamps();
            $table->foreign('emp_id')->references('emp_id')->on('empresa');
            $table->foreign('cat_id')->references('cat_id')->on('categoria');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evento');
    }
};
