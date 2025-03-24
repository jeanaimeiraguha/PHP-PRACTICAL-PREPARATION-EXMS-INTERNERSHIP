<?php
include 'conn.php';
$ManagerId=$_GET['ManagerId'];
$select=mysqli_query($conn, "SELECT * FROM manager where ManagerId='$ManagerId'");
?>