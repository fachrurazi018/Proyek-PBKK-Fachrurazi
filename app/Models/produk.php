<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;

    // method protected guarded 
    protected $guarded = [];

    // Eloquen Relasi database kategori yang menunjukkan bahwa
    // 1 data produk dapat memuat banyak kategori
    public function kategori()
    {
        return $this->hasMany(Kategori::class);
    }
}
