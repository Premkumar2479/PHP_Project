<?php
include 'config/db.php';
if (isset($_POST['issue'])) {
    $student_id = $_POST['student_id'];
    $book_id = $_POST['book_id'];
    $date = date("Y-m-d");

    mysqli_query($conn, "INSERT INTO issue_books (student_id, book_id, issue_date) VALUES ('$student_id','$book_id','$date')");
    mysqli_query($conn, "UPDATE books SET quantity = quantity - 1 WHERE book_id='$book_id'");
    $msg = "Book Issued Successfully";
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<form method="post">
<h2>Issue Book</h2>
<input type="number" name="student_id" placeholder="Student ID" required>
<input type="number" name="book_id" placeholder="Book ID" required>
<button name="issue">Issue Book</button>
<?php if (isset($msg)) echo $msg; ?>
</form>
</body>
</html>
