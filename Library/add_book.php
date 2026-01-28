<?php
include 'config/db.php';
if (isset($_POST['add'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $qty = $_POST['quantity'];

    mysqli_query($conn, "INSERT INTO books (title, author, quantity) VALUES ('$title','$author','$qty')");
    $msg = "Book Added Successfully";
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<form method="post">
    <h2>Add Book</h2>
    <input type="text" name="title" placeholder="Book Title" required>
    <input type="text" name="author" placeholder="Author" required>
    <input type="number" name="quantity" placeholder="Quantity" required>
    <button name="add">Add Book</button>
    <?php if (isset($msg)) echo $msg; ?>
</form>
</body>
</html>
