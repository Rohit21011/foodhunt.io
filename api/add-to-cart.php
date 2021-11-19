<?php 
include("connect.php");
$wishlist_id=$_POST['wishlist_id'];
$query="INSERT INTO add_to_cart SELECT product_id,product_name,product_image,product_price FROM wishlist WHERE product_id='$wishlist_id'";
$sql=mysqli_query($connect,$query);

$query1="DELETE FROM wishlist WHERE product_id='$wishlist_id'";
$sql1=mysqli_query($connect,$query1);
if($sql && $sql1==true){
    echo 1; 
}
else{
    echo 0;
}
?>