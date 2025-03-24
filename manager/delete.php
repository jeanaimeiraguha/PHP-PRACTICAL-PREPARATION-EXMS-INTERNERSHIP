<?php
include 'conn.php';
$ManagerId=$_GET['ManagerId'];
$delete=mysqli_query($conn,"DELETE FROM manager where ManagerId='$ManagerId'");
if ($delete) {
     # code...
     echo "<script>if (confirm('Are you sure you want to delete this?')) { window.location.href = 'select.php'; }</script>";

}
else{
     echo "failed";
}
?>