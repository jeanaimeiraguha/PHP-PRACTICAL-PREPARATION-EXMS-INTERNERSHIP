<?php
include 'conn.php';
$ManagerId=$_GET['ManagerId'];
$select=mysqli_query($conn, "SELECT * FROM manager where ManagerId='$ManagerId'");
$row=mysqli_fetch_array($select);
?>
<?php
include 'conn.php';
if (isset($_POST['upd'])) {
     # code...
     $UserName=$_POST['UserName'];
     $Password=$_POST['Password'];
     $update=mysqli_query($conn,"UPDATE Manager SET  UserName='$UserName',`Password`='$Password' WHERE  ManagerId='$ManagerId')");
if ($update) {
     # code...
     echo "Updated";
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
     username<input type="text" name="UserName" value="<?php echo $row['']?>"> <br><br>
     Password<input type="password" name="Password"> <br><br>
<button name="upd">Edit</button>  
</form>   

</body>
</html>