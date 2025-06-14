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
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string('category_name')->comment('News, Review, Podcast, Opinion, Lifestyle, etc.')->max(30);
            $table->string('slug')->comment('Url');
            $table->string('description')->comment('Description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('category');
        Schema::table('category', function(Blueprint $table){
            $table->dropColumn('category_name');
            $table->dropColumn('slug');
            $table->dropColumn('description');
            $table->dropTimestamps();
        });
    }
};
