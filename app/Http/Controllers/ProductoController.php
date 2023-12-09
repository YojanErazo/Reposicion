<?php

namespace App\Http\Controllers;
use App\Models\producto;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
     public  function index(){ 
        $productos = producto::all(); 
        return view('productos', compact('productos')); 
}

public  function create(){  
    return view('crearProducto'); 
}

public function store(Request $request){  
$nvoProducto=new producto(); 

$nvoProducto->descripcion=$request->input('descripcion');
$nvoProducto->precio=$request->input('precio'); 
$nvoProducto->stock=$request->input('stock'); 
$nvoProducto->pagaIsv=$request->input('pagaIsv');  
$nvoProducto->save(); 
  return redirect ()->route('productos.inicio');
}
}
