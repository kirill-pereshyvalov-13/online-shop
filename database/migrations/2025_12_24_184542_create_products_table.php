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
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name'); // Колонка для названия товара
        $table->decimal('price', 8, 2); // Колонка для цены (8 цифр всего, 2 после запятой)
        $table->timestamps(); // Автоматические колонки "создано" и "обновлено"
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
