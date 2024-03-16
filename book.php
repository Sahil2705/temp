
<?php
$pic="assets/b.jpg";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        body{
            background-image:url('<?php echo $pic;?>');
            background-size:100% 150%;
        }
        marquee{
            background-color:white;

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

    <title>Hello, world!</title>
  </head>
  <body>
    <?php require 'partials/_nav.php'?>
   
  <center >    <font color="white">
      <h4 style="border:white; border-width:3px; border-style:solid;">
  <form action="submit.php" method="POST" >
      
      <label for="fname"><b> Enter your first name</b></label><br>
    <input type="text" id="fname" name="firstname" placeholder="Your name.."><br>

    <label for="lname"><b>Enter your last name</b></label><br>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br>

    <label for="city"><b>Enter your City</b></label><br>
    <select id="city" name="city">
        <option value="Mumbai">Mumbai</option>
        <option value="pune">pune</option>
        <option value="Satara">Satara</option>
    </select><br>
    
    <label for="event"><b>Select your event:</b></label><br>
    <select id="event" name="event">
        <option value="wedding">wedding</option>
        <option value="haladi">haladi-shoot</option>
        <option value="model">model-shoot</option>
    </select><br>
    
    <label for="subject"><b>Enter your number</b></label><br>
    <textarea id="subject" name="subject" placeholder="Enter your number"></textarea><br>
    
    <input type="submit" value="Submit">
    
</form></h4>    </font></center><br>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<div class="container"><br>
<marquee><b><h5>CONTACT US:+91 7900102708<h5><b></marquee>
</div>
</body>
</html>
</body>
</html>
