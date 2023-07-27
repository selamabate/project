<?php
session_start();
$uname=$_POST['name'];
$uemail=$_POST['email'];
$ucomment=$_POST['comment'];
$link=mysqli_connect("localhost","root","","cs_info");
$query1="insert into user_info(user_name,user_email,user_comment) values ('$_POST[name]','$_POST[email]','$_POST[comment]')";
 mysqli_query($link,$query1);
 header("location:home.html");
  mysqli_close($link);
?>