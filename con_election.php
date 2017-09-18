<?php
error_reporting(0);
if($_POST){
    if(isset($_POST['create'])){
	$conn = mysql_connect("localhost","root","");
	$dbResult=mysql_select_db("votecount",$conn);
	$query ="create table ".$_POST["state_name"].$_POST["c_DOBDay"].$_POST["c_DOBMonth"].$_POST["c_DOBYear"] ."( cname varchar(60),cemail varchar(50),votes varchar(10) );";

	mysql_query($query);
	echo "<script> alert('election  succesfully shedule')</script>";
	$dbResult1=mysql_select_db("voting_system",$conn);
	$query="SELECT * FROM approved_canditates where c_state='".$_POST["state_name"]."';";
	$result = mysql_query($query);
	while($row = mysql_fetch_array($result)) {
		$dbResult=mysql_select_db("votecount",$conn);
		$query="insert into ".$_POST["state_name"].$_POST["c_DOBDay"].$_POST["c_DOBMonth"].$_POST["c_DOBYear"] ."( cname,cemail,votes) VALUES ('" .$row["c_name"]."','" .$row["c_emailid"]."','0');";
		echo $query;
		mysql_query($query);
		
		
	}
}
}
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
	<a href="con_election.php">Conduct election<br>
	<a href="enable.php">Enable/Disable
	</h1></td>
	<td valign=top><table border=1px width=100%>
	<form method=post>
	<tr><td colspan=2 >Conduct election</td></tr>
	<tr><td>select state</td><td><select name="state_name">
<option value='Andaman and Nicobar Islands'>Andaman and Nicobar Islands</option>
<option value='Andhra Pradesh'>Andhra Pradesh</option>
<option value='Arunachal Pradesh'>Arunachal Pradesh</option>
<option value='Assam'>Assam</option>
<option value='Bihar'>Bihar</option>
<option value='Chandigarh'>Chandigarh</option>
<option value='Chhattisgarh'>Chhattisgarh</option>
<option value='Dadra and Nagar Haveli'>Dadra and Nagar Haveli</option>
<option value='Daman and Diu'>Daman and Diu</option>
<option value='Delhi'>Delhi</option>
<option value='Goa'>Goa</option>
<option value='Gujarat'>Gujarat</option>
<option value='Haryana'>Haryana</option>
<option value='Himachal Pradesh'>Himachal Pradesh</option>
<option value='Jammu and Kashmir'>Jammu and Kashmir</option>
<option value='Jharkhand'>Jharkhand</option>
<option value='Karnataka'>Karnataka</option>
<option value='Kerala'>Kerala</option>
<option value='Lakshadweep'>Lakshadweep</option>
<option value='Madhya Pradesh'>Madhya Pradesh</option>
<option value='Maharashtra'>Maharashtra</option>
<option value='Manipur'>Manipur</option>
<option value='Meghalaya'>Meghalaya</option>
<option value='Mizoram'>Mizoram</option>
<option value='Nagaland'>Nagaland</option>
<option value='Odisha'>Odisha</option>
<option value='Puducherry'>Puducherry</option>
<option value='Punjab'>Punjab</option>
<option value='Rajasthan'>Rajasthan</option>
<option value='Sikkim'>Sikkim</option>
<option value='Tamil Nadu'>Tamil Nadu</option>
<option value='Telengana'>Telengana</option>
<option value='Tripura'>Tripura</option>
<option value='Uttar Pradesh'>Uttar Pradesh</option>
<option value='Uttarakhand'>Uttarakhand</option>
<option value='West Bengal'>West Bengal</option>
</select></td>
	</tr>
	<tr>
	<td>select date </td><td><select name="c_DOBDay">
<option>DD</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
</select>
<select name="c_DOBMonth">
<option>MM</option>
<option>January</option>
<option>February</option>
<option>March</option>
<option>April</option>
<option>May</option>
<option>June</option>
<option>July</option>
<option>August</option>
<option>September</option>
<option>October</option>
<option>November</option>
<option>December</option>
</select>
<select name="c_DOBYear">
	<option> - Year - </option>
	<option value="3000">1973</option>
	<option value="2019">1972</option>
	<option value="2018">1971</option>
	<option value="2017">1970</option>
	<option value="2016">1969</option>
	<option value="2015">1968</option>
	<option value="2014">1967</option>
	<option value="2013">1966</option>
	<option value="2012">1965</option>
	<option value="2011">1964</option>
	<option value="2010">1963</option>
	<option value="2009">1962</option>
	<option value="2008">1961</option>
	<option value="2007">1960</option>
	<option value="2006">1959</option>
	<option value="2005">1958</option>
	<option value="2004">1957</option>
	<option value="2003">1956</option>
	<option value="2002">1955</option>
	<option value="2001">1954</option>
	<option value="2000">1953</option>
	<option value="1999">1952</option>
	<option value="1998">1951</option>
	<option value="1997">1950</option>
	<option value="1996">1949</option>
	<option value="1995">1948</option>
	<option value="1994">1947</option>
	<option value="1993">1993</option>
	<option value="1992">1992</option>
	<option value="1991">1991</option>
	<option value="1990">1990</option>

	
</select></td>
	</tr>
	<tr>
	<td colspan=2><input type="submit" name="create" value="create" />
	</tr>
	</td>
	
</tr>
</table>
</div>
</body>
</html>