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
<!doctype html>
<html lang="es">
<head>

<meta charset="utf-8">
<title>Reportes</title>
<meta name="keywords" content="">
<meta name="description" content="">
<!-- Meta Mobil
================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<link href="css/style.css" rel="stylesheet">
</head>

<body>
	<div class="container">
    <div class="row padding">
      <div class="col-md-12">
        <h1>Generador de reportes de empleados</h1>  
      </div>
    </div>
        
    <div class="row">
      <!-- Obtener nombre de columnas -->
      <div class="form-group">
        <h5>Campos:</h5>
        <table class="table">
          <tr>
            <td>
              <select class="form-control" id="txtCampos">
                <?php
                  $query = $mysqli -> query ("SELECT COLUMN_NAME AS CNOMBRE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'walker'");
                  while ($valores = mysqli_fetch_array($query)) {
                    echo '<option value="'.$valores[CNOMBRE].'">'.$valores[CNOMBRE].'</option>';
                  }
                ?>
              </select>
            </td>

            <td><button type="button" class="btn btn-success" onclick="Agregar()">Agregar</button></td>
            <td><button type="button" class="btn btn-warning">Consultar</button></td>
            <td> <input type="submit" name="create_pdf" class="btn btn-danger pull-right" value="Generar"></td>
          </tr>
        </table>
      </div>
      
      <table class="table" id="a-consultar">
        <tbody>
          <tr>
            <td>0</td>
          </tr>
        </tbody>
      <!--AQUI SE GENERA LO QUE SE CONSULTARA A LA BD-->

      </table>
      <!-- Tabla de tuplas -->
      <table class="table table-hover table-striped">
        <thead>
          <tr>
            <!--  Generar nombre de columnas  -->
          </tr>
        </thead>
      </table>
      <div class="col-md-12">
        <form method="post">
          <input type="hidden" name="reporte_name" value="<?php echo $h1; ?>">
         
        </form>
      </div>
    </div>
    <script type="text/javascript">
      function createCell(cell, text, style) {
        var div = document.createElement('div'), // create DIV element
            txt = document.createTextNode(text); // create text node
        div.appendChild(txt);                    // append text node to the DIV
        div.setAttribute('class', style);        // set DIV class attribute
        div.setAttribute('className', style);    // set DIV class attribute for IE (?!)
        cell.appendChild(div);                   // append DIV to the table cell
      }

      function Agregar() {
        var campo = document.getElementById('txtCampos').value;
        var tbl = document.getElementById('a-consultar'), // table reference
            i;
        // open loop for each row and append cell
        for (i = 0; i < tbl.rows.length; i++) {
            createCell(tbl.rows[i].insertCell(tbl.rows[i].cells.length), campo);
        }
      }
    </script>
</body>
</html>
