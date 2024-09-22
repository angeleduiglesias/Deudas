<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function store(Request $request){
        $validate = $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
        ]);

        Producto::create([
            'nombre' => $validate['nombre'],
            'precio' => $validate['precio'],
        ]);

        return redirect()->back()->with('success', 'Producto registrado correctamente.');
    }
}
