<?php session_start();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$_SESSION["username"]="";
$_SESSION["usertype"]="";
$_SESSION["loginstatus"]="";

header("location:loginform.php");
?>
</body>
</html>