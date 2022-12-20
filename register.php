<?php

require "db_connect.php";

$username=$_POST["username"];
$password=$_POST["password"];
$sql_select="SELECT * FROM register WHERE Username='$username'";
$result=mysqli_query($connection,$sql_select);
if(mysqli_num_rows($result)>0)
{
	echo "username is duplicate \n";
}
else 
{
	$sql_insert="INSERT INTO register (Username,Password) 
	VALUES ('$username','$password');";
	$result=mysqli_query($connection,$sql_insert);
	if($result)
	{
		echo "successfully insert data \n";
	}
	else
	{
		echo "failed for insert data \n";
	}	
}

mysqli_close($connection);

?>