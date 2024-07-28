<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //Setting up database schema
    public function up(): void
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->text('about')->nullable();
            $table->date('dob');
            $table->integer('mobile');
            $table->string('email')->unique();
            $table->string('country');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact');
    }
};
