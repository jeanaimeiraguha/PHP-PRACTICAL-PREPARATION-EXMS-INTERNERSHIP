<?php
include 'conn.php';
if (isset($_POST['add'])) {
     # code...

     $FurnitureID=$_POST['FurnitureID'];
     $ExportDate=$_POST['ExportDate'];
     $Quantity=$_POST['Quantity'];
     $insert=mysqli_query($conn,"INSERT INTO export VALUES('$FurnitureID','$ExportDate','$Quantity')");
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
  FurnitureId<input type="text" name="FurnitureID"> <br><br>
  ExportDate<input type="date" name="ExportDate"> <br><br>
  Quantity<input type="text" name="Quantity"> <br><br>
<button name="add">Add New</button>  
</form>   

</body>
</html>