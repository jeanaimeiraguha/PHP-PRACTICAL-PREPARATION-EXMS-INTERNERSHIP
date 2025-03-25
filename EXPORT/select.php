<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Import</title>
</head>
<body>
     <a href="insert.php">Add New Furniture</a>
     <table border="1">
          <tr>
               <th>FurnitureID</th>
               <th>ImportDate</th>
               <th>Quantity</th>
               <th colspan="2">Operations</th>
          </tr>
          <?php
          include 'conn.php';

          $select = mysqli_query($conn, "SELECT * FROM import");

          
          

          while ($row = mysqli_fetch_array($select)) {
          ?>
          <tr>
               <td><?php echo $row['FurnitureID']; ?></td>
               <td><?php echo $row['ImportDate']; ?></td>
               <td><?php echo $row['Quantity']; ?></td>
               <td><a href="update.php?FurnitureID=<?php echo $row['FurnitureID']; ?>">Edit</a></td>
               <td><a href="delete.php?FurnitureID=<?php echo $row['FurnitureID']; ?>" onclick="return confirm('Are you sure you want to delete this?');">Delete</a></td>
          </tr>
          <?php
          }
          ?>
     </table>    
</body>
</html>
