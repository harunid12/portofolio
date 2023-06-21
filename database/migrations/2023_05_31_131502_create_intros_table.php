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
        Schema::create('intros', function (Blueprint $table) {
            $table->id();
            $table->string('username', 255)->nullable();
            $table->string('nama', 100)->nullable();
            $table->text('deskripsi')->nullable();
            $table->unsignedBigInteger('text_id')->nullable();
            $table->foreign('text_id')->references('id')->on('running_teks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('intros');
    }
};
