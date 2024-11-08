<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;
    protected $fillable = [
        'namatoko',
        'iduser',
        'linktoko',
        'deskripsitoko',
        'tglgabung',
        'fototoko'

    ];

    public function users(){
        return $this->hasMany(User::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'iduser');
    }
    
    public function produks() {
        return $this->hasMany(Produk::class, 'idtoko');
    }
    
}