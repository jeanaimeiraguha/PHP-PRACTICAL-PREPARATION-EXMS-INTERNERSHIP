<?php
include 'conn.php';
$FurnitureID	=$_GET['FurnitureID	'];
$delete=mysqli_query($conn,"DELETE FROM export where FurnitureID='$FurnitureID'");
if ($delete) {
     # code...
     echo "<script>if (confirm('Are you sure you want to delete this?')) { window.location.href = 'select.php'; }</script>";

}
else{
     echo "failed";
}
?>