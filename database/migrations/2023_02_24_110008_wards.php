<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // • Wards: id, name, lga id, {timestamp}
    public function up(): void
    {
        if (!Schema::hasTable('users')) {
        Schema::create('wards', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('lga_id')->constrained('lgas');
            $table->timestamps();
        });
    }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
