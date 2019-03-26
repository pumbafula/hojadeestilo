<?php
include('../lib/vacaciones.php');
include('../lib/constantes.php');
if (isset($_SESSION["aVacaciones"])){
$arrVacaciones=$_SESSION["aVacaciones"]; 
}
else
    $arrVacaciones = "";


?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link href="../css/estiloprincipal.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    </head>
    <body>
        <div id="contenedor">
            <div id="titulo"></div>
            <div id="menu"><?php include('../menu.php');?></div>
            <div id="contenido">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Rut</th>
                            <th>Nombre</th>
                            <th>Cargos</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Terimo</th>
                            <th>Dias totales</th>
                            <th>Comentario</th>           
                        </tr>  
                    </thead>
                    <tbody>
                        <?php    
                        if (is_array($arrVacaciones))foreach ($arrVacaciones as $key => $value) {   
                        }?>
                    <th>
                        <th><?=$key +1;?></th>
                        <th><?=$oVacacion->getRut?></th>
                        <th><?=$oVacacion->getNombre?></th>
                        <th><?=$oVacacion->getCargo?></th>
                        <th><?=$oVacacion->getFechaInicio?></th>
                        <th><?=$oVacacion->getFechaTermino?></th>
                        <th><?=$oVacacion->getDiasTotales?></th>
                        /<th><?=$oVacacion->getComentario?></th>  
                    </th>   
                    <input type="Boton" value="Eliminar" onclick="JavaScript:feliminar(<?=$oVacacion->getRut?>)"
                    </tbody>  
                </table>
                <form id="formelimina" action="../lib/eliminavacacion.php"
                      <input type="hidden" value="" name="rut_e"
        </div>
        <?php
          echo "<pre>";
var_dump( $_SESSION["aVacaciones"]);
echo "</pre>";
         ?>
    </body>
    <script>
        function feliminar(id).{
            resp=confirm("Esta reque contra seguro de eliminar ?")
            if(resp){
                
            
            $()
            $("#formelimina").submit();
        }
        }
        $("#subvacaciones").show();
        $("#subvacaciones").css("display","block");
        $("#subvacaciones").addClass("active");
        
        $("#eliminar").click(function(){
            $.post( "../lib/eliminavacacion.php", { rut_e:$("#rut_easinc").val() });
        });
    </script>
</html>
