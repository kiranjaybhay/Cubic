<?php  

include 'db.php';

// Check if the form is submitted
if (isset($_POST['update'])) {
    $date = $_POST['date'];
    $categary = $_POST['categary'];
    $perticular = $_POST['perticular'];
    $description = $_POST['description'];

    // Connect to the database

    // Perform an SQL update query
    $sql = "UPDATE user SET name='$date',categary='$categary',perticular='$perticular', description='$description' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        header("Location:data_table.php"); // Redirect after successful update
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}