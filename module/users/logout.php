<?php
include_once '../connection/dbconfig.php';

if($_SESSION['email']!="")
{
	$crud->redirect('principal.php');
}
if(isset($_GET['logout']) && $_GET['logout']=="true")
{
	$crud->logout();
	$crud->redirect('index.php');
}
if(!isset($_SESSION['email']))
{
	$crud->redirect('index.php');
}