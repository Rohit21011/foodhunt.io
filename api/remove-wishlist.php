<?php
include("connect.php");
$wishlist_id=$_POST['wishlist_id'];
$customer_mobile=$_POST['customer_mobile'];
$query="DELETE  FROM wishlist WHERE product_id='$wishlist_id' AND customer_mobile='$customer_mobile'";
$sql=mysqli_query($connect,$query);
if($sql==true){
    echo 1;
}
else{
    echo 0;
}
?>