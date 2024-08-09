<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = [
        'namaproduk',
        'hargaproduk',
        'overviewproduk',
        'deskripsiproduk',
        'linkproduk',
        'fotoproduk',
        'tglposting',
        'statusdisplay',
        'idkategori',
        'idtoko'
    ];

    public function kategoris(){
        return $this->hasMany(Kategori::class);
    }

    public function tokos(){
        return $this->hasMany(Toko::class);
    }
}
