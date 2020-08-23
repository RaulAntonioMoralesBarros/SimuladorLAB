<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccesoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ingresar()
    {
        
        return view("app.primeros_pasos.inicio");
    }

}
