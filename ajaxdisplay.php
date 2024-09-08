<?php
if(isset($_GET['tableId']))
{
	$tableId = $_GET['tableId'];
	switch ($tableId)
	{
		case "SKILLS" :	
						?>
						<table width="80%" border="1" cellspacing="0" cellpadding="0" class="irl-table-action" align="center">
							<tr align="center">
								<th bgcolor="#0099FF">ID</th>
								<th bgcolor="#0099FF">Name</th>
								<th bgcolor="#0099FF">Action</th>
							</tr>
							<?php
								if(isset($_GET['name']))
								{
								$name = $_GET['name'];
								include('dbconnect.php');
								$q=mysql_query("select * from  skills where name like '%$name%'");
								while($res=mysql_fetch_array($q))
								{
									extract($res);
									$class="odd";
									if($i%2==0)
										$class="even";
									$i++;
							?>
									<tr align="center" height="40px" class="<?php echo $class?>">
										<td width="150px"><?php echo $res['id'];?></td>
										<td ><?php echo $res['name'];?></td>
										<td width="200px">
										<a href="mast_skillsedit.php?id=<?php echo $id?>" class="button" style="text-decoration:none">Edit</a>
										<a href="mast_skillslist.php?id=<?php echo $id?>" class="button" style="text-decoration:none" onClick="javascript: return confirm('Are you SURE you wish to Delete?');">Delete</a></td>
									</tr>
							<?php
								} 
								?>
						</table>
						<?php
						}
					break;
	
		case "CITY" :
					?>
					<table width="80%" border="1" cellspacing="0" cellpadding="0" class="irl-table-action" align="center">
					  <tr align="center">
						<th bgcolor="#0099FF">ID</th>
						<th bgcolor="#0099FF">Name</th>
						 <th bgcolor="#0099FF">Action</th>
					   </tr>
					<?php
					if(isset($_GET['name']))
					{
						$name = $_GET['name'];
						include('dbconnect.php');
					$q=mysql_query("select * from  city where cityname like '%$name%'");
					  while($res=mysql_fetch_array($q))
					  {
					   extract($res);
					  $class="odd";
						if($i%2==0)
							$class="even";
						$i++;
					   ?>
						<tr align="center" height="40px" class="<?php echo $class?>">
						<td  width="150px"><?php echo $res['cityid'];?></td>
						<td><?php echo $res['cityname'];?></td>
						<td  width="200px">
							<a href="mast_cityedit.php?cityid=<?php echo $cityid?>" class="button" style="text-decoration:none">Edit</a>
							<a href="mast_citylist.php?cityid=<?php echo $cityid?>" class="button" style="text-decoration:none" onClick="javascript: return confirm('Are you SURE you wish to Delete?');">Delete</a></td>
						  </tr>
					<?php
					}
					?>
					</table>
					<?php
					}		
					break;
			
			case "COUNTRY":
					?>
					<table width="80%" border="1" cellspacing="0" cellpadding="0" class="irl-table-action" align="center">
					  <tr align="center">
						<th bgcolor="#0099FF">ID</th>
						<th bgcolor="#0099FF">Name</th>
						 <th bgcolor="#0099FF">Action</th>
					   </tr>
					<?php
					if(isset($_GET['name']))
					{
						$name = $_GET['name'];
						include('dbconnect.php');
					$q=mysql_query("select * from  country where countryname like '%$name%'");
					  while($res=mysql_fetch_array($q))
					  {
					   extract($res);
					   $class="odd";
						if($i%2==0)
							$class="even";
						$i++;
					   ?>
						<tr align="center" class="<?php echo $class?>" height="40px">
						<td  width="150px"><?php echo $res['countryid'];?></td>
						<td><?php echo $res['countryname'];?></td>
						<td  width="200px">
							<a href="mast_countryedit.php?countryid=<?php echo $countryid?>" class="button" style="text-decoration:none"><span class="pen icon"></span>Edit</a>
							<a href="mast_countrylist.php?countryid=<?php echo $countryid?>" class="button" style="text-decoration:none" onClick = "javascript: return confirm('Are you SURE you wish to Delete?');"><span class="pen icon"></span>Delete</a></td>
						  </tr>
					<?php
					}
					?>
					</table>
					</table>
					<?php
					}		
					break;
					
			case "COURSE":
					?>
					<table width="80%" border="1" cellspacing="0" cellpadding="0" class="irl-table-action" align="center">
					<tr align="center">
						<th bgcolor="#0099FF">ID</th>
						<th bgcolor="#0099FF">Test Name</th>
						<th bgcolor="#0099FF">Action</th>
					</tr>
				<?php
					if(isset($_GET['name']))
					{
						$name = $_GET['name'];
						include('dbconnect.php');
					$q=mysql_query("select * from  coursedb where COURSE_NAME like '%$name%'");
					while($res=mysql_fetch_array($q))
					{
						extract($res);
						$class="odd";
						if($i%2==0)
							$class="even";
						$i++;
						?>
						<tr align="center" height="40px" class="<?php echo $class?>">
							<td  width="150px"><?php echo $id;?></td>
							<td><?php echo $COURSE_NAME;?></td>
							<td  width="200px">
								<a href="mast_courseedit.php?id=<?php echo $id?>" class="button" style="text-decoration:none">Edit</a>
								<a href="mast_courselist.php?id=<?php echo $id?>" class="button" style="text-decoration:none" onClick="javascript: return confirm('Are you SURE you wish to Delete?');" >Delete</a>
								
							</td>
						</tr>
						<?php
					}
					?>
				</table>
				<?php
				}		
				break;
				
			case "DEPARTMENT":
					?>
						<table width="80%" border="1" cellspacing="0" cellpadding="0" class="irl-table-action" align="center">
					  <tr align="center">
						<th bgcolor="#0099FF">ID</th>
						<th bgcolor="#0099FF">Name</th>
						 <th bgcolor="#0099FF">Action</th>
					   </tr>
					<?php
					if(isset($_GET['name']))
					{
						$name = $_GET['name'];
						include('dbconnect.php');
					$q=mysql_query("select * from  department where name like '%$name%'");
					  while($res=mysql_fetch_array($q))
					  {
					   extract($res);
					   $class="odd";
						if($i%2==0)
							$class="even";
						$i++;
					   ?>
						<tr align="center" height="40px" class="<?php echo $class?>">
						<td  width="150px"><?php echo ($id);?></td>
						<td><?php echo ($name);?></td>
						<td  width="200px">
							<a href="mast_departmentedit.php?id=<?php echo $id?>" class="button" style="text-decoration:none">Edit</a>
							<a href="mast_departmentlist.php?id=<?php echo $id?>" class="button" style="text-decoration:none" onClick="javascript: return confirm('Are you SURE you wish to Delete?');" >Delete</a></td>
						  </tr>
					<?php
					}
					?>
					</table>
					<?php
					}		
					break;
			
			case "DESIGNATION":
					?>
					<table width="80%" border="1" cellspacing="0" cellpadding="0" class="irl-table-action" align="center">
						<tr align="center">
							<th bgcolor="#0099FF">ID</th>
							<th bgcolor="#0099FF">Designation</th>
							<th bgcolor="#0099FF">Action</th>
						</tr>
					<?php
					if(isset($_GET['name']))
					{
						$name = $_GET['name'];
					include('dbconnect.php');
					$q=mysql_query("select * from  designation where name like '%$name%'");
					while($res=mysql_fetch_array($q))
					{
						extract($res);
						$class="odd";
						if($i%2==0)
							$class="even";
						$i++;
						?>
							<tr align="center" height="40px" class="<?php echo $class?>">
							<td  width="150px"><?php echo $id;?></td>
							<td><?php echo $name;?></td>
							<td  width="200px">
								<a href="mast_designationedit.php?id=<?php echo $id?>" class="button" style="text-decoration:none">Edit</a>
								<a href="mast_designationlist.php?id=<?php echo $id?>" class="button" style="text-decoration:none" onClick="javascript: return confirm('Are you SURE you wish to Delete?');">Delete</a></td>
							</tr>
						<?php
					}
					?>
					</table>
					<?php
					}		
					break;
					
			case "EDUCATION":
					?>
					<table width="80%" border="1" cellspacing="0" cellpadding="0" class="irl-table-action" align="center">
					  <tr align="center">
						<th bgcolor="#0099FF">ID</th>
						<th bgcolor="#0099FF">Name</th>
						 <th bgcolor="#0099FF">Action</th>
					   </tr>
					<?php
					if(isset($_GET['name']))
					{
						$name = $_GET['name'];
					include('dbconnect.php');
					$q=mysql_query("select * from  education where educationname like '%$name%'");
					  while($res=mysql_fetch_array($q))
					  {
					   extract($res);
					   $class="odd";
						if($i%2==0)
							$class="even";
						$i++;
					   ?>
						<tr align="center" height="40px" class="<?php echo $class?>">
						<td  width="150px"><?php echo ($educationid);?></td>
						<td><?php echo ($educationname);?></td>
						<td  width="200px">
							<a href="mast_educationedit.php?educationid=<?php echo $educationid?>" class="button" style="text-decoration:none">Edit</a>
							<a href="mast_educationlist.php?educationid=<?php echo $educationid?>" class="button" style="text-decoration:none" onClick="javascript: return confirm('Are you SURE you wish to Delete?');">Delete</a></td>
						  </tr>
					<?php
					}
					?>
					</table>
					<?php
					}		
					break;
			
			case "OCCUPATION":
					?>
					<table width="80%" border="1" cellspacing="0" cellpadding="0" class="irl-table-action" align="center">
					  <tr align="center">
						<th bgcolor="#0099FF">ID</th>
						<th bgcolor="#0099FF">Name</th>
						 <th bgcolor="#0099FF">Action</th>
					   </tr>
					<?php
					if(isset($_GET['name']))
					{
						$name = $_GET['name'];
					include('dbconnect.php');
					$q=mysql_query("select * from  occupation where occupationname like '%$name%'");
					  while($res=mysql_fetch_array($q))
					  {
					   extract($res);
					   $class="odd";
						if($i%2==0)
							$class="even";
						$i++;
					   ?>
						<tr align="center" height="40px" class="<?php echo $class?>">
						<td  width="150px"><?php echo ($occupationid);?></td>
						<td><?php echo ($occupationname);?></td>
						<td  width="200px">
							<a href="mast_occupationedit.php?occupationid=<?php echo $occupationid?>" class="button" style="text-decoration:none">Edit</a>
							<a href="mast_occupationlist.php?occupationid=<?php echo $occupationid?>" class="button" style="text-decoration:none" onClick="javascript: return confirm('Are you SURE you wish to Delete?');">Delete</a>
						</td>
						  </tr>
					<?php
					}
					?>
					</table>
					<?php
					}		
					break;
					
			case "QUESTION":
					?>
					<table width="80%" border="1" cellspacing="0" cellpadding="0" class="irl-table-action" align="center">
					  <tr align="center">
					  
						<th bgcolor="#0099FF">ID.</th>
						<th bgcolor="#0099FF">Question</th>
						<!--<th bgcolor="#0099FF">Option 1</th>
						<th bgcolor="#0099FF">Option 1 Y/N</th>
						<th bgcolor="#0099FF">Option 2</th>
						<th bgcolor="#0099FF">Option 2 Y/N</th>
						<th bgcolor="#0099FF">Option 3</th>
						<th bgcolor="#0099FF">Option 3 Y/N</th>
						<th bgcolor="#0099FF">Option 4</th>
						<th bgcolor="#0099FF">Option 4 Y/N</th>
						<th bgcolor="#0099FF">Option 5</th>
						<th bgcolor="#0099FF">Option 5 Y/N</th>-->
						<!--<th bgcolor="#0099FF">Option 6</th>
						<th bgcolor="#0099FF">Option 6 Y/N</th>
						<th bgcolor="#0099FF">Option 7</th>
						<th bgcolor="#0099FF">Option 7 Y/N</th>
						<th bgcolor="#0099FF">Option 8</th>
						<th bgcolor="#0099FF">Option 8 Y/N</th>
						<th bgcolor="#0099FF">Option 9</th>
						<th bgcolor="#0099FF">Option 9 Y/N</th>
						<th bgcolor="#0099FF">Option 10</th>
						<th bgcolor="#0099FF">Option 10 Y/N</th>-->
						<!--<th bgcolor="#0099FF">Correct Answer</th>
						<th bgcolor="#0099FF">Image Option</th>-->
					<!--	<th bgcolor="#0099FF">Image Name</th>
						<th bgcolor="#0099FF">Image Correct Answer</th>
						<th bgcolor="#0099FF">Answer Reason</th>-->
						<!--<th bgcolor="#0099FF">Audio Option</th>-->
					<!--	<th bgcolor="#0099FF">Audio Name</th>
					-->	<!--<th bgcolor="#0099FF">Audio Path</th>-->
						<!--<th bgcolor="#0099FF">Video Option</th>-->
					<!--	<th bgcolor="#0099FF">Video Name</th>
					-->	<!--<th bgcolor="#0099FF">Video Path</th>-->
						<th bgcolor="#0099FF">ACTION</th>
					   
					   </tr>
					<?php
					if(isset($_GET['name']))
					{
						$name = $_GET['name'];
					include('dbconnect.php');
					$q=mysql_query("select * from tblquiz where question like '%$name%'");
					  while($res=mysql_fetch_array($q))
					  {
					   extract($res);
					 $class="odd";
						if($i%2==0)
							$class="even";
						$i++;
					   ?>
						<tr align="center" height="40px" class="<?php echo $class?>">
						<td  width="150px"><?php echo $qid;?></td>
						<td><?php echo $question;?></td>
						<!--<td>< ?php echo $opt1;?></td>
						<td>< ?php echo $opt1yn;?></td>
						<td>< ?php echo $opt2;?></td>
						<td>< ?php echo $opt2yn;?></td>
						<td>< ?php echo $opt3;?></td>
						<td>< ?php echo $opt3yn;?></td>
						<td>< ?php echo $opt4;?></td>
						<td>< ?php echo $opt4yn;?></td>
						<td>< ?php echo $opt5;?></td>
						<td>< ?php echo $opt5yn;?></td>-->
						<!--<td><php echo $opt6;?></td>
						<td><php echo $opt6yn;?></td>
						<td><php echo $opt7;?></td>
						<td><php echo $opt7yn;?></td>
						<td><php echo $opt8;?></td>
						<td><php echo $opt8yn;?></td>
						<td><php echo $opt9;?></td>
						<td><php echo $opt9yn;?></td>
						<td><php echo $opt10;?></td>
						<td><php echo $opt10yn;?></td>-->
						<!--<td>< ?php echo $ans;?></td>
						<td>< ?php echo $imageyn;?></td>-->
					<!--	<td>< ?php echo $imagename;?></td>
						<td>< ?php echo $ansimage;?></td>
						<td>< ?php echo $ansreason;?></td>
					-->	<!--<td>< ?php echo $audioyn;?></td>-->
					<!--	<td>< ?php echo $audioname;?></td>
					-->	<!--<td>< ?php echo $audiopath;?></td>-->
						<!--<td>< ?php echo $videoyn;?></td>-->
					<!--	<td>< ?php echo $videoname;?></td>
					-->	<!--<td>< ?php echo $videopath;?></td>-->
						 <td  width="200px">
							<a href="mast_questionedit.php?qid=<?php echo $qid?>" class="button" style="text-decoration:none">Edit</a>
							<a href="mast_questionlist.php?qid=<?php echo $qid?>" class="button" style="text-decoration:none" onClick="javascript: return confirm('Are you SURE you wish to Delete?');">Delete</a>
							<a href="mast_questionskill.php?qid=<?php echo $qid?>" class="button" style="text-decoration:none">Skills</a>
					 
						</td>
						</tr>
					<?php
					}
					?>
					</table>
					<?php
					}		
					break;
					
			case "SCALE":
					?>
					<table width="80%" border="1" cellspacing="0" cellpadding="0" class="irl-table-action" align="center">
						<tr align="center">
							<th bgcolor="#0099FF">ID</th>
							<th bgcolor="#0099FF">Name</th>
							<th bgcolor="#0099FF">Action</th>
						</tr>
						<?php
							if(isset($_GET['name']))
							{
								$name = $_GET['name'];
							include('dbconnect.php');
							$q=mysql_query("select * from  scale where name like '%$name%'");
							while($res=mysql_fetch_array($q))
							{
								extract($res);
								$class="odd";
								if($i%2==0)
									$class="even";
								$i++;
						?>
								<tr align="center"  height="40px" class="<?php echo $class?>">
									<td  width="150px"><?php echo $id;?></td>
									<td><?php echo $name;?></td>
									<td  width="200px">
									<a href="mast_scaleedit.php?id=<?php echo $id?>" class="button" style="text-decoration:none">Edit</a>
									<a href="mast_scalelist.php?id=<?php echo $id?>" class="button" style="text-decoration:none" onClick="javascript: return confirm('Are you SURE you wish to Delete?');">Delete</a></td>
								</tr>
						<?php
							}
						?>
					</table>
					<?php
					}		
					break;
					
			case "SCHOOLCOLLEGE":
					?>
					<table width="80%" border="1" cellspacing="0" cellpadding="0" class="irl-table-action" align="center">
					  <tr align="center">
						<th bgcolor="#0099FF">ID</th>
						<th bgcolor="#0099FF">Name</th>
						 <th bgcolor="#0099FF">Action</th>
					   </tr>
					<?php
					if(isset($_GET['name']))
					{
						$name = $_GET['name'];
					include('dbconnect.php');
					$q=mysql_query("select * from  schoolcollege where schoolcollegename like '%$name%'");
					  while($res=mysql_fetch_array($q))
					  {
					   extract($res);
					   $class="odd";
						if($i%2==0)
							$class="even";
						$i++;
					   ?>
						<tr align="center" height="40px" class="<?php echo $class?>">
						<td  width="150px"><?php echo ($schoolcollegeid);?></td>
						<td><?php echo ($schoolcollegename);?></td>
						<td  width="200px">
							<a href="mast_schoolcollegeedit.php?schoolcollegeid=<?php echo $schoolcollegeid?>" class="button" style="text-decoration:none">Edit</a>
							<a href="mast_schoolcollegelist.php?schoolcollegeid=<?php echo $schoolcollegeid?>" class="button" style="text-decoration:none" onClick="javascript: return confirm('Are you SURE you wish to Delete?');">Delete</a></td>
						  </tr>
					<?php
					}
					?>
					</table>
					<?php
					}		
					break;
					
			case "STATE":
					?>
					<table width="80%" border="1" cellspacing="0" cellpadding="0" class="irl-table-action" align="center">
					  <tr align="center">
						<th bgcolor="#0099FF">ID</th>
						<th bgcolor="#0099FF">Name</th>
						 <th bgcolor="#0099FF">Action</th>
					   </tr>
					<?php
					if(isset($_GET['name']))
					{
						$name = $_GET['name'];
					include('dbconnect.php');
					$q=mysql_query("select * from  state where statename like '%$name%'");
					  while($res=mysql_fetch_array($q))
					  {
					   extract($res);
					   $class="odd";
						if($i%2==0)
							$class="even";
						$i++;
					   ?>
						<tr align="center"  height="40px" class="<?php echo $class?>">
						<td  width="150px"><?php echo ($stateid);?></td>
						<td><?php echo ($statename);?></td>
						<td  width="200px">
							<a href="mast_stateedit.php?stateid=<?php echo $stateid?>" class="button" style="text-decoration:none">Edit</a>
							<a href="mast_statelist.php?stateid=<?php echo $stateid?>" class="button" style="text-decoration:none" onClick="javascript: return confirm('Are you SURE you wish to Delete?');">Delete</a></td>
						  </tr>
					<?php
					}
					?>
					</table>
					<?php
					}		
					break;
					
			case "STUDENT":
					?>
					<table width="80%" border="1" cellspacing="0" cellpadding="0" class="irl-table-action" align="center">
					  <tr align="center">
						<th bgcolor="#0099FF">ID</th>
						<th bgcolor="#0099FF">First Name</th>
						<!--<th bgcolor="#0099FF">Password</th>
						<th bgcolor="#0099FF">Designation</th>-->
						 <th bgcolor="#0099FF">ACTION</th>
					   </tr>
					<?php
					if(isset($_GET['name']))
					{
						$name = $_GET['name'];
					include"dbconnect.php";
					$q=mysql_query("select * from  userlogin where first_name like '%$name%'");
					  while($res=mysql_fetch_array($q))
					  {
					   extract($res);
					   $class="odd";
						if($i%2==0)
							$class="even";
						$i++;
					   ?>
						<tr align="center" height="40px" class="<?php echo $class?>">
						<td  width="150px"><?php echo ($id);?></td>
						<td><?php echo $first_name;?></td>
						<!--<td>< ?php echo ($password);?></td>
						<td>< ?php echo ($designation);?></td>-->
						<td  width="200px">
							<a href="mast_studentedit.php?id=<?php echo $id?>" class="button" style="text-decoration:none">Edit</a>
							<a href="mast_studentlist.php?id=<?php echo $id?>" class="button" style="text-decoration:none" onClick="javascript: return confirm('Are you SURE you wish to Delete?');">Delete</a></td>
						  </tr>
					<?php
					}
					?>
					</table>
					<?php
					}		
					break;
					
			case "REGISTRATION":
					?>
				<table width="80%" border="1" cellspacing="0" cellpadding="0" align="center">
					<tr align="center">
						<th bgcolor="#0099FF">ID</th>
						<th bgcolor="#0099FF">Name</th>						
						<th bgcolor="#0099FF">User Name</th>
						<th bgcolor="#0099FF">Country</th>
<!--						<th bgcolor="#0099FF">State</th>
						<th bgcolor="#0099FF">City</th>-->
						<th bgcolor="#0099FF">Mobile</th>
						<th bgcolor="#0099FF">Email ID</th>
						<th bgcolor="#0099FF">Action</th>
					</tr>
					
					<?php
						if(isset($_GET['name']))
						{
						$name = $_GET['name'];
						include('dbconnect.php');
						$q=mysql_query("select * from  userlogin where name like '%$name%'");
						while($res=mysql_fetch_array($q))
						{
							extract($res);
							$class="odd";
						if($i%2==0)
							$class="even";
						$i++;
							?>
					
							<tr align="center" height="40px" class="<?php echo $class?>">
								<td  width="90px"><?php echo $id?></td>
								<td  width="300px"><?php echo $name?></td>
								<td><?php echo $username?></td>
								<td><?php echo $country?></td>
								<!--<td>< ?php echo $state?></td>
								<td>< ?php echo $city?></td>-->
								<td><?php echo $mobile?></td>
								<td><?php echo $emailid?></td>
								<td  width="200px">
									<a href="mast_user_registrationedit.php?id=<?php echo $id?>" class="button" style="text-decoration:none">Edit</a>
									<a href="mast_user_registrationlist.php?id=<?php echo $id?>" class="button" style="text-decoration:none" onClick="javascript: return confirm('Are you SURE you wish to Delete?');">Delete</a>
								</td>
							</tr>
					
						<?php
						}
						?>
				</table>
					<?php
					}		
					break;
					
			case "OFFICELOGIN":
					?>
					<table width="80%" border="1" cellspacing="0" cellpadding="0" class="irl-table-action" align="center">
					  <tr align="center">
						<th bgcolor="#0099FF">ID</th>
						<th bgcolor="#0099FF">User Name</th>
						 <th bgcolor="#0099FF">Action</th>
					   </tr>
					<?php
					if(isset($_GET['name']))
						{
						$name = $_GET['name'];
					include("dbconnect.php");
					
					$q=mysql_query("select * from  admin where name like '%$name%'");
					  while($res=mysql_fetch_array($q))
					  {
					   extract($res);
					   $class="odd";
						if($i%2==0)
							$class="even";
						$i++;
					   ?>
						<tr align="center" height="40px" class="<?php echo $class?>">
						<td  width="150px"><?php echo ($id);?></td>
						<td><?php echo ($name);?></td>
						<td  width="200px">
							<a href="mast_userloginedit.php?id=<?php echo $id?>" class="button" style="text-decoration:none">Edit</a>
							<a href="mast_userloginlist.php?id=<?php echo $id?>" class="button" style="text-decoration:none" onClick="javascript: return confirm('Are you SURE you wish to Delete?');">Delete</a></td>
						  </tr>
					<?php
					}
					?>
					</table>
					<?php
					}		
					break;
					
			case "BUSINESS" :
					?>
					<table width="80%" border="1" cellspacing="0" cellpadding="0" class="irl-table-action" align="center">
					  <tr align="center">
						<th bgcolor="#0099FF">ID</th>
						<th bgcolor="#0099FF">Code</th>
						<th bgcolor="#0099FF">Name</th>
						 <th bgcolor="#0099FF">Action</th>
					   </tr>
					<?php
					if(isset($_GET['name']))
					{
						$name = $_GET['name'];
						include('dbconnect.php');
					$q=mysql_query("select * from  business where bafirstname like '%$name%' or balastname like '%$name%'");
					  while($res=mysql_fetch_array($q))
					  {
					   extract($res);
					  $class="odd";
						if($i%2==0)
							$class="even";
						$i++;
					   ?>
						<tr align="center" height="40px" class="<?php echo $class?>">
						<td  width="150px"><?php echo $res['baid'];?></td>
						<td  width="150px"><?php echo $res['bacode'];?></td>
						<td><?php echo $res['bafirstname'];?>&nbsp;<?php echo $res['balastname'];?></td>
						<td  width="200px">
							<a href="mast_baedit.php?baid=<?php echo $baid?>" class="button" style="text-decoration:none">Edit</a>
							<a href="mast_balist.php?baid=<?php echo $baid?>" class="button" style="text-decoration:none" onClick="javascript: return confirm('Are you SURE you wish to Delete?');">Delete</a></td>
						  </tr>
					<?php
					}
					?>
					</table>
					<?php
					}		
					break;
					
			case "EMPLOYEE" :
					?>
					<table width="80%" border="1" cellspacing="0" cellpadding="0" class="irl-table-action" align="center">
					  <tr align="center">
						<th bgcolor="#0099FF">ID</th>
						<th bgcolor="#0099FF">Name</th>
						 <th bgcolor="#0099FF">Action</th>
					   </tr>
					<?php
					if(isset($_GET['name']))
					{
						$name = $_GET['name'];
						include('dbconnect.php');
					$q=mysql_query("select * from  employee where firstname like '%$name%' or lastname like '%$name%'");
					  while($res=mysql_fetch_array($q))
					  {
					   extract($res);
					  $class="odd";
						if($i%2==0)
							$class="even";
						$i++;
					   ?>
						<tr align="center" height="40px" class="<?php echo $class?>">
						<td  width="150px"><?php echo $res['id'];?></td>
						<td><?php echo $res['firstname'];?>&nbsp;<?php echo $res['lastname'];?></td>
						<td  width="200px">
							<a href="mast_employeeedit.php?id=<?php echo $id?>" class="button" style="text-decoration:none">Edit</a>
							<a href="mast_employeelist.php?id=<?php echo $id?>" class="button" style="text-decoration:none" onClick="javascript: return confirm('Are you SURE you wish to Delete?');">Delete</a></td>
						  </tr>
					<?php
					}
					?>
					</table>
					<?php
					}		
					break;
					
			case "NEWS" :
					?>
					<table width="80%" border="1" cellspacing="0" cellpadding="0" class="irl-table-action" align="center">
					  <tr align="center">
						<th bgcolor="#0099FF">ID</th>
						<th bgcolor="#0099FF">Title</th>
						<th bgcolor="#0099FF">Sub News</th>
						<th bgcolor="#0099FF">Active</th>
						 <th bgcolor="#0099FF">Action</th>
					   </tr>
					<?php
					if(isset($_GET['name']))
					{
						$name = $_GET['name'];
						include('dbconnect.php');
					$q=mysql_query("select * from  news where title like '%$name%'");
					  while($res=mysql_fetch_array($q))
					  {
					   extract($res);
					  $class="odd";
						if($i%2==0)
							$class="even";
						$i++;
					   ?>
						<tr align="center" height="40px" class="<?php echo $class?>">
						<td  width="150px"><?php echo $res['newsid'];?></td>
						<td width="150px"><?php echo $res['title'];?></td>
						<td><?php echo $res['subnews'];?></td>
						<td width="100px"><?php echo $res['activeyn'];?></td>
						<td  width="200px">
							<a href="mast_newsedit.php?newsid=<?php echo $newsid?>" class="button" style="text-decoration:none">Edit</a>
							<a href="mast_newslist.php?newsid=<?php echo $newsid?>" class="button" style="text-decoration:none" onClick="javascript: return confirm('Are you SURE you wish to Delete?');">Delete</a></td>
						  </tr>
					<?php
					}
					?>
					</table>
					<?php
					}		
					break;
					
			case "TESRIMONIALS" :
					?>
					<table width="80%" border="1" cellspacing="0" cellpadding="0" class="irl-table-action" align="center">
					  <tr align="center">
						<th bgcolor="#0099FF">ID</th>
						<th bgcolor="#0099FF">Name</th>
						<th bgcolor="#0099FF">Feedback</th>
						<th bgcolor="#0099FF">Active</th>
						 <th bgcolor="#0099FF">Action</th>
					   </tr>
					<?php
					if(isset($_GET['name']))
					{
						$name = $_GET['name'];
						include('dbconnect.php');
					$q=mysql_query("select * from  testimonials where name like '%$name%'");
					  while($res=mysql_fetch_array($q))
					  {
					   extract($res);
					  $class="odd";
						if($i%2==0)
							$class="even";
						$i++;
					   ?>
						<tr align="center" height="40px" class="<?php echo $class?>">
						<td  width="100px"><?php echo $res['id'];?></td>
						<td width="180px"><?php echo $res['name'];?></td>
						<td><?php echo $res['feedback'];?></td>
						<td width="100px"><?php echo $res['activeyn'];?></td>
						<td  width="200px">
							<a href="mast_testimonialsedit.php?id=<?php echo $id?>" class="button" style="text-decoration:none">Edit</a>
							<a href="mast_testimonialslist.php?id=<?php echo $id?>" class="button" style="text-decoration:none" onClick="javascript: return confirm('Are you SURE you wish to Delete?');">Delete</a></td>
						  </tr>
					<?php
					}
					?>
					</table>
					<?php
					}		
					break;
					?>
			
			<!--case "COMPANY" :
					? >
					<table style="border:1px solid black" cellpadding="10px">
					< ?php
					if(isset($_GET['name']))
					{
						$name = $_GET['name'];
						include('dbconnect.php');
					$q=mysql_query("select * from  company where name like '%$name%'");
					  while($res=mysql_fetch_array($q))
					  {
					   extract($res);
					  $class="odd";
						if($i%2==0)
							$class="even";
						$i++;
					   ?>
						<tr align="left">
							<th>ID :</th>
							<td><input readonly type="text" value="< ?php echo $id ?>" name="xid"  onBlur="return spachar();" style="height:30px;"></td></tr>
						<tr align="left">
							<th>Name :</th>
							<td><textarea name="xname" style="height:70px; width:250px">< ?php echo $name;?></textarea></td></tr>
						<tr align="left">
							<th>Address :</th>
							<td><textarea name="xaddress" style="height:80px; width:250px">< ?php echo $address;?></textarea></td></tr>
						<tr align="left">
							<th>Email ID :</th>
							<td><input type="text" name="xemailid" value="< ?php echo $emailid;?>" style="height:30px;"></td></tr>
						<tr align="left">
							<th>Wesite :</th>
							<td><input type="text" name="xwebsite" value="< ?php echo $website;?>" style="height:30px;"></td></tr>
						<tr align="left">
							<th>Mobile No.:</th>
							<td><input type="text" name="xmobile"  value="< php echo $mobile;?>"style="height:30px;"></td></tr>
						<tr>
							<td colspan="2">
							<a href="mast_companyedit.php?id=< ?php echo $id?>" class="button" style="text-decoration:none">Edit</a>
							<a href="mast_companylist.php?id=< ?php echo $id?>" class="button" style="text-decoration:none" onClick="javascript: return confirm('Are you SURE you wish to Delete?');">Delete</a></td>
						</tr>
					< ?php
					}
					?>
					</table>
					< ?php
					}		
					break;-->
			
			<?php
//			case "":
//					? >
//					
//					< ?php
//					}		
//					break;
					
	}//end of switch
}	
?>