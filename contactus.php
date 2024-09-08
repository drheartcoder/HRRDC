<html>
<head>
<link rel="SHORTCUT ICON" href="images/hrrdclogo.JPG" style="size:auto">
<title>HRRDC</title>

<?php
	include 'bootstrapres.php';
?>
</head>

<body>

<?php include 'toplogo.php'?>

<div class="container" align="center">
<?php include 'topmenu.php' ?>
</div>

<div class="container">

	<div class="row">

        <div class="span8">
        <div class="well" style="height:auto">
            
		<h3 style="color:#0033CC;" align="center"><b>Contact Us</b></h3>
			<center>
			<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1916.1231015226224!2d73.75444247486875!3d19.997814443104087!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sin!4v1414739500994" width="700" height="380" frameborder="1" style="border:1 solid #000000"></iframe>
			<!--<br /><small><a href="https://www.google.com/maps?ll=19.998006,73.754303&z=17&t=m&hl=en-US&gl=IN&mapclient=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>-->    
			</center>
			<br />
			<?php
				include"dbconnect.php";
				$q=mysql_query("select * from  company");
				while($res=mysql_fetch_array($q))
				{
					extract($res);
			?>
			<b style="color:#0033CC;font-size:20px">Address:</b>
			<br />
			<span style="text-align:center"><b style="font-size:16px;"><?php echo $name; ?></b></span>
			<br/>
			<?php echo $address; ?>
			<br/>
			<b style="color:#0033CC;font-size:16px">Email ID:</b>
			<?php echo $emailid; ?>
			<br />
			<b style="color:#0033CC;font-size:16px">Website:</b>
			<?php echo $website; ?>
			<br />
			<b style="color:#0033CC;font-size:16px">Mobile:</b>
			<?php echo $mobile; ?>
			<?php
				}
			?>
      </div>    
            
        </div>

<div class="span3">
<?php include 'leftservices.php'?>	
</div>

</div>
</div>

<div class="container">
<?php include 'footer.php'?>
</div>

</body>
</html>