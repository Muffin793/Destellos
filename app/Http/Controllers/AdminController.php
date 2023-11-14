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
}
