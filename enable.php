<?php
error_reporting(0);
$host = "localhost";
$database = "votecount";
$user = "root";
$pass = "";
mysql_connect($host, $user, $pass)
or die ('cannot connect to the database: ' . mysql_error());
mysql_select_db($database)
or die ('cannot select database: ' . mysql_error());
$loop = mysql_query("SHOW tables FROM $database")
or die ('cannot select tables');?>


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
<div class="right" style="float:left; background-color:white; width:100%" > 
<table border=1px width=100% height=100%>
<tr>
	<td width=25% valign=top><h1> <a href="admin2.php">Voters Approval</a><br>
	<a href="acapproval.php">Canditate Approval</a><br>
	<a href="avinfo.php">Voters Info</a><br>
	<a href="acinfo.php">Canditate Info</a><br>
	<a href="con_election.php">Conduct election<br>
	<a href="enable.php">Enable/Disable
	</h1></td>
	<td valign=top>
	enable/disable<br>
	<table border=1px>
	<tr>
	<td colspan=3> state name and date </td>
	</tr>
	
	<?php 
		while($table = mysql_fetch_array($loop))
			{	 			?>
	<tr><td>
	<form method=post>
	
	<input type=text name=name1 value=<?php echo $table[0]; ?>>
	</td>
	<td><input type="submit" name="enable" value="enable" /></td><td><input type="submit" name="disable" value="disable" /></td>
</tr><?php }?>
	</tr>
	</table>
	</body>
	</html>
	<?php
if($_POST){
    if(isset($_POST['enable'])){
        echo$_POST['name1'];
    }elseif(isset($_POST['disable'])){
        echo"disable";
    }
}?>