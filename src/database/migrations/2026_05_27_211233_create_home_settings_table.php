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
        Schema::create('home_settings', function (Blueprint $table) {
            $table->id();
            $table->string('hero_label')->nullable();
            $table->string('hero_title')->nullable();
            $table->text('hero_description')->nullable();

            $table->string('button_project_text')->nullable();
            $table->string('button_project_link')->nullable();
            $table->string('button_contact_text')->nullable();
            $table->string('button_contact_link')->nullable();
            $table->text('about_description')->nullable();
            $table->json('skills')->nullable();
            $table->json('services')->nullable();
            $table->string('cta_sub')->nullable();
            $table->text('cta_title')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_settings');
    }
};
