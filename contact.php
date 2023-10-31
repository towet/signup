<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $registration_number = $_POST["registration_number"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "details"; 

   
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

   
    $sql = "INSERT INTO contacts (mobile, email, address, registration_number) VALUES ('$mobile', '$email', '$address', '$registration_number')";

    if ($conn->query($sql) === TRUE) {
      
        header("Location: home.html");
        exit(); 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

   
    $conn->close();
}
?>
