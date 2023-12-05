<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function delete(){
        return view('eliminar');
    }

    public function consult(){
        return view('consulta');
    }

    public function menu(){
        return view('menuadmin');
    }

    public function modificar(){
        return view('modificar');
    }

    public function agregar(){
        return view('agregar');
    }
}
