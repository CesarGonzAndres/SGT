<?php 
session_start();
$_SESSION["nb_usuario"];
$nb_usuario = $_SESSION["nb_usuario"];
?>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>.: SGT - PDVSA, S.A :.</title>
    <link rel="stylesheet" type="text/css" href="../../librerias/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/home.css">
    <script src="../../librerias/jquery/jquery.min.js"></script>
    <script src="../../librerias/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../librerias/jquery/jquery-ui.css">
    <script src="../../librerias/jquery/jquery-1.12.4.js"></script>
    <script src="../../librerias/jquery/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#datepicker" ).datepicker();
        });
    </script>
    <style>

        table {
            font-family: Verdana, Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 70%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>       
    <div style="float:left;"><h4>Sistema de Gestión de Taladro (SGT)</h4></div> <div style="float:right;"><img src="../../imagenes/membrete.png"></div><div style="clear: left;"/></h4><p><b>Analista PPyG: </b>'; ?>
    <?php
    echo $nb_usuario; ?>
    </p><body> 

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Carga de Equipos en Mantenimiento</a>
            </div>
            <ul class="nav navbar-nav">

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="php/perfil.php"><span class="glyphicon glyphicon-user"></span>Perfil</a></li>

                <li><a href="../../home.php"><span class="glyphicon glyphicon-log-in"></span> Inicio</a></li>
            </ul>
        </div>
    </nav>
    <style type="text/css">
        form p {
            display: inline;
        }
    </style>        
    <div class="container">

        <form action="" method="POST">';?><?php
//AQUI HAGO UN PEQUEÑO QUERY PARA TRAERME LOS NOMBRES DE LOS EQUIPOS Y ASI PODER DECIRLE AL TABLE QUE QUIERO LLENAR EN LA TABLA SEMANA PLAN MANTENIMIENTO
            include "../../php/conexion.php";

            $result= mysql_query("SELECT
                *  FROM j101t_ft_equipo", $con);
                echo '<select name="select" style="padding-bottom: 15px;">';
                while($row=mysql_fetch_array($result)) { 
                    echo '<option value="' . htmlspecialchars($row['cod_equipo']) . '">' 
                    . htmlspecialchars($row['cod_equipo']) . '</option>';
                } echo '</select>';

                echo '
                <table>
                  <tr>
                    <th>N°</th>
                    <th>Taladro</th>
                    <th>HP</th>
                    <th>Division</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>GP-21</td>
                    <td>2000</td>
                    <td>Lago</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>PDV-44</td>
                    <td>2000</td>
                    <td>Sur del Lago Trujillo</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>LV-408</td>
                    <td>800</td>
                    <td>Lago</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>PDV-37</td>
                    <td>550</td>
                    <td>Costa Oriental del Lago</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>PDV-52</td>
                    <td>2.000</td>
                    <td>Costa Occidental del Lago</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>PDV-56</td>
                    <td>2.000</td>
                    <td>Costa Occidental del Lago</td>
                </tr>
            </table>


            <button style="margin-top: 15px;" type="submit" class="btn btn-default" style="margin-right: 20px;" >Consultar</button>
        </form>
    </div>';

    include '../../footer.php';
    ?>






