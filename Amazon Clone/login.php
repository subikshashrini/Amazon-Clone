<?php
$db_host = 'your_rds_endpoint';
$db_user = 'your_db_username';
$db_pass = 'your_db_password';
$db_name = 'your_db_name';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        // Authentication successful, redirect to a success page
        header("Location: success.html");
        exit();
    } else {
        // Authentication failed, display an error message
        echo "Login failed!";
    }
}

$conn->close();
?>
