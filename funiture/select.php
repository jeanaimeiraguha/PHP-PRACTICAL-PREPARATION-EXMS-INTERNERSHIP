<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <a href="insert.php">Add New Manager</a>
 <table border="1">
     <tr>
          <th>FurnitureID</th>
          <th>FurnitureName</th>
          <th>FurnitureOwnerName</th>
          <th colspan="2">Operations</th>
     </tr>
     <?php
     // include 'conn.php';
     include 'conn.php';
     $select=mysqli_query($conn, "SELECT* FROM manager ");
     while($row=mysqli_fetch_array($select)){
     ?>
     <tr>
          <td><?php echo $row['ManagerId']?></td>
          <td><?php echo $row['UserName']?></td>
          <td><?php echo $row['Password']?></td>

          <td> <a href="update.php?ManagerId=<?php echo $row['ManagerId']?>">Edit</a></td>
          <td> <a href="delete.php?ManagerId=<?php echo $row['ManagerId']?>">Delete</a></td>

     </tr>
     <?php
     }
     ?>
 </table>    
</body>
</html>