<?php

require "db_connect.php";

$username=$_POST["username"];
$password=$_POST["password"];
$sql_select="SELECT Username FROM register WHERE 
Username='$username' and Password = '$password'";
$result=mysqli_query($connection,$sql_select);
if(mysqli_num_rows($result)>0)
{
	echo "true";
}
else 
{
	echo "false";	
}

mysqli_close($connection);

?>