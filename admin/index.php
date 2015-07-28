<?php
include_once '../connection/dbconfig.php';

 

if(isset($_POST['btn-login']))
{
     
    $email = $_POST['txt_email'];
    $upass = $_POST['txt_password'];
        
    if($crud->login($email,$upass))
    {
        $crud->redirect('principal.php');
    }
    else
    {
        $error = "Datos incorrectos";
    }   
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin|  Acirsas</title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/maps/jquery-jvectormap-2.0.1.css" />
    <link href="css/icheck/flat/green.css" rel="stylesheet" />
    <link href="css/floatexamples.css" rel="stylesheet" type="text/css" />
    <link href="css/personalizado.css" rel="stylesheet" type="text/css" />

    <script src="js/jquery.min.js"></script>
    <script src="js/db.js"></script>
    <script src="js/nprogress.js"></script>  
    <script>
        NProgress.start();
    </script>
    
    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

     <?php include 'nav.php'; ?>

</head>

<body style="background:#F7F7F7;">
    
    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>

        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
                    <form method="post">
                        <h1>Accedo administración</h1>
                        <?php
                        if(isset($error))
                        {
                                 ?>
                                 <div class="alert alert-danger">
                                    <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?> !
                                 </div>
                                 <?php
                        }
                        ?>
                        <div>
                            <input type="text" class="form-control" placeholder="Username" required=""  name="txt_email"/>
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" required="" name="txt_password"/>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-home"></i> Inicio <span class="fa fa-chevron-down"></span></a>
                                   
                                </li>
                                <li><a><i class="fa fa-edit"></i> Formularios <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="form.html">General Form</a>
                                        </li>
                                        <li><a id="FormSliderPrincipal" >Slider Principal</a>
                                        </li>
                                        <li><a href="form_validation.html">Form Validation</a>
                                        </li>
                                        <li><a href="form_wizards.html">Form Wizard</a>
                                        </li>
                                        <li><a href="form_upload.html">Form Upload</a>
                                        </li>
                                        <li><a href="form_buttons.html">Form Buttons</a>
                                        </li>
                                    </ul>
                                </li>
                                 
                                <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="tables.html">Tables</a>
                                        </li>
                                        <li><a href="tables_dynamic.html">Table Dynamic</a>
                                        </li>
                                    </ul>
                                </li>
                                 
                            </ul>
 
                        <div>
                             <button type="submit" name="btn-login" class="btn btn-block btn-primary">
                            <i class="glyphicon glyphicon-log-in"></i>&nbsp;Login
                            </button>
                             
 
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                            <p class="change_link">No dispones de acceso
                                <a href="/" class="to_register"> <strong>Salir</strong> </a>
                            </p>
                             
                        </div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
 
            <!-- /top navigation -->

            <!-- page content -->
                <div id="FomulariosCont"></div>
 
                <!-- footer content -->
 
             
 


        </div>
    </div>

</body>

</html>
