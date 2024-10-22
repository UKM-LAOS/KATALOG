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
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('namaproduk')->unique();
            $table->bigInteger('hargaproduk');
            $table->text('overviewproduk');
            $table->text('deskripsiproduk');
            $table->string('linkproduk');
            $table->string('fotoproduk');
            $table->date('tglposting');
            $table->enum('statusdisplay', [1,2]);
            $table->integer('totalklik')->default(0);
            $table->foreignId('idkategori')->constrained('kategoris')->onDelete('cascade');
            $table->foreignId('idtoko')->constrained('tokos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
