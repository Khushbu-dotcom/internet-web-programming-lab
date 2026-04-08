<?php
$xmlFile = "students.xml";

// -----------------------------
// ADD STUDENT DATA
// -----------------------------
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    // Load XML
    $xml = simplexml_load_file($xmlFile);

    // Add new student
    $student = $xml->addChild("student");
    $student->addChild("name", $name);
    $student->addChild("email", $email);
    $student->addChild("course", $course);

    // Save XML
    $xml->asXML($xmlFile);

    echo "<h3>Student Added Successfully!</h3>";
}

// -----------------------------
// READ & DISPLAY XML DATA
// -----------------------------
$xml = simplexml_load_file($xmlFile);
?>

<!DOCTYPE html>
<html>
<head>
    <title>XML Student Management</title>
</head>
<body>

<h2>XML Student Management</h2>

<!-- FORM -->
<form method="post">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="text" name="email" required><br><br>
    Course: <input type="text" name="course" required><br><br>

    <input type="submit" name="add" value="Add Student">
</form>

<hr>

<!-- DISPLAY DATA -->
<h3>Student Records (from XML)</h3>

<table border="1" cellpadding="10">
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Course</th>
</tr>

<?php
foreach ($xml->student as $s) {
    echo "<tr>
        <td>{$s->name}</td>
        <td>{$s->email}</td>
        <td>{$s->course}</td>
    </tr>";
}
?>

</table>

</body>
</html>
