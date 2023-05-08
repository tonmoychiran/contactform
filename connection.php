<?php
$conn= mysqli_connect('localhost', 'root', '', 'usermessages');
if($conn==false){
    die('Connection Failed : '.mysqli_connect_error());	

}
?>