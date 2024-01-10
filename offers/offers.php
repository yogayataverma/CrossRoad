<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="../scrollbar/scrollbar.css">
</head>
<body>
<p style="margin-top:-1vw"><?php include("../navbar/navbar.html"); ?></p>
<div style="width:100%;color:black;height:11.5vw;margin-top:-1vw;">
<img src="../images/backoff.jpg" style="width:100%;height:50vw;">
<p style="margin-left:37vw;font-size:2.5vw;margin-top:-27vw;position:absolute;">Offers Active For Today</p>
</div>

<div style="width:100%;color:black;height:35vw;margin-top:38vw;">
<img src="../images/backoff1.jpg" style="width:100%;height:55vw;">
</div>

<div style="width:100%;color:black;height:35vw;margin-top:-5vw;">
<img src="../images/backoff3.jpg" style="width:100%;height:32vw;">
</div>

<div style="width:100%;color:black;height:35vw;margin-top:-5vw;">
<img src="../images/backoff2.jpg" style="width:100%;height:35vw;">
</div>


<div class="container">
<div class="row" style="margin-left:2vw;position:relative;margin-top:-100vw;">

<?php
$con=mysqli_connect("localhost:3307","root","","bus");
$sql="select * from offers where id=1";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);


$class=@$_POST["class"];
echo "<div style='margin-left:1vw;margin-top:7.5vw;'>
<div class='card' style='height:25vw;width:20vw;'>
  <img style='background-color:black;' class='card-img-top' alt='Card image cap' src='data:image/jpeg;base64,".base64_encode( $row['img'] )."'/ >
  <div class='card-body'>
    <h5 class='card-title'>".$row["name"]."</h5>
    ".$row['content']."<br><br>
    <form method='POST' action='../booking/".$class."' >";
    if(isset($_POST["select_offer"]))
    {
      
      $price=$_POST["price1"];
      $name=$_POST["name12"];
      $ticket=$_POST["ticket"];
      $dep_time=$_POST["dep_time"];
      $dep_place=$_POST["dep_place"];
      echo '<input type="hidden" name="price1" value="'.$price.'">
      <input type="hidden" name="name12" value="'.$name.'">
      <input type="hidden" name="ticket" value="'.$ticket.'">
      <input type="hidden" name="dep_time" value="'.$dep_time.'">
      <input type="hidden" name="dep_place" value="'.$dep_place.'">';
    }
    echo" <button class='btn btn-danger' name='off'>Choose</button>
     <input type='hidden' name='off1' value='".$row["id"]."'/>
    </form>
  </div>
</div>
</div>";




$sql1="select * from offers where id=3";
$result=mysqli_query($con,$sql1);
$row=mysqli_fetch_array($result);

$class=@$_POST["class"];
echo "<div style='margin-left:1vw;margin-top:37.5vw;'>
<div class='card' style='height:25vw;width:20vw;'>
  <img style='background-color:black;' class='card-img-top' alt='Card image cap' src='data:image/jpeg;base64,".base64_encode( $row['img'] )."'/ >
  <div class='card-body'>
    <h5 class='card-title'>".$row["name"]."</h5>
    ".$row['content']."<br><br>
    <form method='POST' action='../booking/".$class."' >";
    if(isset($_POST["select_offer"]))
    {
      
      $price=$_POST["price1"];
      $name=$_POST["name12"];
      $ticket=$_POST["ticket"];
      $dep_time=$_POST["dep_time"];
      $dep_place=$_POST["dep_place"];
      echo '<input type="hidden" name="price1" value="'.$price.'">
      <input type="hidden" name="name12" value="'.$name.'">
      <input type="hidden" name="ticket" value="'.$ticket.'">
      <input type="hidden" name="dep_time" value="'.$dep_time.'">
      <input type="hidden" name="dep_place" value="'.$dep_place.'">';
    }
    echo" <button class='btn btn-danger' name='off'>Choose</button>
     <input type='hidden' name='off1' value='".$row["id"]."'/>
    </form>
  </div>
</div>
</div>";



$sql1="select * from offers where id=2";
$result=mysqli_query($con,$sql1);
$row=mysqli_fetch_array($result);

$class=@$_POST["class"];
echo "<div style='margin-left:1vw;margin-top:67.5vw;'>
<div class='card' style='height:25vw;width:20vw;'>
  <img style='background-color:black;' class='card-img-top' alt='Card image cap' src='data:image/jpeg;base64,".base64_encode( $row['img'] )."'/ >
  <div class='card-body'>
    <h5 class='card-title'>".$row["name"]."</h5>
    ".$row['content']."<br><br>
    <form method='POST' action='../booking/".$class."' >";
    if(isset($_POST["select_offer"]))
    {
      
      $price=$_POST["price1"];
      $name=$_POST["name12"];
      $ticket=$_POST["ticket"];
      $dep_time=$_POST["dep_time"];
      $dep_place=$_POST["dep_place"];
      echo '<input type="hidden" name="price1" value="'.$price.'">
      <input type="hidden" name="name12" value="'.$name.'">
      <input type="hidden" name="ticket" value="'.$ticket.'">
      <input type="hidden" name="dep_time" value="'.$dep_time.'">
      <input type="hidden" name="dep_place" value="'.$dep_place.'">';
    }
    echo" <button class='btn btn-danger' name='off'>Choose</button>
     <input type='hidden' name='off1' value='".$row["id"]."'/>
    </form>
  </div>
</div>
</div>";

?>
</div>
</div>
</div>
</div>
</body>
</html>