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
        Schema::create('tokos', function (Blueprint $table) {
            $table->id();
            $table->string('namatoko')->unique();
            $table->foreignId('iduser')->nullable()->constrained('users')->onDelete('cascade');
            $table->string('linktoko');
            $table->text('deskripsitoko');
            $table->date('tglgabung');
            $table->string('fototoko');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tokos');
    }
};
