<?php 

	include "dbconnection.php";

	if(isset($_REQUEST["name"]) && isset($_REQUEST["email"]) && isset($_REQUEST["message"])){
		// echo "Device required: ".$_GET["id"];

		//SQL injection prevention :-)
		$name=mysql_real_escape_string($_REQUEST["name"]);
		$email=mysql_real_escape_string($_REQUEST["email"]);
		$message=mysql_real_escape_string($_REQUEST["message"]);

		$db=new MySql();

		$db->connect();
		$result = mysqli_query($db->con,"insert into contact (name, email , message) values ('$name','$email','$message');")
							 or die(mysql_error());

		if(mysqli_num_rows($result) > 0){
			
			echo "Success";
		}
		else{
			echo "Failure";
		}
	}


?>