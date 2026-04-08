<?php
session_start();
include "db.php";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users 
            WHERE username='$username' AND password='$password'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['user'] = $username;   // start session
        header("Location: dashboard.php");
    } else {
        echo "<h3>Invalid Credentials</h3>";
    }
}
?>

<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>

<h2>Login Page</h2>

<form method="post">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" name="login" value="Login">
</form>

</body>
</html>