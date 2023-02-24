<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // • Citizens: – id, full name, gender, address, phone, ward id, {timestamp}
    //
    public function up(): void
    {
    //check if the table already exists
        if (!Schema::hasTable('users')) {
        Schema::create('wards', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('gender');
            $table->string('address');
            $table->bigInteger('phone');
            $table->foreignId('ward_id')->constrained('wards');
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
