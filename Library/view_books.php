<?php
include 'config/db.php';
$result = mysqli_query($conn, "SELECT * FROM books");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<h2>Book List</h2>
<table border="1">
<tr>
<th>ID</th><th>Title</th><th>Author</th><th>Quantity</th>
</tr>
<?php while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td><?php echo $row['book_id']; ?></td>
<td><?php echo $row['title']; ?></td>
<td><?php echo $row['author']; ?></td>
<td><?php echo $row['quantity']; ?></td>
</tr>
<?php } ?>
</table>
</body>
</html>
