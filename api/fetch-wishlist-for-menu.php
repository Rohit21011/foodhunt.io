<?php 
include("connect.php");
$prod_id=$_POST['prod_id'];
    $query="INSERT INTO   wishlist SELECT menu_id,menu_name,menu_image,menu_price FROM menu  WHERE  menu_id='$prod_id'";
$sql=mysqli_query($connect,$query);
if($sql==true){
    echo 1;
}
    else{
        echo 0;
    }
?>