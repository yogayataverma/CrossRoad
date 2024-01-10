<?php
session_start();

?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet"  href="../scrollbar/scrollbar.css">
<style>

</style>
</head>
<body style="background-image:url('../images/seatback.jpg'); height: 145%;background-position: center;background-repeat: no-repeat;background-size: cover;">
<div style="margin-top:-1vw;" class="sticky-top" ><?php  include("../navbar/navbar.html");  ?></div>

<div style="width:10vw;height:3vw;">
<form method="POST" action="passinfo.php">
  <div class="form-group" style="width:40vw;margin-left:29.4vw;margin-top:2vw;" >
    <label style="color:white;">Name</label>
    <input type="text" class="form-control" placeholder="Enter Name" name="name1" required >
  </div>

  <div class="form-group" style="width:40vw;margin-left:29.4vw;">
    <label style="color:white;">Contact</label>
    <input type="text" class="form-control" placeholder="Enter Number" name="contact1" required >
  </div>

  <div class="form-group" style="width:40vw;margin-left:29.4vw;">
    <label style="color:white;">Email</label>
    <input type="email" class="form-control" placeholder="Enter Email" name="email" >
  </div>

  <div class="form-group" style="width:40vw;margin-left:29.4vw;">
    <label style="color:white;">No. Of Passengers</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <select class="form-control" style="border-radius:1vw;width:10vw;" name="pas" required  >
    <?php
    $con=mysqli_connect("localhost:3307","root","","bus");
    $sql="select * from seat5 ";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result))
    {
    echo '<option value="'.$row["id"].'">'.$row["status"].'</option>';
    }
    ?>
    </select>
    </div>

    <div class="form-group" style="width:40vw;margin-left:29.4vw;border-radius:1vw;">
    <label style="color:white;">No. Of Child</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <select class="form-control" style="border-radius:1vw;width:10vw;" name="child" required >
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    </select>
    </div>

  <div class="form-group" style="margin-left:1vw;margin-top:-10vw;width:10vw;margin-left:57vw;">
    <label style="color:white;width:20vw">Need Food During Journey?</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <select class="form-control" style="border-radius:1vw;width:10vw;margin-top:-1.5vw" name="food" required >
    <option value="YES">YES</option>
    <option value="NO">NO</option>
    </select>
  </div>

  <div class="form-group" style="margin-left:1vw;margin-top:1vw;width:10vw;margin-left:57vw;">
    <label style="color:white;width:20vw">Need Comfy Facilitiy?</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <select class="form-control" style="border-radius:5vw;width:10vw;margin-top:-1.5vw" name="fac" required >
    <option value="YES">YES</option>
    <option value="NO">NO</option>
    </select>
  </div>

<button type="submit" style="margin-left:29.5vw;margin-top:0px;width:10vw" class="btn btn-danger" name="passub">Submit</button></a>


<?php
if(isset($_POST["get_price"]))
{
$sql1="select * from bus_arrival where id=5";
$result=mysqli_query($con,$sql1);
$row=mysqli_fetch_array($result);
$price=$_POST["price"];
echo '<input type="hidden" name="price1" value="'.$price.'">
<input type="hidden" name="name12" value="'.$row["name"].'">
<input type="hidden" name="ticket" value="'.rand().'">
<input type="hidden" name="dep_time" value="'.$row["dep_time"].'">
<input type="hidden" name="dep_place" value="'.$row["dep_place"].'">';
}

if(isset($_POST["off"]))
{
$off=$_POST["off1"];
$price1=$_POST["price1"];
$name=$_POST["name12"];
$ticket=$_POST["ticket"];
$dep_time=$_POST["dep_time"];
$dep_place=$_POST["dep_place"];
echo '<input type="hidden" name="off" value="'.$off.'">
<input type="hidden" name="price1" value="'.$price1.'">
<input type="hidden" name="name12" value="'.$name.'">
<input type="hidden" name="ticket" value="'.$ticket.'">
<input type="hidden" name="dep_time" value="'.$dep_time.'">
<input type="hidden" name="dep_place" value="'.$dep_place.'">';
}
?>
</form>


<div style="margin-left:29.5vw;width:10vw;" class="text-white">Need Offer?
<form method="POST" action="../offers/offers1.php" style="margin-left:5vw;margin-top:-1.8vw;">
<input type="submit" name="select_offer" class=" nosel btn bg-transparent text-danger" style="border-style:none;" value="Click Here">
<?php
$sql1="select * from bus_arrival where id=5";
$result=mysqli_query($con,$sql1);
$row=mysqli_fetch_array($result);
$price=@$_POST["price"];
echo '<input type="hidden" name="price1" value="'.$price.'">
<input type="hidden" name="name12" value="'.$row["name"].'">
<input type="hidden" name="ticket" value="'.rand().'">
<input type="hidden" name="dep_time" value="'.$row["dep_time"].'">
<input type="hidden" name="dep_place" value="'.$row["dep_place"].'">
<input type="hidden" name="class" value="'.$row["class_file"].'">';
?>
</form>
</div><br>

</div>
</body>
</html>