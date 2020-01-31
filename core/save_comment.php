<?php
require_once 'config.php';


$comment = trim($_POST['comment']);


//if ($comment==''{
    //echo 2;
    //die;
//}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO users (comment) VALUES ('".$comment."')";

if ($conn->query($sql) === TRUE) {
    echo 1;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>