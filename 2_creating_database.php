<?php

/*connecting to database

1.MySQli extension
2.PDO

*/

//connecting to the database

$severname="localhost";
$username="root";
$password="";



$conn=mysqli_connect($severname,$username,$password);

$sql="CREATE DATABASE myfisrtdatabase";
$result=mysqli_query($conn,$sql);
echo "the result is ";
echo var_dump($result);
echo "<br>";

if(!$conn){
	die("sorry cannot connect :".mysqli_connect_error());
}
else{
	echo("connected ");
}

?>