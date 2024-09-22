<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Cliente_Producto;
use App\Models\Producto;
use Illuminate\Http\Request;

class ClienteProducto extends Controller
{
    public function index(){
        $productos = Producto::all();
        $clientes = Cliente::all();

        $totalClientes = $clientes->count();
        $totalProductos = $productos->count();

        $clientesProductosObtenidos = Cliente::with('productos')->get();

        return view('welcome', compact('productos','clientes', 'totalClientes','totalProductos','clientesProductosObtenidos'));
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'producto_id' => 'required|exists:productos,id',
            'cantidad' => 'required|integer|min:1',
        ]);

        Cliente_Producto::create([
            'cliente_id' => $validatedData['cliente_id'],
            'producto_id' => $validatedData['producto_id'],
            'cantidad' => $validatedData['cantidad'],
        ]);

        return redirect()->back()->with('success', 'Deuda registrada correctamente.');
    }
}
