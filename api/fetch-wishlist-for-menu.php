<?php 
include("connect.php");
$customer_mobile=$_POST['customer_phone'];
$prod_id=$_POST['prod_id'];
    $query="INSERT INTO   wishlist SELECT c.customer_mobile,m.menu_id,m.menu_name,m.menu_image,m.menu_price FROM menu m JOIN customer_login c WHERE  menu_id='$prod_id' AND customer_mobile='$customer_mobile'";
$sql=mysqli_query($connect,$query);
if($sql==true){
    echo 1;
}
    else{
        echo 0;
    }
?>