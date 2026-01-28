<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
}
include 'config/db.php';

$books = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM books"));
$students = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM students"));
$issued = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM issue_books"));
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h2>Welcome Admin</h2>
<p>Total Books: <?php echo $books; ?></p>
<p>Total Students: <?php echo $students; ?></p>
<p>Books Issued: <?php echo $issued; ?></p>

<a href="add_book.php">Add Book</a> |
<a href="view_books.php">View Books</a> |
<a href="add_student.php">Add Student</a> |
<a href="issue_book.php">Issue Book</a> |
<a href="return_book.php">Return Book</a> |
<a href="logout.php">Logout</a>
</body>
</html>
