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
        Schema::create('muebles', function (Blueprint $table) {
            $table->id();
            $table->string('denominacion');
            $table->decimal('precio', 10, 2);
            $table->morphs('muebleable');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('muebles', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};
