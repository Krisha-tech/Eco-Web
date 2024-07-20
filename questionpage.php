<?php
// Connect to the database
$conn = new mysqli('127.0.0.1', 'root', '', 'message');

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $question = $_POST['question'];


    // Insert the customer's question into the database
    $sql = "INSERT INTO message (question_text) VALUES ('$question')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Question submitted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>