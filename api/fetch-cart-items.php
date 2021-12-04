<?php 
include("connect.php");
$query="SELECT * FROM add_to_cart";
$sql=mysqli_query($connect,$query);
$output=mysqli_fetch_all($sql,MYSQLI_ASSOC);
echo json_encode($output);
?>