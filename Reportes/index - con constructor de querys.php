<?php 
    require_once('conexion/conexion.php');	
	$usuario = 'SELECT first_name, last_name, car_model, car_number FROM `walker` WHERE car_number = 233';	
	$usuarios=$mysqli->query($usuario);
	
    if(isset($_POST['create_pdf'])){
        require_once('tcpdf/tcpdf.php');
    
        $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
    
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('');
        $pdf->SetTitle($_POST['reporte_name']);
        
        $pdf->setPrintHeader(false); 
        $pdf->setPrintFooter(false);
        $pdf->SetMargins(20, 20, 20, false); 
        $pdf->SetAutoPageBreak(true, 20); 
        $pdf->SetFont('Helvetica', '', 10);
        $pdf->addPage();

        $content = '';
    
        $content .= '
        <div class="row">
            <div class="col-md-12">
                <h1 style="text-align:center;">'.$_POST['reporte_name'].'</h1>
            
                <table border="1" cellpadding="5">
                <thead>
                    <tr>
                        <th>DNI</th>
                        <th>A. PATERNO</th>
                        <th>A. MATERNO</th>
                        <th>NOMBRES</th>
                        <th>AREA</th>
                        <th>SUELDO</th>
                    </tr>
                </thead>
        ';
    
    
        while ($user=$usuarios->fetch_assoc()) { 
            if($user['activo']=='A'){  $color= '#f5f5f5'; }else{ $color= '#fbb2b2'; }
            
            $content .= '
                <tr bgcolor="'.$color.'">
                    <td>'.$user['dni'].'</td>
                    <td>'.$user['paterno'].'</td>
                    <td>'.$user['materno'].'</td>
                    <td>'.$user['nombres'].'</td>
                    <td>'.$user['area'].'</td>
                    <td>S/. '.$user['sueldo'].'</td>
                </tr>
            ';
        }
    
        $content .= '</table>';
        
        $content .= '
        <div class="row padding">
            <div class="col-md-12" style="text-align:center;">
                <span>Pdf Creator </span><a href="http://www.redecodifica.com">By Miguel Angel</a>
            </div>
        </div>
            
        ';
        
        $pdf->writeHTML($content, true, 0, true, 0);

        $pdf->lastPage();
        $pdf->output('Reporte.pdf', 'I');
    }
?>
<!-- HTML --> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Meta Mobil-->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <meta name="keywords" content="">
    <meta name="description" content="">

    </script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <script src="scripts.js"></script>
    <link rel="stylesheet" href="estilos.css">

    <title>Reportes</title>
</head>
<body onload="LlenarArrays();">
    <div class="container">
        <div class="row padding">
            <div class="col-md-12">
                <h1>Generador de reportes de empleados</h1>  
            </div>
        </div>

        <div class="row">
            <!-- Obtener nombre de columnas -->
            <table class="table table-responsive" id="tablabotones">
                <tbody>
                    <tr>
                        <td><button type="button" class="btn btn-success" onclick="Agregar()">Agregar</button></td>
                        <td><button type="button" class="btn btn-danger" onclick="EliminarCol()">Eliminar</button></td>
                        <td><button type="button" class="btn btn-warning" onclick="Consultar()">Consultar</button></td>
                        <td><input type="submit" name="create_pdf" class="btn btn-primary" value="Generar"></td>
                    </tr>
                </tbody>
            </table>

            <table class="table table-responsive tablacenter" id="tbl-generarquery">
                <tbody>
                    <tr>
                        <td>
                            <select class="form-control" id="txtCampos">
                                <option value="*">Todo...</option>
                                <!-- Se ingresan options con un arreglo -->
                            </select>
                        </td>
                        <td>
                            <div class="btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-outline-dark btn-sm">
                                    <input type="checkbox" onchange=""> Where
                                </label>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                
            </div>

            <!--TABLA DE DATOS A CONSULTAR-->
            <table class="table table-responsive" id="a-consultar">
                <tbody>
                    <tr>
                    </tr>
                </tbody>
            </table>

            <!-- TABLA DE TUPLAS -->
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <!--  Generar nombre de columnas  -->
                    </tr>
                </thead>
            </table>
        </div>
        <button type="button" class="btn btn-success" onclick="GenerarSelect()">Agregar Select</button>
    </div>



    <!--SCRIPTS-->
    <script type="text/javascript">
        function LlenarArrays() {
            <?php
                $query = $mysqli -> query ("SELECT COLUMN_NAME AS CNOMBRE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'walker'");
                while ($valores = mysqli_fetch_array($query)) {
                    ?>
                    ccampos.push("<?php  echo "$valores[CNOMBRE]";  ?>"); // Cargamos las tuplas de la consulta al arreglo Consulta
                    <?php
                }
            ?>
            LlenarSelect();
            nom_campos = [
                "Id",
                "Nombre",
                "Apellido",
                "Teléfono",
                "Correo electrónico",
                "Contraseña",
                "Imagen",
                "Bio",
                "Dirección",
                "Estado",
                "País",
                "Código postal",
                "Token de dispositivo",
                "Tipo de dispositivo",
                "Iniciar sesión por",
                "Identificación única social",
                "Simbólico",
                "Activación de correo electrónico",
                "Vencimiento del token",
                "Creado en",
                "Actualizado en",
                "Está activo",
                "Está disponible",
                "Latitud",
                "Longitud",
                "Esta aprobado",
                "Tipo",
                "Identificación del comerciante",
                "Id de la cuenta",
                "Últimos 4",
                "Código de activación",
                "Zona horaria",
                "Eliminado en",
                "Latitud antigua",
                "Longitud antigua",
                "Cojinete",
                "Modelo de auto",
                "Número de coche",
                "Tarifa",
                "Tasa de conteo",
                "En la zona",
                "Viejo en área",
                "Declinados",
                "No. Taxi",
                "Versión de la aplicación",
                "Ult. actualización"
            ];
        }
    </script>
</body>
</html>