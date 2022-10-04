<?php

namespace App\Service;
use App\Models\Calculadora;
use Illuminate\Http\Request;
use Throwable;

class CalculadoraServicio
{
    public function suma(Calculadora $calc) {
        return $calc->numero1+$calc->numero2;
    }
    public function crear(Request $request): ?Calculadora
    {
        $calc=new Calculadora();
        try {
            $calc->numero1 = $request->get('numero1', 0);
            $calc->numero2 = $request->get('numero2', 0);
        } catch(Throwable  $ex) {
            return null;
        }
        return $calc;
    }
}
