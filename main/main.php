<?php
session_start();
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="../scrollbar/scrollbar.css">
<style>
*{
margin:0;
padding:0;
}

#down_links {
    color: white;
    text-decoration: none;
}

a:hover {
    color: red;
}

.header {
    height: 100vh;
}

.video-background {
    position: absolute;
    right: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
}

.btn-welcome {
    position: absolute;
    margin-left: 50%; /* Adjusted to center button */
    margin-top: -350px;
}

.about-scroll {
    display: block;
    height: 0; /* Removed height, not necessary for the link */
}


#down_links
{
color:white;
text-decoration:none;
}

a:hover
{
color:red;
}

.header
{
 height:100%;
 width:10%;
}

.video-background
{
position:absolute;
right:0;
bottom:0;
width:100%;
height:100%;

}

</style>
</head>
<body class="bg-light scrollbar">
<section class="header">
<video autoplay loop class="video-background" muted>
<source src="rain12.mp4" type="video/mp4">
</source>

</video>
</section>

<button style="margin-left:47vw;margin-top:-20vw;position:absolute;" class="btn btn-danger"><a href="#about" style="text-decoration:none;color:white;">Welcome!!!!!</a></button>
<a class="about_scroll" name="about"></a>
<?php include("../navbar/navbar.html"); ?>

<p style=" font-weight: bold;margin-left:45vw;text-decoration:underline;font-size:4vw;width:20vw;"><br>About Us</p>


<p style="font-size:1.2vw;margin-left:10vw;margin-top:2vw;">
<p style="font-size:1.2vw;margin-left:10vw;padding-left:5vw;font-family:Lucida Console,Courier New, monospace;padding-left:10vw;">Make Online Bus Ticket Bookings across India with CrossRoad.com and get great discounts.</p>
<p  style="font-size:1.2vw;margin-left:10vw;padding-left:5vw;font-family:Lucida Console,Courier New, monospace;padding-left:15vw;">CrossRoad is an initiative to make booking tickets a hassle free process.</p>
</p>

<form class="form-group" style="display:flex;margin-top:4vw;margin-left:9vw" method="POST" action="../booking/buses2.php">
<input type="submit" value="BOOK" name="search" class="form-control bg-danger" style="width:30vw;margin-right:10vw;color:white;margin-left:30vw;">
</form>

<div id="container" style="width:81vw;height:42vw;margin-top:10vw;margin-left:9.5vw;">
<div id="carouselIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselIndicators" data-slide-to="1"></li>
    <li data-target="#carouselIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active ">
      <img class="d-block w-100" src="../images/YoloBus.jpg" style="height:694px;width:500px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../images/YoloBus1.jpg" style="height:694px;width:500px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../images/YoloBus2.jpg" style="height:694px;width:500px;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselIndicators" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#carouselIndicators" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>

<p style="margin-left:35vw;text-decoration:underline;font-size:2vw;margin-top:10vw;">WHY BOOK WITH CROSSROADS</p>


<div class="container" style="margin-left:14vw">
  <div class="row" style="width:70vw;height:40vw;background-color:white;">
    <div class="col border" style="background-color:white;border:10px solid black;">
    <br><br><br><br><br><br>
     <img src="../images/safety1.png" style="margin-left:5vw;">
     <br><br><br><br><br><br><div style="margin-left:8vw;background-color:white;">SAFETY +</div><br>
     <div style="margin-left:1vw;background-color:white;">With Safety+ we have brought in a set of measures like Sanitized buses, mandatory masks etc. to ensure you travel safely.</div><br><br><br>
    </div>
    <div class="col border" style="background-color:white;">
      <br><br><br><br><br>
     <img src="../images/rs.jpg" style="margin-left:5.5vw;width:10vw;margin-top:1.7vw;">
     <br><br><br><br><br><br><div style="margin-left:7vw;">LOWEST PRICES</div><br><br>
     <div style="margin-left:1vw;margin-top:-1vw;">We put our experience and relationships to good use and are available to solve your travel issues.</div><br><br><br>
    </div>
    <div class="col border" style="background-color:white;">
       <br><br><br><br><br><br>
     <img src="../images/ben.jpg" style="margin-left:3.5vw;width:15vw;background-color:white;">
     <br><br><br><br><br><br><div style="margin-left:6.5vw;background-color:white;">UNMATCHED BENEFITS</div><br>
     <div style="margin-left:1vw;background-color:white;">We take care of your travel beyond ticketing by providing you with innovative and unique benefits.</div><br><br><br>
    </div>
  </div>
</div>
<p style=" font-weight: bold;margin-left:40.5vw;text-decoration:underline;font-size:1vw;margin-top:10vw;font-size:1.9vw;"><br>HOW TO BOOK BUS SEAT</p>

<div>
<img src="../images/buspageicon1.png" style="border-style:solid;margin-top:5vw;width:32.2vw;margin-left:36vw;">
</div>


<p style=" font-weight: bold;margin-left:44vw;text-decoration:underline;font-size:3vw;"><br>Contact Us</p>
<small id="emailHelp" class="form-text text-muted" style="margin-left:44vw;">We'll never share your details with anyone else.</small>
<br><br><br>
<form class="border" style="width:60vw;margin-left:21vw;border-radius:1vw;" method="POST" action="contactus.php">
  <div class="form-group" style="margin-top:7vw;">
    <label style="border-style:none;width:20vw;margin-left:5.5vw;">Enter Name</label>
    <input type="text" class="form-control" style="border-style:none;width:50vw;margin-left:5.5vw;"  name="name" required>
  </div>
  <div class="form-group">
    <label style="border-style:none;width:60vw;margin-left:5.5vw;">Email address</label>
    <input type="email" class="form-control" aria-describedby="emailHelp" name="email" style="border-style:none;width:50vw;margin-left:5.5vw;">
    <small id="emailHelp" class="form-text text-muted" style="border-style:none;width:50vw;margin-left:5.5vw;">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label style="border-style:none;width:60vw;margin-left:5.5vw;">Query</label>
    <textarea class="form-control" style="border-style:none;width:50vw;margin-left:5.5vw;" rows="5" name="message" ></textarea>
  </div>
  <button type="submit" class="btn btn-danger" style="border-style:none;width:50vw;margin-left:5.5vw;margin-bottom:5vw;" name="consub">Submit</button>
</form>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3429.3897418070937!2d76.77626521513156!3d30.735552081636133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390feda7371d20cb%3A0x3a4da6aec091e615!2sISBT%20Road%2C%2017G%2C%2017F%2C%20Sector%2017%2C%20Chandigarh!5e0!3m2!1sen!2sin!4v1622478834190!5m2!1sen!2sin" width="100%" height="450" style="border:0;margin-top:100px;" allowfullscreen="" loading="lazy">
</iframe>

<div class="border" style="margin-top:5vw;height:12vw;background-color:black;">
<div style="margin-top:4vw;margin-left:5.9vw;display:flex;">
<a href="../booking/buses2.php" id="down_links">Book</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="../offers/offers.php" id="down_links" >Offers</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="../routes/routes.php" id="down_links" >Routes</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://www.google.com/maps/" id="down_links" >Maps</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
<div style="margin-top:0.5vw;margin-left:5.9vw;display:flex;">
<a href="../destination/chandigarh.php" id="down_links" >Chandigarh</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="../destination/bathinda.php" id="down_links" >Bathinda</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="../destination/kolkata.php" id="down_links" >Kolkata</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="../destination/bangalore.php" id="down_links" >Bangalore</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
<div style="margin-top:0.5vw;margin-left:5.9vw;display:flex;">
<a href="../services/services.php" id="down_links">Services</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://services.india.gov.in/service/detail/apply-online-for-travel-trade-recognition-1" id="down_links" >Govt. Recogonisation</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="../help/help.php" id="down_links" >Help</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="../faq/faq.php" id="down_links" >FAQs</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
</div>

<img src="../images/bus1.png" style="width:4vw;height:4vw;margin-left:75vw;margin-top:-7.5vw;">

<div style="width:15vw;height:1vw;margin-left:84vw;margin-top:-10vw;font-size:0.7vw;color:white;">

<p>CrossRoads is the world's largest online bus ticket booking service trusted by over 25 million happy customers globally.</p>

<a href="https://www.facebook.com/"><img src="../images/fb.jpg" style="width:2vw;height:2vw;margin-top:0.2vw;"></a>
<a href="https://www.twitter.com/"><img src="../images/twitter.png" style="width:2vw;height:2vw;margin-top:0.2vw;margin-left:1vw;"></a>

<img src="../images/cw.jpg" style="width:1vw;height:1vw;margin-top:1vw;margin-left:1vw">
<p style="color:white;font-size:0.5vw;margin-left:1vw;margin-top:1vw;width:220px;">Copyright 2021-Crossroads.All rights Reserved.|Designed at GGDSD College,Sec-32-C,Chandigarh-160047</p>

</div>

</body>
</html>