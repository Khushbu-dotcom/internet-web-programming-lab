<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user['name'];

            if (isset($_POST['remember'])) {
                setcookie("user", $user['name'], time() + 86400, "/");
            }

            header("Location: dashboard.php");
            exit();
        } else {
            echo "Wrong Password!";
        }
    } else {
        echo "User Not Found!";
    }
}
?>

<form method="POST">
    Email: <input type="email" name="email" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="checkbox" name="remember"> Remember Me<br><br>
    <button type="submit">Login</button>
</form>