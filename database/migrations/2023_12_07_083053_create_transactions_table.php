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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->decimal('balance')->nullable();
            $table->string('description')->nullable();
            $table->foreignId('destinationAccount')->constrained('accounts')->onDelete('cascade');
            $table->foreignId('sourceAccount')->constrained('accounts')->onDelete('cascade');
            $table->string('transactionType')->nullable()->comment('Enum: deposit, withdrawal, transfer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
