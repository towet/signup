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
    $username = $_POST["Username"];
    $password = $_POST["Password"];

    $sql = "SELECT * FROM register WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            
            header("Location: home.html");
            exit(); 
        } else {
            echo "Incorrect password. Please try again.";
        }
    } else {
        echo "Username not found. Please sign up.";
    }
}

$conn->close();
?>
