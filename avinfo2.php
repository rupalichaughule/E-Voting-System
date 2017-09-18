<?php
error_reporting(0);
$var= $_GET['txt'];
$conn = mysql_connect("localhost","root","");
mysql_select_db("voting_system",$conn);
$query="SELECT * FROM approved_voters where v_emailid='".$var."';";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
 
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
	<td><form method=post action=admin2.php>
	<table border=1  width=1000px>
	<tr>
	<th colspan=4>Voter Registration</th>
	</tr>
	
	<tr>
	<td width=30%>Name Of person</td>
	<td colspan=3><?php echo $row["v_name"]; ?></td>
	</tr>
	<tr>
	<td>Gender</td>
	<td><?php echo $row["v_gender"]; ?> </td>
	<td width=20%>Date of birth</td>
	<td>
<?php echo $row["v_dbirth"]; ?>
	</td>
	</tr>
	<tr>
	<td>Place of birth</td>
	<td colspan=3><?php echo $row["v_pbirth"]; ?></td>
	</tr>
	<tr height=70 >
	<td >House Address</td>
	<td colspan=3><?php echo $row["v_haddress"]; ?></td>
	</tr>
	<tr>
	<td>Name of locality</td>
	<td colspan=3><?php echo $row["v_nlocality"]; ?></td>
	</tr>
	<tr>
	<td>NAme of City</td>
	<td colspan=3><?php echo $row["v_ncity"]; ?></td>
	</tr>
	<tr>
	<td>Name of State</td>
	<td colspan=3><?php echo $row["v_nstate"]; ?></td>
	</tr>	
	<tr>
	<td>Pincode</td>
	<td colspan=3><?php echo $row["v_pincode"]; ?></td>
	</tr>
	<tr>
	<td>Nationality</td>
	<td colspan=3><?php echo $row["v_natinality"]; ?></td>
	</tr>	
	<tr>
	<td>Contact No</td>
	<td colspan=3><?php echo $row["v_conno"]; ?></td>
	</tr>
		<tr>
	<td>Adhar card no</td>
	<td colspan=3><?php echo $row["v_adhar"]; ?></td>
	</tr>
	<tr>
	<td>Email id</td>
	<td colspan=3><input type="text" value="<?php echo $row["v_emailid"]; ?> " name="email"></td>
	</tr>
	<tr>
		<td><a href="avinfo.php">back</a>
		</td>
	</tr>
	</table>
	</form>
	
</td>
</tr>
</div>
</body>
</html>