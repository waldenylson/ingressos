c<?php

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
      Schema::create('orders', function (Blueprint $table) {
        $table->id();

        $table->string('customer_name');
        $table->string('customer_email');
        $table->string('customer_cellphone');
        $table->string('address_cep');
        $table->string('address_complement');
        $table->string('address_number');

        $table->decimal('total_amount', 10, 2); // Valor total da compra
        $table->enum('payment_status', ['pending', 'paid', 'cancelled'])->default('pending'); // Status do pagamento

        $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      Schema::dropIfExists('orders');
    }
  };
