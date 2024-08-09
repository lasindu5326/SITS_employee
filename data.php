<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "post_request"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$password = $_POST['password']; 

$sql = "INSERT INTO employee_details (First_name, last_name, password) VALUES ('$first_name', '$last_name', '$password')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>