<?php
session_start();
if (isset($_SESSION['loggedin'])) {
    header('Location: index.php');
    exit;
}
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Authenticate user
    if ($username === 'admin' && $password === 'password') {
        $_SESSION['loggedin'] = true;
        header('Location: index.php');
        exit;
    } else {
        echo 'Invalid username or password.';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="post">
        <label>Username:</label>
        <input type="text" name="username">
        <br>
        <label>Password:</label>
        <input type="password" name="password">
        <br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>
