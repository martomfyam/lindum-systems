<?php


$getImage=mysqli_query($conn, "SELECT itemName,link FROM images WHERE description ='collection list' ") or die("Could not retrieve image: " .mysqli_error($conn));

//$path=mysqli_fetch_assoc($getImage) or die("Could not fetch array : " .mysqli_error($conn));

            while($row = mysqli_fetch_assoc($getImage)){
                $name = $row['itemName'];
                $link = $row['link'];

                if($name=="cctv"){
                    $link1= $link;
                }elseif ($name=="fire hose reel"){
                    $link2= $link;
                }elseif ($name=="electric fence wire"){
                    $link3= $link;
                }
            }


?>

