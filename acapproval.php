<?php
error_reporting(0);
$conn = mysql_connect("localhost","root","");
mysql_select_db("voting_system",$conn);
$result = mysql_query("SELECT * FROM canditate_register");

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
	<td>Canditate Approval
	<?php
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
	<td ><a href="canditate_approve.php?txt=<?php echo $row["c_emailid"]; ?>"> View Details </a></td>
	</tr>
	<?php
$i++;
}
?>
	</table>	
	</td>
</table>
	</td>
</tr>
</div>
</body>
</html>
<?php
if(isset($_REQUEST['submit']))
	{
		
	error_reporting(0);
	$conn = mysql_connect("localhost","root","");
	mysql_select_db("voting_system",$conn);
	$query="SELECT * FROM canditate_register where c_emailid='".$_POST["email"]."';";
	$result = mysql_query($query);
	
$row = mysql_fetch_array($result);
$query = "INSERT INTO approved_canditates(c_name, c_gender, c_dbirth, c_pbirth, c_haddress, c_city, c_locality, c_state, c_pincode, c_nationality, v_conno, c_emailid, c_adhar, c_cand_info) VALUES ('" .$row["c_name"]."','" .$row["c_gender"] . "','" . $row["c_dbirth"] . "','" . $row["c_pbirth"] . "','" . $row["c_haddress"] . "','" . $row["c_city"] . "','" . $row["c_locality"] . "','" . $row["c_state"] . "','" . $row["c_pincode"] . "','" . $row["c_nationality"] . "','" . $row["v_conno"] . "','" . $row["c_emailid"] . "','" . $row["c_adhar"] . "','" . $row["c_cand_info"] . "')";
	mysql_query($query);
				 echo "<script> alert('Voter registered sucesfully')</script>";
	}
?>