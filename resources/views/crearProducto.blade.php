<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Document</title>
</head>
<body>
    <h1>Creacion de nuevos productos</h1>
   
    <form method="POST" action="{{route('productos.store')}}"> 
@csrf
@method('POST')  
<div class="row"> 



<div class="mb-3">                                              
  <label for="formGroupExampleInput2" class="form-label">Descripcion </label>
  <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Another input placeholder">
</div>

<div class="mb-3">                                              
  <label for="formGroupExampleInput2" class="form-label">Precio </label>
  <input type="text" class="form-control" name="precio" id="precio" placeholder="Another input placeholder">
</div>

<div class="mb-3">                                              
  <label for="formGroupExampleInput2" class="form-label">Stock </label>
  <input type="text" class="form-control" name="stock" id="stock" placeholder="Another input placeholder">
</div>

<div class="mb-3">                                              
  <label for="formGroupExampleInput2" class="form-label">PagaIsv </label>
  <input type="text" class="form-control" name="pagaIsv" id="pagaIsv" placeholder="Another input placeholder">
</div>

</div> 

 <button class="btn btn-success" type="submit"> Guardar </button>
</form>

</body>


</html>