
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


<?php
include 'conn.php';
if (isset($_POST['add'])) {
     # code...
     $UserName=$_POST['UserName'];
     $Password=$_POST['Password'];
     $select=mysqli_query($conn,"SELECT * Manager WHERE UserName='$UserName'AND `Password`='$Password'");
$count=mysqli_num_rows($select)>=1;
     if ($select) {
     # code...
     header('location:select.php');
}
else{
     echo "failed";
}
}