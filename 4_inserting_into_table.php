<?php

$servername="localhost";
$username="root";
$password="";
$database="myfisrtdatabase";

// create a connection
$conn=mysqli_connect($servername,$username,$password,$database);

// dir if connection was not successful

if(!$conn){
	die("not connected");
}
else{
	echo "Connection was succesfull";
}

$sql="INSERT INTO `tabel1` (`Name`,`Phone`,`Age`) VALUES ('ram','124',19)";

$result=mysqli_query($conn,$sql);

// Check for the table creation success

if($result){
	echo " Data was entered ! <br>";
}

else{
	echo "Not entered:".mysqli_error($conn);
}

?> 