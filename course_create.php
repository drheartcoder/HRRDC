<html>
<head>
<link rel="SHORTCUT ICON" href="images/hrrdclogo.JPG" style="size:auto">
<title>HRRDC</title>
</head>
<body>
<?php
$crs=$_POST['course'];
$duration=$_POST['duration'];
$fees=$_POST['fees'];

include"dbconnect.php";

$a=mysql_query("insert into coursedb(COURSE_NAME,DURATION,FEES) values('$crs','$duration','$fees')");
if($a==1)
	{
	}
else
	{
		?>
		<script>alert("Record Not Deleted.....!");</script>
		<?php
	}
?>

</body>
</html>