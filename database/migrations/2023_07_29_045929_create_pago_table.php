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
        Schema::create('pago', function (Blueprint $table) {
            $table->bigIncrements('pag_id');
            $table->dateTime('pag_date');
            $table->double('pag_total', 8, 2);
            $table->string('pag_det');
            $table->bigInteger('clie_id')->unsigned(); 
            $table->bigInteger('even_id')->unsigned(); 
            $table->timestamps();
            $table->foreign('clie_id')->references('clie_id')->on('cliente');
            $table->foreign('even_id')->references('even_id')->on('evento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pago');
    }
};
