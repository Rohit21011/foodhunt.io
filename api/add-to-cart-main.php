<?php 
include("connect.php");
$prod_id=$_POST['prod_id'];
$customer_mobile=$_POST['customer_phone'];
$query="INSERT INTO add_to_cart SELECT c.customer_mobile, product_id,product_name,product_image,product_price FROM product_details JOIN customer_login c WHERE product_id='$prod_id' AND customer_mobile='$customer_mobile'";
$sql=mysqli_query($connect,$query);

if($sql==true){
    echo 1; 
}
else{
    echo 0;
}
?>