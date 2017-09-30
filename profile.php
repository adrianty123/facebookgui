<?php
include("connection.php");
$query="SELECT * FROM tbl_users where uname='".$_GET["uname"]."'";
$result=$con->query($query);
while($data=$result->fetch(PDO::FETCH_BOTH)){
	$uname=$data[0];
	$fullname=$data[2];
	$birthday=$data[3];
	$gender=$data[4];
	}
?>
<html>
	<body>
	<fieldset style="width:250px;">
		<p>Email: <?php echo $uname;?></php>
		<p>Name: <?php echo $fullname;?></php>
		<p>Birthday: <?php echo $birthday;?></php>
		<p>Gender: <?php echo $gender;?></php>
		<br><br>
		<form action = "logout.php" method = "post">
		<input type = "submit" name="button" value="Logout">
		<a href = "index.php"></a>
		</form>
		
	</fieldset>
	</body>
	</html>
