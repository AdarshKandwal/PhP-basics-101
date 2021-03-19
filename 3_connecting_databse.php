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

$sql="CREATE TABLE `tabel1` ( `Sno` INT(6) NOT NULL AUTO_INCREMENT , `Name` VARCHAR(12) NOT NULL , `Phone` VARCHAR(6) NOT NULL , `Age` INT NOT NULL , PRIMARY KEY (`Sno`))";

$result=mysqli_query($conn,$sql);

// Check for the table creation success

if($result){
	echo " The table was created succesfull ! <br>";
}

else{
	echo "The table was not created successfully :".mysqli_error($conn);
}

?>