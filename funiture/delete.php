<?php
include 'conn.php';


if (isset($_GET['FurnitureID'])) {
    $FurnitureID = $_GET['FurnitureID'];

  
    $delete = mysqli_query($conn, "DELETE FROM furniture WHERE FurnitureID='$FurnitureID'");

    if ($delete) {
        echo "<script>
                alert('Deleted successfully!');
                window.location.href = 'select.php';
              </script>";
    } else {
        echo "Failed to delete.";
    }
} else {
    echo "FurnitureID is missing!";
}
?>
