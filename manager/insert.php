<?php
include 'conn.php';
if (isset($_POST['add'])) {
     # code...
     $UserName=$_POST['UserName'];
     $Password=$_POST['Password'];
     $insert=mysqli_query($conn,"INSERT INTO Manager VALUES('','$UserName','$Password')");
if ($insert) {
     # code...
     echo "Inserted";
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
     username<input type="text" name="UserName"> <br><br>
     Password<input type="password" name="Password"> <br><br>
<button name="add">Add New</button>  
</form>   

</body>
</html>