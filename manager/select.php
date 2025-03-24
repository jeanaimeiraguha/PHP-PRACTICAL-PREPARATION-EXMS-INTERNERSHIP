<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
 <table>
     <tr>
          <th>ManagerID</th>
          <th>User Name</th>
          <th>Password</th>
     </tr>
     <?php
     include 'conn.php';
     $select=mysqli_query($conn, "SELECT* FROM manger ");
     while($row=mysqli_fetch_array($select)){
     ?>
     <tr>
          <td><?php echo $row['ManagerId']?></td>
          <td><?php echo $row['ManagerId']?></td>
          <td><?php echo $row['ManagerId']?></td>

     </tr>
 </table>    
</body>
</html>