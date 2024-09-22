<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;


    protected $fillable=[
        'nombre'
    ];
    public function deudas()
    {
        return $this->hasMany(Cliente_Producto::class);
    }
    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'cliente__productos')->withPivot('cantidad');
    }
}
