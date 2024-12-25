
<?php
$connect= mysqli_connect("localhost","root","","crudoperation");
if(isset($_GET["id"])){
$id = $_GET["id"];
$select="SELECT * FROM `crudtable` where `id` = '$id' ";
$data=mysqli_query($connect,$select);
$row=mysqli_fetch_assoc($data);


}


$connect= mysqli_connect("localhost","root","","crudoperation");
if(isset($_POST["btn"])){
    $id = $_POST["id"];
    $name= $_POST["name"];
    $email= $_POST["email"];
    $age= $_POST["age"];
    
    $update="UPDATE `crudtable` SET `name`='$name',`email`='$email',`age`='$age' WHERE `id` = '$id' ";
    mysqli_query($connect,$update);
    
    header("location: show.php?message=your data successfully update");
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
<div class="container bg-danger p-2 mt-2 text-center">
<h1>UPDATE YOUR DATA</h1>
</div>
<div class="container">
<form action="update.php" method="POST">
<input type="text" name="id" Value="<?php echo $row["id"]   ?>" class="d-none">
<input type="text" class="form-control mt-2" name="name"   placeholder="name" required value="<?php echo $row["name"]  ?>">
<input type="email" class="form-control mt-2" name="email" placeholder="email"required value="<?php echo $row["email"]  ?>">
<input type="number" class="form-control mt-2" name="age"  placeholder="age"  required value="<?php echo $row["age"]  ?>">
<input type="submit" class="btn btn-success mt-2" value="update" name="btn">

<a href="show.php" class="btn btn-warning mt-2">Cancel update</a>


</form>



</div>


</div>
</body>
</html>
