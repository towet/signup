<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $search_registration_number = $_POST["search_registration_number"];

    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "contacts"; 

    
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $sql = "SELECT * FROM contacts WHERE registration_number = '$search_registration_number'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        while ($row = $result->fetch_assoc()) {
            echo "Mobile: " . $row["mobile"] . "<br>";
            echo "Email: " . $row["email"] . "<br>";
            echo "Address: " . $row["address"] . "<br>";
            echo "Registration Number: " . $row["registration_number"] . "<br>";
        }
    } else {
        echo "Contact not found.";
    }

    
    $conn->close();
}
?>
