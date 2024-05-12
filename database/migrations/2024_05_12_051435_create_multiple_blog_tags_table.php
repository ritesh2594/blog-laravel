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
        Schema::create('multiple_blog_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blog_tag_id')->nullable();
            $table->unsignedBigInteger('blog_id');
            $table->timestamps();
            $table->foreign('blog_tag_id')->references('id')->on('blog_tags');
            $table->foreign('blog_id')->references('id')->on('blogs');
        });

        Schema::table('multiple_blog_tags', function (Blueprint $table) {
            $table->index('blog_tag_id');
            $table->index('blog_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('multiple_blog_tags');
    }
};
