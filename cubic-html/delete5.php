<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM table5 WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        header("Location: data_table5.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>
