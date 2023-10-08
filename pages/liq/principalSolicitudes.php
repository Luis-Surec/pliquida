<?php ob_start(); ?>



<?php ob_end_flush(); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../../styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="shortcut icon" href="../../img/solicitud.png">
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


<!-- acá empieza  el menú-->
                
   




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
      <th scope="row"><img src="../../img/ing_sol.png"></th>
      <td><a href="../../pages/liq/liquidacion.php"  >SOLICITUD DE LIQUIDACION</td>
    </tr>
    <tr>
      <th scope="row"><img src="../../img/rev_sol.png"></th>
      <td><a href="../../pages/liq/liquidacionAutoriza.php" >SOLCITUDES AUTORIZADAS</a></td>
    </tr>
    <tr>
      <th scope="row"><img src="../../img/emit_sol.png"></th>
      <td colspan="2"><a href="#" >ASIGNACION DE CHEQUES</a></td>
    </tr>
    <tr>
    <th scope="row"><img src="../../img/emit_sol.png"></th>
      <td colspan="2"><a href="#" >REPORTES DE LIQUIDACIONES</a></td>
    </tr>
  </tbody>
</table>
</div>
<!--nuevo menu termina-->





        


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
 </body>

 <footer>
 <?php
include("../../script/footer.php")
?>
</footer>


</html>


