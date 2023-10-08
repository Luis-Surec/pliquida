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
<meta http-equiv = "X-UA-Compatible" content = "IE-borde, cromo = 1" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="styles/style.css">
    
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">



      <link rel="shortcut icon" href="usuario.png">
    <title>GESTIONES</title>
</head>
<body>
  
      <div id='' class="">
      <div class="encabezado" title="Menu Principal"><strong>MEN&Uacute; PRINCIPAL </strong></div>
      <div id="module-tabs" class="tabs-bottom" style="width: 290px !important;">
        <ul>

      
          <ul><img src="img/ing_sol.png"><a href="welcome.php">INICIO</a></ul>
          <ul><img src="img/rev_sol.png"><a href="./pages/liq/principalSolicitudes.php">LIQUIDACIONES</a></ul>
          <ul><img src="img/emit_sol.png"><a href="/pages/rep/principalReportes.php">REPORTES</a></ul>
          <ul><img src="img/rep_sol.jpg"><a href="/pages/config/principalConfiguracion.php" >CONFIGURACIONES</a></ul>
            </ul>
                
                    <div id="" class="">
                 
                    <ul> 
                        
                        <img src="img/solicitud.png" /> SOLICITUDES
                        <ul><button class="btn-success"><img src="img/ing_sol.png"><a href="pages/liq/liquidacion.php">SOLICITUD DE LIQUIDACION</a></button></ul>
                        <ul><button class="btn-success"><img src="img/rev_sol.png"><a href="pages/liq/liquidacionAutoriza.php">SOLCITUDES AUTORIZADAS</a></button></ul>
                        <ul><button class="btn-success"><img src="img/emit_sol.png"><a href="#" >ASIGNACION DE CHEQUES</a></button></ul>
                        <ul><button class="btn-success"><img src="img/rep_sol.jpg"><a href="#/" >REPORTES DE LIQUIDACIONES</a></button></ul>
                     </ul>
                    </div>	
                   </div>
          </div>
        </div> 


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>



</body>
</html>
