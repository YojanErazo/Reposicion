<!DOCTYPE html>
<html lang="en">
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listado de Productos </h1>

    <div>
      <a class="btn btn-primary" href="{{route('productos.crear')}}">Crear nuevo producto</a> 
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Descripcion</th> 
      <th scope="col">Precio</th>
      <th scope="col">Stock</th>
      <th scope="col">PagaIsv</th>
    </tr>
  </thead> 
  <tbody> 
  @foreach($productos as $item)
    <tr>

      <th scope="row">{{$item->id}}</th>  
      <td>{{$item->descripcion}}</td>
      <td>{{$item->precio}}</td>
      <td>{{$item->stock}}</td>
      <td>{{$item->pagarIsv}}</td>
    </tr>
    @endforeach
   
  </tbody>
</table>
</body>
</html>