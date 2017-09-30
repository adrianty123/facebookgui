<?php
	$con=new PDO("mysql:host=localhost;dbname=db_login","root","");
	$query="INSERT INTO tbl_users VALUES('".$_POST["email"]."','".$_POST["pass"]."','".$_POST["fname"]." ".$_POST["lname"]."','".$_POST["month"]." ".$_POST["day"]." ".$_POST["year"]."','".$_POST["gender"]."')";
	$con->query($query);
	header("location: index.php?SUCCESS==qwertyuiop");
?>
  