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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <link rel="stylesheet" href="/styles/style.css">
    <title>REG_DOC</title>
</head>
<body>

  <div class="">
    <div><p> <strong>Asginacion del Proveedor</strong>  </p></div>
    <div class="row">

      <div class="col-2"><label for="nit" class="form-label">Nit</label>
        <select id="nit" class="form-select">
        <option class="select">elegir</option>
        <option>nit 12</option>
        <option>nit 13</option>
        </select>
            
      </div>
      <div class="col-2 "><label for="cliente" class="form-label">Cliente</label>
        <select id="cliente" class="form-select">
        <option>Selecione Cliente</option>
        <option>Jorgito J</option>
        </select>
         </div>
  
         <div class="col-2"><label for="disabledSelect" class="form-label">Departamento</label>
          <select id="disabledSelect" class="form-select">
           <option>Hoteleria</option>
           <option>Areas Verdes</option>
           <option>Cocina</option>
          </select>
          </div>
   
        <div class="col-2"><label for="disabledSelect" class="form-label">Doc. Contable</label>
          <select id="disabledSelect" class="form-select">
           <option>Selecione nit</option>
           <option>C.Servicios</option>
           <option>Pq. Servicios</option>
          </select>
          </div>

          <div class="col-2"><label for="disabledSelect" class="form-label">Cuenta Contable</label>
            <select id="disabledSelect" class="form-select">
             <option>Selecione Cuenta</option>
             <option>66145445421</option>
             <option>66145445422</option>
            </select>
            </div>

         <div><p> <strong>Detalle del Documento</strong>  </p></div>

         <div class="col-2"><label for="disabledSelect" class="form-label">Serie</label><input  type="text" id="merc" class="form-control"></input> </div>
         <div class="col-2"><label for="disabledSelect" class="form-label">Numero</label><input  type="text" id="merc" class="form-control"></input></div>
         <div class="col-2"><label for="disabledSelect" class="form-label">Bien</label><input  type="text" id="merc" class="form-control"></input></div>
         <div class="col-2"><label for="disabledSelect" class="form-label">Servicio</label><input  type="text" id="merc" class="form-control"></input></div>
         <div class="col-2"><label for="disabledSelect" class="form-label">Combustible</label><input  type="text" id="merc" class="form-control"></input></div>
         <div class="col-2"><label for="disabledSelect" class="form-label">Combustible nmo afecto</label><input  type="text" id="merc" class="form-control"></input></div>
         <div class="col-2"><label for="disabledSelect" class="form-label">IVA</label><input  type="text" id="merc" class="form-control"></input></div>
         <div class="col-2"><label for="disabledSelect" class="form-label">Reten Iva</label><input  type="text" id="merc" class="form-control"></input></div>
         <div class="col-2"><label for="disabledSelect" class="form-label">Reten ISR</label><input  type="text" id="merc" class="form-control"></input></div>
         
          <div>
            <button type="button" class="btn btn-primary">Agregar Documentos</button> 
            <button type="button" class="btn btn-primary">Enviar para Revision</button></div>
          <div><p>  </p></div>
        
  </div>
</div>

 <!--  acá se muestran los daton ingresados--> 

<div>
<table class="table">
  <thead>
     <tr>
      <th scope="col"><div class="mb-2"><label>#</label></div></th> 
      <th scope="col"><div class="mb-2"><label>Nit</label></div></th> 
      <th scope="col"><div class="mb-2"><label>Cliente</label></div></th> 
      <th scope="col"><div class="mb-2"><label>Tipo Cliente</label></div></th> 
      <th scope="col"><div class="mb-2"><label>Depto.</label></div></th> 
      <th scope="col"><div class="mb-2"><label>Cuenta</label></div></th> 
      <th scope="col"><div class="mb-2"><label>Serie</label></div></th> 
      <th scope="col"><div class="mb-2"><label>Numero</label></div></th> 
      <th scope="col"><div class="mb-2"><label>Bien</label></div></th> 
      <th scope="col"><div class="mb-2"><label>Serv.</label></div> </th> 
      <th scope="col"><div class="mb-2"><label>Combustible</label></div></th>
      <th scope="col"><div class="mb-2"><label>Comb Afecto</label></div></th>
      <th scope="col"><div class="mb-2"><label>Reten Iva</label></div></th> 
      <th scope="col"><div class="mb-2"><label>Reten Isr</label></div>
      <th scope="col"><div class="mb-2"><label>Iva</label></div>
      <th scope="col"><div class="mb-2"><label>Actualizar</label></div>
      <th scope="col"><div class="mb-2"><label>Eliminar</label></div>
      </th> 
    </tr>
  </thead>
      <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>Jacob</td>
        <td>54F455</td>
        <td>5478547878</td>
        <td>150.00</td>
        <td>200.00</td>
        <td>25.00</td>
        <td>25.00</td>
        <td>75.00</td>
        <td>2,5000</td>
        <td>200.00</td>
        <td>10.50</td>
        <td scope="col"><button type="button" class="btn btn-warning" id="modifica" onclick="modifica()">Modifica</button></td> 
        <td scope="col"><button type="button" class="btn btn-danger"  id="elimina" onclick="elimina()">elimina</button></td> 
  
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>Jacob</td>
        <td>54F455</td>
        <td>5478547878</td>
        <td>150.00</td>
        <td>200.00</td>
        <td>25.00</td>
        <td>25.00</td>
        <td>75.00</td>
        <td>2,5000</td>
        <td>200.00</td>
        <td>10.50</td>
  
        <td scope="col">
                  <button type="button" class="btn btn-warning" id="modifica" onclick="modifica()">Modifica</button>
        </td> 
        <td scope="col">
         <button type="button" class="btn btn-danger"  id="elimina" onclick="elimina()">elimina</button>
         </td> 
  

       
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>Jacob</td>
        <td>54F455</td>
        <td>5478547878</td>
        <td>150.00</td>
        <td>200.00</td>
        <td>25.00</td>
        <td>25.00</td>
        <td>75.00</td>
        <td>2,5000</td>
        <td>200.00</td>
        <td>10.50</td>
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

<script src="../scritp/log.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
</body>
</html>