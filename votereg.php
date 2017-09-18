<?php
error_reporting(0);
//echo "hello";
if(isset($_REQUEST['submit']))
{
	
//mysql_connect(host name, user name, password)
//mysql_connect() will get the correct value if it is succeed but false if it is fails
	
	$conn = mysql_connect("localhost","root","");

			if (!$conn) {
			    die('Could not connect: ' . mysql_error());
				
			}else{
              
            /* echo 'Connected successfully';
			mysql_close($conn);

			echo "<pre>";
			print_r($_REQUEST);
			exit();*/

			$dbResult=mysql_select_db("voting_system",$conn);
			/*if($dbResult)
			{
				echo "found";
			}
			else{
				echo "Not found";
			}
			exit();*/
			$query = "INSERT INTO  voter_sign_up (v_name, v_gender, v_dbirth, v_pbirth,v_haddress,v_nlocality,v_ncity,v_nstate,v_pincode,v_nationality,v_conno,v_adhar,v_emailid) VALUES ('" .$_POST["vname"]."','" .$_POST["vgender"] . "','" . $_POST["DOBDay"] . $_POST["DOBMonth"] . $_POST["DOBYear"] . "','" . $_POST["pvbirth"] . "','" . $_POST["hadd"] . "','" . $_POST["locality"] . "','" . $_POST["vcity"] . "','" . $_POST["state_name"] . "','" . $_POST["vpincode"] . "','" . $_POST["vnationality"] . "','" . $_POST["vcon"] . "','" . $_POST["vadhar"] . "','" . $_POST["vmail"] . "')";
			
			mysql_query($query);
			
            
			 echo "<script> alert('successfully')</script>";
$message = "New User Added Successfully";
            

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
<div class="vrg">
<form method=post>
	<table border=1  width=1000px>
	<tr>
	<th colspan=4>Voter Registration</th>
	</tr>
	
	<tr>
	<td width=30%>Name Of person</td>
	<td colspan=3><input type="text" name="vname"</td>
	</tr>
	<tr>
	<td>Gender</td>
	<td><input type=radio name=vgender value="male">Male<input type=radio name=vgender value="female">female </td>
	<td width=20%>Date of birth</td>
	<td>
<select name="DOBMonth">
	<option> - Month - </option>
	<option value="January">January</option>
	<option value="Febuary">Febuary</option>
	<option value="March">March</option>
	<option value="April">April</option>
	<option value="May">May</option>
	<option value="June">June</option>
	<option value="July">July</option>
	<option value="August">August</option>
	<option value="September">September</option>
	<option value="October">October</option>
	<option value="November">November</option>
	<option value="December">December</option>
</select>

<select name="DOBDay">
	<option> - Day - </option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
</select>
<select name="DOBYear">
	<option> - Year - </option>
	<option value="1993">1993</option>
	<option value="1992">1992</option>
	<option value="1991">1991</option>
	<option value="1990">1990</option>
	<option value="1989">1989</option>
	<option value="1988">1988</option>
	<option value="1987">1987</option>
	<option value="1986">1986</option>
	<option value="1985">1985</option>
	<option value="1984">1984</option>
	<option value="1983">1983</option>
	<option value="1982">1982</option>
	<option value="1981">1981</option>
	<option value="1980">1980</option>
	<option value="1979">1979</option>
	<option value="1978">1978</option>
	<option value="1977">1977</option>
	<option value="1976">1976</option>
	<option value="1975">1975</option>
	<option value="1974">1974</option>
	<option value="1973">1973</option>
	<option value="1972">1972</option>
	<option value="1971">1971</option>
	<option value="1970">1970</option>
	<option value="1969">1969</option>
	<option value="1968">1968</option>
	<option value="1967">1967</option>
	<option value="1966">1966</option>
	<option value="1965">1965</option>
	<option value="1964">1964</option>
	<option value="1963">1963</option>
	<option value="1962">1962</option>
	<option value="1961">1961</option>
	<option value="1960">1960</option>
	<option value="1959">1959</option>
	<option value="1958">1958</option>
	<option value="1957">1957</option>
	<option value="1956">1956</option>
	<option value="1955">1955</option>
	<option value="1954">1954</option>
	<option value="1953">1953</option>
	<option value="1952">1952</option>
	<option value="1951">1951</option>
	<option value="1950">1950</option>
	<option value="1949">1949</option>
	<option value="1948">1948</option>
	<option value="1947">1947</option>
	
</select>
	</td>
	</tr>
	<tr>
	<td>Place of birth</td>
	<td colspan=3><input type=text name=pvbirth></td>
	</tr>
	<tr height=70 >
	<td >House Address</td>
	<td colspan=3><textarea name="hadd"></textarea></td>
	</tr>
	<tr>
	<td>Name of locality</td>
	<td colspan=3><textarea name="locality"></textarea></td>
	</tr>
	<tr>
	<td>NAme of City</td>
	<td colspan=3><input type=text name=vcity ></td>
	</tr>
	<tr>
	<td>Name of State</td>
	<td colspan=3><select name="state_name">
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
	<td>Pincode</td>
	<td colspan=3><input type=text name=vpincode></td>
	</tr>
	<tr>
	<td>Nationality</td>
	<td colspan=3><input type=text name=vnationality></td>
	</tr>	
	<tr>
	<td>Contact No</td>
	<td colspan=3><input type=text name=vcon></td>
	</tr>
		<tr>
	<td>Adhar card no</td>
	<td colspan=3><input type=text name=vadhar></td>
	</tr>
	<tr>
	<td>Email id</td>
	<td colspan=3><input type=text name=vmail></td>
	</tr>
	<tr>
		<th colspan=1 name=Submit align=right> <input type="submit" name="submit" value=submit></th>
		<td colspan=3 name=Submit > <input type=button name=vres value=Reset>
		</td>
	</tr>
	</table>
	</form>
</div>



</body>
</html>
