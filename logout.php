<?php
include 'adminpage.php';
mysqli_close($conn);
session_start();
session_destroy();
header('Location: adminloginpage.html');
?>