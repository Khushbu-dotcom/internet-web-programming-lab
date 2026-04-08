<?php
// Initialize variables
$name = $email = $mobile = "";
$nameErr = $emailErr = $mobileErr = "";

// Function to sanitize input
function test_input($data) {
    $data = trim($data);           // remove extra spaces
    $data = stripslashes($data);   // remove backslashes
    $data = htmlspecialchars($data); // prevent XSS
    return $data;
}

// Form submit check
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // -------- NAME VALIDATION --------
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and spaces allowed";
        }
    }

    // -------- EMAIL VALIDATION --------
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // -------- MOBILE VALIDATION --------
    if (empty($_POST["mobile"])) {
        $mobileErr = "Mobile number is required";
    } else {
        $mobile = test_input($_POST["mobile"]);
        if (!preg_match("/^[0-9]{10}$/", $mobile)) {
            $mobileErr = "Enter valid 10-digit number";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Validation</title>
    <style>
        .error {color: red;}
    </style>
</head>
<body>

<h2>User Form</h2>

<form method="post">
    Name: 
    <input type="text" name="name" value="<?php echo $name; ?>">
    <span class="error">* <?php echo $nameErr; ?></span>
    <br><br>

    Email: 
    <input type="text" name="email" value="<?php echo $email; ?>">
    <span class="error">* <?php echo $emailErr; ?></span>
    <br><br>

    Mobile: 
    <input type="text" name="mobile" value="<?php echo $mobile; ?>">
    <span class="error">* <?php echo $mobileErr; ?></span>
    <br><br>

    <input type="submit" value="Submit">
</form>

<?php
// Display sanitized data if no errors
if ($_SERVER["REQUEST_METHOD"] == "POST" && 
    empty($nameErr) && empty($emailErr) && empty($mobileErr)) {

    echo "<h3>Sanitized User Data:</h3>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Mobile: $mobile <br>";
}
?>

</body>
</html>