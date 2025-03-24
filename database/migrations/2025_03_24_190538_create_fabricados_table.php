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
        Schema::create('fabricados', function (Blueprint $table) {
            $table->id();
            $table->decimal('ancho', 6, 2);
            $table->decimal('alto', 6,2);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fabricados', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};
