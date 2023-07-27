<?php

session_start();
$usname=$_POST['name'];
$uemail=$_POST['email'];
$upass=$_POST['password'];
$ucpass=$_POST['cpassword'];
$link=mysqli_connect("localhost","root","","cs_info");
$query2="SELECT*FROM user_information where user_name='$usname'";
$a=mysqli_query($link,$query2);
if(mysqli_num_rows($a)<0){
    print"that user account already exist";
}
else if($upass==$ucpass){
    $query1="insert into user_information(user_name,user_email,user_password) values ('$_POST[name]','$_POST[email]','$_POST[password]')";
    mysqli_query($link,$query1);
    print"ristered successfully";
    header("location:index.html");
}
else{
    print"password not much";
}

  
?>