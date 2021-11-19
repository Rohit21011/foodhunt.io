<?php
include("connect.php");
$wishlist_id=$_POST['wishlist_id'];
$query="DELETE  FROM wishlist WHERE product_id='$wishlist_id'";
$sql=mysqli_query($connect,$query);
if($sql==true){
    echo 1;
}
else{
    echo 0;
}
?>