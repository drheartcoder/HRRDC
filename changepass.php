<html>
<head>
<link rel="SHORTCUT ICON" href="images/hrrdclogo.JPG" style="size:auto">
<title>HRRDC</title>
<?php
	include 'bootstrapres.php';
?>
<script language="javascript">
function valid()
 {
   //document.write("zxbcccccccccccc");
   if(document.frm.t3.value=="")
 	{
	alert("Please Enter New Password");
	document.frm.t3.focus();
	return false;
	}
	else if(document.frm.t4.value=="")
 	{
	alert("Please Enter Confirm Password");
	document.frm.t4.focus();
	return false;
	}
}
</script>
</head>

<style>
.a
{height:20px;
}

</style>

<body>

<?php include 'toplogo.php'?>

<div class="container" align="center">
<?php include 'topmenu.php' ?>
</div>

<div class="container">

	<div class="row">

        <div class="span8">

		<div class=""></div>
			<div class="well" style="height:400px">
		<h3 style="color:#0033CC;" align="center"><b>Change Password</b></h3>
			
        <form method="post" action="changepass1.php" name="frm" id="frm">
			<table align="center">
		<tr>
		<td>User Name :</td>
		</tr>
		<tr>
		<td><input type="text" name="t1" style="height:30px"></td>
		</tr>
        <tr>
		<td>Old Password :</td>
		</tr>
		<tr>
		<td><input type="password" name="t2"  style="height:30px"></td>
		</tr>
        <td>New Password :</td>
		</tr>
		<tr>
		<td><input type="password" name="t3" style="height:30px"></td>
		</tr>
        <td>Confirm Password :</td>
		</tr>
		<tr>
		<td><input type="password" name="t4" style="height:30px"></td>
		</tr>
        <tr>
        <td align="center" colspan="2">
        <input class="btn btn-primary" value="Update" name="btnlogin" type="submit" onClick="return valid();">
		<a href="login.php">Back</a>
        </td>
        </tr>
       
		</table>
         </form>
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