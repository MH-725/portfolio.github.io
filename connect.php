<?php
	

	

	//Database connection
	
	if(isset($Name)|| isset($Email)){
		$conn = new mysqli('localhost','root','','contactme');
		$Name = $_POST['Name'];
		$Email = $_POST['Email'];
		die('Connection Failed : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into registration(Name,Email)
			values(?,?)");
		$stmt->bind_param("ss",$Name,$Email);
		$stmt->execute();
		echo "Submitted Successfully...";
		$stmt->close();
		$conn->close();

	}
?>

//$conn->connect_error