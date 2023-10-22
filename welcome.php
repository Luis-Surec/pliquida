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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="shortcut icon" href="../img/solicitud.png">

    <title>LIQUIDACIONES</title>
</head>

<body>




    <!-- acá empieza el encabezado-->

    <div class="">

        <?php
include("../pliquida/script/head.php")
?>
    </div>



    <!--nuevo liquidaciones-->
    <div>

        <table class="">
            <thead>
                <tr> </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><img src="img/ing_sol.png"></th>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">LIQUIDACIONES</button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li>
                                    <table class="table" style="height: 25%;">
                                        <thead>
                                            <tr> </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><img src="img/ing_sol.png"></th>
                                                <td><a href="pages/liq/liquidacion.php">SOLICITUD DE LIQUIDACION</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><img src="img/rev_sol.png"></th>
                                                <td><a href="../../pages/liq/liquidacionAutoriza.php">SOLCITUDES
                                                        AUTORIZADAS</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><img src="img/emit_sol.png"></th>
                                                <td colspan="2"><a href="#">ASIGNACION DE CHEQUES</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><img src="img/emit_sol.png"></th>
                                                <td colspan="2"><a href="#">REPORTES DE LIQUIDACIONES</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <!--MENU reportes-->



                <tr>
                    <th scope="row"><img src="img/rep_sol.jpg"></th>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">REPORTES</button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li>
                                    <table class="table" style="height: 25%;">
                                        <thead>
                                            <tr> </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><img src="img/ctaBancaria.jpg"></th>
                                                <td><a href="../../pages/config/razonSocial.php">RAZON SOCIAL</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><img src="img/rev_sol.png"></th>
                                                <td><a href="../../pages/liq/liquidacionAutoriza.php">SOLCITUDES
                                                        AUTORIZADAS</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><img src="img/emit_sol.png"></th>
                                                <td colspan="2"><a href="#">ASIGNACION DE CHEQUES</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><img src="img/emit_sol.png"></th>
                                                <td colspan="2"><a href="#">REPORTES DE LIQUIDACIONES</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>




                <!--MENU configuracion-->


                <tr>
                    <th scope="row"><img src="img/engranaje.png"></th>
                    <td>

                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">CONFIGURACIONES</button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li>
                                    <table class="table" style="height: 25%;">
                                        <thead>
                                            <tr> </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><img src="img/ctaBancaria.jpg"></th>
                                                <td><a href="pages/config/razonSocial.php">RAZON SOCIAL</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><img src="img/docIva.jpg"></th>
                                                <td><a href="pages/config/empresas.php">EMPRESAS</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><img src="img/ctasContables.png"></th>
                                                <td><a href="pages/config/cuentasContables.php"> CUENTAS
                                                        CONTABLES</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><img src="img/departamentos.png"></th>
                                                <td><a href="pages/config/departamento.php "> DEPARTAMENTOS</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><img src="img/referencias.png"></th>
                                                <td><a href="page/config/referencias.php"> REFERENCIAS</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><img src="img/proveedores.jpg"></th>
                                                <td><a href="pages/config/proveedores.php">PROVEEDORES</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><img src="img/referencias.png"></th>
                                                <td><a href="pages/config/referencias.php">REFERENCIAS</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><img src="img/usuario.png"></th>
                                                <td><a href="pages/config/usuarios.php">USUARIO</a></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

</body>

<footer>
    <?php
include("../pliquida/script/footer.php")
?>
</footer>

</html>

<?php ob_end_flush(); ?>