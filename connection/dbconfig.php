<?php

$DB_host = "50.62.209.74:3306";
$DB_user = "tucontador2015";
$DB_pass = "BDtucontador2015";
$DB_name = "admon10_tucontador";


try
{
	$DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
	$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo $e->getMessage();
}
//incluyo los archivos funciones en su respectivo orden
if (is_file("user.crud.php")) { 
include_once 'user.crud.php';
$crud = new crud($DB_con);

}elseif (is_file("post.crud.php")) {
 include_once 'post.crud.php';
 $crud = new crud($DB_con);
}elseif (is_file("get-post.php")) {
	 include_once 'get-post.php';
    $post = new post($DB_con);
}elseif (is_file("business.crud.php")) {
	 include_once 'business.crud.php';
    $crud = new crud($DB_con);
}

?>