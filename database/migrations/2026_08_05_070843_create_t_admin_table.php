<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('t_admin', function (Blueprint $table) {
            $table->id('adminID');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('t_admin');
    }
};