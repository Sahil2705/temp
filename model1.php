<?php
$m1="assets/m1.jpg";
$m3="assets/m3.jpg";
$m4="assets/m4.jpg";
$m5="assets/m5.jpg";
$m2="assets/m2.jpg";
$m6="assets/m6.jpg";

?>
<!DOCTYPE html>
<html>
<head>
 <title>Learning CSS</title>

<link href="https://fonts.googleapis.com/css?family=Dokdo" rel="stylesheet">

<style type="text/css">
 
 *{
   margin: 0px;
}

h1{
 text-align: center;
}
p{
 font-size: 55px;
}

header{

font-family: 'Dokdo', cursive;
font-size: 30px;
padding: 20px;
}
main{
      margin-left: 120px;
        width: 100%;
        margin-top: 40px;
}
.box{
 width: 20%;
 float: left;
 padding: 7px;
 padding-left: 10px;  
 display: block;

}

img{
 width: 100%;
    border-radius: 4px;

}

img:hover{
  transform: scale(1.3,1.3);
  transition: .3s transform;

}


</style>

</head>
<body>
<header>
 
 <h1>
Photo Gallery <p>By Using HTML and CSS Only</p>
</h1>
<hr/>

</header>

<main>
 <div class="box">
<img src="<?php echo $m1;?>"></div>
<div class="box">
<img src="<?php echo $m2;?>"></div>
<div class="box">
<img src="<?php echo $m3;?>"></div>
<div class="box">
<img src="<?php echo $m4;?>"></div>

</main>



</body>
</html>