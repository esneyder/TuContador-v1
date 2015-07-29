<!DOCTYPE html>
<html lang="en">
<head>
	 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	 <link rel="stylesheet" href="css/bootstrap.min.css">
	 <link rel="stylesheet" href="css/bootstrap.css">
	 <link rel="stylesheet" href="css/estilo.css">
	 <script src="js/jquery-2.1.3.min.js"></script>
 	 <script src="js/bootstrap.js"></script>
 	 <script src="js/bootstrap.min.js"></script>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body class="BodyIndex">
							
	<div class="container">

      <form class="form-signin" action="#" method="POST" id="logIn">
        <div class="LogoIndex">
            <img src="../img/fav.png"/>
            <h2 class="form-signin-heading">Tu Contador</h2>
        </div>
        <span class="glyphicon glyphicon-user"></span>
        <label for="inputEmail" class="sr-only" >usuario</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="ingrese su usuario" required>
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span>
        <input type="password" id="inputPassword" class="form-control" placeholder="Insegrese su contraseña" required>
        <div class="mensaje" class="alert alert-danger" role="alert"></div>
        <input class="btn btn-lg btn-primary btn-block" type="button" value="Ingresar" id="enviar" >
      </form>
    </div>
</body>
</html>