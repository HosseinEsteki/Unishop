<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('site_apps', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('priority')->default(0);
            $table->string('name');
            $table->string('link');
            $table->foreignId('photo_id')->constrained()->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('market_mobiles');
    }
};
