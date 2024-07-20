<!DOCTYPE html>
<html>
<head>
    <title>Customer Message View Page</title>
    <link rel="stylesheet" href="customerview.css">
</head>
<body>
    <h1>Your Questions and Answer Page</h1>
    <ul>
        <?php
        // Connect to the database
        $conn = new mysqli('127.0.0.1', 'root', '', 'message');

        if ($conn->connect_error) {
            die('Connection failed: ' . $conn->connect_error);
        }

        // Fetch and display customer's questions and admin replies
        $sql = "SELECT * FROM message";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<li>Question: ' . $row['question_text'] . '</li>';
                echo '<li>Admin Reply: ' . $row['admin_reply'] . '</li><br>';
            }
        } else {
            echo "No questions or replies yet.";
        }

        $conn->close();
        ?>
    </ul>
</body>
</html>