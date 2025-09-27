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
    Schema::create('tickets', function (Blueprint $table) {
      $table->id();
      $table->foreignId('order_id')->constrained('orders')->onDelete('cascade'); // Relaciona com orders
      $table->decimal('ticket_price', 10, 2); // Preço unitário do ingresso
      $table->string('qr_code', 255)->unique(); // QR único por ingresso
      $table->enum('status', ['available', 'used', 'cancelled'])->default('available'); // Status do ingresso

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('tickets');
  }
};
