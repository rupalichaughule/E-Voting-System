<html>
<body>
<form action="my.php" method="post">
<table>
<tr><th colspan=2> LOGIN </th></tr>
<tr>
	<td>UserName</td><td><input type="text" name="UserName" >
</tr>
<tr>
<td>Password</td><td><input type="password" name="Password" ><sub></sub>	
</tr>
<tr>
<td><input type="submit" name="submit"  value="LOGIN"></td><td>
</tr>
</table>
</form>
</body>
</html>

<?php
mysql_connect("localhost","root","") or die("not connected");  
mysql_select_db("rup") or die("not found");

	if(isset($_POST['submit']))
	{
		$UserName=$_POST['UserName'];
		$Password=$_POST['Password'];
		$query = "insert into rup(UserName,Password)values('$UserName','$Password')";
		if(mysql_query($query))
		{
				 echo "<h1> Voter registered sucesfully </h1>";
		}
	}
?>