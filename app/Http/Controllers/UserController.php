<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(){
        return view('menu');
    }
    public function productos(){
        return view('product_view');
    }
    public function producto2(){
        return view('product2');
    }

    public function producto3(){
        return view('product3');
    }

    public function ingreso(){
        return view('login');
    }

    public function registros(){
        return view('registro');
    }

    
    public function carritos(){
        return view('carrito');
    }
}
