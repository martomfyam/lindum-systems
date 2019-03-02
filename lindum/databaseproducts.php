<?php


$getImage=mysqli_query($conn, "SELECT * FROM products WHERE itemName = '$productName' ") or die("Could not retrieve image: " .mysqli_error($conn));

//$path=mysqli_fetch_assoc($getImage) or die("Could not fetch array : " .mysqli_error($conn));

while($row = mysqli_fetch_assoc($getImage)){


        $name = $row['itemName'];
        $category = $row['category'];
        $subCategory = $row['subCategory'];
        $price = $row['price'];
        $discount = $row['discount'];
        $rating = $row['rating'];
        $new = $row['new'];
        $description = $row['description'];
        $link = $row['link'];
        $instock= $row['inStock'];
        $features= $row['features'];

        $oldprice = $price + $discount;
        if($oldprice <= 0){
            $discpercentage = 0;
        } else {
            $discpercentage = ceil(($discount * 100) / $oldprice);
        }

        if($instock=='yes'){
            $instock= "instock";
        } else {
            $instock= "out of stock";
        }

}



?>