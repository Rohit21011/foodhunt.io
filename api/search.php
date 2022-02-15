<?php
include("connect.php");
$search=$_POST['search'];
$query="SELECT DISTINCT(product_name) FROM product_details WHERE product_name LIKE '%{$search}%'";
$sql=mysqli_query($connect,$query) or die("connection");
$output="<ul class='search-list'>";
if(mysqli_num_rows($sql)>0){
    while($row=mysqli_fetch_assoc($sql)){
        $output.="<li><a href='product_details.php'>{$row['product_name']}</a></li>";

    }
}

    else{
        $output.="<li>not found</li>";

    }
    
$output.="</ul>";
echo $output;
// $output=mysqli_fetch_all($sql,MYSQLI_ASSOC);

// echo json_encode($output);
?>