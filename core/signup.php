<?php
require_once 'config.php';

$name = trim($_POST['name']);
$pass = trim($_POST['pass']);
$email = trim($_POST['email']);
$comment = trim($_POST['comment']);
$sex = trim($_POST['sex']);

if ($name =='' OR $pass=='' OR $email=='' OR $comment=='' OR $sex ==''){
    echo 2;
    die;
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO users (name, email, password, comment, sex) VALUES ('".$name."', '".$email."', '".$pass."', '".$comment."', '".$sex."')";

if ($conn->query($sql) === TRUE) {
    echo 1;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>