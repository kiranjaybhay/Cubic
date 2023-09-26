<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM company WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        header("Location: allcompany.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>
