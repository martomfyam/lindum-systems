<?php

$nameold = $name;
$getImage=mysqli_query($conn, "SELECT * FROM products WHERE category like '%$category%' ") or die("Could not retrieve image: " .mysqli_error($conn));

//$path=mysqli_fetch_assoc($getImage) or die("Could not fetch array : " .mysqli_error($conn));
$y=1;
while($row = mysqli_fetch_assoc($getImage)){

    if($y==$x) {

        if($nameold== $row['itemName'] ){
           $x=$x+1;
        } else {
            $name = $row['itemName'];
            $category = $row['category'];
            $subCategory = $row['subCategory'];
            $price = $row['price'];
            $discount = $row['discount'];
            $rating = $row['rating'];
            $new = $row['new'];
            $description = $row['description'];
            $link = $row['link'];

            $oldprice = $price + $discount;
            if($oldprice <= 0){
                $discpercentage = 0;
            } else {
                $discpercentage = ceil(($discount * 100) / $oldprice);
            }

        }
    }

    $y=$y+1;
}



?>