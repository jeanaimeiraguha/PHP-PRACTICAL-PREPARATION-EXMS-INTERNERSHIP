<?php
$ManagerId=$_GET['ManagerId'];
$delete=mysqli_query($conn,"DELETE FROM manager where ManagerId='$ManagerId'");
if ($delete) {
     # code...
     echo "deleted";
}
else{
     echo "failed";
}
?>