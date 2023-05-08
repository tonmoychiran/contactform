<?php
	$fName=$_POST['fName']; 
	$lName=$_POST['lName'];
	$email=$_POST['email'];
	$phnNo=$_POST['phnNo'];
	$message=$_POST['message'];
	
	$conn= mysqli_connect('localhost', 'root', '', 'usermessages');
	if($conn==false){
		die('Connection Failed : '.mysqli_connect_error());	

	}
	
	$statement="INSERT INTO messages(fName,lName,email,phoneNo,message) 
	VALUES('$fName', '$lName','$email','$phnNo','$message')";
	if(mysqli_query($conn,$statement))
	{
	echo'<script> alert("Thank you!We got your message.")
	window.location.href=" index.html"
	</script>';
	
	
	}
	
	mysqli_close($conn);


?>