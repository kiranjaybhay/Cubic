
<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $date = $_POST['date'];
    $categary = $_POST['categary'];
    $perticular = $_POST['perticular'];
    $description = $_POST['description'];

    $sql = "UPDATE user SET date='$date',categary='$categary',perticular='$perticular', description='$description' WHERE id=$id";

    // $sql = "UPDATE items SET name='$name', description='$description' WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        header("Location: data_table.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM user WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
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
    <form method="post" action="edit.php">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    date <input type="text" name="date" value="<?php echo $row['date']; ?>"><br>
    categary::<input type="text" name="categary" value="<?php echo $row['categary']; ?>"><br>
   perticular <input type="text" name="perticular" value="<?php echo $row['perticular']; ?>"><br>
  description  <input type="text" name="description" value="<?php echo $row['description']; ?>"><br>
    <button type="submit" name="submit">Update</button>
</form>
</body>
</html>