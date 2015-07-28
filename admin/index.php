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
             


        </div>
    </div>

</body>

</html>