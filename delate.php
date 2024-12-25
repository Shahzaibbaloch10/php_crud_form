<?php
$connect= mysqli_connect("localhost","root","","crudoperation");
if(isset($_GET["id"])){
   $id=$_GET["id"]; 
$delete="DELETE FROM `crudtable` WHERE `id`='$id' ";
mysqli_query($connect,$delete);
header("location: show.php?message=your data was delated");

exit();


}

?>