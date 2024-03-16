<?php
  $showalert=false;
if($_SERVER["REQUEST_METHOD"] == "POST"){

include 'partials/_dbconnect.php';
$username=$_POST["username"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];
$exists=false;
if(($password == $cpassword) && $exists == false){
$sql="INSERT INTO user(username, password, date) VALUES ('$username','$password',current_timestamp())";
$result = mysqli_query($conn,$sql);
if ($result){
  $showalert = true;
}
}
}
?>
<?php
$pic="https://images.pexels.com/photos/303383/pexels-photo-303383.jpeg?auto=compress&cs=tinysrgb&w=400";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         body{
        background-image:url('<?php echo $pic ?>');
        background-size:100% 200%;
      }
      h1,b,h5,h6{
        color:white;
      }
      </style>
</head>
<body>
<form>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Signup</title>
    
  </head>
  <body>

    <?php require 'partials/_nav.php'?>
    <?php
    if($showalert){ 
   echo' <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Wel Done!</strong> Your account has been created! 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div> ';
    }
    ?><center>
    <div class="container">
    <h1 class="text-center">Sign Up</h1>
    <form action="signup.php" method="POST">
  
  <div class="form-group col-md-6">
    <label for="username"><b>Username</b></label>
    <input type="text" class="form-control" id="username" placeholder="ENTER YOUR USERNAME" name="username"aria-describedby="emailHelp">
  </div>
  <div class="form-group col-md-6">
    <label for="password"><b>Password</b></label>
    <input type="password" class="form-control" id="password" placeholder="ENTER YOUR PASSWORD" name="password">
  </div>
  <div class="form-group col-md-6">
    <label for="cpassword"><b>ConfirmPassword</b></label>
    <input type="password" class="form-control" id="cpassword"placeholder="REPEAT YOUR PASSWORD" name="cpassword">
    <small id="emailHelp" class="form-text text-muted">To type the same password</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    
    <h6>clik here for<a href="login.php">LOGIN</a></h6><script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </center>
  </body>
</html>
</body>
</html>