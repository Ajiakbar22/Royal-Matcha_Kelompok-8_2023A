<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['produk', 'nama', 'alamat', 'total', 'jumlah', 'user_id'];

}
