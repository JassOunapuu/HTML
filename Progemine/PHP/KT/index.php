<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}
$page_id = $_GET['id'];
$page_content = '';
if (isset($_POST['save'])) {
    $page_content = $_POST['page_content'];
    // Save content to database
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "mydatabase";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "UPDATE pages SET content='$page_content' WHERE id='$page_id'";
    if (mysqli_query($conn, $sql)) {
        echo "Page content saved successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
} else {
    // Load content from database
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "mydatabase";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT content FROM pages WHERE id='$page_id'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $page_content = $row['content'];
    } else {
        $page_content = 'Page content not found.';
    }
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
</head>
<body>
    <h1>Edit Page Content</h1>
    <form method="post">
        <textarea name="page_content"><?php echo $page_content ?></textarea>
        <br>
        <input type="submit" name="save" value="Save">
    </form>
</body>
</html>