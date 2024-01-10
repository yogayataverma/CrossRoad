<?php
session_start();
?>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/14cfb2d6a9.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="bus.js" defer></script>
<link rel="stylesheet" href="../scrollbar/scrollbar.css">
<style>
hr
{
  margin-top: 1px;
  margin-bottom: px;
  border: 0;
  border-top: 1px solid rgba(0, 0, 0, 0.1);
  width:100%;
}

tr
{
border-style:solid;
}

td
{
color:grey;
}

.extra_links:hover
{
animation: animate 2s linear forwards;
text-decoration:none;
}

@keyframes animate {
             0% {opacity: 0;}
             100% {opacity: 1;}

.extra_links
{
text-decoration:none;
}

}

</style>
</head>
<body class="bg-light">

<div style="margin-top:-1vw;" class=" sticky-top "><?php  include("../navbar/navbar.html"); ?></div>
<div class="wrapper">
<div class="sidebar border" style="background-color:white;width:15vw;bottom:0;top:0;position:fixed;overflow-x: hidden;overflow-y:scroll;">
<form method="POST" style="margin-top:7vw;margin-left:5vw;" action="filter.php">
<label class="text-muted">Type</label>
<hr style="margin-left:-3vw;margin-top:-0vw;">
<input type="radio" name="type" value="public" style="margin-left:-0.55vw;margin-top:-2vw">&nbsp;Public
<br>
<input type="radio" name="type" value="private" style="margin-left:-0.55vw;">&nbsp;Private
<br>
<br>
<label class="text-muted">Price</label><hr style="margin-left:-3vw;margin-top:-1px;">
<input type="checkbox" name="allfare" style="margin-left:-0.55vw;">&nbsp;All
<br>
<input type="checkbox" name="fare500" style="margin-left:-0.55vw;">&nbsp;500-700
<br>
<input type="checkbox" name="fare700" style="margin-left:-0.55vw;">&nbsp;700-900
<br>
<input type="checkbox" name="fare900" style="margin-left:-0.55vw;">&nbsp;900-1000
<br>
<br>
<label class="text-muted" style="margin-left:-30px;">Deprature Place</label><hr style="margin-left:-3vw;margin-top:0vw;">
<input type="checkbox" name="alldeplace" style="margin-left:-0.55vw;">&nbsp;All
<br>
<input type="checkbox" name="chandigarh" style="margin-left:-0.55vw;">&nbsp;Chandigarh
<br>
<input type="checkbox" name="bathinda" style="margin-left:-0.55vw;">&nbsp;Bathinda
<br>
<input type="checkbox" name="kolkata" style="margin-left:-0.55vw;">&nbsp;Kolkata
<br>
<input type="checkbox" name="bangalore" style="margin-left:-0.55vw;">&nbsp;Bangalore
<br>
<br>
<label class="text-muted" style="margin-left:-30px;">Deprature Time</label><hr style="margin-left:-3vw;margin-top:0vw;">
<input type="checkbox" name="8am" style="margin-left:-0.55vw;">&nbsp;8AM
<br>
<input type="checkbox" name="12pm" style="margin-left:-0.55vw;">&nbsp;12PM
<br>
<input type="checkbox" name="6pm" style="margin-left:-0.55vw;">&nbsp;6PM
<br>
<br>



<input type="submit" name="sub" value="Filter" class="btn btn-danger" style="margin-left:-0.5vw;">

</form>

</div>
</div>



<?php

$con=mysqli_connect("localhost:3307","root","","bus");
$sql="select * from bus_arrival";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
         
     echo '<div class="card" style="width:70vw;margin-top:5vw;border-style:none;margin-left:20vw;border-style:solid;overflow-x: hidden;overflow-y:hidden;">
     <div class="card-body">
     <table class="table">
     <thead>
     <tr style="border-style:solid;border-width:0.1vw;border-left:none;border-right:none;">
      <td><h6 style="font-family:Bradley Hand, cursive">'.$row["name"].'</h6></td>
      <td style="font-family:Bradley Hand, cursive">Departure</td>
      <td style="font-family:Bradley Hand, cursive">Duration</td>
      <td style="font-family:Bradley Hand, cursive">Arrival</td>
      <td style="font-family:Bradley Hand, cursive">Ratings</td>
      <td style="font-family:Bradley Hand, cursive">Fare</td>
     </tr>
     </thead>
     <tbody>
     <tr style="border-style:none;">
      <td style="border-style:none;font-size:0.9vw;">'.$row["desci"].'</td>
      <td style="border-style:none;">'.$row["dep_time"].'</td>
      <td style="border-style:none;">'.$row["duration"].'</td>
      <td style="border-style:none;">'.$row["arrival"].'</td>
      <td style="border-style:none;"><button class="btn btn-danger">'.$row["rating"].'</button></td>
      <td style="border-style:none;" id="price_supply">'.$row["fare"].'</td>
     </tr>
     <tr style="border-style:none;">
     <td style="border-style:none;">'.$row["fac"].'</td>
     <td style="border-style:none;font-size:0.8vw;">'.$row["dep_place"].'</td>
     <td style="border-style:none;"></td>
     <td style="border-style:none;font-size:0.8vw;">'.$row["arrival_place"].'</td>
     <td style="border-style:none;"></td>
     <td style="border-style:none;"></td>
     </tr>
     </tbody>
     </table>
     <form method="POST" action="'.$row["class_file"].'">
     <input type="submit" class="btn btn-danger" style="margin-left:55vw;margin-top:0.5vw;" name="get_price" value="VIEW SEATS">
     <input type="hidden" name="price"  value="'.$row["fare"].'" >
     </form>
      <a href="#ami" class="extra_links text-danger" data-toggle="collapse" style="border-style:none;background-color:white;">Aminities</a>
     <div id="ami" class="collapse bg-danger" style="margin-left:-1.5vw;margin-right:-1.5vw;margin-bottom:0.2vw;color:white;padding-left:-10vw;">
     <div class="container" id="ami" class="collapse bg-dark" >'.$row["ami"].'</div>
     </div>
     <br>
     <a href="#photo" class="extra_links text-danger" data-toggle="collapse" style="border-style:none;background-color:white;">Bus Photos</a>
     <div id="photo" class="collapse" style="margin-left:1.5vw;margin-right:-1.5vw;margin-bottom:-1vw;color:white;padding-left:1vw;">
     <div class="container" id="photo" class="collapse bg-dark" ><div style="display:flex;"><img style="height:500px;width:500px;" src="data:image/jpeg;base64,'.base64_encode( $row['img'] ).'"/><img style="height:500px;" src="data:image/jpeg;base64,'.base64_encode( $row['img1'] ).'"/></div></div>
     </div>
     <br>


     <a type="link" class="text-danger" data-toggle="modal" data-target="#myModal">Boarding Pass</button>

   <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          
        <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
    <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselIndicators" data-slide-to="1"></li>
    <li data-target="#carouselIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active ">
      <img style="height:694px;width:500px; class="d-block w-100" src="../images/board1.jpg"/>
    </div>
    <div class="carousel-item">
      <img style="height:694px;width:500px; class="d-block w-100" src="../images/board2.jpg"/>
    </div>
    <div class="carousel-item">
      <img style="height:694px;width:500px; class="d-block w-100" src="../images/board3.jpg"/>
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
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
     <br>
      
     </div>
     </div>
     </div>
     </div>
     </div>
     </div>';
}
?>
</body>
</html>