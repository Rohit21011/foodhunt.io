<?php 
include("connect.php");
$prod_id=$_POST['prod_id'];
$customer_mobile=$_POST['customer_mobile'];
$query="INSERT INTO add_to_cart SELECT c.customer_mobile, menu_id,menu_name,menu_image,menu_price FROM menu JOIN customer_login c WHERE menu_id='$prod_id' AND customer_mobile='$customer_mobile'";
$sql=mysqli_query($connect,$query);

if($sql==true){
    echo 1; 
}
else{
    echo 0;
}
?>