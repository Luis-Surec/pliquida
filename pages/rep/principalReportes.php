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
      <link rel="stylesheet" href="../../styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="shortcut icon" href="../../img/rep_sol.jpg">
    <title>GESTIONES</title>
</head>
<body>
  
<!-- acá empieza el encabezado-->
<header>
<div class="title">  
<?php
include("../../script/head.php")
?>
</div>
</header>
<!-- acá termina el encabezado-->



<!--nuevo menu-->
<div>
<table class="table" style="height: 25%;">
  <thead> <tr> </tr></thead>
    <tbody>
    <tr>
      <th scope="row"><img src="../../img/regreso.png"></th>
      <th> <a href="../../welcome.php" >INICIO</a></th>
    </tr>
    <tr>
      <th scope="row"><img src="../../img/compras_c.png"></th>
      <th> <a href="#" >REPORTE DE COMRPAS</a></th>
    </tr>

    <tr>
      <th scope="row"><img src="../../img/compras_r.png"></th>
      <td><a href="#">REPORTE DE GASTOS</a></td>
    </tr>
    
  </tbody>
</table>
</div>
<!--nuevo menu termina-->


                



<script src="../script/conect.js" type="commonjs"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
 </body>

 
<footer><?php
include("../../script/footer.php")
?></footer>

</html>