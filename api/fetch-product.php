<?php
include("connect.php");
$category=$_POST['category'];
$query="select * from product_details where product_category='$category'";
$sql=mysqli_query($connect,$query); 
$output=mysqli_fetch_all($sql,MYSQLI_ASSOC);

echo json_encode($output);
?>