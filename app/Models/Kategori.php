<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    // method protected guarded 
    protected $guarded = [];
    
    // Eloquen Relasi database kategori yang menunjukkan bahwa
    // data kategori dapat termuat pada 1 produk
    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
