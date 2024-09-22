<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected  $fillable=[
        'nombre',
        'precio'
    ];

    public function deudas()
    {
        return $this->hasMany(Cliente_Producto::class);
    }
}
