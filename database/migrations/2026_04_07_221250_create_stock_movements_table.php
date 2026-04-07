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
        Schema::create('stock_movements', function (Blueprint $table) {
            $table->id();

            $table->foreignId('product_id')->constrained()->cascadeOnDelete();

            $table->enum('type', ['entry', 'exit', 'adjustment']);

            $table->integer('quantity');
            $table->decimal('unit_cost', 12, 2)->nullable();

            $table->morphs('reference'); // reference_type + reference_id

            $table->text('observation')->nullable();

            $table->timestamp('moved_at');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_movements');
    }
};
