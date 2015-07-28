<?php
 
include_once '../../connection/dbconfig.php';
if(isset($_POST['btn-save']))
{
 
	$empresa = $_POST['nombre'];
	$nit = $_POST['nit'];
	$direccion = $_POST['direccion'];   
  $cuidad = $_POST['cuidad'];
  $tel1 = $_POST['telefono1'];
  $tel2 = $_POST['telefono2'];
  $web = $_POST['web'];
  $correo = $_POST['correo'];
  $region = $_POST['region'];
  $eslogan = $_POST['eslogan'];
  $region = $_POST['intro'];
	 
	
	if($crud->create($empresa,
                    $nit,
                    $direccion,
                    $cuidad,
                    $tel1,
                    $tel2,
                    $web,  
                    $correo,
                    $region,
                    $eslogan,
                    $intro))
	{
		header("Location: add-data.php?inserted");
	}
	else
	{
		header("Location: add-data.php?failure");
	}
}
?>
<?php include_once '../../header-module.php'; ?>
<div class="clearfix"></div>

<?php
if(isset($_GET['inserted']))
{
	?>
    <div class="container">
	<div class="alert alert-info">
    <strong>Super!</strong> Datos de su empresa ingresado correctamente <a href="index.php">Inicio</a>!
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

<div class="clearfix"></div><br />

<div class="container">

 	<form enctype="multipart/form-data"  class="pure-form pure-form-stacked" method="POST">
    <fieldset>
        <legend>  Configuración   Empresa</legend>

        <div class="pure-g">
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="first-name">Nombre</label>
                <input name="nombre" class="pure-u-23-24" type="text" required>
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="last-name">Nit</label>
                <input name="nit" class="pure-u-23-24" type="text"required>
            </div>
            

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="direccion">Dirección</label>
                <input name ="direccion" class="pure-u-23-24" type="text" required>
            </div>
            
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="last-name"> Ciudad</label>
                <input name="cuidad" class="pure-u-23-24" type="text">
            </div> 
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="last-name"> Teléfono 1</label>
                <input name="telefono1" class="pure-u-23-24" type="text">
            </div>
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="last-name"> Teléfono 2</label>
                <input name="telefono2" class="pure-u-23-24" type="text">
            </div>
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="last-name"> Web</label>
                <input name="web" class="pure-u-23-24" type="text">
            </div>
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="last-name"> Correo</label>
                <input name="correo" class="pure-u-23-24" type="email">
            </div> 
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="state">Region</label>
                <select name="region" class="pure-input-1-2">
                     <?php 
                      $query = "SELECT * FROM region"; 
                      $crud->selectRegioneS($query);
                      ?>
                </select>
            </div>
             <div class="pure-u-1 pure-u-md-1-3">
                <label for="last-name"> Eslogan</label>
                <input name="eslogan" class="pure-u-23-24" type="text">
            </div>

            <div class="pure-u-1 pure-u-md-1-6">
                <label for="last-name"> Descripción</label>
                <textarea name="intro" id="" cols="100" rows="5"></textarea>
            </div>

        </div> 
        <button type="submit" name="btn-save" id="btn-save" class="pure-button pure-button-primary">Guardar Usuario</button>
      <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Volver a index</a>
            
    </fieldset>
</form>
     
     
</div>

<?php include_once '../../footer-module.php'; ?>