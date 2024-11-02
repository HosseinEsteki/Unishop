<?php

use App\Http\Classes\EnumConvert;
use App\Http\Classes\Enums\TopBarType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('top_bars', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('type', EnumConvert::NamesToCollection(TopBarType::cases())->all());
            $table->string('content');
            $table->unsignedSmallInteger('priority')->default(0);
            $table->string('link')->nullable();
            $table->string('icon')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('top_bars');
    }
};
