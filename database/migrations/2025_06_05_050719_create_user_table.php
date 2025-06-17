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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('email')->comment('email address')->unique();
            $table->string('password')->comment('password');
            $table->string('name')->comment('name')->max(30);
            $table->string('remember_token')->comment('remember token')->rememberToken();
            $table->timestamp('email_verified_at')->comment('email verified timestamp')->nullable();
            $table->timestamp('registration_date')->comment('email registration timestamp');
            $table->timestamp('last_login_date')->comment('last login date timestamp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
