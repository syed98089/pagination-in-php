<!DOCTYPE html>
<html>
<head>
<title>Admin Page</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="styles.css">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php
     include 'conn.php';

   if (isset($_POST['submit'])) 
    {
   
     $q1 = "select * from admin_login WHERE `name`='$_POST[name]' AND `password`='$_POST[password]' ";
     $q2 = mysqli_query($con,$q1);

    // if (mysqli_num_rows($q2)==1) {

        
          session_start();

          $_SESSION['login']=$_POST['name'];
          header('location:dashboard.php');

    //}
}
    ?>
<div class="container" align="center"  style="width: 300px;height: 200px; border:1px solid black; margin-bottom: 10px">
<div class="login-form">
<h2>Admin Panel</h2><hr>
<table width="400px" height="300" border="1px solid black">
<form method="POST" >
<div class="input-field">
<i class="fa fa-user"></i>
<input type="text" name="name" placeholder="username">
</div>	
<div class="input-field">
<i class="fa fa-lock"></i>
<input type="password" name="password" placeholder="password">
</div>	
<button type="submit" name="submit" class="btn btn-success">Login</button>
</form>
</div>
</div>
</body>
</html>