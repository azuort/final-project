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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title',100);
            $table->string('content',5000);
            $table->string('category',20);
            $table->timestamp('b_created_at');
            $table->timestamp('b_updated_at')->nullable();
            $table->string('image_url');
            $table->integer('views')->default(0);
            $table->integer('likes')->default(0);
            $table->integer('dislike')->default(0);
            $table->string('status')->default('active');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog');
    }
};
