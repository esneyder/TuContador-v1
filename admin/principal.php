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
 <?php include 'menu.php'; ?>
            <div class="container-fluid">
                <div class="row">


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

<script>
     $(document).on('ready',principal);

        function principal() {
            alert('a');
        $('#menu-toggle').on('click',menu);
        }

        function menu()
        {
            alert('b');
        $("#wrapper").toggleClass("toggled");
        }

        </script>


</body>

</html>
