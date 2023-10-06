<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $registration_number = $_POST["registration_number"];

    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "contacts"; // Change this to your database name

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert contact data into the database (assuming you have a 'contacts' table)
    $sql = "INSERT INTO contacts (mobile, email, address, registration_number) VALUES ('$mobile', '$email', '$address', '$registration_number')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to home.html upon success
        header("Location: home.html");
        exit(); // Ensure that no more output is sent to the browser
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
