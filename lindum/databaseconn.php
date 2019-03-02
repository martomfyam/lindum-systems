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

//$query="SELECT link FROM images WHERE id='1' ";
//$query=mysqli_query($conn,$query);
//
//$image=mysqli_fetch_array($query);

//$getImage=mysqli_query($conn, "SELECT * FROM products WHERE new ='yes' ") or die("Could not retrieve image: " .mysqli_error($conn));
//
////$path=mysqli_fetch_assoc($getImage) or die("Could not fetch array : " .mysqli_error($conn));
//
//while($row = mysqli_fetch_assoc($getImage)){
//    $name = $row['itemName'];
//    $category= $row['category'];
//    $price = $row['price'];
//    $discount = $row['discount'];
//    $rating = $row['rating'];
//    $new = $row['new'];
//    $description = $row['description'];
//    $link = $row['link'];
//
//
//}
//



?>

