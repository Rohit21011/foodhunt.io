<?php
include("connect.php");
$customer_mobile=$_POST['customer_mobile'];
$query="SELECT *  FROM wishlist  where customer_mobile='$customer_mobile' GROUP BY product_id";

$sql=mysqli_query($connect,$query);
$output=mysqli_fetch_all($sql,MYSQLI_ASSOC);
echo json_encode($output);
?>