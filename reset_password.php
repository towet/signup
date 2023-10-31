<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset Password</title>
</head>
<style>
    <!-- Your existing CSS styles -->
</style>
<body>
    <div class="container">
        <header>
            <h1>Reset Password</h1>
        </header>
        <form action="reset_password.php" method="post" class="reset-form">
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="new_password">New Password:</label>
                <input type="password" id="new_password" name="new_password" minlength="8" required>
            </div>
            <div class="input-group">
                <button type="submit" name="reset_password" class="reset-button">Reset Password</button>
            </div>
        </form>
    </div>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["reset_password"])) {
    
    $email = $_POST["email"];
    $new_password = $_POST["new_password"];

    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "contacts";

    
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $sql = "SELECT * FROM tables WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
        $sql_update = "UPDATE register SET password = '$hashed_password' WHERE email = '$email'";
        if ($conn->query($sql_update) === TRUE) {
            // Generate a random password reset code
            $reset_code = bin2hex(random_bytes(16));
            
            // Send the new password and reset code to the user's email
            $to = $email;
            $subject = "Password Reset";
            $message = "Your password has been reset. Your new password is: $new_password. Please use this reset code: $reset_code to complete the reset.";
            $headers = "From: aztecinteligence@example.com"; // Replace with your email address
            
            // Use the mail() function to send the email
            if (mail($to, $subject, $message, $headers)) {
                echo "Password reset successful! Check your email for the new password and reset code. <a href='login.html'>Log in again</a>";
            } else {
                echo "Error sending the email. Please try again later.";
            }
        } else {
            echo "Error updating password: " . $conn->error;
        }
    } else {
        echo "Email not found. Please enter a valid email.";
    }

    $conn->close();
}
?>
