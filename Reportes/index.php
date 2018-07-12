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

    <!-- Bootstrap CSS, Font Awesome y Tempus Dominus CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="estilos.css">

    <title>Reportes</title>
</head>
<body>
    
    

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Generador de reportes de empleados</h1>  
            </div>
        </div>

        <div class="row">
            <form action="#" method="POST" style="width:100%;" autocomplete="off">
                <div class="row">
                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 padding">
                        <select class="form-control form-control-sm" id="slct-consultas">
                            <option value="1">Viajes del día</option>
                            <option value="2">Viajes del día (rango de fechas)</option>
                            <option value="3">Viajes de algún chofer</option>
                            <option value="4">Servicios cancelados</option>
                            <option value="5">Choferes</option>
                            <option value="6">Choferes activos</option>
                            <option value="7">Choferes en servicio</option>
                            <option value="8">Choferes sin foto</option>
                            <option value="9">Choferes con más viajes cancelados</option>
                            <option value="10">Choferes por número de carro</option>
                            <option value="11">Total de viajes de choferes</option>
                            <option value="12">Ubicación por número de taxi</option>
                            <option value="13">Actualizados</option>
                            <option value="15">No actualizados (Activos)</option>
                            <option value="14">Números de taxis</option>
                            <option value="16">Activos y su última actualización</option>
                        </select>
                    </div>

                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 bloqueo servicios" id="dtp-fecha">
                        <div class="form-group">
                            <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input bloqueo form-control-sm" id="dtpicker-1" data-toggle="datetimepicker" data-target="#datetimepicker1" placeholder="Fecha" required/>
                                <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 slct-rangofecha bloqueo servicios" id="dtp-rangofecha1">
                        <div class="form-group">
                            <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input bloqueo form-control-sm" id="dtpicker-rang1" data-target="#datetimepicker2" data-toggle="datetimepicker" placeholder="Inicio"/>
                                <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 slct-rangofecha bloqueo servicios" id="dtp-rangofecha2">
                        <div class="form-group">
                            <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input bloqueo form-control-sm" id="dtpicker-rang2" data-target="#datetimepicker3" data-toggle="datetimepicker" placeholder="Fin"/>
                                <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 padding servicios" id="slct-filtrochofer">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <select class="form-control form-control-sm" >
                                    <option value="1">Id</option>
                                    <option value="2">Taxi</option>
                                    <option value="3">Nombre</option>
                                </select>
                            </div>
                            
                            <input type="text" class="form-control form-control-sm">
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 padding servicios" id="slct-tiposervicio">
                        <select class="form-control form-control-sm">
                            <option value="1">Todos</option>
                            <option value="2">Solo App</option>
                            <option value="3">Cliente de calle</option>
                        </select>
                    </div>

                    <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1">
                        <input type="submit" class="btn btn-sm btn-warning" id="btn-consult" value="Consultar"/>
                    </div>
                </div>
            </form>
        </div>

            <!-- TABLA DE TUPLAS -->
        <div class="row" style="border:3px red solid">
            <div class="col-xs-12 col-lg-12">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <!--  Generar nombre de columnas  -->
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <!-- jQuery, Popper y Bootstrap -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    
    <!-- Moment, Tempus Dominus y Tether (Para los DateTimePicker)-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js"></script>

    <script src="scripts.js"></script>
</body>
</html>