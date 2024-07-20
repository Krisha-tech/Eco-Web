<?php
// Connect to the database
$conn = new mysqli('127.0.0.1', 'root', '', 'message');

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $questionId = $_POST['question_id'];
    $adminReply = $_POST['admin_reply'];

    // Update the question with the admin's reply
    $sql = "UPDATE message SET admin_reply = '$adminReply' WHERE id = $questionId";
    
    if ($conn->query($sql) === TRUE) {
        echo "Reply sent successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>