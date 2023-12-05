<?php

namespace App\Http\Controllers;

use App\Models\CompusModel;
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

    public function menuemergente(){
        return view('vistapremenu');
    }

    public function login2(){
        return view('login2');
    }


    public function ShowCompus(){
        $compus=CompusModel::all();
        //return $compus;
        return view('tablaxd', compact('compus'));
    }

    public function formulario(){
        return view('formularioborrable');
    }

    public function crearalumno(Request $request){
        $obj=new CompusModel;
        $obj->modelo=$request->modelo;
        $obj->ram=$request->ram;
        $obj->precio=$request->precio;
        $obj->save();
        $compus=CompusModel::all();
        //return $compus;
        return view('tablaxd', compact('compus'));

    }

    


}
