<?php ob_start(); ?>


<?php ob_end_flush(); ?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../styles/style.css">

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   
    <link rel="shortcut icon" href="img/solicitud.png">
   
    <title>LIQUIDACIONES</title>
</head>
<body>

<div class="mt-1 pt-1 pb-1  bg-primary bg-gradient  text-white">
  <div class="container">
    <div class="row">
 
      <h2>SERVICIOS PASTORALES ADMINISTRATIVOS, S.A.</h2>
      <p class="pr-5 ">MODULO DE LIQUIDACIONES</p>
      </div>
    </div>
  </div>

<div>
<button type= "btn btn-danger">  

<?php
    include("location:logout.php");
?>

</button>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
 </body>

</html>

