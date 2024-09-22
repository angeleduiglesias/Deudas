<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function store(Request $request){
        $validate = $request->validate([
            'nombre' => 'required|string|max:255'
        ]);

        Cliente::create([
            'nombre' => $validate['nombre'],
        ]);

        return back();
    }
}
