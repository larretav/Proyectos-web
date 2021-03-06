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

    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <!-- Bootstrap CSS, Font Awesome y Tempus Dominus CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="auto-completar.css">

    <title>Lista de precios</title>
</head>
<body onload="Poner_Precios();">
    <div class="container-fluid" style="height:100%">
        <div class="row">
            <div class="col-md-12">
                <h1>Lista de precios de U.T.V.N.S</h1>  
            </div>
        </div>

        <!-- TABLA DE FILTROS -->
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-7 col-lg-5 col-xl-4 padding">
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <select class="form-control form-control-sm" id="slct-sector">
                            <option selected>Sector...</option>
                            <option value="1">Ahome</option>
                            <option value="2">Carrizo</option>
                            <option value="3">Topolobampo</option>
                            <option value="4">El Fuerte</option>
                            <option value="5">Guasave</option>
                        </select>
                    </div>
                    
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">ó</span>
                    </div>
                    <div class="autocomplete">
                        <input class="form-control form-control-sm" id="localidad" type="text" name="localidad" placeholder="Localidad" autofocus>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2" id>
                <p>CUADRO DE LA CIUDAD O EN LA MISMA ZONA: $40.00</p>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2">
                <p>DEL CUADRO A CUALQUIER COLONIA Y VICEVERSA: $50.00</p>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2">
                <p>DE COLONIA A COLONIA CRUZANDO EL CENTRO: $60.00</p>
            </div>
        </div>
        
        <!-- TABLA DE SECTORES -->
        <div class="row" id="contenedor-sectores">
            <div class="col-xs-12 col-lg-12">

                <div class="row" id="tbl-sectores">
                    
                    <div class="col-xs-12 col-sm-6 col-md-auto col-lg-auto todos-sectores" id="id-ahome">
                        <table class="table table-sm table-hover table-striped" id="tbl-ahome">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">SECTOR AHOME</th>
                                    <th scope="col">PRECIO</th>
                                </tr>
                            </thead>
                        
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-auto col-lg-auto todos-sectores" id="id-carrizo">
                        <table class="table table-sm table-hover table-striped" id="tbl-carrizo">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">SECTOR CARRIZO</th>
                                    <th scope="col">PRECIO</th>
                                </tr>
                            </thead>
                        
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-auto col-lg-auto todos-sectores" id="id-topolobampo">
                        <table class="table table-sm table-hover table-striped" id="tbl-topolobampo">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">SECTOR TOPOLOBAMPO</th>
                                    <th scope="col">PRECIO</th>
                                </tr>
                            </thead>
                        
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-auto col-lg-auto todos-sectores" id="id-elfuerte">
                        <table class="table table-sm table-hover table-striped" id="tbl-elfuerte">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">SECTOR EL FUERTE</th>
                                    <th scope="col">PRECIO</th>
                                </tr>
                            </thead>
                                
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-auto col-lg-auto todos-sectores" id="id-guasave">
                        <table class="table table-sm table-hover table-striped" id="tbl-guasave">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">SECTOR GUASAVE</th>
                                    <th scope="col">PRECIO</th>
                                </tr>
                            </thead>
                        
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-auto col-lg-auto todos-sectores" id="id-busqueda">
                        <table class="table table-sm table-hover table-striped" id="tbl-busqueda">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">LOCALIDAD</th>
                                    <th scope="col">PRECIO</th>
                                </tr>
                            </thead>
                        
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery, Popper y Bootstrap -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    
    <script src="scripts.js"></script>
</body>
</html>