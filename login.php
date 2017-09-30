<?php
	$con=new PDO("mysql:host=localhost;dbname=db_login","root","");
	$query="SELECT * FROM tbl_users where uname='".$_POST["uname"]."' and pword='".$_POST["pword"]."'";
	$result=$con->query($query);
	$rownums=$result->rowCount();
	if($rownums>=1){
		header("location:profile.php?uname=".$_POST["uname"]);	
	}else{
		echo "<script>self.location='index.php?login_attempt=hsdfTTaveg'</script>";
	}
?>