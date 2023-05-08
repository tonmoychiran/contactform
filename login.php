<?php
$uName=$_POST['uName']; 
$pass=$_POST['pass'];

if($uname!=="ADMIN" and $pass!=="adminY")
{   echo'<script>alert("Wrong Password")
    window.location.href="adminloginpage.html"
    </script>';
}
else
{
    session_start();
    session_destroy();
    header("Location: adminpage.php");   
}

mysqli_close($conn);
?>
