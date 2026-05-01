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
        Schema::table('projects', function (Blueprint $table) {
            $table->index('is_published');
        });

        Schema::table('articles', function (Blueprint $table) {
            $table->index('is_published');
            $table->index('published_at');
        });
        
        Schema::table('comments', function (Blueprint $table) {
            $table->index('article_id');
            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropIndex(['is_published']);
        });

        Schema::table('articles', function (Blueprint $table) {
            $table->dropIndex(['is_published']);
            $table->dropIndex(['published_at']);
        });
        
        Schema::table('comments', function (Blueprint $table) {
            $table->dropIndex(['article_id']);
            $table->dropIndex(['user_id']);
        });
    }
};
