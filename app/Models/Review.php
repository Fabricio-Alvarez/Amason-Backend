<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

      // Relación con el modelo User
      public function user()
      {
          return $this->belongsTo(User::class);
      }
  
      // Relación con el modelo Product
      public function product()
      {
          return $this->belongsTo(Product::class);
      }
}
