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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('edad');
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->unsignedBigInteger('idUniversidads');
            $table->foreign('idUniversidads')->references('id')->on('universidads');
            $table->rememberToken();
            //$table->foreignId('idUniversidads')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
