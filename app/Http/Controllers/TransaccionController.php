<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaccionController extends Controller
{
    public function index()
    {
        $transacciones = [
            ['id' => 1, 'comercio' => 'Café Amanecer', 'monto' => 25.50,'estado' => 'Aprobada'],
            ['id' => 2, 'comercio' => 'Ferretería San José', 'monto' => 100.00, 'estado' => 'Procesando'],
            ['id' => 3, 'comercio' => 'Pupusería El Buen Sabor', 'monto' => 15.75, 'estado' => 'Rechazada'],
        ];
        return $transacciones;
    }
}
