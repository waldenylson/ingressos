<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable = [
    'customer_name',
    'customer_email',
    'customer_cellphone',
    'address_cep',
    'address_complement',
    'address_number',
    'total_amount',
    'payment_status',
  ];

  public function tickets()
  {
    return $this->hasMany(Ticket::class);
  }
}
