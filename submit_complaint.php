<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "complaint";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 Process form submission
 if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
     $email = $_POST["email"];
     $subject = $_POST["subject"];
     $description = $_POST["description"];

     $sql = "INSERT INTO complaints (name, email, subject, description) VALUES ('$name', '$email', '$subject', '$description')";

     if ($conn->query($sql) === TRUE) {
       echo "Complaint submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
echo "abcd"
$conn->close();
?>