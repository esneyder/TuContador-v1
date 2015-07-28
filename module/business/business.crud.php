<?php

class crud
{
	private $db;
	
	function __construct($DB_con)
	{
		$this->db = $DB_con;
	}
	  
		
	public function create($empresa,
		                   $nit,
		                   $direccion,
                            $cuidad,
                            $tel1,
                            $tel2,
                            $web,  
		                    $correo,
		                    $region,
		                    $eslogan,
		                    $intro )
	{
		try
		{
			$stmt = $this->db->prepare("INSERT INTO empresa(empresa,
															nit,
															direccion,
															ciudad,
													        tel1,
													        tel2,
													        web,
													        correo,
													        region,
													        eslogan,
													        intro)
			 										VALUES(:empresa,
			 										        :nit,
			 										        :cuidad,
			 										        :tel1,
			 										        :tel2,
			 										        :web,
			 										        :correo,
			 										        :region,
			 										        :eslogan,
			 										        :intro )");
			$stmt->bindparam(":empresa",$empresa);
			$stmt->bindparam(":nit",$nit);
			$stmt->bindparam(":direccion",$direccion);
			$stmt->bindparam(":cuidad",$cuidad);
			$stmt->bindparam(":tel1",$tel1);
			$stmt->bindparam(":tel2",$tel2);
			$stmt->bindparam(":web",$web);
			$stmt->bindparam(":correo",$correo);
			$stmt->bindparam(":region",$region);
			$stmt->bindparam(":eslogan",$eslogan );
			$stmt->bindparam(":intro",$intro );
		 
			$stmt->execute();
			return true;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();	
			return false;
		}
		
	}
	
	public function getID($id)
	{
		$stmt = $this->db->prepare("SELECT * FROM empresa WHERE id=:id");
		$stmt->execute(array(":id"=>$id));
		$editRow=$stmt->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}
	
	public function update($id,$empresa,$nit,$direccion,
		                       $cuidad,$tel1,$tel2,$web,
		                       $correo,$region,$eslogan,$intro)
	{
		try
		{
			$stmt=$this->db->prepare("UPDATE empresa SET empresa=:empresa, 
			                                               nit=:nit, 
			                                               direccion=:direccion, 
														   cuidad =:cuidad, 
														   tel1=:tel1,
														   tel2=:tel2,
														   web=:web,
														   correo=:correo													 
														   region=:region													 
														   eslogan=:eslogan													 
														   intro=:intro													 
														   WHERE id=:id ");
			$stmt->bindparam(":empresa",$empresa);
			$stmt->bindparam(":nit",$nit);
			$stmt->bindparam(":direccion",$direccion);
			$stmt->bindparam(":cuidad",$cuidad);
			$stmt->bindparam(":tel1",$tel1);
			$stmt->bindparam(":tel2",$tel2);
			$stmt->bindparam(":web",$web);
			$stmt->bindparam(":correo",$correo);
			$stmt->bindparam(":region",$region);
			$stmt->bindparam(": eslogan",$eslogan );
			$stmt->bindparam(": intro",$intro );
			$stmt->bindparam(":id",$id);
			$stmt->execute();
			
			return true;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();	
			return false;
		}
	}
	
	public function delete($id)
	{
		$stmt = $this->db->prepare("DELETE FROM empresa WHERE id=:id");
		$stmt->bindparam(":id",$id);
		$stmt->execute();
		return true;
	}


/**
	 * select data from the the files
	 * @param int $id
	 * @return array contains mime type and BLOB data
	 */
	public function selectBusiness($id) {

		$sql = "SELECT  
				archivo
				FROM usuarios
				WHERE id = :id";

		$stmt = $this->db->prepare($sql);
		$stmt->execute(array(":id" => $id));		 
		$stmt->bindColumn(2, $data, PDO::PARAM_LOB);

		$stmt->fetch(PDO::FETCH_BOUND);

		return array("data" => $data);

	}


	
/*combo regiones*/
public function selectRegioneS($query)
{
	# code...
	$stmt=$this->db->prepare($query);
	$stmt->execute();
	 //echo "<SELECT NAME="region">";
	 echo "<option>Seleccione una Opción...</option>";
	if ($stmt->rowCount()>0) {
		 while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
		 	?>

		 	<?php 
		 	print('<OPTION VALUE="'.$row['nombre'].'">'.$row['nombre'].'</OPTION>');
		 	 ?> 
		 	<?php  
		 }
	}else {
		   ?>
		 	<?php 
		 	  print  "<option>No hay datos..</option>";
		 	 ?> 
		 	<?php 
	}
	echo "</select>";
}
/*combo tipo*/
public function selectTipo($query)
{
	# code...
	$stmt=$this->db->prepare($query);
	$stmt->execute();
	 //echo "<SELECT NAME="region">";
	 echo "<option>Seleccione una Opción...</option>";
	if ($stmt->rowCount()>0) {
		 while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
		 	?>

		 	<?php 
		 	print('<OPTION VALUE="'.$row['permiso'].'">'.$row['permiso'].'</OPTION>');
		 	 ?> 
		 	<?php  
		 }
	}else {
		   ?>
		 	<?php 
		 	  print  "<option>No hay datos..</option>";
		 	 ?> 
		 	<?php 
	}
	echo "</select>";
}
/*combo esTATDO*/
public function selectEstado($query)
{
	# code...
	$stmt=$this->db->prepare($query);
	$stmt->execute();
	 //echo "<SELECT NAME="region">";
	 echo "<option>Seleccione una Opción...</option>";
	if ($stmt->rowCount()>0) {
		 while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
		 	?>

		 	<?php 
		 	print('<OPTION VALUE="'.$row['nombrEstado'].'">'.$row['nombrEstado'].'</OPTION>');
		 	 ?> 
		 	<?php  
		 }
	}else {
		   ?>
		 	<?php 
		 	  print  "<option>No hay datos..</option>";
		 	 ?> 
		 	<?php 
	}
	echo "</select>";
}

	/* paging */
	
	public function dataview($query)
	{
		$stmt = $this->db->prepare($query);
		$stmt->execute();
	
		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
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
                
                <td align="center">
                <a href="edit-data.php?edit_id=<?php print($row['id']); ?>"><i class="glyphicon glyphicon-edit"></i></a>
                </td>
                <td align="center">
                <a href="delete.php?delete_id=<?php print($row['id']); ?>"><i class="glyphicon glyphicon-remove-circle"></i></a>
                </td>
                </tr>
                <?php
			}
		}
		else
		{
			?>
            <tr>
            <td>No hay datos para mostrar..</td>
            </tr>
            <?php
		}
		
	}
	
	public function paging($query,$records_per_page)
	{
		$starting_position=0;
		if(isset($_GET["page_no"]))
		{
			$starting_position=($_GET["page_no"]-1)*$records_per_page;
		}
		$query2=$query." limit $starting_position,$records_per_page";
		return $query2;
	}
	
	public function paginglink($query,$records_per_page)
	{
		
		$self = $_SERVER['PHP_SELF'];
		
		$stmt = $this->db->prepare($query);
		$stmt->execute();
		
		$total_no_of_records = $stmt->rowCount();
		
		if($total_no_of_records > 0)
		{
			?><ul class="pagination"><?php
			$total_no_of_pages=ceil($total_no_of_records/$records_per_page);
			$current_page=1;
			if(isset($_GET["page_no"]))
			{
				$current_page=$_GET["page_no"];
			}
			if($current_page!=1)
			{
				$previous =$current_page-1;
				echo "<li><a href='".$self."?page_no=1'>First</a></li>";
				echo "<li><a href='".$self."?page_no=".$previous."'>Previous</a></li>";
			}
			for($i=1;$i<=$total_no_of_pages;$i++)
			{
				if($i==$current_page)
				{
					echo "<li><a href='".$self."?page_no=".$i."' style='color:red;'>".$i."</a></li>";
				}
				else
				{
					echo "<li><a href='".$self."?page_no=".$i."'>".$i."</a></li>";
				}
			}
			if($current_page!=$total_no_of_pages)
			{
				$next=$current_page+1;
				echo "<li><a href='".$self."?page_no=".$next."'>Next</a></li>";
				echo "<li><a href='".$self."?page_no=".$total_no_of_pages."'>Last</a></li>";
			}
			?></ul><?php
		}
	}
	
	/* paging */
	
}
