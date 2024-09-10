<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('membros', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->date('dataNasc')->nullable();
            $table->string('cargo')->nullable();
            $table->string('morada')->nullable();
            $table->string('telefone')->nullable();
            $table->foreignId('adm_id')->constrained('adms')->onDelete('cascade');
            $table->timestamps();
        });
    }
    
};
