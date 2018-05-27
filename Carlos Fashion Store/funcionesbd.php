<?php
    #Abrir y cerrar conexión
    function Conectar(){
        $conexion = mysqli_connect("localhost","id2307529_carlosfashionstore","carlosfashionstore");
        return $conexion;
    }

    function Desconectar($conexion){
        mysqli_close($conexion);
    }

    #INSERTAR
    function Insertar($query){

        $link = Conectar();
        $rs = mysql_query($query);
        if($rs == false) {
            echo '<p>Error al insertar los campos en la tabla.</p>';
        }else{
            echo '<p>Los datos se han insertado correctamente.</p>';
        }
        Desconectar($link);
    }

    #Alta Baja y Consulta a MySql
    function Insertar($query){

        $link = Conectar();

        $rs = mysql_query($query);
        if($rs == false){
            echo '<p>Error al modificar los campos en la tabla.</p>';
        }
        else{
            echo '<p>Los datos se han modificado correctamente.</p>';
        }
        Desconectar($link);
    }
?>