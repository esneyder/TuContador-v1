<?php
session_start();
include_once '../../connection/dbconfig.php';
 
$user_email = $_SESSION['email'];
$stmt = $DB_con->prepare("SELECT * FROM usuarios WHERE email=:email");
$stmt->execute(array(":email"=>$email));
$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css"  />
<title>welcome - <?php print($userRow['email']); ?></title>
</head>

<body>

<div class="header">
 
    <div class="right">
    	<label><a href="logout.php?logout=true"><i class="glyphicon glyphicon-log-out"></i> logout</a></label>
    </div>
</div>
<div class="content">
welcome : <?php echo 'Welcome '.$_SESSION['email']; ?>
 
 
</div>
</body>
</html>