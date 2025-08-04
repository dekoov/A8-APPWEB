<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function index()
    {
        return view('factura');
    }

    public function calcular(Request $request)
    {
        $datos = $request->validate([
            'cliente'  => 'required|string|max:100',
            'producto' => 'required|string|max:100',
            'cantidad' => 'required|integer|min:1',
            'precio'   => 'required|numeric|min:0',
            'iva'      => 'nullable|numeric|min:0|max:100',
        ]);

        $cliente  = $datos['cliente'];
        $producto = $datos['producto'];
        $cantidad = $datos['cantidad'];
        $precio   = $datos['precio'];
        $iva      = $datos['iva'] ?? 12;

        $subtotal = $cantidad * $precio;
        $valorIVA = $subtotal * ($iva / 100);
        $total    = $subtotal + $valorIVA;

        return view('factura_resultado', [
            'cliente'  => $cliente,
            'producto' => $producto,
            'cantidad' => $cantidad,
            'precio'   => $precio,
            'subtotal' => $subtotal,
            'iva'      => $iva,
            'valorIVA' => $valorIVA,
            'total'    => $total,
        ]);
    }
}

