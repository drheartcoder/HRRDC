<?php /*?><?php
session_start();
if(isset($_SESSION['uname']) && ($_SESSION['pass']))
{?>
<?php */?>
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

		<div class=""></div>
			<div class="well" style="height:auto">
		<h3 style="color:#0033CC;" align="center"><b>Aptitude Test</b></h3>
			<p align="justify">
		<ol type = "1" >
			<li>
			<h6 style="color:#0033CC"><b>Why to do aptitude test?</b></h1>
			</li>
			<p align="justify">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Aptitude test is the psychological tool to know the aptitude of a person. This indicates the orientation of person. This helps us to know which field one should choose to get better success in life
<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
This test is seen as one of the major help in choosing the career. The test results reveal the interest areas person. It also helps to predict the success of the student based on the various abilities and skills tested. Apart from this also helps to guide the way we study, general behavioral improvements, personality development based on strength.
			</p>
			<br/>
			<li>
			<h6 style="color:#0033CC"><b>Why can do aptitude test?</b></h1>
			</li>
			<p align="justify">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Different aptitude tests are developed for different purposes. The aptitude test we are offering is prepared for person in the age group of 16 to 24 Years. Also this is comprehensive test with multiple intelligence areas.
			</p>
			<br/>
			
			<li>
			<h6 style="color:#0033CC"><b>What is included in this aptitude results?</b></h1>
			</li>
			<p align="justify">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
The aptitude test measures 14 different types of skills and abilities which govern the aptitude of person. Based on the skills our counselor guides for the career. These skills also reveal the pattern of behavior. This helps further to guide on the strengths and weaknesses. Thus one can formulate a plan for development in personality for the kind of career one wants to get in life. 
			</p>
			<br/>
			
			<li>
			<h6 style="color:#0033CC"><b>Why to go for HRRDC's aptitude test?</b></h1>
			</li>
			<p align="justify">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
The aptitude test is unique as it is designed based on survey of 500 families. The test is tested for 12 years on more than 2500 students and verified in Maharashtra. This test is designed and verified for the cultural and intelligence of the people around us. This makes the test reliable for the students in India. 
			</p>		
			
		</ol>			

</p>
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
<?php /*?><?php }
else
{
	include("login.php");
}
?>
<?php */?>