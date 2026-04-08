<?php
// -----------------------------
// SET COOKIE
// -----------------------------
if (isset($_POST['set'])) {
    $username = $_POST['username'];

    // Cookie valid for 1 hour
    setcookie("user", $username, time() + 3600);

    echo "<h3>Cookie Set Successfully!</h3>";
}

// -----------------------------
// DELETE COOKIE
// -----------------------------
if (isset($_POST['delete'])) {
    setcookie("user", "", time() - 3600); // expire in past
    echo "<h3>Cookie Deleted!</h3>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookies Example</title>
</head>
<body>

<h2>Cookies Implementation</h2>

<!-- FORM -->
<form method="post">
    Enter Username: <input type="text" name="username"><br><br>

    <input type="submit" name="set" value="Set Cookie">
    <input type="submit" name="delete" value="Delete Cookie">
</form>

<hr>

<!-- DISPLAY COOKIE -->
<h3>Stored Cookie Value:</h3>

<?php
if (isset($_COOKIE['user'])) {
    echo "Welcome " . $_COOKIE['user'];
} else {
    echo "No cookie found!";
}
?>

</body>
</html>