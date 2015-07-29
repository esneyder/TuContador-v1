<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
	<script>
	</script>

	<div id="ContForm">
	<div class="input-group">
		<button id="bot" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" placeholder="Agregar Slider">
		    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
		</button>
		<button type="button" class="btn btn-primary dropdown-toggle"  aria-haspopup="true" placeholder="Actualizar Lista" style="margin-left: 10px;">
		    <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
		</button>
	</div>
	<div class="modal fade" id="ModalEditSlider" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	          <h4 class="modal-title" id="myModalLabel">Editar Slider</h4>
			</div>		
			<div class="input-group">
	      		<input type="text" class="form-control" placeholder="Titulo" aria-describedby="basic-addon2"/>
	    	</div>
	    	<div class="input-group">
	      		<input type="text" class="form-control" placeholder="Subtitulo" aria-describedby="basic-addon2"/>
	    	</div>
	    	<div class="input-group">
	    		<img class="media-object" src="...">
	      		<input type="text" class="form-control" placeholder="Url Imagen" aria-describedby="basic-addon2"/>
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


		<div class="modal fade bs-example-modal-sm" id="ModalDeleteSlider" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
		  <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	          <h4 class="modal-title" id="myModalLabel">Eliminar Slider</h4>
			</div>	
		  	<div class="modal-dialog modal-sm">
		      ¿Seguro que deseas Eliminar este Slider?	      
		    <button type="button" class="btn btn-danger" style="margin: 5px auto">Eliminar</button>
		  </div>
		</div>

		<div class="cont-left">

		<table class="table table-striped">
		    <thead>
		      <tr>
		        <th>Titulo</th>
		        <th>Subtitulo</th>
		        <th>Imagen</th>
		        <th>Ubicación</th>
		      </tr>
		    </thead>
		    <tbody>
		<?php
		include 'SliderPrincipal/Php/CrudPrincipalSlider.php';
		$fVSlider= new CrudPrincipalSlider();
		$listSlider= $fVSlider->GetSlider();
		foreach ($listSlider as $key => $fila) {

			$ubicacion='';
			 	
							switch ($fila['ubicacion']) {
								case 'met_thumbnail_slider_1_effects met_thumbnail_slider_1_effects_left met_thumbnail_slider_1_top':
									$ubicacion="Superios Izquierda";
									break;
								case 'met_thumbnail_slider_1_effects met_thumbnail_slider_1_effects_right met_thumbnail_slider_1_top':
									$ubicacion="Superior Derecha";
									break;
								case 'met_thumbnail_slider_1_effects met_thumbnail_slider_1_effects_left met_thumbnail_slider_1_bottom':
									$ubicacion="Inferior Izquierda";
									break;
								case 'met_thumbnail_slider_1_effects met_thumbnail_slider_1_effects_right met_thumbnail_slider_1_bottom':
									$ubicacion="Inferior Derecha";
									break;
								default:
									$ubicacion="No detectada";
									break;
							}
			echo'<tr value="'.$key.'">
			        <td>'.$fila['titulo'].'</td>
			        <td>'.$fila['subtitulo'].'</td>
			        <td><img class="media-object" src="'.$fila['imagen'].'" ></td>
			        <td>'.$ubicacion.'</td>
			        <td class="IconoEdit">
			        	<button value="'.$key.'" id="EditedSlider" data-toggle="modal" data-target="#ModalEditSlider">
			        		<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
			        	</button>
			        </td>
			        <td class="IconoDelete" >
			        <button data-toggle="modal" data-target="#ModalDeleteSlider">
			        		<span value="'.$key.'" class="glyphicon glyphicon-remove" aria-hidden="true"></span>
			        </button>
			        </td>
			      </tr>';
		}

		?>
		    </tbody>
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