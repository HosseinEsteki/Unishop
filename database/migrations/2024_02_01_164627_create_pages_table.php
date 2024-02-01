<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent')->nullable()->default(1);
            $table->string('name');
            $table->string('route');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
