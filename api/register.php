<?php
include("connect.php");
$customer_id=rand();
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="insert into customer_login(customer_id,customer_name,customer_mobile,customer_email,customer_password) values ('$customer_id','$name','$phone','$email','$password')";
$res=mysqli_query($connect,$sql);
if($res){
    echo 1;
}else
{
    echo 0;
}

?>