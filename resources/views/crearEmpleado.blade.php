<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Document</title>
</head>
<body>
    <h1>Creacion de nuevos empleados</h1>
   
    <form method="POST" action="{{route('empleados.store')}}"> 
@csrf
@method('POST')  
<div class="row"> 


<div class="mb-3">                                              
  <label for="formGroupExampleInput2" class="form-label">Nombre </label>
  <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Another input placeholder">
</div>

<div class="mb-3">                                              
  <label for="formGroupExampleInput2" class="form-label">Apellido </label>
  <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Another input placeholder">
</div>

<div class="mb-3">                                              
  <label for="formGroupExampleInput2" class="form-label">Fecha Ingreso </label>
  <input type="text" class="form-control" name="fechaIngreso" id="fechaIngreso" placeholder="Another input placeholder">
</div>

<div class="mb-3">                                              
  <label for="formGroupExampleInput2" class="form-label">Salario </label>
  <input type="text" class="form-control" name="salario" id="salario" placeholder="Another input placeholder">
</div>

</div> 

 <button class="btn btn-success" type="submit"> Guardar </button>
</form>

</body>


</html>