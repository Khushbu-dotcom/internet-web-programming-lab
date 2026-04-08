<?php
$filename = "data.txt";

// -----------------------------
// WRITE (Create + Write)
// -----------------------------
if (isset($_POST['write'])) {
    $data = $_POST['data'];

    $file = fopen($filename, "w");   // "w" = write mode (overwrite/create)
    fwrite($file, $data . "\n");
    fclose($file);

    echo "<h3>Data written to file successfully!</h3>";
}

// -----------------------------
// APPEND (Add without deleting)
// -----------------------------
if (isset($_POST['append'])) {
    $data = $_POST['data'];

    $file = fopen($filename, "a");   // "a" = append mode
    fwrite($file, $data . "\n");
    fclose($file);

    echo "<h3>Data appended successfully!</h3>";
}

// -----------------------------
// READ (Display contents)
// -----------------------------
$content = "";
if (file_exists($filename)) {
    $file = fopen($filename, "r");   // "r" = read mode
    $content = fread($file, filesize($filename));
    fclose($file);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>File Handling</title>
</head>
<body>

<h2>File Handling System</h2>

<form method="post">
    Enter Data: <input type="text" name="data" required><br><br>

    <input type="submit" name="write" value="Write (Overwrite)">
    <input type="submit" name="append" value="Append Data">
</form>

<h3>File Contents:</h3>
<pre>
<?php echo $content; ?>
</pre>

</body>
</html>