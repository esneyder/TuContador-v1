<?php
include_once '../../connection/dbconfig.php';
?>
<?php include_once '../../header-module.php'; ?>

<div class="clearfix"></div>

<div class="container">
<a href="add-data.php" class="pure-button">
<i class="fa fa-hdd-o"></i> &nbsp; Nuevo</a>
</div>

<div class="clearfix"></div><br />

<div class="container">
	 <table class='table table-bordered table-responsive'>
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
     <th colspan="2" align="center">Acción</th>
     </tr>
     <?php

		$query = "SELECT * FROM empresa";       
		$records_per_page=10;//CANTIDAD DE REGISTROS A MOSTRAR
		$newquery = $crud->paging($query,$records_per_page);
		$crud->dataview($newquery);
	 ?>
    <tr>
        <td colspan="14" align="center">
 			<div class="pagination-wrap">
            <?php $crud->paginglink($query,$records_per_page); ?>
        	</div>
        </td>
    </tr>
 
</table>
   
       
</div>

<?php include_once '../../footer-module.php'; ?>