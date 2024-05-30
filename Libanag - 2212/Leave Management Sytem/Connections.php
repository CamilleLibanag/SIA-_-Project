<?php
$Connections = mysqli_connect ("localhost:3307", "root", "", "logindatab");
if(mysqli_connect_error()){
echo"Failed to Connect in Mysql",mysqli_connect_error(); 
}
?>