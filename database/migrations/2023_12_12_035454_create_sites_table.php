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
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('service_description')->nullable();
            $table->string('projet_description')->nullable();
            $table->string('contact_description')->nullable();
            $table->string('blog_description')->nullable();
            $table->string('office');
            $table->integer('phone');
            $table->string('email');
            $table->string('website');
            $table->string('map')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sites');
    }
};
