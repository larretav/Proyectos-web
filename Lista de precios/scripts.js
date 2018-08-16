//Funcion Poner Precios al cargar la página
function Poner_Precios(){
  var tbl_sector=["tbl-ahome","tbl-carrizo","tbl-topolobampo","tbl-elfuerte","tbl-guasave"];
  var sector = 0 ;
  for (let prec_ren = 0; prec_ren < array_precios.length; prec_ren++) {
    if (prec_ren <= 37) {
      //AHOME
      sector = 0;
    }else if(prec_ren > 37 && prec_ren <= 73){
      //CARRIZO
      sector = 1;
    }else if(prec_ren > 73 && prec_ren <= 97){
      //TOPOLOBAMPO
      sector = 2;
    }else if(prec_ren > 97 && prec_ren <= 126){
      //EL FUERTE
      sector = 3;
    }else if(prec_ren > 126){
      //GUASAVE
      sector = 4;
    }
    var tbl = tbl_sector[sector];
    Crear_Celda(tbl, prec_ren, array_precios);
  }

}


//Funcion Crear Celda. Esta función trabaja con la tabla que tomaremos, prec_ren (la posicion del ciclo
//For que recorre los renglones del arreglo y el arreglo de precios
function Crear_Celda(tabla, prec_ren, array) {
  //Tomamos el tbody hijo directo de la tabla
  var tbl = $('#' + tabla + ' > tbody')[0];

  //Sacamos el número de renglones del componente que tomamos
  var num_reng = tbl.rows.length;

  //Instertamos el renglon al final de la tabla
  var row = tbl.insertRow(num_reng);

  //Recorremos todas las columnas de la tabla y le agregamos valor a cada celda
  for (let prec_col = 0; prec_col < 2; prec_col++) {
    //Insertamos la celda en el nuevo renglon
    col = row.insertCell(prec_col);
    //Insertamos valor a la celda html, el valor será del arreglo de precios
    //en la posicion prec_ren(posicion del ciclo For que recorre los renglones del arreglo) y
    //prec_col (el valor del ciclo For que recorre las columnas del arreglo)
    col.innerHTML = array[prec_ren][prec_col];
  }
}

/* Arreglo con todas las localidades para la busqueda de autocompletar */
var array_locali=[
    //SECTOR AHOME
    "BRISAS",
    "EJ. LOUISIANA",
    "18 DE MARZO",
    "FELIPE ANGELES",
    "GOROS Nº 2",
    "OLAS ALTAS",
    "PENAL CERESO",
    "BAGOJO",
    "LA CUCHILLA DE CACH.",
    "AGUA NUEVA",
    "VALLEJO",
    "MACAPULE",
    "ZAPOTILLO",
    "AHOME",
    "LA FLORIDA",
    "COHUIBAMPO",
    "EL GUAYABO",
    "MAYOCOBA",
    "LOS SUAREZ",
    "SAN JOSE",
    "HUATABAMPITO",
    "SAN ISIDRO",
    "HIGUERA DE ZARAGOZA",
    "EL JITZAMURI",
    "EL BULE",
    "LA DESPENSA",
    "TABELOJECA",
    "AGUAJITO",
    "EL REFUGIO",
    "LAS GRULLAS IZQUIERDO",
    "EL ALHUATE",
    "LAS GRULLAS DERECHO",
    "EL COLORADO",
    "EJ. MOCHIS",
    "COMPUERTAS",
    "EL CAMPITO",
    "EL TULE",
    "LAS LAJITAS",
    //SECTOR CARRIZO
    "FLOR AZUL",
    "GABRIEL LEYVA",
    "CUARTEL ",
    "BACAPOROBAMPO",
    "SAN MIGUEL ",
    "TOSALIBAMPO",
    "NUEVO SAN MIGUEL",
    "EL PORVENIR",
    "GOROS PUEBLO",
    "GUAYMAS",
    "POBLADO 7",
    "TABELOJECA",
    "POBLADO 6",
    "LOS NATOCHES",
    "CHIHUAHITA",
    "POBLADO 5",
    "EL CARRIZO",
    "V. CARRANZA Y REF.",
    "CHAVEZ TALAMANTES",
    "JAHUARA 2DO.",
    "EMIGDIO RUIZ",
    "AGIABAMPO",
    "ESTACIÓN DON",
    "JUAN DE LA BARRERA",
    "HOTEL DOUX",
    "FITOSANITARIA",
    "EL DESENGAÑO",
    "LA BOLSA 1",
    "LA BOLSA 2",
    "CACHOANA",
    "SAN ANTONIO",
    "OBREGON",
    "NAVOJOA",
    "HUATABAMPO",
    "CAMAHUIROA",
    //SECTOR TOPOLOBAMPO
    "TOPOLOBAMPO",
    "AEROPUERTO",
    "PLAN DE GUADALUPE",
    "ROSENDO G. CASTRO",
    "EL MAVIRI",
    "PAREDONES",
    "CAMPO ESTRADA",
    "OHUIRA",
    "FLORES MAGON",
    "EJ. 20 DE NOV. NUEVO",
    "EJ. 1RO DE MAYO",
    "EJ. 9 DE DICIEMBRE",
    "EJ. BENITO JUAREZ",
    "PLAN DE AYALA",
    "PLAN DE SAN LUIS",
    "BACHOMOPAMPO 1",
    "BACHOMOPAMPO 2",
    "SUCURSAL JIQUILPAN",
    "JACALITO - POPEYE",
    "RASTRO MPAL.",
    "LA PALOMA",
    "PANTEON",
    "PARQUE NIEBLAS",
    "GAS EXPRESS",
    //SECTOR EL FUERTE
    "EJ. 5 DE MAYO",
    "2 DE ABRIL",
    "TAXTES",
    "TEROQUE",
    "ALIMENTOS DEL FUERTE",
    "EJ. MOCHICAHUI",
    "CONSTANCIA",
    "VINATERIAS",
    "PARAISO",
    "CAMAJOA",
    "POCHOTAL",
    "CHARAY",
    "C. ESPERANZA",
    "SAN BLAS",
    "EL FUERTE",
    "EL REALITO",
    "CHOIX",
    "TEHUECO",
    "JAHUARA",
    "BAROTEN",
    "EJ. ANTONIO ROSALES",
    "SIBAJAHUI",
    "MACOYAHUI",
    "HIGUERA NATOCHEZ",
    "PRESA MIGUEL HIDALGO",
    "PRESA HUITES",
    "PRESA EL MAHOME",
    "PRESA JOSEFA ORTIZ",
    "CHINOBAMPO",
    //SECTOR GUASAVE
    "ALMACENES Y G. PILARICA",
    "CAMPO LA ARROCERA",
    "CAMPO 35",
    "EJ. 4 MILPAS",
    "EL ALHUATE",
    "BUENA VISTA",
    "LAS PANGUITAS",
    "LA GENOVEBA",
    "EJ. LA ARROCERA",
    "TRES GARANTIAS",
    "AGUA DE LAS ARENAS",
    "JUAN JOSE RIOS",
    "GUAYPARIME",
    "BACHOCO",
    "CORTINES POBLADO CAMPESTRE",
    "CORTINES #3",
    "LEYVA SOLANO",
    "BATAMOTE POBLADO",
    "BATAMOTE EJIDO",
    "MEZQUITE ALTO",
    "GUASAVE",
    "EL NARANJO",
    "LA TRINIDAD",
    "OCORONI",
    "SINALOA DE LEYVA",
    "GUAMUCHIL",
    "CULIACÁN",
    "COREREPE",
    "CERRO CABEZÓN",
    "EL HUITUZI",
    "ZEFERINO PAREDES",
    "CUBILETE",
    "MAZATLÁN",
    "EL TAJITO",
    "PRODUCTOS DEL FTE. HERDEZ",
    "LEON FONSECA GUASAVE",
    "ROTOPLAS - CENTRO",
    "BRECHA GVE.",
    "GENARO ESTRADA",
    "PENAL FEDERAL GUASAVE",
    "EL BURRION ",
    "LAS GLORIAS GUASAVE",
    "EL CUBILETE GUASAVE",
    "TAMAZULA GUASAVE",
    "ANGOSTURA",
    "MOCORITO",
    "PERICOS",
    "BADIRAGUATO"
]

/* Arreglo con todas las localidades y precios */
var array_precios=[
  //SECTOR AHOME
  ["BRISAS", "$120.00"],
  ["EJ. LOUISIANA", "$120.00"],
  ["18 DE MARZO", "$140.00"],
  ["FELIPE ANGELES", "$140.00"],
  ["GOROS Nº 2", "$160.00"],
  ["OLAS ALTAS", "$150.00"],
  ["PENAL CERESO", "$160.00"],
  ["BAGOJO", "$150.00"],
  ["LA CUCHILLA DE CACH.", "$150.00"],
  ["AGUA NUEVA", "$170.00"],
  ["VALLEJO", "$180.00"],
  ["MACAPULE", "$170.00"],
  ["ZAPOTILLO", "$180.00"],
  ["AHOME", "$180.00"],
  ["LA FLORIDA", "$210.00"],
  ["COHUIBAMPO", "$220.00"],
  ["EL GUAYABO", "$270.00"],
  ["MAYOCOBA", "$220.00"],
  ["LOS SUAREZ", "$260.00"],
  ["SAN JOSE", "$240.00"],
  ["HUATABAMPITO", "$250.00"],
  ["SAN ISIDRO", "$300.00"],
  ["HIGUERA DE ZARAGOZA", "$340.00"],
  ["EL JITZAMURI", "$680.00"],
  ["EL BULE", "$350.00"],
  ["LA DESPENSA", "$340.00"],
  ["TABELOJECA", "$380.00"],
  ["AGUAJITO", "$400.00"],
  ["EL REFUGIO", "$400.00"],
  ["LAS GRULLAS IZQUIERDO", "$380.00"],
  ["EL ALHUATE", "$420.00"],
  ["LAS GRULLAS DERECHO", "$430.00"],
  ["EL COLORADO", "$520.00"],
  ["EJ. MOCHIS", "$80.00"],
  ["COMPUERTAS", "$90.00"],
  ["EL CAMPITO", "$200.00"],
  ["EL TULE", "$250.00"],
  ["LAS LAJITAS", "$600.00"],
  //SECTOR CARRIZO
  ["FLOR AZUL", "$120.00"],
  ["GABRIEL LEYVA", "$130.00"],
  ["CUARTEL	", "$160.00"],
  ["BACAPOROBAMPO", "$160.00"],
  ["SAN MIGUEL", "$180.00"],
  ["TOSALIBAMPO	", "$240.00"],
  ["NUEVO SAN MIGUEL", "$220.00"],
  ["EL PORVENIR", "$240.00"],
  ["GOROS PUEBLO", "$220.00"],
  ["GUAYMAS", "$3,600.00"],
  ["POBLADO 7", "$400.00"],
  ["TABELOJECA", "$400.00"],
  ["POBLADO 6", "$450.00"],
  ["LOS NATOCHES", "$450.00"],
  ["CHIHUAHITA c/caseta", "$460.00"],
  ["POBLADO 5 c/caseta", "$550.00"],
  ["EL CARRIZO c/caseta", "$600.00"],
  ["V. CARRANZA Y REF. c/caseta", "$650.00"],
  ["CHAVEZ TALAMANTES c/caseta", "$680.00"],
  ["JAHUARA 2DO. c/caseta", "$750.00"],
  ["EMIGDIO RUIZ c/caseta", "$750.00"],
  ["AGIABAMPO c/caseta", "$850.00"],
  ["ESTACIÓN DON", "$1,000.00"],
  ["JUAN DE LA BARRERA c/caseta	", "$1,100.00"],
  ["HOTEL DOUX", "$90.00"],
  ["FITOSANITARIA c/caseta", "$950.00"],
  ["EL DESENGAÑO c/caseta", "$900.00"],
  ["LA BOLSA 1", "$450.00"],
  ["LA BOLSA 2", "$450.00"],
  ["CACHOANA", "$200.00"],
  ["SAN ANTONIO", "$250.00"],
  ["OBREGON c/caseta", "$2,200.00"],
  ["NAVOJOA c/caseta", "$1,800.00"],
  ["HUATABAMPO c/caseta", "$1,600.00"],
  ["CAMAHUIROA c/caseta", "$1,500.00"],
  ["HERMOSILLO", "$6,000.00"],
  //SECTOR TOPOLOBAMPO
  ["TOPOLOBAMPO", "$200.00"],
  ["AEROPUERTO", "$180.00"],
  ["PLAN DE GUADALUPE", "$200.00"],
  ["ROSENDO G. CASTRO", "$180.00"],
  ["EL MAVIRI", "$270.00"],
  ["PAREDONES", "$190.00"],
  ["CAMPO ESTRADA", "$170.00"],
  ["OHUIRA", "$120.00"],
  ["FLORES MAGON", "$80.00"],
  ["EJ. 20 DE NOV. NUEVO	", "$70.00"],
  ["EJ. 1RO DE MAYO", "$90.00"],
  ["EJ. 9 DE DICIEMBRE", "$80.00"],
  ["EJ. BENITO JUAREZ", "$70.00"],
  ["PLAN DE AYALA", "$80.00"],
  ["PLAN DE SAN LUIS", "$110.00"],
  ["BACHOMOPAMPO 1", "$250.00"],
  ["BACHOMOPAMPO 2", "$210.00"],
  ["SUCURSAL JIQUILPAN", "$90.00"],
  ["JACALITO - POPEYE", "$120.00"],
  ["RASTRO MPAL.", "$130.00"],
  ["LA PALOMA", "$130.00"],
  ["PANTEON", "$130.00"],
  ["PARQUE NIEBLAS", "$120.00"],
  ["GAS EXPRESS", "$120.00"],
  //SECTOR EL FUERTE
  ["EJ. 5 DE MAYO", "$80.00"],
  ["2 DE ABRIL", "$140.00"],
  ["TAXTES", "$140.00"],
  ["TEROQUE", "$210.00"],
  ["ALIMENTOS DEL FUERTE", "$170.00"],
  ["EJ. MOCHICAHUI", "$190.00"],
  ["CONSTANCIA", "$210.00"],
  ["VINATERIAS", "$260.00"],
  ["EJ. PARAISO", "$250.00"],
  ["CAMAJOA", "$260.00"],
  ["POCHOTAL", "$270.00"],
  ["CHARAY", "$290.00"],
  ["C. ESPERANZA", "$340.00"],
  ["SAN BLAS", "$380.00"],
  ["EL FUERTE", "$800.00"],
  ["EL REALITO", "$1,000.00"],
  ["CHOIX", "$1,200.00"],
  ["TEHUECO", "$700.00"],
  ["JAHUARA", "$300.00"],
  ["BAROTEN", "$800.00"],
  ["EJ. ANTONIO ROSALES", "$140.00"],
  ["SIBAJAHUI", "$470.00"],
  ["MACOYAHUI", "$360.00"],
  ["HIGUERA NATOCHEZ", "$250.00"],
  ["PRESA MIGUEL HIDALGO", "$900.00"],
  ["PRESA HUITES", "$1,500.00"],
  ["PRESA EL MAHONE", "$900.00"],
  ["PRESA JOSEFA ORTIZ", "$1,100.00"],
  ["CHINOBAMPO", "$1,100.00"],
  //SECTOR GUASAVE
  ["ALMACENES Y G. PILARICA", "$100.00"],
  ["CAMPO LA ARROCERA", "$150.00"],
  ["CAMPO 35", "$190.00"],
  ["EJ. 4 MILPAS", "$200.00"],
  ["EL ALHUATE", "$200.00"],
  ["BUENA VISTA", "$400.00"],
  ["LAS PANGUITAS", "$400.00"],
  ["LA GENOVEBA", "$180.00"],
  ["EJ. LA ARROCERA", "$170.00"],
  ["TRES GARANTIAS", "$450.00"],
  ["AGUA DE LAS ARENAS", "$450.00"],
  ["JUAN JOSE RIOS", "$200.00"],
  ["GUAYPARIME", "$250.00"],
  ["BACHOCO", "$300.00"],
  ["CORTINES POBLADO CAMPESTRE", "$300.00"],
  ["CORTINES #3", "$310.00"],
  ["LEYVA SOLANO", "$400.00"],
  ["BATAMOTE POBLADO", "$700.00"],
  ["BATAMOTE EJIDO", "$480.00"],
  ["MEZQUITE ALTO", "$1,000.00"],
  ["GUASAVE", "$600.00"],
  ["EL NARANJO", "$700.00"],
  ["LA TRINIDAD", "$550.00"],
  ["OCORONI", "$1,000.00"],
  ["SINALOA DE LEYVA", "$1,200.00"],
  ["GUAMUCHIL", "$1,200.00"],
  ["CULIACÁN", "$2,200.00"],
  ["COREREPE", "$480.00"],
  ["CERRO CABEZÓN", "$500.00"],
  ["EL HUITUZI", "$620.00"],
  ["ZEFERINO PAREDES", "$450.00"],
  ["CUBILETE", "$800.00"],
  ["MAZATLÁN", "$4,800.00"],
  ["EL TAJITO", "$390.00"],
  ["PRODUCTOS DEL FTE. HERDEZ", "$150.00"],
  ["LEON FONSECA GUASAVE", "$800.00"],
  ["ROTOPLAS - CENTRO", "$150.00"],
  ["BRECHA GVE.", "$1,000.00"],
  ["GENARO ESTRADA", "$700.00"],
  ["PENAL FEDERAL GUASAVE", "$600.00"],
  ["EL BURRION", "$700.00"],
  ["LAS GLORIAS GUASAVE", "$1,100.00"],
  ["EL CUBILETE GUASAVE", "$800.00"],
  ["TAMAZULA GUASAVE", "$800.00"],
  ["ANGOSTURA", "$1,500.00"],
  ["MOCORITO", "$1,400.00"],
  ["PERICOS", "$1,700.00"],
  ["BADIRAGUATO", "$2,200.00"],
  ["LA PIEDRERA (OXXO)", "$170.00"]
];

//JQuery
//Ocultar tabla de resultados de busqueda
$('#id-busqueda').hide();
$(document).ready(function(){
  $("#slct-sector").change(function(){
    consulta = $('#slct-sector').val();
    switch (consulta) {
      case 'Sector...': 
          $('.todos-sectores').hide();

          $(".todos-sectores").removeClass("col-xl-4");
          $('.todos-sectores').show(200);
          $('#id-busqueda').hide();
          break;
      case '1': 
          $('.todos-sectores').hide();
          $('#id-busqueda').hide();
          $(".todos-sectores").addClass("col-xl-4");

          $('#id-ahome').show(200);
          break;
  
      case '2':
          $('.todos-sectores').hide();
          $('#id-busqueda').hide();
          $(".todos-sectores").addClass("col-xl-4");

          $('#id-carrizo').show(200);
          break;

      case '3':
          $('.todos-sectores').hide();
          $('#id-busqueda').hide();
          $(".todos-sectores").addClass("col-xl-4");

          $("#id-topolobampo").show(200);
          break;
      case '4':
          $('.todos-sectores').hide();
          $('#id-busqueda').hide();
          $(".todos-sectores").addClass("col-xl-4");

          $('#id-elfuerte').show(200);
          break;
      case '5':
          $('.todos-sectores').hide();
          $('#id-busqueda').hide();
          $(".todos-sectores").addClass("col-xl-4");

          $('#id-guasave').show(200);
          break;
    }
  });

  
  $('#localidad').keyup(function(){
    if($('#localidad').val() != ""){
      //Se borran todos los renglones de la tabla HTML
      $('#tbl-busqueda > tbody > tr').remove();

      //obtenemos el valor del input en mayusculas
      str_input = $('#localidad').val().toUpperCase();
      for (i = 0; i < array_precios.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        console.log(str_input);
        //Obtenemos la localidad en mayusculas
        var str_arr = array_precios[i][0].toUpperCase();

        if (str_arr.indexOf(str_input) > -1) {
          $('.todos-sectores').hide();
          $(".todos-sectores").addClass("col-xl-4");
          $('#id-busqueda').show(50);
          console.log(str_arr.indexOf(str_input));
          tbl = $('#tbl-busqueda > tbody')[0];
          var num_reng = tbl.rows.length;
          var row = tbl.insertRow(num_reng);

          col = row.insertCell(0);
          //Extraemos de la cadena del array los caracteres del 0 hasta el index de la primera coincidencia del
          //string del input, le concatenamos la subcadena resultante desde el index de la primera coincidencia
          //del string del input hasta la longitud del string del input, por último concatenamos la subcadena
          //resultante DESDE el index del string del input sumandole la longitud de la cadena del input HASTA
          //la longitud de la cadena que hemos tomado del arreglo array_precios
          col.innerHTML = str_arr.substr(0, str_arr.indexOf(str_input)) + "<strong style='color: blue;'>" + array_precios[i][0].substr(str_arr.indexOf(str_input), str_input.length) + "</strong>";
          col.innerHTML += str_arr.substr(str_arr.indexOf(str_input) + str_input.length, str_arr.length);

          //Insertamos una segunda celda con el precio
          col = row.insertCell(1);
          col.innerHTML = array_precios[i][1];
        }
      }
    } else{
      $('#tbl-busqueda > tbody > tr').remove();
    }
  });
});