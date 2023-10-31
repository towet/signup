<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["First_Name"];
    $username = $_POST["Username"];
    $email = $_POST["email"];
    $password = $_POST["Password"];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO register ( name, username, email, password) VALUES ('$name', '$username', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        
        echo '<meta http-equiv="refresh" content="0;url=login.html">';

        exit(); 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
