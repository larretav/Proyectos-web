<!DOCTYPE html>
<html lang="es"><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Calendario</title>
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://citas.montsoft.com.mx/css/calendar.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="http://citas.montsoft.com.mx/css/bootstrap.min.css">
        <link rel="icon" href="../icono.png">

        <script type="text/javascript" src="http://citas.montsoft.com.mx/js/es-ES.js"></script>
        <script src="http://citas.montsoft.com.mx/js/jquery.min.js"></script>
        <script src="http://citas.montsoft.com.mx/js/moment.js"></script>
        <script src="http://citas.montsoft.com.mx/js/bootstrap.min.js"></script>
        <script src="http://citas.montsoft.com.mx/js/bootstrap-datetimepicker.js"></script>
        <link rel="stylesheet" href="http://citas.montsoft.com.mx/css/bootstrap-datetimepicker.min.css">
       <script src="http://citas.montsoft.com.mx/js/bootstrap-datetimepicker.es.js"></script>
    </head>


<body style="">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../index.php" style="color: white;margin-bottom: 10px;"><img src="../img/logo.png" width="200px" alt=""></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
     <ul class="nav navbar-nav navbar-right">
      <li><a href="registro.php" style="color: white;">Registrar paciente <span class="glyphicon glyphicon-edit"></span></a></li>
       <li><a href="index.php" style="color: white;">Buscar paciente <span class="glyphicon glyphicon-search"></span></a></li>
       <li><a href="../cerrar.php" style="color: white;">Cerrar Sesion <span class="glyphicon glyphicon-remove-sign"></span></a></li>
     </ul>
    </div>
  </div>
</nav>

        <div class="container">

                <div class="row">
                        <div class="page-header"><h2>Junio 2018</h2></div>
                                <div class="pull-left form-inline"><br>
                                        <div class="btn-group">
                                            <button class="btn btn-primary" data-calendar-nav="prev">&lt;&lt; Anterior</button>
                                            <button class="btn" data-calendar-nav="today">Hoy</button>
                                            <button class="btn btn-primary" data-calendar-nav="next">Siguiente &gt;&gt;</button>
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-warning" data-calendar-view="year">Año</button>
                                            <button class="btn btn-warning active" data-calendar-view="month">Mes</button>
                                            <button class="btn btn-warning" data-calendar-view="week">Semana</button>
                                            <button class="btn btn-warning" data-calendar-view="day">Dia</button>
                                        </div>

                                </div>
                                    <div class="pull-right form-inline"><br>
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#add_evento">Añadir nueva cita <span class="glyphicon glyphicon-edit"></span></button>
                                    </div>

                </div><hr>
                
                <div class="row" style="color: black;">
                        <div id="calendar" class="cal-context" style="width: 100%;"><div class="cal-row-fluid cal-row-head">
	
		<div class="cal-cell1">Lunes</div>
	
		<div class="cal-cell1">Martes</div>
	
		<div class="cal-cell1">Miércoles</div>
	
		<div class="cal-cell1">Jueves</div>
	
		<div class="cal-cell1">Viernes</div>
	
		<div class="cal-cell1">Sábado</div>
	
		<div class="cal-cell1">Domingo</div>
	
</div>
<div class="cal-month-box">
	
		
		<div class="cal-row-fluid cal-before-eventlist">
			<div class="cal-cell1 cal-cell" data-cal-row="-day1"><div class="cal-month-day cal-day-outmonth cal-month-first-row">
	<span class="pull-right" data-cal-date="2018-05-28" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">28</span>
	
</div>
</div>
			<div class="cal-cell1 cal-cell" data-cal-row="-day2"><div class="cal-month-day cal-day-outmonth cal-month-first-row">
	<span class="pull-right" data-cal-date="2018-05-29" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">29</span>
	
</div>
</div>
			<div class="cal-cell1 cal-cell" data-cal-row="-day3"><div class="cal-month-day cal-day-outmonth cal-month-first-row">
	<span class="pull-right" data-cal-date="2018-05-30" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">30</span>
	
</div>
</div>
			<div class="cal-cell1 cal-cell" data-cal-row="-day4"><div class="cal-month-day cal-day-outmonth cal-month-first-row">
	<span class="pull-right" data-cal-date="2018-05-31" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">31</span>
	
</div>
</div>
			<div class="cal-cell1 cal-cell" data-cal-row="-day5"><div class="cal-month-day cal-day-inmonth">
	<span class="pull-right" data-cal-date="2018-06-01" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">1</span>
	
</div>
</div>
			<div class="cal-cell1 cal-cell" data-cal-row="-day6"><div class="cal-month-day cal-day-inmonth cal-day-weekend">
	<span class="pull-right" data-cal-date="2018-06-02" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">2</span>
	
</div>
</div>
			<div class="cal-cell1 cal-cell" data-cal-row="-day7"><div class="cal-month-day cal-day-inmonth cal-day-weekend">
	<span class="pull-right" data-cal-date="2018-06-03" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">3</span>
	
</div>
</div>
		</div>
	
		
		<div class="cal-row-fluid cal-before-eventlist">
			<div class="cal-cell1 cal-cell" data-cal-row="-day1"><div class="cal-month-day cal-day-inmonth">
	<span class="pull-right" data-cal-date="2018-06-04" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">4</span>
	
</div>
</div>
			<div class="cal-cell1 cal-cell" data-cal-row="-day2"><div class="cal-month-day cal-day-inmonth">
	<span class="pull-right" data-cal-date="2018-06-05" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">5</span>
	
</div>
</div>
			<div class="cal-cell1 cal-cell" data-cal-row="-day3"><div class="cal-month-day cal-day-inmonth">
	<span class="pull-right" data-cal-date="2018-06-06" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">6</span>
	
</div>
</div>
			<div class="cal-cell1 cal-cell" data-cal-row="-day4"><div class="cal-month-day cal-day-inmonth">
	<span class="pull-right" data-cal-date="2018-06-07" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">7</span>
	
</div>
</div>
			<div class="cal-cell1 cal-cell" data-cal-row="-day5"><div class="cal-month-day cal-day-inmonth">
	<span class="pull-right" data-cal-date="2018-06-08" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">8</span>
	
</div>
</div>
			<div class="cal-cell1 cal-cell" data-cal-row="-day6"><div class="cal-month-day cal-day-inmonth cal-day-weekend">
	<span class="pull-right" data-cal-date="2018-06-09" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">9</span>
	
</div>
</div>
			<div class="cal-cell1 cal-cell" data-cal-row="-day7"><div class="cal-month-day cal-day-inmonth cal-day-weekend">
	<span class="pull-right" data-cal-date="2018-06-10" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">10</span>
	
</div>
</div>
		</div>
	
		
		<div class="cal-row-fluid cal-before-eventlist">
			<div class="cal-cell1 cal-cell" data-cal-row="-day1"><div class="cal-month-day cal-day-inmonth">
	<span class="pull-right" data-cal-date="2018-06-11" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">11</span>
	
</div>
</div>
			<div class="cal-cell1 cal-cell" data-cal-row="-day2"><div class="cal-month-day cal-day-inmonth">
	<span class="pull-right" data-cal-date="2018-06-12" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">12</span>
	
</div>
</div>
			<div class="cal-cell1 cal-cell" data-cal-row="-day3"><div class="cal-month-day cal-day-inmonth">
	<span class="pull-right" data-cal-date="2018-06-13" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">13</span>
	
</div>
</div>
			<div class="cal-cell1 cal-cell" data-cal-row="-day4"><div class="cal-month-day cal-day-inmonth cal-day-today">
	<span class="pull-right" data-cal-date="2018-06-14" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">14</span>
	
		<div class="events-list" data-cal-start="1528956000000" data-cal-end="1529042400000">
			
				<a href="http://citas.montsoft.com.mx/descripcion_evento.php?id=726" data-event-id="726" data-event-class="event-important" class="pull-left event event-important" data-toggle="tooltip" title="" data-original-title="Si"></a>
			
				<a href="http://citas.montsoft.com.mx/descripcion_evento.php?id=728" data-event-id="728" data-event-class="event-info" class="pull-left event event-info" data-toggle="tooltip" title="" data-original-title="Unas"></a>
			
		</div>
	
</div>
</div>
			<div class="cal-cell1 cal-cell" data-cal-row="-day5"><div class="cal-month-day cal-day-inmonth">
	<span class="pull-right" data-cal-date="2018-06-15" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">15</span>
	
		<div class="events-list" data-cal-start="1529042400000" data-cal-end="1529128800000">
			
				<a href="http://citas.montsoft.com.mx/descripcion_evento.php?id=726" data-event-id="726" data-event-class="event-important" class="pull-left event event-important" data-toggle="tooltip" title="" data-original-title="Si"></a>
			
				<a href="http://citas.montsoft.com.mx/descripcion_evento.php?id=729" data-event-id="729" data-event-class="event-special" class="pull-left event event-special" data-toggle="tooltip" title="" data-original-title="fsdfsdf"></a>
			
		</div>
	
</div>
</div>
			<div class="cal-cell1 cal-cell" data-cal-row="-day6"><div class="cal-month-day cal-day-inmonth cal-day-weekend">
	<span class="pull-right" data-cal-date="2018-06-16" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">16</span>
	
		<div class="events-list" data-cal-start="1529128800000" data-cal-end="1529215200000">
			
				<a href="http://citas.montsoft.com.mx/descripcion_evento.php?id=726" data-event-id="726" data-event-class="event-important" class="pull-left event event-important" data-toggle="tooltip" title="" data-original-title="Si"></a>
			
		</div>
	
</div>
</div>
			<div class="cal-cell1 cal-cell" data-cal-row="-day7"><div class="cal-month-day cal-day-inmonth cal-day-weekend">
	<span class="pull-right" data-cal-date="2018-06-17" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">17</span>
	
		<div class="events-list" data-cal-start="1529215200000" data-cal-end="1529301600000">
			
				<a href="http://citas.montsoft.com.mx/descripcion_evento.php?id=726" data-event-id="726" data-event-class="event-important" class="pull-left event event-important" data-toggle="tooltip" title="" data-original-title="Si"></a>
			
		</div>
	
</div>
</div>
		</div>
	
		
		<div class="cal-row-fluid cal-before-eventlist">
			<div class="cal-cell1 cal-cell" data-cal-row="-day1"><div class="cal-month-day cal-day-inmonth">
	<span class="pull-right" data-cal-date="2018-06-18" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">18</span>
	
		<div class="events-list" data-cal-start="1529301600000" data-cal-end="1529388000000">
			
				<a href="http://citas.montsoft.com.mx/descripcion_evento.php?id=726" data-event-id="726" data-event-class="event-important" class="pull-left event event-important" data-toggle="tooltip" title="" data-original-title="Si"></a>
			
		</div>
	
</div>
</div>
			<div class="cal-cell1 cal-cell" data-cal-row="-day2"><div class="cal-month-day cal-day-inmonth">
	<span class="pull-right" data-cal-date="2018-06-19" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">19</span>
	
		<div class="events-list" data-cal-start="1529388000000" data-cal-end="1529474400000">
			
				<a href="http://citas.montsoft.com.mx/descripcion_evento.php?id=726" data-event-id="726" data-event-class="event-important" class="pull-left event event-important" data-toggle="tooltip" title="" data-original-title="Si"></a>
			
				<a href="http://citas.montsoft.com.mx/descripcion_evento.php?id=731" data-event-id="731" data-event-class="event-important" class="pull-left event event-important" data-toggle="tooltip" title="" data-original-title="+6545"></a>
			
		</div>
	
</div>
</div>
			<div class="cal-cell1 cal-cell" data-cal-row="-day3"><div class="cal-month-day cal-day-inmonth">
	<span class="pull-right" data-cal-date="2018-06-20" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">20</span>
	
		<div class="events-list" data-cal-start="1529474400000" data-cal-end="1529560800000">
			
				<a href="http://citas.montsoft.com.mx/descripcion_evento.php?id=726" data-event-id="726" data-event-class="event-important" class="pull-left event event-important" data-toggle="tooltip" title="" data-original-title="Si"></a>
			
				<a href="http://citas.montsoft.com.mx/descripcion_evento.php?id=731" data-event-id="731" data-event-class="event-important" class="pull-left event event-important" data-toggle="tooltip" title="" data-original-title="+6545"></a>
			
		</div>
	
</div>
</div>
			<div class="cal-cell1 cal-cell" data-cal-row="-day4"><div class="cal-month-day cal-day-inmonth">
	<span class="pull-right" data-cal-date="2018-06-21" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">21</span>
	
		<div class="events-list" data-cal-start="1529560800000" data-cal-end="1529647200000">
			
				<a href="http://citas.montsoft.com.mx/descripcion_evento.php?id=726" data-event-id="726" data-event-class="event-important" class="pull-left event event-important" data-toggle="tooltip" title="" data-original-title="Si"></a>
			
				<a href="http://citas.montsoft.com.mx/descripcion_evento.php?id=731" data-event-id="731" data-event-class="event-important" class="pull-left event event-important" data-toggle="tooltip" title="" data-original-title="+6545"></a>
			
		</div>
	
</div>
</div>
			<div class="cal-cell1 cal-cell" data-cal-row="-day5"><div class="cal-month-day cal-day-inmonth">
	<span class="pull-right" data-cal-date="2018-06-22" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">22</span>
	
		<div class="events-list" data-cal-start="1529647200000" data-cal-end="1529733600000">
			
				<a href="http://citas.montsoft.com.mx/descripcion_evento.php?id=726" data-event-id="726" data-event-class="event-important" class="pull-left event event-important" data-toggle="tooltip" title="" data-original-title="Si"></a>
			
				<a href="http://citas.montsoft.com.mx/descripcion_evento.php?id=731" data-event-id="731" data-event-class="event-important" class="pull-left event event-important" data-toggle="tooltip" title="" data-original-title="+6545"></a>
			
				<a href="http://citas.montsoft.com.mx/descripcion_evento.php?id=727" data-event-id="727" data-event-class="event-info" class="pull-left event event-info" data-toggle="tooltip" title="" data-original-title="cita"></a>
			
		</div>
	
</div>
</div>
			<div class="cal-cell1 cal-cell" data-cal-row="-day6"><div class="cal-month-day cal-day-inmonth cal-day-weekend">
	<span class="pull-right" data-cal-date="2018-06-23" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">23</span>
	
		<div class="events-list" data-cal-start="1529733600000" data-cal-end="1529820000000">
			
				<a href="http://citas.montsoft.com.mx/descripcion_evento.php?id=726" data-event-id="726" data-event-class="event-important" class="pull-left event event-important" data-toggle="tooltip" title="" data-original-title="Si"></a>
			
				<a href="http://citas.montsoft.com.mx/descripcion_evento.php?id=731" data-event-id="731" data-event-class="event-important" class="pull-left event event-important" data-toggle="tooltip" title="" data-original-title="+6545"></a>
			
		</div>
	
</div>
</div>
			<div class="cal-cell1 cal-cell" data-cal-row="-day7"><div class="cal-month-day cal-day-inmonth cal-day-weekend">
	<span class="pull-right" data-cal-date="2018-06-24" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">24</span>
	
		<div class="events-list" data-cal-start="1529820000000" data-cal-end="1529906400000">
			
				<a href="http://citas.montsoft.com.mx/descripcion_evento.php?id=731" data-event-id="731" data-event-class="event-important" class="pull-left event event-important" data-toggle="tooltip" title="" data-original-title="+6545"></a>
			
		</div>
	
</div>
</div>
		</div>
	
		
		<div class="cal-row-fluid cal-before-eventlist">
			<div class="cal-cell1 cal-cell" data-cal-row="-day1"><div class="cal-month-day cal-day-inmonth">
	<span class="pull-right" data-cal-date="2018-06-25" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">25</span>
	
		<div class="events-list" data-cal-start="1529906400000" data-cal-end="1529992800000">
			
				<a href="http://citas.montsoft.com.mx/descripcion_evento.php?id=731" data-event-id="731" data-event-class="event-important" class="pull-left event event-important" data-toggle="tooltip" title="" data-original-title="+6545"></a>
			
		</div>
	
</div>
</div>
			<div class="cal-cell1 cal-cell" data-cal-row="-day2"><div class="cal-month-day cal-day-inmonth">
	<span class="pull-right" data-cal-date="2018-06-26" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">26</span>
	
		<div class="events-list" data-cal-start="1529992800000" data-cal-end="1530079200000">
			
				<a href="http://citas.montsoft.com.mx/descripcion_evento.php?id=731" data-event-id="731" data-event-class="event-important" class="pull-left event event-important" data-toggle="tooltip" title="" data-original-title="+6545"></a>
			
		</div>
	
</div>
</div>
			<div class="cal-cell1 cal-cell" data-cal-row="-day3"><div class="cal-month-day cal-day-inmonth">
	<span class="pull-right" data-cal-date="2018-06-27" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">27</span>
	
		<div class="events-list" data-cal-start="1530079200000" data-cal-end="1530165600000">
			
				<a href="http://citas.montsoft.com.mx/descripcion_evento.php?id=731" data-event-id="731" data-event-class="event-important" class="pull-left event event-important" data-toggle="tooltip" title="" data-original-title="+6545"></a>
			
		</div>
	
</div>
</div>
			<div class="cal-cell1 cal-cell" data-cal-row="-day4"><div class="cal-month-day cal-day-inmonth">
	<span class="pull-right" data-cal-date="2018-06-28" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">28</span>
	
		<div class="events-list" data-cal-start="1530165600000" data-cal-end="1530252000000">
			
				<a href="http://citas.montsoft.com.mx/descripcion_evento.php?id=731" data-event-id="731" data-event-class="event-important" class="pull-left event event-important" data-toggle="tooltip" title="" data-original-title="+6545"></a>
			
		</div>
	
</div>
</div>
			<div class="cal-cell1 cal-cell" data-cal-row="-day5"><div class="cal-month-day cal-day-inmonth">
	<span class="pull-right" data-cal-date="2018-06-29" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">29</span>
	
		<div class="events-list" data-cal-start="1530252000000" data-cal-end="1530338400000">
			
				<a href="http://citas.montsoft.com.mx/descripcion_evento.php?id=731" data-event-id="731" data-event-class="event-important" class="pull-left event event-important" data-toggle="tooltip" title="" data-original-title="+6545"></a>
			
		</div>
	
</div>
</div>
			<div class="cal-cell1 cal-cell" data-cal-row="-day6"><div class="cal-month-day cal-day-inmonth cal-day-weekend">
	<span class="pull-right" data-cal-date="2018-06-30" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">30</span>
	
</div>
</div>
			<div class="cal-cell1 cal-cell" data-cal-row="-day7"><div class="cal-month-day cal-day-outmonth cal-day-weekend">
	<span class="pull-right" data-cal-date="2018-07-01" data-cal-view="day" data-toggle="tooltip" title="" data-original-title="">1</span>
	
</div>
</div>
		</div>
	
		
</div></div> <!-- Aqui se mostrara nuestro calendario -->
                        <br><br><br>
                </div>

                <!--ventana modal para el calendario-->
                <div class="modal fade" id="events-modal">
                    <div class="modal-dialog">
                            <div class="modal-content">
                                    <div class="modal-body" style="height: 400px">
                                        <p>One fine body…</p>
                                    </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
        </div>
        <footer style="background-color: #0c84e4;color: white;padding: 10px 10px;text-align: center;">
            <p>Desarrollada por: <a target="_blank" href="http://www.montsoft.com.mx" title="Soluciones de software y desarrollo web para tu negocio"><font color="black">Montsoft ®</font></a></p>
               
        </footer>

    <script src="http://citas.montsoft.com.mx/js/underscore-min.js"></script>
    <script src="http://citas.montsoft.com.mx/js/calendar.js"></script>
    <script type="text/javascript">
        (function($){
                //creamos la fecha actual
                var date = new Date();
                var yyyy = date.getFullYear().toString();
                var mm = (date.getMonth()+1).toString().length == 1 ? "0"+(date.getMonth()+1).toString() : (date.getMonth()+1).toString();
                var dd  = (date.getDate()).toString().length == 1 ? "0"+(date.getDate()).toString() : (date.getDate()).toString();

                //establecemos los valores del calendario
                var options = {

                    // definimos que los eventos se mostraran en ventana modal
                        modal: '#events-modal', 

                        // dentro de un iframe
                        modal_type:'iframe',    

                        //obtenemos los eventos de la base de datos
                        events_source: 'http://citas.montsoft.com.mx/obtener_eventos.php', 

                        // mostramos el calendario en el mes
                        view: 'month',             

                        // y dia actual
                        day: yyyy+"-"+mm+"-"+dd,   


                        // definimos el idioma por defecto
                        language: 'es-ES', 

                        //Template de nuestro calendario
                        tmpl_path: 'http://citas.montsoft.com.mx/tmpls/', 
                        tmpl_cache: false,


                        // Hora de inicio
                        time_start: '10:00', 

                        // y Hora final de cada dia
                        time_end: '19:00',   

                        // intervalo de tiempo entre las hora, en este caso son 30 minutos
                        time_split: '30',    

                        // Definimos un ancho del 100% a nuestro calendario
                        width: '100%', 

                        onAfterEventsLoad: function(events)
                        {
                                if(!events)
                                {
                                        return;
                                }
                                var list = $('#eventlist');
                                list.html('');

                                $.each(events, function(key, val)
                                {
                                        $(document.createElement('li'))
                                                .html('<a href="' + val.url + '">' + val.title + '</a>')
                                                .appendTo(list);
                                });
                        },
                        onAfterViewLoad: function(view)
                        {
                                $('.page-header h2').text(this.getTitle());
                                $('.btn-group button').removeClass('active');
                                $('button[data-calendar-view="' + view + '"]').addClass('active');
                        },
                        classes: {
                                months: {
                                        general: 'label'
                                }
                        }
                };


                // id del div donde se mostrara el calendario
                var calendar = $('#calendar').calendar(options); 

                $('.btn-group button[data-calendar-nav]').each(function()
                {
                        var $this = $(this);
                        $this.click(function()
                        {
                                calendar.navigate($this.data('calendar-nav'));
                        });
                });

                $('.btn-group button[data-calendar-view]').each(function()
                {
                        var $this = $(this);
                        $this.click(function()
                        {
                                calendar.view($this.data('calendar-view'));
                        });
                });

                $('#first_day').change(function()
                {
                        var value = $(this).val();
                        value = value.length ? parseInt(value) : null;
                        calendar.setOptions({first_day: value});
                        calendar.view();
                });
        }(jQuery));
    </script>

<div class="modal fade" id="add_evento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Agregar nueva cita</h4>
      </div>
      <div class="modal-body">
        <form action="" method="post">
                    <label for="from">Fecha y hora de cita</label>
                    <div class="input-group date" id="from">
                        <input type="text" id="from" name="from" placeholder=" Pulsa en el icono para seleccionar la fecha ------>" class="form-control" readonly="">
                        <span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span>
                    </span></div>

                    <!-- Cuando son para varios dias -->
                    <label for="to">Fecha y hora final de la cita</label>
                    <div class="input-group date" id="to">
                        <input type="text" name="to" id="to" placeholder=" Pulsa en el icono para seleccionar la fecha ------>" class="form-control" readonly="">
                        <span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span>
                    </span></div>

                    <br>

                    <label for="tipo">Color para esta cita:</label>
                    <select class="form-control" name="class" id="tipo">
                        <option value="event-info">Azul</option>
                        <option value="event-success">Verde</option>
                        <option value="event-important">Rojo</option>
                        <option value="event-warning">Amarillo</option>
                        <option value="event-special">Morado</option>
                    </select>

                    <br>


                    <label for="title">Título</label>
                    <input type="text" required="" autocomplete="off" name="title" class="form-control" id="title" placeholder="Introduce un título">

                    <br>


                    <label for="body">Descripción</label>
                    <textarea id="body" name="event" placeholder="Nombre,Telefono,Descripción" required="" class="form-control" rows="3"></textarea>

    <script type="text/javascript">
        $(function () {
            $('#from').datetimepicker({
                language: 'es',
                minDate: new Date()
            });
            $('#to').datetimepicker({
                language: 'es',
                minDate: new Date()
            });

        });
    </script>
      </form></div>
      <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
          <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Agregar</button>
        
    </div>
  </div>
</div>
</div>


<div class="bootstrap-datetimepicker-widget dropdown-menu" style="z-index:9999 !important;"><ul class="list-unstyled"><li class="collapse in"><div class="datepicker"><div class="datepicker-days" style="display: block;"><table class="table-condensed"><thead><tr><th class="prev disabled">‹</th><th colspan="5" class="switch">junio 2018</th><th class="next">›</th></tr><tr><th class="dow">Lu</th><th class="dow">Ma</th><th class="dow">Mi</th><th class="dow">Ju</th><th class="dow">Vi</th><th class="dow">Sá</th><th class="dow">Do</th></tr></thead><tbody><tr><td class="day old disabled">28</td><td class="day old disabled">29</td><td class="day old disabled">30</td><td class="day old disabled">31</td><td class="day disabled">1</td><td class="day disabled">2</td><td class="day disabled">3</td></tr><tr><td class="day disabled">4</td><td class="day disabled">5</td><td class="day disabled">6</td><td class="day disabled">7</td><td class="day disabled">8</td><td class="day disabled">9</td><td class="day disabled">10</td></tr><tr><td class="day disabled">11</td><td class="day disabled">12</td><td class="day disabled">13</td><td class="day active disabled today">14</td><td class="day">15</td><td class="day">16</td><td class="day">17</td></tr><tr><td class="day">18</td><td class="day">19</td><td class="day">20</td><td class="day">21</td><td class="day">22</td><td class="day">23</td><td class="day">24</td></tr><tr><td class="day">25</td><td class="day">26</td><td class="day">27</td><td class="day">28</td><td class="day">29</td><td class="day">30</td><td class="day new">1</td></tr><tr><td class="day new">2</td><td class="day new">3</td><td class="day new">4</td><td class="day new">5</td><td class="day new">6</td><td class="day new">7</td><td class="day new">8</td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev disabled">‹</th><th colspan="5" class="switch">2018</th><th class="next">›</th></tr></thead><tbody><tr><td colspan="7"><span class="month disabled">ene.</span><span class="month disabled">feb.</span><span class="month disabled">mar.</span><span class="month disabled">abr.</span><span class="month disabled">may.</span><span class="month active">jun.</span><span class="month">jul.</span><span class="month">ago.</span><span class="month">sep.</span><span class="month">oct.</span><span class="month">nov.</span><span class="month">dic.</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev disabled">‹</th><th colspan="5" class="switch">2010-2019</th><th class="next">›</th></tr></thead><tbody><tr><td colspan="7"><span class="year old disabled">2009</span><span class="year disabled">2010</span><span class="year disabled">2011</span><span class="year disabled">2012</span><span class="year disabled">2013</span><span class="year disabled">2014</span><span class="year disabled">2015</span><span class="year disabled">2016</span><span class="year disabled">2017</span><span class="year active">2018</span><span class="year">2019</span><span class="year old">2020</span></td></tr></tbody></table></div></div></li><li class="picker-switch accordion-toggle"><a class="btn" style="width:100%"><span class="glyphicon glyphicon-time"></span></a></li><li class="collapse"><div class="timepicker"><div class="timepicker-picker"><table class="table-condensed"><tbody><tr><td><a href="#" class="btn" data-action="incrementHours"><span class="glyphicon glyphicon-chevron-up"></span></a></td><td class="separator"></td><td><a href="#" class="btn" data-action="incrementMinutes"><span class="glyphicon glyphicon-chevron-up"></span></a></td></tr><tr><td><span data-action="showHours" data-time-component="hours" class="timepicker-hour">18</span></td> <td class="separator">:</td><td><span data-action="showMinutes" data-time-component="minutes" class="timepicker-minute">32</span></td> </tr><tr><td><a href="#" class="btn" data-action="decrementHours"><span class="glyphicon glyphicon-chevron-down"></span></a></td><td class="separator"></td><td><a href="#" class="btn" data-action="decrementMinutes"><span class="glyphicon glyphicon-chevron-down"></span></a></td></tr></tbody></table></div><div class="timepicker-hours" data-action="selectHour" style="display: none;"><table class="table-condensed"><tbody><tr><td class="hour">00</td><td class="hour">01</td><td class="hour">02</td><td class="hour">03</td></tr><tr><td class="hour">04</td><td class="hour">05</td><td class="hour">06</td><td class="hour">07</td></tr><tr><td class="hour">08</td><td class="hour">09</td><td class="hour">10</td><td class="hour">11</td></tr><tr><td class="hour">12</td><td class="hour">13</td><td class="hour">14</td><td class="hour">15</td></tr><tr><td class="hour">16</td><td class="hour">17</td><td class="hour">18</td><td class="hour">19</td></tr><tr><td class="hour">20</td><td class="hour">21</td><td class="hour">22</td><td class="hour">23</td></tr></tbody></table></div><div class="timepicker-minutes" data-action="selectMinute" style="display: none;"><table class="table-condensed"><tbody><tr><td class="minute">00</td><td class="minute">05</td><td class="minute">10</td><td class="minute">15</td></tr><tr><td class="minute">20</td><td class="minute">25</td><td class="minute">30</td><td class="minute">35</td></tr><tr><td class="minute">40</td><td class="minute">45</td><td class="minute">50</td><td class="minute">55</td></tr></tbody></table></div></div></li></ul></div><div class="bootstrap-datetimepicker-widget dropdown-menu" style="z-index:9999 !important;"><ul class="list-unstyled"><li class="collapse in"><div class="datepicker"><div class="datepicker-days" style="display: block;"><table class="table-condensed"><thead><tr><th class="prev disabled">‹</th><th colspan="5" class="switch">junio 2018</th><th class="next">›</th></tr><tr><th class="dow">Lu</th><th class="dow">Ma</th><th class="dow">Mi</th><th class="dow">Ju</th><th class="dow">Vi</th><th class="dow">Sá</th><th class="dow">Do</th></tr></thead><tbody><tr><td class="day old disabled">28</td><td class="day old disabled">29</td><td class="day old disabled">30</td><td class="day old disabled">31</td><td class="day disabled">1</td><td class="day disabled">2</td><td class="day disabled">3</td></tr><tr><td class="day disabled">4</td><td class="day disabled">5</td><td class="day disabled">6</td><td class="day disabled">7</td><td class="day disabled">8</td><td class="day disabled">9</td><td class="day disabled">10</td></tr><tr><td class="day disabled">11</td><td class="day disabled">12</td><td class="day disabled">13</td><td class="day active disabled today">14</td><td class="day">15</td><td class="day">16</td><td class="day">17</td></tr><tr><td class="day">18</td><td class="day">19</td><td class="day">20</td><td class="day">21</td><td class="day">22</td><td class="day">23</td><td class="day">24</td></tr><tr><td class="day">25</td><td class="day">26</td><td class="day">27</td><td class="day">28</td><td class="day">29</td><td class="day">30</td><td class="day new">1</td></tr><tr><td class="day new">2</td><td class="day new">3</td><td class="day new">4</td><td class="day new">5</td><td class="day new">6</td><td class="day new">7</td><td class="day new">8</td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev disabled">‹</th><th colspan="5" class="switch">2018</th><th class="next">›</th></tr></thead><tbody><tr><td colspan="7"><span class="month disabled">ene.</span><span class="month disabled">feb.</span><span class="month disabled">mar.</span><span class="month disabled">abr.</span><span class="month disabled">may.</span><span class="month active">jun.</span><span class="month">jul.</span><span class="month">ago.</span><span class="month">sep.</span><span class="month">oct.</span><span class="month">nov.</span><span class="month">dic.</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev disabled">‹</th><th colspan="5" class="switch">2010-2019</th><th class="next">›</th></tr></thead><tbody><tr><td colspan="7"><span class="year old disabled">2009</span><span class="year disabled">2010</span><span class="year disabled">2011</span><span class="year disabled">2012</span><span class="year disabled">2013</span><span class="year disabled">2014</span><span class="year disabled">2015</span><span class="year disabled">2016</span><span class="year disabled">2017</span><span class="year active">2018</span><span class="year">2019</span><span class="year old">2020</span></td></tr></tbody></table></div></div></li><li class="picker-switch accordion-toggle"><a class="btn" style="width:100%"><span class="glyphicon glyphicon-time"></span></a></li><li class="collapse"><div class="timepicker"><div class="timepicker-picker"><table class="table-condensed"><tbody><tr><td><a href="#" class="btn" data-action="incrementHours"><span class="glyphicon glyphicon-chevron-up"></span></a></td><td class="separator"></td><td><a href="#" class="btn" data-action="incrementMinutes"><span class="glyphicon glyphicon-chevron-up"></span></a></td></tr><tr><td><span data-action="showHours" data-time-component="hours" class="timepicker-hour">18</span></td> <td class="separator">:</td><td><span data-action="showMinutes" data-time-component="minutes" class="timepicker-minute">32</span></td> </tr><tr><td><a href="#" class="btn" data-action="decrementHours"><span class="glyphicon glyphicon-chevron-down"></span></a></td><td class="separator"></td><td><a href="#" class="btn" data-action="decrementMinutes"><span class="glyphicon glyphicon-chevron-down"></span></a></td></tr></tbody></table></div><div class="timepicker-hours" data-action="selectHour" style="display: none;"><table class="table-condensed"><tbody><tr><td class="hour">00</td><td class="hour">01</td><td class="hour">02</td><td class="hour">03</td></tr><tr><td class="hour">04</td><td class="hour">05</td><td class="hour">06</td><td class="hour">07</td></tr><tr><td class="hour">08</td><td class="hour">09</td><td class="hour">10</td><td class="hour">11</td></tr><tr><td class="hour">12</td><td class="hour">13</td><td class="hour">14</td><td class="hour">15</td></tr><tr><td class="hour">16</td><td class="hour">17</td><td class="hour">18</td><td class="hour">19</td></tr><tr><td class="hour">20</td><td class="hour">21</td><td class="hour">22</td><td class="hour">23</td></tr></tbody></table></div><div class="timepicker-minutes" data-action="selectMinute" style="display: none;"><table class="table-condensed"><tbody><tr><td class="minute">00</td><td class="minute">05</td><td class="minute">10</td><td class="minute">15</td></tr><tr><td class="minute">20</td><td class="minute">25</td><td class="minute">30</td><td class="minute">35</td></tr><tr><td class="minute">40</td><td class="minute">45</td><td class="minute">50</td><td class="minute">55</td></tr></tbody></table></div></div></li></ul></div></body></html>