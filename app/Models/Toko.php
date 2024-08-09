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
}
