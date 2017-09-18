<html>
<head>
<title> Vote for change</title>
<link rel="stylesheet" href="style.css" type="text/css">

</head>
<body>


<div class="header">
<img   src=img/hd.jpg  width=100% height=100% >
<div id=navMenu>
<ul>
	<li><a href="start.php"> Home</a></li>
</ul>
<ul>
	<li><a href="#">Canditate &#9662;</a>
		<ul>
			<li><a href="canlog.php">Login </a></li>
			<li><a href="canreg.php">Sign Up </a></li> 	
		</ul>
	</li>
</ul>
<ul>
	<li><a href="#">Voter &#9662;</a>
		<ul>
			<li><a href="vlogin.php">Login </a></li>
			<li><a href="votereg.php">Sign Up </a></li> 
			<li><a href="caninfo.php">Canditate Info </a></li>	
		</ul>
	</li>
</ul>
<ul>
	<li><a href="admin.php"> Admin</a></li>
</ul>
<ul>
	<li><a href="conus.php"> Contact us</a></li>
</ul>



</div>




</div>

<div class="left" style="background-color:white; float:left; width=60%; ">

<?php

if(isset($_POST['submit']))
 { 
		$admin_name=$_POST['txt_aname'];
		$admin_pass=$_POST['txt_apasss'];
			if($admin_name=="admin" And $admin_pass=="admin")
			{
				header("location: admin2.php");
			}
			else
			{
				echo "<script> alert('Wrong Username And Password')</script>";
			}
 }
?>

<img src="img/AdministratorLogin.jpg" style="margin-left:34%; width:100%;">
</div>
<div class="right" style="background-color:white;">

<form action="admin.php" method="post">
<table width=100% height=100%>
<tr><th colspan=2>ONLY ADMIN LOGIN </th></tr>
<tr>
	<td>AdminName</td><td><input type="text" name="txt_aname" placeholder="Username">
</tr>
<tr>
<td>Password</td><td><input type="password" name="txt_apasss" placeholder="Password"><sub></sub>	
</tr>
<tr>
<td><input type="submit" name="submit"  value="LOGIN"></td><td>
</tr>
</table>
</form>
</div>
</body>
</html>