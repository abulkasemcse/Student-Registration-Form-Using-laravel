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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('title',10);
            $table->string('name');
            $table->date('bday');
            $table->integer('age');
            $table->string('gender',10);
            $table->string('phone');
            $table->string('address');
            $table->string('email');
            $table->string('password');
            $table->boolean('t&c');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
