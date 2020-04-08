
Array
(
    [0] => stdClass Object
        (
            [room_id] => 1
            [rname] => Great Room
            [location] => dhankawadi room 3
            [rphone] => 1234567890
            [rarea] => Dhankawadi
            [rcity] => Pune
            [pic_location] => pics/1
            [info] => Good Room
            [amenities] => #Fan#light#Projector
            [availability] => Y
        )

)

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body >
<section class="custom-nav">
 
   <img class="logo" src="logo.jpg"/>
  <h1 class="heading"><b>MEETING ROOM</b></h1>

    </section>  
    

<div class="grid-container">

        <a class="nav_bar" href="login.html">Home</a>
 
        <a class="nav_bar" href="login.html">Login</a>
   
        <a class="nav_bar" href="findpage.php">Locate A Room</a>
    
        <a class="nav_bar" href="sitemap.xml">Sitemap</a>


</div>

<div id="demo" class="carousel slide" data-ride="carousel">


  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <!-- <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li> -->
    <li data-target="#demo" data-slide-to="1"></li><li data-target="#demo" data-slide-to="2"></li><li data-target="#demo" data-slide-to="3"></li> </ul><div class="carousel-inner">
    <div class="carousel-item active">
    <img src="./pics/1/1.jpg"  style="width:100%;height:460px"></div>
    
        <div class="carousel-item">
        <img src="./pics/1/6.jpg" alt="Los Angeles" style="width:100%;height:460px">
        </div>
        <div class="carousel-item">
        <img src="./pics/1/8.jpg" alt="Los Angeles" style="width:100%;height:460px">
        </div>
        <div class="carousel-item">
        <img src="./pics/1/9.jpg" alt="Los Angeles" style="width:100%;height:460px">
        </div></div>  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a></div> 
<div class="container-fluid" style="display:inline-block;">
    <br><br>
    <h3>Amenities</h3><br><ul style="list-style-type:none;"><li>
        <img  src="green-tick-amenities.png" style="vertical-align:middle;border-radius:50%; width:60px;height:60px;">
        <span class="amenities" style="font-size:1.5rem;">Fan</span>
        </li><br><li>
        <img  src="green-tick-amenities.png" style="vertical-align:middle;border-radius:50%; width:60px;height:60px;">
        <span class="amenities" style="font-size:1.5rem;">light</span>
        </li><br><li>
        <img  src="green-tick-amenities.png" style="vertical-align:middle;border-radius:50%; width:60px;height:60px;">
        <span class="amenities" style="font-size:1.5rem;">Projector</span>
        </li><br></ul>     <!-- <img src="green-tick-amenities.png" style="border-radius:50%; width:40px;height:40px;"><br>
    <img src="green-tick-amenities.png" style="width:40px;height:40px; "> -->
</div>
 