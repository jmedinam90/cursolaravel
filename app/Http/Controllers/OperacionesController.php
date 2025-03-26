<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OperacionesController extends Controller
{
    public function suma($num1, $num2)
    {
        $resultado = $num1 + $num2;
        return view('operaciones', ['resultado' => $resultado, 'operacion' => 'suma']);
    }

    public function resta($num1, $num2)
    {
        $resultado = $num1 - $num2;
        return view('operaciones', ['resultado' => $resultado, 'operacion' => 'resta']);
    }

    public function multiplicacion($num1, $num2)
    {
        $resultado = $num1 * $num2;
        return view('operaciones', ['resultado' => $resultado, 'operacion' => 'multiplicación']);
    }

    public function division($num1, $num2)
    {
        $resultado = $num1 / $num2;
        return view('operaciones', ['resultado' => $resultado, 'operacion' => 'división']);
    }
}
