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
        Schema::create('multa', function (Blueprint $table) {
            $table->id();
            $table->string('cidade');
            $table->date('data');
            $table->string('hora');

            //Chaves estrangeiras
            $table->unsignedBigInteger('carro');
            $table->unsignedBigInteger('infracao');


            $table->foreign('carro')->references('id')->on('carro');
            $table->foreign('infracao')->references('id')->on('infracao');

        

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('multa');
    }
};
