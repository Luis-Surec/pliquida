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
    <link rel="stylesheet" href="/styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>CUENTAS CONTABLES</title>
</head>
<body>
  <div>  <p>  </p></div>
  <div class="row"> 
    <div class="encabezado" title="Menu Principal"><strong> NO. ORDEN</strong></div>  
    <div><p>  </p></div>
       
        <div class="col-2">
          <label for="disabledSelect" class="form-label">REFERENCICA:</label>
          <input type="text" name="" id="">
        </div>


        <div class="col-2">
          <label for="disabledSelect" class="form-label">NOMBRE DE REFERENCIA:</label>
          <input type="text" name="" id="">
        </div>

        
        <div>
        <p>  </p>
        </div>
     
        </div>

        <div>
          <button  type="button" class="btn-default"><a href="#">GUARDAR</a></button> 
        </div>
      </div>
        
        <div class="row-cols-2">
        <div class="form-outline"> <input type="search" id="form1" class="form-control" /><label class="form-label" for="form1">Buscar</label></div>
        </div>

  <div>
    <table class="table">
    <thead>
      <tr><th scope="col"><div class="mb-3"><label for="merc" class="form-label">#</label></div></th> 
      <th scope="col"><div class="mb-3"><label for="merc" class="form-label">ORDEN</label></div></th> 
      <th scope="col"><div class="mb-3"><label for="merc" class="form-label">REFERENCIA</label></div></th> 
      <th scope="col"><div class="mb-3"><label for="merc" class="form-label">NOMBRE DE LA REFERENCIA</label></div></th>
      <th scope="col"><div class="mb-3"><label for="merc" class="form-label"></label></div></th> 
      <th scope="col"><div class="mb-3"><label for="merc" class="form-label"></label></div></th> 
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>1</td>
        <td>Cuentas por liquidar</td>
        <td>Marco Antonio Zep</td>
        
                  
        <td scope="col-1"><button type="button" class="btn btn-warning" id="modifica" onclick="modifica()">Modifica</button></td> 
        <td scope="col-1"><button type="button" class="btn btn-danger"  id="elimina" onclick="elimina()">elimina</button></td> 
        </tr>
          
        <tr>
        <th scope="row">2</th>
        <td>1</td>
        <td>Cuentas pagar</td>
        <td>Marco Antonio Zep</td>
        <td scope="col"><button type="button" class="btn btn-warning" id="modifica" onclick="modifica()">Modifica</button></td> 
        <td scope="col"><button type="button" class="btn btn-danger"  id="elimina" onclick="elimina()">elimina</button></td> 
        </tr>
        <tr>

          <th scope="row">3</th>
          <td>3</td>
          <td>Ganaccias</td>
          <td>Reserva</td>
          <td scope="col"><button type="button" class="btn btn-warning" id="modifica" onclick="modifica()">Modifica</button></td> 
          <td scope="col"><button type="button" class="btn btn-danger"  id="elimina" onclick="elimina()">elimina</button></td> 
          </tr>


    </tbody>
    </table>
  </div>

</div>
<script src="../scritp/log.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
</body>
</html>
