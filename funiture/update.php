<?php
include 'conn.php';
$FurnitureID=$_GET['FurnitureID'];
$select=mysqli_query($conn, "SELECT * FROM funiture where FurnitureID='$FurnitureID'");
$row=mysqli_fetch_array($select);
?>
<?php
include 'conn.php';
if (isset($_POST['upd'])) {
     # code...
     $FurnitureID=$_POST['FurnitureID'];
     $FurnitureName=$_POST['FurnitureName'];
     $FurnitureOwnerName=$_POST['FurnitureOwnerName'];
     $update=mysqli_query($conn,"UPDATE Funiture SET
      FurnitureName='$FurnitureName', FurnitureOwnerName='$FurnitureOwnerName' 
     WHERE FurnitureID='$FurnitureID'");


if ($update) {
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
  FurnitureName<input type="text" name="FurnitureName" value="<?php echo $row['UserName']?>"> <br><br>
  FurnitureOwnerName<input type="FurnitureOwnerName" name="FurnitureOwnerName" value="<?php echo $row['Password']?>"> <br>
<button  name="upd">Edit</button>  
</form>   

</body>
</html>