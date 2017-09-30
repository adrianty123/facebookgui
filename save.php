<?php
	$con=new PDO("mysql:host=localhost;dbname=db_login","root","");
	$query="INSERT INTO tbl_msg VALUES('".$_POST["msg"]."',' ','".$_POST["msgfrom"]."','".$_POST["msgto"]."')";
	$con->query($query);
?>