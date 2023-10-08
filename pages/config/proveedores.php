<?php ob_start(); ?>

<?php
// Initialize the session
session_start();


echo "Bienvenido";

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>




<?php ob_end_flush(); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="/styles/style.css">
    <title>Listado proveedores</title>
</head>
<body>
    
    <div class="container">
        <div class="row row-cols-2">
            <form >
            <fieldset >
              <legend>Listado de Proveedores</legend>
              <div class="mb-1">
                <label for="disabledTextInput" class="form-label">Fecha inicio</label>
                <input type="date" id="disabledTextInput" class="form-control" placeholder="Input deshabilitado">
              </div>

              <div class="mb-1">
                <label for="disabledTextInput" class="form-label">Fecha fecha final</label>
                <input type="date" id="disabledTextInput" class="form-control" placeholder="Input deshabilitado">
              </div>

              <div class="mb-1">
                <label for="disabledSelect" class="form-label">Seleciona Proveedor:</label>
                <select id="disabledSelect" class="form-select">
                  <option class="select">Selecionda todos</option>
                  <option>Proveedor 1</option>
                  <option>Proveedor 2</option>
                </select>
              </div>

              <div id="module-1" class="">
             <ul><button type="button" class="btn-success"><a href="" >INGRESA PROVEEDOR</a></button></ul>
       
             <ul></ul> <button type="button" class="btn-success" ><a href="" >MOVIMIENTOS DEL PROVEEDOR</a></button></ul>
              </div>
            </fieldset>
            </form>
        </div>


<div class="row row-cols-2">
<table class="table">
  <thead>
     <tr>
      <th scope="col"><div class="mb-3"><label for="merc" class="form-label">#</label></div></th> 
      <th scope="col"><div class="mb-3"><label for="merc" class="form-label">Nit</label></div></th> 
      <th scope="col"><div class="mb-3"><label for="merc" class="form-label">Cliente</label></div> </th> 
      <th scope="col"><div class="mb-3"><label for="merc" class="form-label">Tipo Cliente</label></div> </th> 
      <th scope="col"><div class="mb-3"><label for="merc" class="form-label">Departamento</label></div></th> 
      <th scope="col"><div class="mb-3"><label for="merc" class="form-label">Cuenta Contable</label></div></th> 
      <th scope="col"><div class="mb-3"><label for="merc" class="form-label">Mecarderia</label></div></th> 
      <th scope="col"><div class="mb-3"><label for="merc" class="form-label">Servicio</label></div></th> 
      <th scope="col"><div class="mb-3"><label for="merc" class="form-label">Combustible</label></div></th> 
      <th scope="col"><div class="mb-3"><label for="merc" class="form-label">Combustible Afecto</label></div></th> 
      <th scope="col"><div class="mb-3"><label for="merc" class="form-label">Retencion Iva</label></div></th> 
      <th scope="col"><div class="mb-3"><label for="merc" class="form-label">Retencion Isr</label></div></th> 
    </tr>
  </thead>
    
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>Thornton</td>
        <td>Jacob</td>

         <td scope="col"><button type="button" class="btn btn-warning" id="modifica" onclick="modifica()">Modifica</button></td> 
        <td scope="col"><button type="button" class="btn btn-danger"  id="elimina" onclick="elimina()">elimina</button></td> 
        </tr>
  
        <tr>
        <th scope="row">1</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>Thornton</td>
        <td>Jacob</td>
  
        <td scope="col"><button type="button" class="btn btn-warning" id="modifica" onclick="modifica()">Modifica</button></td> 
        <td scope="col"><button type="button" class="btn btn-danger"  id="elimina" onclick="elimina()">elimina</button> </td> 
  

       
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>Thornton</td>
        <td>Jacob</td>
  
        <td scope="col">
                  <button type="button" class="btn btn-warning" id="modifica" onclick="modifica()">Modifica</button>
        </td> 
        <td scope="col">
         <button type="button" class="btn btn-danger"  id="elimina" onclick="elimina()">elimina</button>
         </td> 


        </tr>
    </tbody>
  </table>
</div>

</div>





<script src="/scritp/log.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
</body>
</html>