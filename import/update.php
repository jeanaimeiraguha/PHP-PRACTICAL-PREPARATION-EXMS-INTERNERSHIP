<?php
include 'conn.php';
$FurnitureID = $_GET['FurnitureID'];
$select = mysqli_query($conn, "SELECT * FROM funiture WHERE FurnitureID = '$FurnitureID'");
$row = mysqli_fetch_array($select);
?>

<?php
include 'conn.php';
if (isset($_POST['upd'])) {
    $FurnitureID = $_POST['FurnitureID'];
    $FurnitureName = $_POST['FurnitureName'];
    $FurnitureOwnerName = $_POST['FurnitureOwnerName'];
    
    $update = mysqli_query($conn, "UPDATE funiture SET
        FurnitureName = '$FurnitureName', FurnitureOwnerName = '$FurnitureOwnerName' 
        WHERE FurnitureID = '$FurnitureID'");

    if ($update) {
        header('location:select.php');
    } else {
        echo "Update failed";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Furniture</title>
</head>
<body>
  <form action="" method="post">
    FurnitureName: <input type="text" name="FurnitureName" value="<?php echo $row['FurnitureName']; ?>"><br><br>
    FurnitureOwnerName: <input type="text" name="FurnitureOwnerName" value="<?php echo $row['FurnitureOwnerName']; ?>"><br><br>
    <input type="hidden" name="FurnitureID" value="<?php echo $row['FurnitureID']; ?>">
    <button name="upd">Edit</button>  
  </form>   
</body>
</html>
