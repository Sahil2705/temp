<?php
  $login=false;
if($_SERVER["REQUEST_METHOD"] == "POST"){

include 'partials/_dbconnect.php';
$username=$_POST["username"];
$password=$_POST["password"];

$sql="select * from user where username='$username' and password='$password'";
$result = mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if ($num==1){
  $login = true;
  session_start();
  $_SESSION['loggedin']=true; 
  $_SESSION['username']=$username; 
  header("location:home.php");

}
else{
  $showerror="password do not match";
}

}

?>
<?php
$pic="https://i.pinimg.com/originals/66/ca/0f/66ca0f543833db49b1de0a91f5a56c22.jpg";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>login</title>
    <style>
         body{
        background-image:url('<?php echo $pic ?>');
        background-size:100% 200%;
      }
      h1,h5{
        color:white;
      }
      b{
         color:white;
      }

      </style>
  </head>
  <body>
    <?php require 'partials/_nav.php'?>
    <?php
    if($login){ 
   echo' <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Wel Done!</strong> Your account has been LOGEDIN! 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div> ';
    }
    ?><center>
    <div class="container">
    <h1 class="text-center">login </h1>
    <form action="login.php" method="POST">

  <div class="form-group col-md-6">
    <label for="username"><b>Username</b></label>
    <input type="text" class="form-control" id="username" name="username"placeholder="ENTER USERNAME"aria-describedby="emailHelp">
  </div>
  <div class="form-group col-md-6">
    <label for="password"><b>Password</b></label>
    <input type="password" class="form-control" id="password" name="password"placeholder="ENTER PASSWORD">
  </div>
  
  <button type="submit" class="btn btn-primary">LOGIN</button>
</form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  
    <h5>Create New <a href="signup.php">ACCOUNT</a></h5>
</center>
  </body>
</html>
</body>
</html>