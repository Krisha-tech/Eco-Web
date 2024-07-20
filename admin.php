<?php
session_start();

// Check if the user is logged in and is an admin
if (!isset($_SESSION['username']) || $_SESSION['usertype'] !== 'admin') {
    header("Location: login.html");
    exit();
}
// Assuming you have a database connection, you can retrieve admin-specific data here
// For example, you might fetch admin details from a 'admins' table
$conn = new mysqli('localhost', 'username', 'password', 'database_name');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM admins WHERE username = '" . $_SESSION['username'] . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $admin = $result->fetch_assoc();
} else {
    echo "Admin not found.";
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Page</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo"> <img src="Images/addmin.jpg"></h2>
           
                <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>

                <!-- Display admin-specific information here -->
                <?php if (isset($admin)) : ?>
                    <p>Admin ID: <?php echo $admin['admin_id']; ?></p>
                    <p>Email: <?php echo $admin['email']; ?></p>
                    <!-- Add more admin-specific details as needed -->
                <?php endif; ?>

                <!-- Add admin-specific content here -->

                <br>
                <a href="logout.php">Logout</a>
            </div>
        </div>
    </div>

</body>
</html>
