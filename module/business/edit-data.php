<?php
 include_once '../../connection/dbconfig.php';
if(isset($_POST['btn-update']))
{   $id = $_GET['edit_id'];
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
   
	
	if($crud->update($id,$empresa,
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
		$msg = "<div class='alert alert-info'>
				<strong>Perfectp!</strong> Registro actualizado correctamente.. <a href='index.php'>Inicio</a>!
				</div>";
	}
	else
	{
		$msg = "<div class='alert alert-warning'>
				<strong>SORRY!</strong> Error al actualizar el registro !
				</div>";
	}
}

if(isset($_GET['edit_id']))
{
	$id = $_GET['edit_id'];
	extract($crud->getID($id));	
}

?>
<?php include_once '../../header-module.php'; ?>

<div class="clearfix"></div>

<div class="container">
<?php
if(isset($msg))
{
	echo $msg;
}
?>
</div>

<div class="clearfix"></div><br />

<div class="container">
	 
      <form class="pure-form pure-form-stacked" method="POST">
       <fieldset>
        <legend>  Configuración   Empresa</legend>

        <div class="pure-g">
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="first-name">Nombre</label>
                <input name="nombre" class="pure-u-23-24" value="<?php echo $empresa;?>" type="text" required>
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="last-name">Nit</label>
                <input name="nit" class="pure-u-23-24" value="<?php echo $nit;?>" type="text"required>
            </div>
            

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="direccion">Dirección</label>
                <input name ="direccion" class="pure-u-23-24" value="<?php echo $direccion;?>" type="text" required>
            </div>
            
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="last-name"> Ciudad</label>
                <input name="cuidad" class="pure-u-23-24" type="text" value="<?php echo $ciudad;?>">
            </div> 
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="last-name"> Teléfono 1</label>
                <input name="telefono1" class="pure-u-23-24" type="text" value="<?php echo $tel1;?>">
            </div>
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="last-name"> Teléfono 2</label>
                <input name="telefono2" class="pure-u-23-24" value="<?php echo $tel2;?>" type="text">
            </div>
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="last-name"> Web</label>
                <input name="web" class="pure-u-23-24" type="text" value="<?php echo $web;?>">
            </div>
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="last-name"> Correo</label>
                <input name="correo" class="pure-u-23-24" type="email" value="<?php echo $correo;?>">
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
                <input name="eslogan" class="pure-u-23-24" type="text" value="<?php echo $eslogan;?>">
            </div>

            <div class="pure-u-1 pure-u-md-1-6">
                <label for="last-name"> Descripción</label>
                <textarea name="intro" id="" cols="100" rows="5"><?php echo $intro;?></textarea>
            </div>

        </div>
        <button type="submit" name="btn-update" class="pure-button pure-button-primary">Actualizar</button>
      <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; volver a index</a>
            
    </fieldset>
</form>
     
     
</div>

<?php include_once '../../footer-module.php'; ?>