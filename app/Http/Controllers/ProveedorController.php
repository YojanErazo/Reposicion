<?php

namespace App\Http\Controllers;
use App\Models\proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public  function index(){ 
        $proveedores = proveedor::all(); 
        return view('proveedores', compact('proveedores')); 
}

public  function create(){  
    return view('crearProveedor'); 
}

public function store(Request $request){  
$nvoProveedor=new proveedor(); 

$nvoProveedor->nombre=$request->input('nombre');

$nvoProveedor->fechaIngreso=$request->input('fechaIngreso'); 
$nvoProveedor->telefono=$request->input('telefono'); 
$nvoProveedor->correo=$request->input('correo');  
$nvoProveedor->save(); 
  return redirect ()->route('proveedores.inicio');
} 
}
