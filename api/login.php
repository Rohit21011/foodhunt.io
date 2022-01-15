<?php
session_start();
include("connect.php");
$phone=$_POST['phone'];
$password=$_POST['password'];
$query="select * from customer_login where customer_mobile='$phone' and customer_password='$password'";
$login=mysqli_query($connect,$query);
 
if (mysqli_num_rows($login) == 0){
    echo 0;
}
else{
    $_SESSION['customer_id']=$phone;
    echo $_SESSION['customer_id'];
}

?>