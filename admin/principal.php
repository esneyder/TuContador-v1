<?php 
session_start() ?>
<?php
 if(isset($_SESSION['name']))
{
}else{
 header("Location: index.php");
 }
 ?>

<?php require_once 'includes/functions.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Acirsas.com">

    <title>Acirsa - Administración</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="Formularios/cssForms/EstiloForms.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<left>
    <a href="#menu-toggle" class="btn btn-default btndiseno" id="menu-toggle">
        <img src="../img/fav.png"/>
    </a>
</left>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Aministración
                    </a>
                </li>
                <li>
                    <a id="EditSliderPrincipal" href="principal.php" >Slider Principal</a>
                </li>
                <li>
                    <a id="blog">Blog</a>
                </li>
                <li>
                    <a href="#">Usuarios</a>
                </li>
                <li>
                    <a href="#">Perfiles</a>
                </li>
                <li>
                    <a href="#">Empresa</a>
                </li>
                <li>
                    <a href="#">Catégorias</a>
                </li>
                <li>
                    <a href="#">Contacto</a>
                </li>
                <li>
                <a href="logout.php">Salir [<?php echo $_SESSION['name']; ?>]</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">

           <?php
            if(isset($_GET['inserted']))
            {
                ?>
                <div class="container">
                <div class="alert alert-info">
                <strong>Super!</strong> Post ingresado correctamente 
                <a href="principal.php">Inicio</a>!
                </div>
                </div>
                <?php
            }
            else if(isset($_GET['failure']))
            {
                ?>
                <div class="container">
                <div class="alert alert-warning">
                <strong>SORRY!</strong> Ha ocurrido un error !
                </div>
                </div>
                <?php
            }
            ?>

                    <div class="col-lg-12">    
                        <h3>Usuarios Registrados</h3>   
                        <table class="table table-striped table-hover">
                            <thead>
                              <tr>
                                <th>
                                   Nombre 
                                </th>
                                <th>
                                   Correo 
                                </th>
                                <th>
                                   Permiso 
                                </th>
                              </tr>
                            </thead>
                            <tbody>
                             <?php 
                             $rows=__UsuariosRegistrados();

                             foreach ($rows as $key )
                             {
                                echo'<tr>
                                        <td>'.$key['nombre'].'</td>
                                        <td>'.$key['email'].'</td>
                                        <td>'.$key['permiso'].'</td>

                                    </tr>';
                             }
                             ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/db.js"></script>



</body>

</html>
