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
    <title>Ingreso Proveedores</title>
</head>
<body>
    
    <div class="container">
        <div class="row row-cols-2">
    
        <form >
            <fieldset >
              <legend>Proveddores</legend>
              <div class="mb-1">
                <label for="prov" class="form-label">Nit Poveedor</label>
                <input type="text" id="prov" class="form-control" placeholder="Ingrese nit">
              </div>

              <div class="mb-1">
                <label for="prov" class="form-label">Nomgre Poveedor</label>
                <input type="text" id="prov" class="form-control" placeholder="Ingrese Proveedor">
              </div>

              <div class="mb-1">
                <label for="prov" class="form-label">Direccion Proveedor</label>
                <input type="text" id="prov" class="form-control" placeholder="Ingrese Direccion">
              </div>
              <div class="mb-1">
                <label for="prov" class="form-label">Télefonos</label>
                <input type="text" id="prov" class="form-control" placeholder="Telefonos">
              </div>



              <div class="mb-1">
                <label for="disabledSelect" class="form-label">Tipo Proveedor:</label>
                <select id="idTipoProveedor" class="form-select">
                  <option class="select">Selecion Tipo Proveedor</option>
                  <option>Pequeño Contribuyente</option>
                  <option>Contribuyente Normal</option>
                </select>
              </div>

           
              <button type="button" class="btn btn-primary"><a href="" class="btna">Guardar Proveedor</a></button>
                 
            </fieldset>
          </form>
</div>








<table class="table">
    
  <thead>
     <tr>
      <th scope="col">
        <div class="mb-3"><label for="merc" class="form-label">#</label>
        </div>
      </th> 
        
      <th scope="col">
        <div class="mb-3"><label for="merc" class="form-label">Nit</label>
        </div>
      </th> 
      <th scope="col">
        <div class="mb-3"><label for="merc" class="form-label">Proveedor</label>
        </div>
      </th> 
      <th scope="col">
        <div class="mb-3"><label for="merc" class="form-label">Direccion</label>
        </div>
      </th> 
      <th scope="col">
        <div class="mb-3"><label for="merc" class="form-label">Télefono</label>
        </div>
      </th> 

      <th scope="col">
        <div class="mb-3"><label for="merc" class="form-label">Tipo Proveedores</label>
        </div>
      </th> 

      <th>
      </th>
      </tr>
     
  </thead>
    
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>12121542Jacob</td>
        <td>Juanito Pérez</td>
        <td>2da calle  zona 4 Gautemala</td>
        <td>25011251Télefono</td>
        <td>Pequenño controbuyente</td>
       
        <td scope="col">
        <button type="button" class="btn btn-warning" id="modifica" onclick="modifica()">Modifica</button>
        </td> 
        <td scope="col">
        <button type="button" class="btn btn-danger"  id="elimina" onclick="elimina()">elimina</button>
        </td> 
        </tr>
  
        <tr>
          <th scope="row">2</th>
          <td>12121542Jacob</td>
          <td>Juanito Pérez</td>
          <td>2da calle  zona 4 Gautemala</td>
          <td>Télefono</td>
          <td>controbuyente Norma</td>
         
          <td scope="col">
          <button type="button" class="btn btn-warning" id="modifica" onclick="modifica()">Modifica</button>
          </td> 
          <td scope="col">
          <button type="button" class="btn btn-danger"  id="elimina" onclick="elimina()">elimina</button>
          </td> 
          </tr>

          <tr>
            <th scope="row">3</th>
            <td>12121542Jacob</td>
            <td>Juanito Pérez</td>
            <td>2da calle  zona 4 Gautemala</td>
            <td>2121121</td>
            <td>Pequeño contribuyente</td>
           
            <td scope="col">
            <button type="button" class="btn btn-warning" id="modifica" onclick="modifica()">Modifica</button>
            </td> 
            <td scope="col">
            <button type="button" class="btn btn-danger"  id="elimina" onclick="elimina()">elimina</button>
            </td> 
            </tr>

        </tr>
    </tbody>
  </table>



</div>

<script src="/scritp/log.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
</body>
</html>