function autocomplete(inp, arr) {
    /*the autocomplete function takes two arguments,
    the text field element and an array of possible autocompleted values:*/
    var currentFocus;
    /*execute a function when someone writes in the text field:*/
    inp.addEventListener("input", function(e) {
        var a, b, i, val = this.value;
        /*close any already open lists of autocompleted values*/
        closeAllLists();
        if (!val) { return false;}
        currentFocus = -1;
        /*create a DIV element that will contain the items (values):*/
        a = document.createElement("DIV");
        a.setAttribute("id", this.id + "autocomplete-list");
        a.setAttribute("class", "autocomplete-items");
        /*append the DIV element as a child of the autocomplete container:*/
        this.parentNode.appendChild(a);
        /*for each item in the array...*/
        for (i = 0; i < arr.length; i++) {
          /*check if the item starts with the same letters as the text field value:*/
          if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
            /*create a DIV element for each matching element:*/
            b = document.createElement("DIV");
            /*make the matching letters bold:*/
            b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
            b.innerHTML += arr[i].substr(val.length);
            /*insert a input field that will hold the current array item's value:*/
            b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
            /*execute a function when someone clicks on the item value (DIV element):*/
                b.addEventListener("click", function(e) {
                /*insert the value for the autocomplete text field:*/
                inp.value = this.getElementsByTagName("input")[0].value;
                /*close the list of autocompleted values,
                (or any other open lists of autocompleted values:*/
                closeAllLists();
            });
            a.appendChild(b);
          }
        }
    });
    /*execute a function presses a key on the keyboard:*/
    inp.addEventListener("keydown", function(e) {
        var x = document.getElementById(this.id + "autocomplete-list");
        if (x) x = x.getElementsByTagName("div");
        if (e.keyCode == 40) {
          /*If the arrow DOWN key is pressed,
          increase the currentFocus variable:*/
          currentFocus++;
          /*and and make the current item more visible:*/
          addActive(x);
        } else if (e.keyCode == 38) { //up
          /*If the arrow UP key is pressed,
          decrease the currentFocus variable:*/
          currentFocus--;
          /*and and make the current item more visible:*/
          addActive(x);
        } else if (e.keyCode == 13) {
          /*If the ENTER key is pressed, prevent the form from being submitted,*/
          e.preventDefault();
          if (currentFocus > -1) {
            /*and simulate a click on the "active" item:*/
            if (x) x[currentFocus].click();
          }
        }
    });
    function addActive(x) {
      /*a function to classify an item as "active":*/
      if (!x) return false;
      /*start by removing the "active" class on all items:*/
      removeActive(x);
      if (currentFocus >= x.length) currentFocus = 0;
      if (currentFocus < 0) currentFocus = (x.length - 1);
      /*add class "autocomplete-active":*/
      x[currentFocus].classList.add("autocomplete-active");
    }
    function removeActive(x) {
      /*a function to remove the "active" class from all autocomplete items:*/
      for (var i = 0; i < x.length; i++) {
        x[i].classList.remove("autocomplete-active");
      }
    }
    function closeAllLists(elmnt) {
      /*close all autocomplete lists in the document,
      except the one passed as an argument:*/
      var x = document.getElementsByClassName("autocomplete-items");
      for (var i = 0; i < x.length; i++) {
        if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}
/* Arreglo con todas las localidades para la busqueda de autocompletar */
var locali=[
    //SECTOR AHOME
    "BRISAS",
    "EJIDO LOUISIANA",
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
    "SAN  MIGUEL ",
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
    "EJIDO 5 DE MAYO",
    "2 DE ABRIL",
    "TAXTES",
    "TEROQUE",
    "ALIMENTOS DEL FUERTE",
    "EJIDO MOCHICAHUI",
    "CONSTANCIA",
    "VINATERIAS",
    "EJ. PARAISO",
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
    "EJIDO 4 MILPAS",
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
    "EJ. BATAMOTE",
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

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("localidad"), locali);
