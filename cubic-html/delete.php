<?php
include 'db.php';

if (isset($_GET['cadidate_id'])) {
    $id = $_GET['cadidate_id'];
    $sql = "DELETE FROM userdetails WHERE cadidate_id='$id'";

    if (mysqli_query($conn, $sql)) {
        header("Location: viewcand.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>
