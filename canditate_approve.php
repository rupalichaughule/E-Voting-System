<html>
<head>
<?php
$var= $_GET['txt'];
error_reporting(0);
$conn = mysql_connect("localhost","root","");
mysql_select_db("voting_system",$conn);
$query="SELECT * FROM canditate_register where c_emailid='".$var."';";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
?>
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
	<td>
	<form method=post action=acapproval.php>
	<table border=1  width=1000px>
	<tr>
	<th colspan=4>Candidate Register</th>
	</tr>
	
	<tr>
	<td width=30%>Name Of person</td>
	<td colspan=3><?php echo $row["c_name"];?></td>
	</tr>
	<tr>
	<td>Gender</td>
	<td><?php echo $row["c_gender"];?> </td>
	<td width=20%>Date of birth</td>
	<td>
	<?php echo $row["c_dbirth"];?>
	</td>
	</tr>
	<tr>
	<td>Place of birth</td>
	<td colspan=3><?php echo $row["c_pbirth"];?></td>
	</tr>
	<tr height=70 >
	<td >House Address</td>
	<td colspan=3><?php echo $row["c_haddress"];?></td>
	</tr>
	<tr>
	<td>Name of city</td>
	<td colspan=3><?php echo $row["c_city"];?></td>
	</tr>
	<tr>
	<td>NAme of locality</td>
	<td colspan=3><?php echo $row["c_locality"];?></td>
	</tr>
	<tr>
	<td>Name Of State </td>
	<td colspan=3><?php echo $row["c_state"];?></td>
	</tr>	
	<tr>
	<td>Pincode</td>
	<td colspan=3><?php echo $row["c_pincode"];?></td>
	</tr>
	<tr>
	<td>Nationality</td>
	<td colspan=3><?php echo $row["c_nationality"];?></td>
	</tr>	
	<tr>
	<td>Contact No</td>
	<td colspan=3><?php echo $row["v_conno"];?></td>
	</tr>	
	<tr>
	<td>Email id</td>
	<td colspan=3><input type=text name="email" value=<?php echo $row["c_emailid"];?>></td>
	</tr>
	<tr>
	<td>Adhar card no</td>
	<td colspan=3><?php echo $row["c_adhar"];?></td>
	</tr>
	<tr height=70 >
	<td >Canditate Info</td>
	<td colspan=3><?php echo $row["c_cand_info"];?></td>
	</tr>
	
	<tr>
		<th colspan=1 name=Submit align=right> <input type=submit name=submit value=submit></th>
		<td colspan=3 name=Submit > <input type=button name=vres value=Reset>
		</td>
	</tr>
	</table>
	</form>


</div>
</body>
</html>