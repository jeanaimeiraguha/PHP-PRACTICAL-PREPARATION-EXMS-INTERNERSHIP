<?php
include 'conn.php';
$FurnitureID=$_GET['FurnitureID'];
$select=mysqli_query($conn, "SELECT * FROM manager where ManagerId='$ManagerId'");
$row=mysqli_fetch_array($select);
?>
<?php
include 'conn.php';
if (isset($_POST['upd'])) {
     # code...
     $FurnitureID=$_POST['FurnitureID'];
     $FurnitureName=$_POST['FurnitureName'];
     $FurnitureOwnerName=$_POST['FurnitureOwnerName'];
     $update=mysqli_query($conn,"UPDATE Manager SET UserName='$UserName', `Password`='$Password' WHERE ManagerId='$ManagerId'");


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
     username<input type="text" name="UserName" value="<?php echo $row['UserName']?>"> <br><br>
     Password<input type="password" name="Password" value="<?php echo $row['Password']?>"> <br>
<button  name="upd">Edit</button>  
</form>   

</body>
</html>