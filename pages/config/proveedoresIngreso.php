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



<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }
    
    // Close connection
    $mysqli->close();
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
                <input type="text" id="nitProv" class="form-control" placeholder="Ingrese nit">
              </div>

              <div class="mb-1">
                <label for="prov" class="form-label">Nomgre Poveedor</label>
                <input type="text" id="nombreP" class="form-control" placeholder="Ingrese Proveedor">
              </div>

              <div class="mb-1">
                <label for="prov" class="form-label">Direccion Proveedor</label>
                <input type="text" id="direccionP" class="form-control" placeholder="Ingrese Direccion">
              </div>
              <div class="mb-1">
                <label for="prov" class="form-label">Télefono fijo</label>
                <input type="text" id="telefono1" class="form-control" placeholder="Telefono fijo">
              </div>
              <div class="mb-1">
                <label for="prov" class="form-label">Télefono cel</label>
                <input type="text" id="telefono2" class="form-control" placeholder="Telefono cel">
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