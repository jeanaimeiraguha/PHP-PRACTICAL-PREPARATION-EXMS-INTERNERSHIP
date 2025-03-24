<?php
include 'conn.php';
if (isset($_POST['add'])) {
     # code...

     $FurnitureName=$_POST['FurnitureName'];
     $FurnitureOwnerName=$_POST['FurnitureOwnerName'];
     $insert=mysqli_query($conn,"INSERT INTO funiture VALUES('','$FurnitureName','$FurnitureOwnerName')");
if ($insert) {
     # code...
     header('location:select.php');
}
else{
     echo "failed";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
  <form action="" method="post">
  FurnitureName<input type="text" name="FurnitureName"> <br><br>
  FurnitureOwnerName<input type="password" name="FurnitureOwnerName"> <br><br>
<button name="add">Add New</button>  
</form>   

</body>
</html>