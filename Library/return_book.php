<?php
include 'config/db.php';
if (isset($_POST['return'])) {
    $issue_id = $_POST['issue_id'];

    $res = mysqli_query($conn, "SELECT book_id FROM issue_books WHERE issue_id='$issue_id'");
    $row = mysqli_fetch_assoc($res);
    $book_id = $row['book_id'];

    mysqli_query($conn, "DELETE FROM issue_books WHERE issue_id='$issue_id'");
    mysqli_query($conn, "UPDATE books SET quantity = quantity + 1 WHERE book_id='$book_id'");
    $msg = "Book Returned Successfully";
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<form method="post">
<h2>Return Book</h2>
<input type="number" name="issue_id" placeholder="Issue ID" required>
<button name="return">Return Book</button>
<?php if (isset($msg)) echo $msg; ?>
</form>
</body>
</html>
