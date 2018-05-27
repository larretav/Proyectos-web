<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/cssindex.css" rel="stylesheet">
    
    <title>Carlos Fashion Store</title>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  </script>
  <body>
    <!-- Imagen antes de cargar la pagina -->
    <!--<div id="preloader"></div> -->
    <form action="main.php" method="POST" name="login">
    <section id="elindex">
      <div class="modal-dialog">
        <div class="modal-content" id="login">
            <div class="modal-header">
              <h1 class="text-center">Bienvenido</h1>
              <h2 class="text-center">Carlos Fashion Store</h2>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <input type="text" name="usuario" class="form-control input-lg inputindex" placeholder="Nombre de usuario" required autofocus>
              </div>

              <div class="form-group">
                <input type="password" name="password" class="form-control input-lg inputindex" placeholder="Contraseña" required>
              </div>

              <div class="form-group">
                  <button type="submit" class="btn btn-lg btn-primary btn-block">Ingresar</button>
              </div>
            </div>
        </div>
      </div>
    </section>
    </form>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="Bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
