<?php
	$Name = $_POST['Name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
         $address = $_POST['address'];
	$mobile = $_POST['mobile'];
	$gender = $_POST['gender'];
	
	$conn = new mysqli('localhost','root','','project');
	
	if($con==false)
	{
		echo "Connection did not establish";
	}
{
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration_details(Name,email,password,address,mobile,gender) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssis",$Name,$email, $password , $address , $mobile , $gender);
	 $stmt->execute();
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
			}
?>