var consulta = []; // Arreglo para crear la consulta
var ccampos = []; // Todos los campos de la tabla
var nom_campos = []; // Nombre de los campos Ej. first_name = Nombre

//CARGAMOS LOS CAMPOS DE LA TABLA walker A UN SELECT HTML
function LlenarSelect() {
    for (let x = 0; x < ccampos.length; x++) {
        var select = document.getElementById("txtCampos");
        var option = document.createElement("option"),
            texto = document.createTextNode(ccampos[x]);
        option.appendChild(texto);
        select.appendChild(option);
    }
}

function GenerarSelect() {
    var campo = document.getElementById('txtCampos').value;
    var tbl = document.getElementById('tbl-generarquery'),
        i;
    for (i = 0; i < tbl.rows.length; i++) {
        createCell(tbl.rows[i].insertCell(tbl.rows[i].cells.length), campo);
    }
}

//CREAR OBJETO EN CADA CELDA
function createCell(cell, text) {
    var div = document.createElement('button'), // Creamos elemento tipo Button
        txt = document.createTextNode(text);    // Creamos un TexNode (Texto que tendra el objeto)
    div.appendChild(txt);                       // Agregamos el TextNode al Button
    div.setAttribute('type', "button");        
    div.setAttribute('class', "boton btn-outline-dark");
    div.setAttribute('id', text);
    cell.appendChild(div);                      // Agregamos el Button a la celda
}
// AGREGAR
function Agregar() {
    var campo = document.getElementById('txtCampos').value;
    var tbl = document.getElementById('a-consultar'),
        i;
    //Ciclo para agregar celda en cada renglon
    for (i = 0; i < tbl.rows.length; i++) {
        createCell(tbl.rows[i].insertCell(tbl.rows[i].cells.length), campo);
    }
    consulta.push(campo); //AGREGO ELEMENTOS AL ARREGLO CONSULTA
}
// ELIMINAR
function EliminarCol() {
    var tbl = document.getElementById('a-consultar'),
    lastCol = tbl.rows[0].cells.length - 1;
    tbl.rows[0].deleteCell(lastCol);
    consulta.pop(); //ELIMINO EL ULTIMO ELEMENTO DEL ARREGLO CONSULTA
}
function Consultar() {
    var query= GenerarQuery();
    if (query == "1"){
        alert("No hay nada que consultar");
    }
    else if(query == "2"){
        alert("No se debe combinar Todos los campos con campos específicos :(");
    }
    else{
        alert(query);
    }
}

function GenerarQuery() {
    var q = "";
    if (consulta.length==0){ //Si el arreglo esta vacio
        return q="1";
    } 
    else{
        for (let x = 0; x < consulta.length; x++) { //For para recorrer el arreglo con el que se formará la consulta
            if (consulta[x]=="*" && consulta.length > 1) {//Si hay un "*" (todos los campos) y mas campos
                q = "2";                                    //NOTA: NO DEBEN COMBINARSE "*" CON CAMPOS ESPECIFICOS
                break;    
            }
            else if(consulta[x]=="*" && consulta.length == 1){
                q = "Select * From walker";
                break;
            }
            else{
                for (let y = 0; y < ccampos.length; y++) { //Le ponemos As "Nombre correcto" al nombre de la columna de la bd
                    if (consulta[x]==ccampos[y]) {                         //Si el campo de la consulta a generar existe
                        q = q + consulta[x] + " As " + nom_campos[y] + ", "; //en los campos de la tabla consultada
                    }                                                      //se concatena "nombre del campo" + As "Nombre correcto de campo"
                }
                q = q.substring(0, q.length - 2);
                q = "Select " + q + " From walker";
            }
        }
        return q;
    }
} //Fin Function


function AcomodarFch(dtpicker) {
    var dtp = document.getElementById(dtpicker).value;
    var consfecha = dtp.substring(6,10) + "-" + dtp.substring(3,5) + "-" + dtp.substring(0,2) + dtp.substring(10,19);
    return consfecha;
}

//JQUERY

$(document).ready(function() {
    //Activar filtro de servicios (Todos, App, Cliente de calle)
    $("#slct-tiposervicio").show(300);
    $('#dtp-fecha').show(300);

    //Formato de fechas
    $('#datetimepicker1').datetimepicker({
        format: "DD/MM/YYYY",
        locale: "ru"
    });

    $('#datetimepicker2').datetimepicker({
        format: "DD/MM/YYYY H:mm:00"
    });

    $('#datetimepicker3').datetimepicker({
        useCurrent: false,
        format: "DD/MM/YYYY H:mm:00"
    });

    //Enlazar DateTimePicker 2 y 3
    $("#datetimepicker2").on("change.datetimepicker", function (e) {
        $('#datetimepicker3').datetimepicker('minDate', e.date);
    });
    $("#datetimepicker3").on("change.datetimepicker", function (e) {
        $('#datetimepicker2').datetimepicker('maxDate', e.date);
    });

    //Mostrar y ocultar DateTimePicker
    $("#slct-consultas").change(function(){
        consulta = $('#slct-consultas').val();
        switch (consulta) {
            case '1': 
                $('.servicios').hide();

                $('#slct-tiposervicio').show(300);
                $('#dtp-fecha').show(300);
                break;
        
            case '2':
                $('.servicios').hide();

                $('#dtp-rangofecha1').show(300);
                $('#dtp-rangofecha2').show(300);
                $('#slct-tiposervicio').show(300);
                break;

            case '3':
                $('.servicios').hide();

                $("#slct-filtrochofer").show(300);
                $('#slct-tiposervicio').show(300);
                break;
            case '4':
                $('.servicios').hide();

                $('#dtp-fecha').show(300);
                break;
        }
    });

    //Bloquear escritura y pegado en DateTimePicker
    $('.bloqueo').keypress(function(e){
        return false;
    });

    $('.bloqueo').on('paste', function(e){
        e.preventDefault();
    });

    //Boton Consultar
    $('#btn-consult').click(function(){
        dtp = document.getElementById('slct-consultas').value;
        switch (dtp) {
            case '1': 
                console.log(AcomodarFch("dtpicker-1"));
                break;
        
            case '2':
                console.log(AcomodarFch("dtpicker-rang1"));
                console.log(AcomodarFch("dtpicker-rang2"));
                break;
        }
        
    })
});

