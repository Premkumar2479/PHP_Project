<?php
include 'config/db.php';
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $course = $_POST['course'];

    mysqli_query($conn, "INSERT INTO students (name, course) VALUES ('$name','$course')");
    $msg = "Student Added Successfully";
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<form method="post">
<h2>Add Student</h2>
<input type="text" name="name" placeholder="Student Name" required>
<input type="text" name="course" placeholder="Course" required>
<button name="add">Add Student</button>
<?php if (isset($msg)) echo $msg; ?>
</form>
</body>
</html>
