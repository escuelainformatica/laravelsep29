<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function ejemplo() {
        return "esta es la funcion de ejemplo";
    }
    public function listado() {
        return ["cocacola","fanta","sprite"];
    }
    public function vista() {
        //  producto/ejemplo.blade.php
        return view('producto.ejemplo',[]);
    }
}
