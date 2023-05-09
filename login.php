<?php
$uName=$_POST['uName']; 
$pass=$_POST['pass'];

session_start();
if(isset($_SESSION['uName'])){
    header("Location: adminpage.php");
    exit;
}

if($uname!=="ADMIN" and $pass!=="adminY")
{   echo'<script>alert("Wrong Password")
    window.location.href="admin.html"
    </script>';
}
else
{
    $_SESSION['logged_in'] = true;
    header("Location: adminpage.php");   
    
}

?>
