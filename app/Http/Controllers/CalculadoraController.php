<?php

namespace App\Http\Controllers;

use App\Models\Calculadora;
use App\Service\CalculadoraServicio;
use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function calcular(Request $request,CalculadoraServicio $calculadoraServicio) {
        $calc=$calculadoraServicio->crear($request);
        if($calc===null) {
            $total="Valor Incorrecto";
            $calc=new Calculadora();
            $calc->numero1=0;
            $calc->numero2=0;
            } else {
            $total = $calculadoraServicio->suma($calc);
        }

        return view('calculadora.calcular',['calc'=>$calc,'total'=>$total]);
    }
}
