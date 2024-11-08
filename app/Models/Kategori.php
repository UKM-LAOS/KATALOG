<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategoris';
    protected $fillable = [
        'kategori'
    ];
    public function produks()
    {
        return $this->hasMany(Produk::class, 'idkategori');
    }
}
