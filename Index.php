<?php
    include("connection.php");
	$err_msg="";
	if(isset($_GET["login_attempt"])){
		if($_GET["login_attempt"]=="hsdfTTaveg"){
		$err_msg="Invalid Username/Password!";}
			}
	?>
	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Facebook</title>
	<style>
	body{
		background-color: blue;
		}
        #header
		{
        margin-left:900px;
		margin-top:50px;
        }
        #section
		{
            margin-left:920px;  
        }
		#E
		{
			position:absolute;
			margin-top:10px;
			margin-left:16px;
		}
		#P
		{
			position:absolute;
			margin-top:10px;
			margin-left:210px;
		}
		#L
		{
			position:absolute;
			margin-top:50px;
			margin-left:20px;
		}
		#F
		{
			position:absolute;
		}
		#LN
		{
			position:absolute;
			margin-left:190px;
			margin-top:-22px;
		}
	</style>
</head>
<body>

    <header>
	<br>
	<div style="color:white; font-size:50px; font-family:Algerian;" align="center" class ="fbt">Facebook</div>
	
    <div id="header">
	
    <form action="login.php" method="post">

	<p id="E"><input type="text" name="uname" placeholder="Email"></p>

    <p id="P"><input type="password" name="pword" placeholder="Password"></p>

	<p id="L"><input type="submit" name="login" value="Log In"></p>
	
	</form>
	</div>
	</header>
    <Section>

    <div id="section">
		<?php
	if(isset($_GET["SUCCESS"])){
	if($_GET["SUCCESS"]=="qwertyuiop"){
		echo "<span>Successfully saved!</span>";
	}
	}
?>
	<form method="post" action="register.php"> 
    <br><br><br><br><br>
    
    <p id="F"><input type="text" name="fname" placeholder="Firstname" required/></p>
	<br><br>
    <p id="LN"><input type="text" name="lname" placeholder="Lastname" required/></p>
	<br><br>
    <input type="text" name="email" placeholder="Email" style="width:295px" required/><br><br> 
	
	<input type="text" name="email1" placeholder="Re-enter Email" style="width:295px" required/><br><br> 
	
	<input type="password" name="pass" placeholder="Password" style="width:295px" required/><br><br>
	
	<p style="color:white;">Birthday<br></p>
		<Select name="month">
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
		<Select name="day">
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
		<Select name="year">
		<option>2016</option>
		<option>2015</option>
		<option>2014</option>
		<option>2013</option>
		<option>2012</option>
		<option>2011</option>
		<option>2010</option>
		<option>2009</option>
		<option>2008</option>
		<option>2007</option>
		<option>2006</option>
		<option>2005</option>
		<option>2004</option>
		<option>2003</option>
		<option>2002</option>
		<option>2001</option>
		<option>2000</option>
		<option>1999</option>
		<option>1998</option>
		<option>1997</option>
		<option>1996</option>
		<option>1995</option>
		<option>1994</option>
		<option>1993</option>
		<option>1992</option>
		<option>1991</option>
		<option>1990</option>
		<option>1989</option>
		<option>1988</option>
		<option>1987</option>
		<option>1986</option>
		<option>1985</option>
		<option>1984</option>
		<option>1983</option>
		<option>1982</option>
		<option>1981</option>
		<option>1980</option>
		</select><br><br>	
	<p style="color:white;">	
    <input type="radio" name="gender" value="male" required/>
	<?php if (isset($gender) && $gender=="male") echo "checked";?>
	Male</p>
	<p style="color:white;">
	<input type="radio" name="gender" value="female">
	<?php if (isset($gender) && $gender=="female") echo "checked";?>
	Female</p><br>
     <input type="submit" name="signin" value="Sign Up">
     </div>
     
</body>                                                                    
</html>