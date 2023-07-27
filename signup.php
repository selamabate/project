
<html>
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>signup page</title>
      <link rel="stylesheet" href="styles.css">
 
</head>
<body class="back">
    <?php

session_start();
$usname=$_POST['name'];
$uemail=$_POST['email'];
$upass=$_POST['password'];
$ucpass=$_POST['cpassword'];

$query2="SELECT*FROM user_information where user_name='$usname'";
$a=mysqli_query($link,$query2);
if(mysqli_num_rows($a)<0){
    print"that user name already exist";
}
else if($upass==$ucpass){
    $query1="insert into user_information(user_name,user_email,user_password) values ('$_POST[name]','$_POST[email]','$_POST[password]')";
    mysqli_query($link,$query1);
    print"ristered successfully";
}
else{
    print"password not much";
}

  
?>
    <form  id="create-account-form" action="store.php" name="myform" method="post">
        
        <div class="title">
            <h2 align="center"><i>create-account</i></h2>
        </div>
        <!-- USERNAME -->
        <div class="input-group">
            <label for="username">Name</label>
            <input type="text" id="username" placeholder="Name" name="e">
            <p id="n"></p>
            <h2 id="x"></h2>
        </div>
       <!-- EMAIL -->
<div class="input-group">
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Email" name="email">
          
            <p></p>
        </div>
        <!-- PASSWORD -->
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Password" name="password">
          
            <p id="m"></p>
            <h2 id="y"></h2>
        </div>
     
        <div class="input-group">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" placeholder="Password" name="cpassword">
          
            <p id="text"></p>
        </div>

        <input type="submit" class="btn" onsubmit="page()" value="signup" align="center">
        <p  style="text-align:center;text-transform: none;">you have already an account?<a href="index.html" style="color:pink;">signin</a></p>
    </form></br>
    <script src="form.js"></script></body>
</body>
</html>
