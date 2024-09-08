<? /*Function for Autoincrement ID*/

function select_max_id($fldId,$tblNm,$idLength)
{
	include("dbconnect.php");
	$e=mysql_query("select max(". $fldId.")  as itmcd from ". $tblNm ."");
	while($db1=mysql_fetch_array($e))
	{
		extract($db1);
		$max_id = $itmcd+1;
	}
    return $max_id;
}
?>