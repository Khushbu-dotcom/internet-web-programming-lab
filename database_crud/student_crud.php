<?php
// -----------------------------
// DATABASE CONNECTION
// -----------------------------
$conn = new mysqli("localhost", "root", "YOUR_PASSWORD", "college");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// -----------------------------
// INSERT
// -----------------------------
if (isset($_POST['insert'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $sql = "INSERT INTO students (name, email, course)
            VALUES ('$name', '$email', '$course')";
    $conn->query($sql);
}

// -----------------------------
// DELETE
// -----------------------------
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM students WHERE id=$id");
}

// -----------------------------
// UPDATE
// -----------------------------
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $sql = "UPDATE students SET 
            name='$name', email='$email', course='$course'
            WHERE id=$id";
    $conn->query($sql);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Database</title>
</head>
<body>

<h2>Student Management System</h2>

<!-- FORM -->
<form method="post">
    ID (for update): <input type="number" name="id"><br><br>
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="text" name="email" required><br><br>
    Course: <input type="text" name="course" required><br><br>

    <input type="submit" name="insert" value="Insert">
    <input type="submit" name="update" value="Update">
</form>

<hr>

<!-- DISPLAY DATA -->
<h3>Student Records</h3>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Course</th>
    <th>Action</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM students");

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['course']}</td>
        <td>
            <a href='?delete={$row['id']}'>Delete</a>
        </td>
    </tr>";
}
?>

</table>

</body>
</html>
