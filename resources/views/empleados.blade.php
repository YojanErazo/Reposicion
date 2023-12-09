<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listado de Empleados </h1>

    <div>
      <a class="btn btn-primary" href="{{route('empleados.crear')}}">Crear nuevo empleado</a> 
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th> 
      <th scope="col">Apellido</th>
      <th scope="col">Fecha Ingreso</th>
      <th scope="col">Salario</th>
    </tr>
  </thead> 
  <tbody> 
  @foreach($empleados as $item)
    <tr>

      <th scope="row">{{$item->idPrestamo}}</th>  
      <td>{{$item->nombre}}</td>
      <td>{{$item->apellido}}</td>
      <td>{{$item->fechaIngreso}}</td>
      <td>{{$item->salario}}</td>
    </tr>
    @endforeach
   
  </tbody>
</table>
</body>
</html>