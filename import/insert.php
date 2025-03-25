<?php
include 'conn.php';
if (isset($_POST['add'])) {
     # code...
     $FurnitureID=$_POST['FurnitureID'];
     $ImportDate=$_POST['ImportDate'];
     $Quantity=$_POST['Quantity'];
     $insert=mysqli_query($conn,"INSERT INTO import VALUES('$FurnitureID','$ImportDate','$Quantity')");
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
FurnitureID<input type="text" name=" FurnitureID" required> <br><br>
  ImportDate<input type="date" name="  ImportDate"> <br><br>
  Quantity<input type="text" name="Quantity"> <br><br>
<button name="add">Add New</button>  
</form>   

</body>
</html>