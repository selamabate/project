<?php

$usname=$_POST['name'];
$upass=$_POST['password'];
$link=mysqli_connect("localhost","root","","cs_info");
$query2="SELECT*FROM user_information where user_name='$usname'";
$a=mysqli_query($link,$query2);
if(mysqli_num_rows($a)>0){
    while($row=mysqli_fetch_assoc($a)){
  $c1=$row['user_name'];
  $c2=$row['user_password'];
    }
    if($usname==$c1 && $upass==$c2){
        header("location:home.html");
    }
else{
    print"password not much";
}

}
else{
    print"that user account doesn't  exist";
    print"<br>";
    print"Go back and press signup link to register";
}


?>