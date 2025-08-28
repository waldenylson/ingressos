<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('tickets', function (Blueprint $table) {
      $table->id();
      $table->string('');
      $table->string('customer_name');
      $table->string('customer_email');
      $table->string('customer_cellphone');
      $table->string('address_cep');
      $table->string('address_complement');
      $table->string('address_number');
      $table->integer('ticket_');
      $table->string('');
      $table->string('');
      $table->string('');
      $table->uuid('uuid')->default(DB::raw('uuid_generate_v4()'))->unique(true);
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
