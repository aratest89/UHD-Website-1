<?php

    // Step 1: Collect form data
    $Name = $_POST['Name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    // Step 2: Connect to the database
    $servername = "localhost";  
    $username = "root";        
    $password_db = "";          
    $dbname = "web project";  

    // Create connection
    $conn = new mysqli($servername, $username, $password_db, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Step 3: Insert data into MySQL database
    $sql = "INSERT INTO users (user_name, user_email, user_password) VALUES ('$Name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Step 4: Close the database connection
    $conn->close();

?>
