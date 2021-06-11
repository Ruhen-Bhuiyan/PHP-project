<?php
include("connection.php");
error_reporting(0);
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Untitle document</title>
<meta http-equiv="Content-Type" content="text/trml; charset=iso-8859-1">
</head>
<body>
<form name = "form1" action ="" method ="post">
<table>
<tr>
<td>Enter FirstName </td>
<td><input type="text" name="t1"></td>
</tr>
<tr>
<td>Enter LastName</td>
<td><input type="text" name="t2"></td>
</tr>
<tr>
<td>Enter ContactNumber </td>
<td><input type="text" name="t3"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type = "submit" name="submit2" value ="search">

</td>
</tr>
</table>
</form>
<?php 

if(isset($_POST["submit2"]))
{
	$res=mysqli_query($link,"select * from student where firstname='$_POST[t1]'");
	echo "<table border=1>";
	echo "<tr>";
	echo "<th>"; echo "firstname"; echo "</th>";
	echo "<th>"; echo "lastname"; echo "</th>";
	echo "<th>"; echo "contactnumber"; echo "</th>";
	
	while($row=mysqli_fetch_array($res))
	{
		echo "<tr>";
		echo "<td>"; echo $row["firstname"]; echo "</td>";
		echo "<td>"; echo $row["lastname"]; echo "</td>";
		echo "<td>"; echo $row["contactnumber"]; echo "</td>";
		echo "</tr>";
}
echo "</table>";
}
?>

</body>
</html>