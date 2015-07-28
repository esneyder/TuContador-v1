<?php
 
include_once '../../connection/dbconfig.php';
 

if(isset($_POST['btn-del']))
{
	$id = $_GET['delete_id'];
	$crud->delete($id);
	header("Location: delete.php?deleted");	
}

?>

<?php include_once '../../header-module.php'; ?>

<div class="clearfix"></div>

<div class="container">

	<?php
	if(isset($_GET['deleted']))
	{
		?>
        <div class="alert alert-success">
    	<strong>Perfecto!</strong> Datos empresa eliminados... 
		</div>
        <?php
	}
	else
	{
		?>
        <div class="alert alert-danger">
    	<strong>Pregunta !</strong> Esta seguro de eliminar el registro ? 
		</div>
        <?php
	}
	?>	
</div>

<div class="clearfix"></div>

<div class="container">
 	
	 <?php
	 if(isset($_GET['delete_id']))
	 {
		 ?>
         <table class='table table-bordered'>
         <tr>
          <th>#</th>
         <th>Nombres</th>
         <th>Nit</th> 
         <th>Dirección</th>
         <th>Ciudad</th>
         <th>Teléfono 1</th>
         <th>Telefono 2</th>
         <th>Web</th>
         <th>E-mail</th>
         <th>Region</th>
         <th>Eslogan</th>
         <th>Descripción</th>
         </tr>
         <?php
         $stmt = $DB_con->prepare("SELECT * FROM empresa WHERE id=:id");
         $stmt->execute(array(":id"=>$_GET['delete_id']));
         while($row=$stmt->fetch(PDO::FETCH_BOTH))
         {
             ?>
             <tr>
                <td><?php print($row['id']); ?></td>
                <td><?php print($row['empresa']); ?></td>
                <td><?php print($row['nit']); ?></td>
                <td><?php print($row['direccion']); ?></td>
                <td><?php print($row['ciudad']); ?></td>
                <td><?php print($row['tel1']); ?></td>
                <td><?php print($row['tel2']); ?></td>
                <td><?php print($row['web']); ?></td>
                <td><?php print($row['correo']); ?></td>
                <td><?php print($row['region']); ?></td>
                <td><?php print($row['eslogan']); ?></td>
                <td><?php print($row['intro']); ?></td>
             </tr>
             <?php
         }
         ?>
         </table>
         <?php
	 }
	 ?>
</div>

<div class="container">
<p>
<?php
if(isset($_GET['delete_id']))
{
	?>
  	<form method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
    <button class="btn btn-large btn-primary" type="submit" name="btn-del"><i class="glyphicon glyphicon-trash"></i> &nbsp; SI</button>
    <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; NO</a>
    </form>  
	<?php
}
else
{
	?>
    <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Back to index</a>
    <?php
}
?>
</p>
</div>	
<?php include_once '../../footer-module.php'; ?>