<?php

namespace App\Http\Controllers;
use App\Models\empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public  function index(){ 
        $empleados = empleado::all(); 
        return view('empleados', compact('empleados')); 
}

public  function create(){  
    return view('crearEmpleado'); 
}

public function store(Request $request){  
$nvoEmpleado=new empleado(); 

$nvoEmpleado->nombre=$request->input('nombre');
$nvoEmpleado->apellido=$request->input('apellido'); 
$nvoEmpleado->fechaIngreso=$request->input('fechaIngreso'); 
$nvoEmpleado->salario=$request->input('salario');  
$nvoEmpleado->save(); 
  return redirect ()->route('empleados.inicio');
}
}
