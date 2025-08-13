<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('name');       // menu name
            $table->string('url')->nullable(); // route or URL
            $table->string('icon')->nullable(); // icon class e.g. feather-airplay
            $table->unsignedBigInteger('parent_id')->nullable(); // for submenus
            $table->integer('order')->default(0); // sorting
            $table->boolean('status')->default(1); // active/inactive
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('menus');
    }
};
