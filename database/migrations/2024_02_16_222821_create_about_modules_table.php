<?php

use App\Http\Classes\EnumConvert;
use App\Http\Classes\Enums\Modules\LinkType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('about_modules', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('priority');
            $table->string('title');
            $table->foreignId('photo_id')->constrained()->cascadeOnDelete();
            $table->longText('content');
            $table->enum('link_type', EnumConvert::NamesToCollection(LinkType::cases())->all());
            $table->string('link_name')->nullable();
            $table->string('link_address')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('about_modules');
    }
};
