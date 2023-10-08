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
    <link rel="shortcut icon" href="../img/solicitud.png">
    <title>LIQUIDACIONES </title>
</head>
<body>
 
  <div>  
      <div class="encabezado" title="Menu Principal"><strong>MODULO DE LIQUIDACIONES </strong></div>


     
        <!-- 
      <div id="module-tabs" class="tabs-bottom" style="width: 290px !important;">
          -->       
        <div>
          <div class="encabezado" title="Menu Principal"><strong>SERVICIOS ADMINISTRATIVOS, S. A. </strong></div>
        </div>       
 <!---->                  

 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MEN&Uacute; PRINCIPAL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><button><img src="/img/emit_sol.png"></img><a class="btn-default" aria-current="page" href="../pages/liq/liquidacion.html">LIQUIDACIONES</a></button>
        </li>
        <li class="nav-item">
          <button><img src="/img/rep_sol.jpg"></img><a class="btn-default" aria-current="page" href="/pages/rep/principalReportes.html">REPORTES</a></button>
        </li>
        <li class="nav-item">
          <button><img src="/img/engranaje.png"></img><a class="btn-default" aria-current="page" href="/pages/config/principalConfiguracion.html">CONFIGRUACIONES</a></button>
        </li>
        
        
      </ul>
  
    </div>
  </div>
</nav>


</div>





 <!--               
                    <div id="" class="">
                 
                    <ul> 
                          
                        <img src="/img/solicitud.png" /> SOLICITUDES
                        <ul><button class="btn-success"><img src="../img/ing_sol.png"><a href="../pages/liquidacion.html" target="_blank" >SOLICITUD DE LIQUIDACION</a></button></ul>
                        <ul><button class="btn-success"><img src="../img/rev_sol.png"><a href="../ventarapida.html" target="_blank">SOLCITUDES AUTORIZADAS</a></button></ul>
                        <ul><button class="btn-success"><img src="../img/emit_sol.png"><a href="../ventarapida.html" target="_blank">ASIGNACION DE CHEQUES</a></button></ul>
                        <ul><button class="btn-success"><img src="../img/rep_sol.jpg"><a href="../ventarapida.html" target="_blank">REPORTES DE LIQUIDACIONES</a></button></ul>
                       
                        <img src="/img/compras.jpg" /> COMPRAS-GASTOS
                        <ul><button class="btn-success"><img src="../img/compras_c.png"><a href="" target="_blank">REPORTE DE COMRPAS</a></button></ul>
                        <ul><button class="btn-success"><img src="../img/compras_r.png"><a href="#">REPORTE DE GASTOS</a></button></ul>

                        <img src="/img/engranaje.png" />CONFIGURACIONES</a>
                         <ul><button class="btn-success"><img src="../img/ctaBancaria.jpg"><a href="../pages/cuentasBancarias.html"> CUENTAS BANCARIAS</a></button></ul>
                         <ul><button class="btn-success"><img src="../img/empresas.png"><a href="../pages/razonSocial.html">RAZON SOCIAL</a></button></ul>   
                         <ul><button class="btn-success"><img src="../img/docIva.jpg"><a href="../pages/empresas.html">EMPRESAS</a></button></ul>
                         <ul><button class="btn-success"><img src="../img/ctasContables.png"><a href="../pages/cuentasContables.html"> CUENTAS CONTABLES</a></button></ul>
                         <ul><button class="btn-success"><img src="../img/departamentos.png"><a href="../pages/departamento.html "> DEPARTAMENTOS</a></button></ul>
                         <ul><button class="btn-success"><img src="../img/referencias.png"><a href="../pages/referencias.html"> REFERENCIAS</a></button></ul>
                         <ul><button class="btn-success"><img src="../img/proveedores.jpg"><a href="../pages/proveedores.html">PROVEEDORES</a>PROVEEDORES</button></ul>
                         <ul><button class="btn-success"><img src="../img/usuario.png"><a href="../pages/usuarios.html">USUARIOS</a></button></ul>
                      </ul>
                    </div>	
                   </div>
                       -->  
      

        

<script src="../script/conect.js" type="commonjs"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
 </body>
</html>