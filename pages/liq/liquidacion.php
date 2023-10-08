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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>lIQUIDACION</title>
</head>
<body>
  <div>  <p>  </p></div>
  <div class="row"> 
    <div class="encabezado" title="Menu Principal"><strong>LIQUIDACION DE CHEQUES </strong></div>  
    <div><p>  </p></div>
        <div class="col-2">
          <label for="disabledTextInput" class="form-label">Fecha inicio</label>
          <input type="date" id="disabledTextInput" value=" "  class="form-control" placeholder="Input deshabilitado">
        </div>
        <div class="col-3">
          <label for="disabledTextInput" class="form-label">Fecha fecha final</label>
          <input type="date" id="disabledTextInput" class="form-control" placeholder="Input deshabilitado">
        </div>
          <div class="col-3">
          <label for="disabledSelect" class="form-label">Seleciona Empresa:</label>
          <select id="disabledSelect" class="form-select">
          <option class="select">Seleciona empresa</option>
          <option>Kuljay ( Casa de Encuentros)</option>
          <option>Editorial Saqil Tzij</option>
          </select>
        </div>
        <div class="col-3">
          <label for="disabledSelect" class="form-label">Seleciona Proyecto:</label>
          <select id="disabledSelect" class="form-select">
          <option class="select">Seleciona Proyecto</option>
          <option>Kuljay ( Casa de Encuentros)</option>
          <option>Programa</option>
          <option>Editorial</option>
          <option>Diplomado</option>
          </select>
        </div>
        <div>
          <button  type="button" class="btn-default"><a href="pages/liq/liquidacionIngFacturas.php">INGRESA NUEVA SOLICITUD</a></button> 
       
        </div>
      </div>
        
        <div class="row-cols-2">
        <div class="form-outline"> <input type="search" id="form1" class="form-control" /><label class="form-label" for="form1">Buscar</label></div>
        </div>

  <div>
    <table class="table">
    <thead>
      <tr><th scope="col"><div class="mb-3"><label for="merc" class="form-label">#</label></div></th> 
      <th scope="col"><div class="mb-3"><label for="merc" class="form-label">Empresa</label></div></th> 
      <th scope="col"><div class="mb-3"><label for="merc" class="form-label">ProyectoCliente</label></div></th> 
      <th scope="col"><div class="mb-3"><label for="merc" class="form-label">Chequera</label></div></th>
      <th scope="col"><div class="mb-3"><label for="merc" class="form-label">No. de Cheque</label></div></th>
      <th scope="col"><div class="mb-3"><label for="merc" class="form-label">Proveedor</label></div></th> 
      <th scope="col"><div class="mb-3"><label for="merc" class="form-label">Monto</label></div></th> 
      <th scope="col"><div class="mb-3"><label for="merc" class="form-label">Estado</label></div></th> 
      <th scope="col"><div class="mb-3"><label for="merc" class="form-label"></label></div></th> 
      <th scope="col"><div class="mb-3"><label for="merc" class="form-label"></label></div></th> 
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Kuljay</td>
        <td>Kuljay</td>
        <td>Kuljay</td>
        <td>1512</td>
        <td>Juanioto Jacob</td>
        <td>1500.00</td>
        <td>En Revision</td>
          
        <td scope="col"><button type="button" class="btn btn-warning" id="modifica" onclick="modifica()">Modifica</button></td> 
        <td scope="col"><button type="button" class="btn btn-danger"  id="elimina" onclick="elimina()">elimina</button></td> 
        </tr>
  
        <tr>
        <th scope="row">2</th>
        <td>Programa</td>
        <td>Programa</td>
        <td>Programa</td>
        <td>1512</td>
        <td>Juanioto Jacob</td>
        <td>1500.00</td>
        <td>En Revision</td>
  
        <td scope="col"><button type="button" class="btn btn-warning" id="modifica" onclick="modifica()">Modifica</button></td> 
        <td scope="col"><button type="button" class="btn btn-danger"  id="elimina" onclick="elimina()">elimina</button></td> 
        </tr>
        <tr>
        <th scope="row">3</th>
        <td>Programa</td>
        <td>Editorial</td>
        <td>Diplomado</td>
        <td>1512</td>
        <td>Juanioto Jacob</td>
        <td>1500.00</td>
        <td>En Revision</td>
        <td scope="col"><button type="button" class="btn btn-warning" id="modifica" onclick="modifica()">Modifica</button></td> 
        <td scope="col"><button type="button" class="btn btn-danger"  id="elimina" onclick="elimina()">elimina</button></td> 
        </tr>
    </tbody>
    </table>
  </div>

</div>
<!--/*echo "# progIVA" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin git@github.com:Luis-Surec/progIVA.git
git push -u origin main*/-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
</body>
</html>
