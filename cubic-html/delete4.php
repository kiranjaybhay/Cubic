<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM service WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        header("Location: allservice.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>
