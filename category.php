<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trouvaille</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="stylecss.css" rel='stylesheet' type='text/css'/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
</head>

<body>
<?php include('function.php'); ?>
<?php include('top.php'); ?>
<!--/sticky-->
<?php include('slider.php'); ?>
<div style="height:50px"></div>
<div style="width:1000px; margin:auto" >

<div style="width:200px; float:left">

<table cellpadding="0" cellspacing="0" width="1000px">
<tr><td style="font-family:Lucida Calligraphy; font-size:20px; color:#09F"><b>Category</b></td></tr>
<?php


$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo "<tr><td style=' padding:5px;'><b><a href='subcat.php?catid=$data[0]'>$data[1]</a></b></td></tr>";

}
mysqli_close($cn);
?>

</table>

</div>

<div style="width:800px; float:left">
<table cellpadding="0px" cellspacing="0" width="1000px">
<tr><td class="headingText">Welcome to Trouvaille</td></tr>
<tr><td class="paraText" width="900px">
Travouille  provides a better experience of traveling 
to people and to  make it universally accessible and useful.
Started from the idea of providing a better system for the management of tour, 
travouille also focuses on the people's requirements by providing certain 
category of tour under different budgets . Travouille is developed in 2019
and is fully dedicated to users and their betterment.

Hi!how can we help ?
See our products 

Trouvaille totally focuses on the easement of people in traveling. 
It provides services like booking an airline ticket, Bus ticket or train ticket 
for different packages with different budget. Trouvaille also provides the 
opportunity to an individual to select their trip according to their 
requirements or to custom their own tour.Packages include various names 
of cities and the budget including all.the tickets of train ,flight or bus 
and even rates of hotels which are linked with our website. Travouille also 
helps in storing the history of the tour of an individual so that user can 
outlook it anytime and anywhere.
</td><td style="background-image:url(images/13.jpg); background-repeat:no-repeat; color:#FFF; font-family:Lucida Sans Unicode, Lucida Grande, sans-serif; font-size:24px; " width="700px" height="250px" ><div style="background:linear-gradient(#09F,#096,#09F); vertical-align:text-top; padding-left:5%;  width:100%;">HAVE A GOOD TIME &nbsp;&nbsp;&nbsp; without spending a dime</div	></td></tr></table>

</div>

</div>

<div style="clear:both"></div>

<?php include('bottom.php'); ?>
</body>
</html>