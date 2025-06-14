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
            $table->string('email')->comment('email address');
            $table->string('password')->comment('password');
            $table->string('name')->comment('name')->max(30);
            $table->string('Remember_token')->comment('remember token')->rememberToken();
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
        // Schema::dropIfExists('user');
        Schema::table('users', function(Blueprint $table){
            $table->dropColumn('email');
            $table->dropColumn('password');
            $table->dropColumn('name');
            $table->dropColumn('remember_token');
            $table->dropColumn('email_verified_at');
            $table->dropColumn('registration_date');
            $table->dropColumn('last_login_date');
            $table->dropTimestamps();
        });
    }
};
