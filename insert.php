<?php
$connect= mysqli_connect("localhost","root","","crudoperation");
if(isset($_POST["btn"])){
$name= $_POST["name"];
$email= $_POST["email"];
$age= $_POST["age"];

$insert="INSERT INTO `crudtable`( `name`, `email`, `age`) VALUES ('$name','$email','$age')";
mysqli_query($connect,$insert);
header("location: show.php");
exit();


}



?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<div class="container bg-success p-2 mt-2 text-center">
<h1>INSERT YOUR DATA</h1>
</div>
<div class="container">
<form action="insert.php" method="POST">

<input type="text" class="form-control mt-2" name="name"   placeholder="name" required>
<input type="email" class="form-control mt-2" name="email" placeholder="email"required>
<input type="number" class="form-control mt-2" name="age"  placeholder="age"  required>
<input type="submit" class="btn btn-success  mt-2" name="btn">
<a href="show.php" class="btn btn-warning mt-2">Show all data</a>


</form>



</div>


</div>
</body>
</html>