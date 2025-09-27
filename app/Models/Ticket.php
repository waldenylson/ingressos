<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
  protected $fillable = [
    'order_id',
    'ticket_price',
    'qr_code',
    'status',
  ];
}
