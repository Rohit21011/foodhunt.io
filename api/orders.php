<?php
include("connect.php");
$c_phone=$_POST['c_phone'];
$c_address=$_POST['c_address'];
$p_id=$_POST['id'];
$p_image=$_POST['image'];
$p_name=$_POST['name'];
$p_price=$_POST['price'];
$Qty=$_POST['Qty'];

$query="INSERT INTO orders(customer_phone,product_id,product_name,product_image,product_price,Qty,address) VALUES('$c_phone','$p_id','$p_name','$p_image','$p_price','$Qty','$c_address') ";
$sql=mysqli_query($connect,$query);
if($sql==true){
echo 1;
}
else{
    echo $sql;
}
?>