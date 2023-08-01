<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "complaint";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
   
    $username = $_POST["username"];
    $password = $_POST["password"];

} 

$sql = "SELECT * FROM admin where username='$username'  AND password='$password' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header("Location: view.html");
}
else
    {
        echo "error";
    }
$conn->close();
?>