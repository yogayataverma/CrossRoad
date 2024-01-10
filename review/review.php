<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/14cfb2d6a9.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../scrollbar/scrollbar.css">

<style>
*{
    margin: 0;
    padding: 0;
}
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}

.rate:not(:checked) > label:hover ~ label {
    color: #deb21;  
}
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}

</style>

</head>
<body>

<p style="margin-top:-1vw"><?php include("../navbar/navbar.html"); ?></p>


<form  method="POST" action="review1.php" class="border" style="margin-bottom:10vw;;margin-top:2vw;margin-left:21vw;width:50vw;height:30vw;background-image:url('../images/revform.jpg');background-position: center;background-repeat: no-repeat;background-size: cover;">

   <label style="margin-top:1vw;margin-left:12vw;">Star Rating</label>
   <div class="form-group" style="margin-top:0px;margin-left:11vw;">
   <ul style="List-style:none;display:flex;">
    <div class="rate">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
    </div>
   </ul>
   </div>

   <div class="form-group">
    <label style="margin-top:0px;margin-left:12vw;">Bus Name</label><br>
    <select name="bus" style="margin-left:12vw;">
    <?php
    $con=mysqli_connect("localhost:3307","root","","bus");
    $sql="select * from bus_arrival";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result))
    {
    echo '
    <option value="'.$row["name"].'">'.$row["name"].'</option>';
    }
    ?>
    </select>
    </div>

    <div class="form-group">
    <label style="margin-top:0px;margin-left:12vw;">Comments</label><br>
    <textarea  name="com" rows=5 cols=50 style="margin-top:0px;margin-left:12vw;"></textarea>
    </div>

    <input type="submit" name="review" class="btn btn-danger" value="Submit" style="margin-top:0px;margin-left:12vw;">
</form>













<?php
$con=mysqli_connect("localhost:3307","root","","bus");
$sql="select * from review";
$result=mysqli_query($con,$sql);
$row1=mysqli_fetch_array($result);
$row=mysqli_num_rows($result);
echo '<div class="card" style="margin-left:10vw;width:70vw;margin-top:1vw;height:20vw;margin-bottom:10vw;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="../images/reviewback.jpg" class="card-img" alt="..." style="height:20vw;position:relative;">
     <h3><p style="position:absolute;margin-top:-19.5vw;margin-left:8vw;" class=" text-danger">Overview</p></h3>
     <a href="#rev" class=" btn btn-danger" style="margin-top:-2vw;position:absolute;margin-left:8vw;">Submit Yours</a>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">'.$row.'   People Reviewed</h5>
        <p class="card-text">We Are Here To Listen To Your Problems And Rectify Our Drawbacks.</p>
        <p class="card-text"><small class="text-muted">'.$row1["time"].'</small></p>
      </div>
    </div>
  </div>
</div>';

?>










<?php
$con=mysqli_connect("localhost:3307","root","","bus");
$sql="select * from review";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
echo '<div class="card" style="width:70vw;margin-left:10vw;">
  <div class="card-header">
    Review '.$row["id"].'
  </div>
  <ul class="list-group ">
    <li class="list-group-item">'.$row["star"].'</li>
    <li class="list-group-item">'.$row["bus"].'</li>
    <li class="list-group-item">'.$row["com"].'</li>
  </ul>
</div>';

}
?>






</body>
</html>