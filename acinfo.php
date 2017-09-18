<?php
error_reporting(0);
$conn = mysql_connect("localhost","root","");
mysql_select_db("voting_system",$conn);
$result = mysql_query("SELECT * FROM approved_canditates");

?>
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
	<a href="con_election.php">Conduct election</h1></td>
	<td>Canditate Info<?php
$i=0;
while($row = mysql_fetch_array($result)) {
/*if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";*/
?>
<table border=1px WIDTH=100% >
	<tr>
	<td width=30% ><?php echo $row["c_name"]; ?></td>
	<td width=40%> <?php echo $row["c_emailid"]; ?></td>
	<td ><a href="acinfo2.php?txt=<?php echo $row["c_emailid"]; ?>"> View Details </a></td>
	</tr>
	<?php
$i++;
}
?>
	</table></td>
</tr>
</div>
</body>
</html>