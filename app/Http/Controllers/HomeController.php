<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Temas;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
  
    public function GuardarTema()
    {
        $nuevo = new Temas();
        $nuevo->nombre = request('nombre');
        $nuevo->descripcion = request('descripcion');
        $nuevo->tipoModulo = request('modulo');
        $nuevo->puntaje = request('puntaje');
        $nuevo->save();
        $datos = Temas::all(); 
        return view('Usuarios.administrador.temas',compact('datos'));
    }
    
  
}
