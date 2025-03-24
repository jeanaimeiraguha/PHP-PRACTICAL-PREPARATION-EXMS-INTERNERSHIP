<?php
if (isset($_POST['FurnitureID'])) {
     # code...
}$FurnitureID=$_POST['FurnitureID'];
$delete=mysqli_query($conn , "DELETE FROM funiture where FurnitureID='$FurnitureID'");
if ($delete) {
     # code...
     echo "dlted";
}
else{
     echo "failed";
}
?>