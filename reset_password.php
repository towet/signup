<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset Password</title>
</head>
<body>
    <h1>Reset Password</h1>
    <form action="reset_password.php" method="post">
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="new_password">New Password:</label>
            <input type="password" id="new_password" name="new_password" minlength="8" required>
        </div>
        <div>
            <input type="submit" name="reset_password" value="Reset Password">
        </div>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["reset_password"])) {
    
    $email = $_POST["email"];
    $new_password = $_POST["new_password"];

    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "registration";

    
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
        $sql_update = "UPDATE users SET password = '$hashed_password' WHERE email = '$email'";
        if ($conn->query($sql_update) === TRUE) {
            echo "Password reset successful!";
        } else {
            echo "Error updating password: " . $conn->error;
        }
    } else {
        echo "Email not found. Please enter a valid email.";
    }


    $conn->close();
}
?>
