<?php

// Validation function
function validateInput($data) {
    return trim(htmlspecialchars($data));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = validateInput($_POST['name']);
    $email = validateInput($_POST['email']);
    $feedback = validateInput($_POST['feedback']);
    $rating = validateInput($_POST['rating']);

    if (!empty($name) && !empty($email) && !empty($feedback) && !empty($rating)) {

        $entry = "Name: $name | Email: $email | Feedback: $feedback | Rating: $rating\n";

        file_put_contents("feedback.txt", $entry, FILE_APPEND);

        echo "<p>Feedback Submitted Successfully!</p>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Online Feedback Form</title>
</head>
<body>
<h2>Feedback Form</h2>
<form method="POST">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Feedback:<br>
    <textarea name="feedback" required></textarea><br><br>
    Rating:
    <select name="rating" required>
        <option value="">Select</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select><br><br>
    <button type="submit">Submit</button>
</form>
<hr>
<h2>Stored Feedback</h2>
<?php
if (file_exists("feedback.txt")) {
    $data = file("feedback.txt");

    foreach($data as $line) {
        echo $line . "<br>";
    }
}
?>
</body>
</html>

