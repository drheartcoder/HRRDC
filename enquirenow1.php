<link rel="SHORTCUT ICON" href="images/hrrdclogo.JPG" style="size:auto">
<title>HRRDC</title>
<?php
session_start();
if(isset($_SESSION['uname']) && ($_SESSION['pass']))
{?><?php
$c1='';
$c2='';
$c3='';
$c4='';
$c5='';
$c6='';
$c7='';
$c8='';
$c9='';
$c10='';
$c11='';
$c12='';
$c13='';
$c14='';
$c15='';
$c16='';
$c17='';
$c18='';
$c19='';
$c20='';
$c21='';
$s1='';
$s2='';
$s3='';
$s4='';
$s5='';
$s6='';
$s7='';
$s8='';
$s9='';
$s10='';
$s11='';
$tfname='';
$tlname='';
$tmobile='';
$temail='';
$tmsg='';

$fname=$_POST['tfname'];
$lname=$_POST['tlname'];
$contactno=$_POST['tmobile'];
$emailid=$_POST['temail'];
$msg=$_POST['tmsg'];
if(isset($_POST['c1']))
{
	$c1=$_POST['c1'];
}
if(isset($_POST['c2']))
{
	$c2=$_POST['c2'];
}
if(isset($_POST['c3']))
{
	$c3=$_POST['c3'];
}
if(isset($_POST['c4']))
{
	$c4=$_POST['c4'];
}
if(isset($_POST['c5']))
{
	$c5=$_POST['c5'];
}
if(isset($_POST['c6']))
{
	$c6=$_POST['c6'];
}
if(isset($_POST['c7']))
{
	$c7=$_POST['c7'];
}
if(isset($_POST['c8']))
{
	$c8=$_POST['c8'];
}
if(isset($_POST['c9']))
{
	$c9=$_POST['c9'];
}
if(isset($_POST['c10']))
{
	$c10=$_POST['c10'];
}
if(isset($_POST['c11']))
{
	$c11=$_POST['c11'];
}
if(isset($_POST['c12']))
{
	$c12=$_POST['c12'];
}
if(isset($_POST['c13']))
{
	$c13=$_POST['c13'];
}
if(isset($_POST['c14']))
{
	$c14=$_POST['c14'];
}
if(isset($_POST['c15']))
{
	$c15=$_POST['c15'];
}
if(isset($_POST['c16']))
{
	$c16=$_POST['c16'];
}
if(isset($_POST['c17']))
{
	$c17=$_POST['c17'];
}
if(isset($_POST['c18']))
{
	$c18=$_POST['c18'];
}
if(isset($_POST['c19']))
{
	$c19=$_POST['c19'];
}
if(isset($_POST['c20']))
{
	$c20=$_POST['c20'];
}
if(isset($_POST['c21']))
{
	$c21=$_POST['c21'];
}

$c=$c1."-".$c2."-".$c3."-".$c4."-".$c5."-".$c6."-".$c7."-".$c8."-".$c9."-".$c10."-".$c11."-".$c12."-".$c13."-".$c14."-".$c15."-".$c16."-".$c17."-".$c18."-".$c19."-".$c20."-".$c21;

if(isset($_POST['s1']))
{
$s1=$_POST['s1'];
}

if(isset($_POST['s2']))
{
$s2=$_POST['s2'];
}


if(isset($_POST['s4']))
{
$s4=$_POST['s4'];
}

if(isset($_POST['s5']))
{
$s5=$_POST['s5'];
}

if(isset($_POST['s6']))
{
$s6=$_POST['s6'];
}

if(isset($_POST['s7']))
{
$s7=$_POST['s7'];
}
if(isset($_POST['s8']))
{
$s8=$_POST['s8'];
}
if(isset($_POST['s9']))
{
$s9=$_POST['s9'];
}
if(isset($_POST['s10']))
{
$s10=$_POST['s10'];
}
if(isset($_POST['s11']))
{
$s11=$_POST['s11'];
}

$s=$s1."-".$s2."-".$s4."-".$s5."-".$s6."-".$s7."-".$s8."-".$s9."-".$s10."-".$s11;
include 'dbconnect.php';
$q=mysql_query("insert into clientenquiry(fname,lname,contactno,emailid,msg,courses,services)values('$fname','$lname','$contactno','$emailid','$msg','$c','$s')");
if($q==1)
echo "<script>alert('Thanx for Enquiry.');</script>";
	 

$to=$emailid;
$subject='Thanks For Enquiry.';;
$message="We will Contact you soon";
$header="From: enquiry@bluetech.co.in";
$sentmail = mail($to,$subject,$message,$header);
if($sentmail){
echo "Your message Has Been Sent .";
}
else {
echo "sorry";
}

include 'enquirenow.php';
?><?php }
else
{
	include("login.php");
}
?>