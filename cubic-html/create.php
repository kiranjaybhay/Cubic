<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $date = $_POST['date'];
    $categary = $_POST['categary'];
    $perticular = $_POST['perticular'];
    $description = $_POST['description'];

    $sql = "INSERT INTO user (date,categary,perticular,description) VALUES ('$date', '$categary','$perticular','$description')";

    if (mysqli_query($conn, $sql)) {
        header("Location: data-table.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="create.php">
    <input type="date" name="date" placeholder="date">
    <input type="text" name="categary" placeholder="categary">
    <input type="text" name="perticular" placeholder="perticular">
    <input type="text" name="description" placeholder="Description">
    <button type="submit" name="submit">Create</button>
</form>
</body>
</html>
<!-- Create Form -->
