<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="../scrollbar/scrollbar.css">
</head>
<body>
<div class=" sticky-top " style="margin-top:-1vw;"><p style="margin-top:-1vw;"><?php include("../navbar/navbar.html"); ?></p></div>
<form method="POST" action="download.php">
<div>
  <label class="form-label" style="width:10vw;margin-left:30vw;margin-top:10vw;">Email Name</label>
  <input type="text" style="width:40vw;margin-left:30vw;" name="name1" class="form-control" placeholder="Enter Name">
</div>
<div>
  <label class="form-label" style="width:10vw;margin-left:30vw;" >Email address</label>
  <input type="email" style="width:40vw;margin-left:30vw;" name="email1" class="form-control" placeholder="Enter Email">
</div>
<div>
  <input type="submit" style="width:500px;margin-left:30vw;margin-top:5vw;width:40vw;" name="fet_p" class="form-control btn btn-danger" value="Print">
</div>
</form>
</body>
</html>