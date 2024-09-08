<?php
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("hrrdc") or die(mysql_error());
			$qry = "select * from tblquiz where qid=$id";
			$q = mysql_query($qry);
			$i=0;
			while($r = mysql_fetch_array($q))
			{
				extract($r);
				$abc = "'".$ans."'";
				echo "<h3>Q. $qid : $question  </h3>";
				echo "<ul >";
                if ($imageyn=="Y")
				{   
					?>
					<img src="<?php echo $imagename ?>" style="height:75px;"/>
					<?php
				}
  			    ?>
				<h4>
                <br />
				<?php
					echo "<li onclick=saveans('1','$ans','$qid')>$opt1</li>";
					echo "<li onclick=saveans('2','$ans','$qid')>$opt2</li>";
					echo "<li onclick=saveans('3','$ans','$qid')>$opt3</li>";
					echo "<li onclick=saveans('4','$ans','$qid')>$opt4</li>";
					echo "</ul>";
				?>
				<!--<input type="button" value="Next" onclick="getquestion('$qid')" />-->
	<?php
			}
	}
?>
<!--"<img src='images\Quizimage\Aptitude\".$imagename."' width=400>";-->