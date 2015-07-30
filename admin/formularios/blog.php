<?php
 session_start() ;
 if(isset($_SESSION['name']))
{
}else{ header("Location: pricipal.php");} 

include_once '../../connection/dbconfig.php';
if(isset($_POST['btn-save']))
{
    //$imagen=$_POST['imagen'];
    //$mini=$_POST['mini'];
	//$titulo = $_POST['titulo'];
	//$intro = $_POST['intro'];
	//$texto = $_POST['texto'];
    // $categoria = $_POST['categoria'];
    //$fecha = date('y-m-d');
    //$usuario = $_SESSION['name'];

   $imagen="sfsfsf";
   $mini="sfsfsf";
    $titulo = "sfsfsf";
    $intro = "sfsfsf";
    $texto = "sfsfsf";
    $categoria = "sfsfsf";
   $fecha = date('y-m-d');
   $usuario = $_SESSION['name'];
   
	 
	
	if($crud->create($imagen,$mini,$titulo,$intro,
		               $texto,$categoria,$fecha, $usuario ))
	{
	     
		header("Location: blog.php?inserted");
	}
	else
	{
		header("Location: blog.php?failure");
	}
}


?>
 
  
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
</head>
<body>
  <div class="clearfix"></div>

<div class="container">
<?php
if(isset($msg))
{
	echo $msg;
}
?>
</div>

	<div id="ContForm">
	<div class="input-group">
		<button id="bot" class="btn btn-primary dropdown-toggle"
		data-toggle="modal" data-target="#ModalAddSlider"
		  placeholder="Add">
		    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
		</button>
		<button type="button" class="btn btn-primary dropdown-toggle"  aria-haspopup="true" placeholder="Actualizar Lista" style="margin-left: 10px;">
		    <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
		</button>
	</div>

	<div class="modal fade" id="ModalAddSlider" tabindex="-1" 
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			
			<div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	          <h4 class="modal-title" id="myModalLabel">Administración Blog</h4>
			<div class="clearfix"></div>

			
			</div>	


			<form enctype="multipart/form-data"  method="POST">	
			<div class="input-group">
	      		<input type="text" class="form-control"
	      		 name="imagen" placeholder="link Imagen" 
	      		 aria-describedby="basic-addon2" required/>
	    	</div>
	    	<div class="input-group">
	      		<input type="text" class="form-control" 
	      		name="mini" placeholder="link Imagene preview" 
	      		aria-describedby="basic-addon2" required/>
	    	</div>
	    	 <div class="input-group">
	      		<input type="text" class="form-control"
	      		 name="titulo" placeholder="Título"
	      		  aria-describedby="basic-addon2" required/>
	    	</div>

	    	<div class="input-group">
	      		<textarea type="textarea" name="intro" 
	      		class="form-control" placeholder="Introducción" 
	      		aria-describedby="basic-addon2" rows="5" required/>
	    	</div>
	    	<div class="input-group">
	      		<textarea type="textarea" name="texto" rows="20" 
	      		class="form-control" placeholder="Descripción" 
	      		aria-describedby="basic-addon2" required/>
	    	</div>
	    	<div class="input-group">
	      		<select type="text" class="form-control" name="categoria" 
	      		placeholder="Seleccione una Opción" 
	      		aria-describedby="basic-addon2">
					 
                     <?php 
                      $query = "SELECT * FROM categorias"; 
                      $crud->selectCategorias($query);
                      ?>
                 
	      		</select>
	    	</div>
	    	<div class="input-group">
	    		 <button type="submit"  
	    		 name="btn-save" name="btn-save" id="btn-save"
	    		 class="btn btn-primary">Guardar</button>

	    	</div>
	    	</form>
	    </div>

<?php 

if(isset($_POST['btn-update']))
{   

   $imagen=$_POST['imagen'];
    $mini=$_POST['mini'];
	$titulo = $_POST['titulo'];
	$intro = $_POST['intro'];
	$texto = $_POST['texto'];
     $categoria = $_POST['categoria'];
    $fecha = date('y-m-d');
    $usuario = $_SESSION['name'];
	
	if($crud->update($id,$imagen,$mini,$titulo,$intro,$texto,$categoria,$fecha, $usuario))
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

if(isset($_GET['4']))
{
	$id = $_GET['id'];
	extract($crud->getID($id));	
}


 ?>

	<div class="modal fade" id="ModalEditSlider" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			 
			<div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	          <h4 class="modal-title" id="myModalLabel">Aministrar blog</h4>
			</div>	


			
			<form enctype="multipart/form-data"  method="POST">	
			<div class="input-group">
	      		<input type="text" class="form-control"
	      		value="<?php echo $imagen;  ?>"
	      		 name="imagen" placeholder="link Imagen" 
	      		 aria-describedby="basic-addon2" required/>
	    	</div>
	    	<div class="input-group">
	      		<input type="text" class="form-control" 
	      		name="mini" placeholder="link Imagene preview" value="<?php echo $mini;  ?>" 
	      		aria-describedby="basic-addon2" required/>
	    	</div>
	    	 <div class="input-group">
	      		<input type="text" class="form-control"
	      		 name="titulo" placeholder="Título" value="<?php echo $titulo;  ?>"
	      		  aria-describedby="basic-addon2" required/>
	    	</div>

	    	<div class="input-group">
	      		<textarea type="textarea" name="intro" 
	      		class="form-control" placeholder="Introducción" value="<?php echo $intro;  ?>"
	      		aria-describedby="basic-addon2" rows="5" required/>
	    	</div>
	    	<div class="input-group">
	      		<textarea type="textarea" name="texto" rows="20" 
	      		class="form-control" placeholder="Descripción" value="<?php echo $texto;  ?>"
	      		aria-describedby="basic-addon2" required/>
	    	</div>
	    	<div class="input-group">
	      		<select type="file" class="form-control" name="categoria" 
	      		placeholder="Seleccione una Opción" 
	      		aria-describedby="basic-addon2">
					 
                     <?php 
                      $query = "SELECT * FROM categorias"; 
                      $crud->selectCategorias($query);
                      ?>
                 
	      		</select>
	    	</div>
	    	<div class="input-group">
	    		 <button type="submit"  
	    		 name="btn-save" name="btn-save" id="btn-save"
	    		 class="btn btn-primary">Guardar</button>

	    	</div>
	    	</form>
	    </div>


		<div class="modal fade bs-example-modal-sm" id="ModalDeleteSlider" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
		  <div class="modal-header">
	          <button type="button" class="close"
	           data-dismiss="modal" aria-label="Close">
	           <span aria-hidden="true">×</span></button>
	          <h4 class="modal-title" id="myModalLabel">Eliminar Slider</h4>
			</div>	
		  	<div class="modal-dialog modal-sm">
		      ¿Seguro que deseas Eliminar este Slider?	      
		    <button type="button" class="btn btn-danger" style="margin: 5px auto">Eliminar</button>
		  </div>
		</div>

		<div class="cont-left">

		 <table class='table table-stripe table-hover'>
     <tr>
      
    
     <th>Título</th>
     <th>Introducción</th>
     <th>Descripción</th> 
     <th>Categoría</th>
     <th>Fecha</th>     
     <th>Usuario</th>     
     <th colspan="2" align="center">Acción</th>
     </tr>
     <?php

		$query = "SELECT * FROM noticias";       
		$records_per_page=5;//CANTIDAD DE REGISTROS A MOSTRAR
		$newquery = $crud->paging($query,$records_per_page);
		$crud->dataview($newquery);
	 ?>
    <tr>
        <td colspan="12" align="center">
 			<div class="pagination-wrap">
            <?php $crud->paginglink($query,$records_per_page); ?>
        	</div>
        </td>
    </tr>
 
</table>
	    </div>





	    <div class="cont-right">
			<div class="input-group">
	      		<input type="text" class="form-control" placeholder="Titulo" aria-describedby="basic-addon2"/>
	    	</div>
	    	<div class="input-group">
	      		<input type="text" class="form-control" placeholder="Subtitulo" aria-describedby="basic-addon2"/>
	    	</div>
	    	<div class="input-group">
	      		<input type="file" class="form-control" placeholder="Seleccione Imagen" aria-describedby="basic-addon2"/>
	    	</div>
	    	<div class="input-group">
	      		<textarea type="textarea" class="form-control" placeholder="InfoAdicional" aria-describedby="basic-addon2"/>
	    	</div>
	    	<div class="input-group">
	      		<select type="file" class="form-control" placeholder="Seleccione Imagen" aria-describedby="basic-addon2">
					<option>a</option>
					<option>b</option>
					<option>c</option>
					<option>d</option>
	      		</select>
	    	</div>
	    	<div class="input-group">
	    		<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true">
	    			Guardar
	    		</button>
	    	</div>
	    </div>
	</div>
</body>
</html>