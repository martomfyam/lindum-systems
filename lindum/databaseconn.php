<?php





$hostname="localhost";
$username="root";
$password="";
$database="lindum";
$conn=mysqli_connect($hostname,$username,$password,$database);

if(!$conn)
{
    die("Connection cannot be establish: " . mysqli_connect_error());
} else {
    // echo "connected successfully";
}




?>

