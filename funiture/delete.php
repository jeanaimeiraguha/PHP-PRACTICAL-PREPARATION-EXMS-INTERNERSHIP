<?php
include 'conn.php';
if (isset($_POST['FurnitureID'])) {
    $FurnitureID = $_POST['FurnitureID'];

    // Ensure FurnitureID is not empty or invalid
    if (!empty($FurnitureID) && is_numeric($FurnitureID)) {
        $delete = mysqli_query($conn, "DELETE FROM funiture WHERE FurnitureID = '$FurnitureID'");
        
        if ($delete) {
            echo "Deleted successfully.";
        } else {
            echo "Failed to delete.";
        }
    } else {
        echo "Invalid FurnitureID.";
    }
}
?>
