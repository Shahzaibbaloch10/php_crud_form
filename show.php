<?php
$connect= mysqli_connect("localhost","root","","crudoperation");
$select="SELECT * FROM `crudtable` where 1 ";
$data=mysqli_query($connect,$select);
if(mysqli_num_rows($data)>0){




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
<div class="container bg-warning p-2 m-2 text-center">
<h1>YOUR DATA</h1>
</div>

<table class="table dark">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>AGE</th>
            <th>ACTION</th>
        </tr>
    </thead>
<tbody>
<?php while ($row=mysqli_fetch_assoc($data)) {
     ?>
<tr>
        <td><?php echo $row["id"] ?></td>
        <td><?php  echo $row["name"] ?></td>
        <td><?php  echo $row["email"] ?></td>
        <td><?php echo  $row["age"] ?></td>
        <td>
<a href="update.php?id=<?php echo $row["id"] ?>" class="btn btn-danger">UPDATE</a>
<a href="delate.php?id=<?php echo $row["id"] ?>" class="btn btn-warning">DELATE</a>

        </td>
    </tr>
    <?php }?>
</tbody>

</table>
</div>
</body>
</html>
<?php
}
?>