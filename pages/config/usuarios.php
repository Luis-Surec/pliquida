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
    <title>USUARIO</title>
</head>
<body>
    
    <div class="container">
        <div class="row row-cols-2">
    
        <form >
            <fieldset >
              <legend>Proveddores</legend>
              <div class="mb-1">
                <label for="prov" class="form-label">codigo usuario</label>
                <input type="text" id="codUs" class="form-control" placeholder="Codigo se Usuario">
              </div>

              <div class="mb-1">
                <label for="prov" class="form-label">Nomgre usuuario</label>
                <input type="text" id="nomUs" class="form-control" placeholder="Nombre de Usuario">
              </div>

              
              <div class="mb-1">
                <label for="disabledSelect" class="form-label">Roles:</label>
                <select id="idTipoProveedor" class="form-select">
                  <option class="select">Seleciona  Rol</option>
                  <option>Administrador</option>
                  <option>Operador</option>
                
                </select>
              </div>


              <div class="mb-1">
                <label for="Select" class="form-label">Permisos:</label>
                
                <!--aca empieza el menu de seleccion-->
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" checked>
                <label class="form-check-label">Empresas</label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" checked>
                <label class="form-check-label">Cuentas Contables</label>
                </div>

                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" checked>
                <label class="form-check-label">Referencias</label>
                </div>

                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" checked>
                <label class="form-check-label">Departamentos</label>
                </div>

                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" checked>
                <label class="form-check-label">Liquidciones</label>
                </div>

                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" checked>
                <label class="form-check-label">Cheques</label>
                </div>

                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" checked>
                <label class="form-check-label">Reportes</label>
                </div>

                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" checked>
                <label class="form-check-label">Usuarios</label>
                </div>


              </div>
             <div><p>
            </p></div>
            <button type="button" class="btn btn-primary" onclick="">Guardar Usuario</button>
            </fieldset>
          </form>
</div>



<table class="table">
    
  <thead>
      <tr><th scope="col"><div class="mb-3"><label for="merc" class="form-label">#</label></div></th> 
      <th scope="col"><div class="mb-3"><label for="merc" class="form-label">Codigo usuario</label></div></th> 
      <th scope="col"><div class="mb-3"><label for="merc" class="form-label">Nombre Usuario</label></div></th> 
      <th scope="col"><div class="mb-3"><label for="merc" class="form-label">Rol</label></div></th></tr>
   </thead>
    
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>P1</td>
        <td>Juanito Pérez</td>
        <td>Administrador</td>
        <td scope="col"><button type="button" class="btn btn-warning" id="modifica" onclick="modifica()">Modifica</button></td> 
        <td scope="col"><button type="button" class="btn btn-danger"  id="elimina" onclick="elimina()">elimina</button></td> 
        </tr>
  
        <tr>
          <th scope="row">2</th>
          <td>P1</td>
          <td>Juanito Juanito</td>
          <td>Administrador</td>
          <td><button type="button" class="btn btn-warning" id="modifica" onclick="modifica()">Modifica</button></td>
          <td><button type="button" class="btn btn-danger"  id="elimina" onclick="elimina()">elimina</button></td> 
          </tr>

          <tr>
          <th scope="row">3</th>
          <td>P1</td>
          <td>Juanito Leon</td>
          <td>Operador</td>
          <td ><button type="button" class="btn btn-warning" id="modifica" onclick="modifica()">Modifica</button></td> 
          <td ><button type="button" class="btn btn-danger"  id="elimina" onclick="elimina()">elimina</button></td> 
          </tr>
       </tbody>
  </table>



</div>

<script src="/scritp/log.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
</body>
</html>