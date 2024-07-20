<?php
session_start();

if (!isset($_SESSION['username']) || !isset($_SESSION['role'])) {
    header("Location: login.html");
    exit();
}

$username = $_SESSION['username'];
$role = $_SESSION['role'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="farmer.css" href="dashboard.css">
</head>
<body>

    <h1>Welcome, <?php echo $username; ?>!</h1>

    <?php if ($role == 'admin'): ?>
        <h2>Admin Dashboard <a href="#" ></a></h2>
        <!-- Add admin-specific content here -->
    <?php elseif ($role == 'field officer'): ?>
        <h2>Field Officer Dashboard</h2>
        <!-- Add field officer-specific content here -->
    <?php elseif ($role == 'farmer'): ?>
        <h2>Farmer Dashboard <a href="farmer.html" ></a></h2>
        <!-- Add farmer-specific content here -->
    <?php endif; ?>

    <a href="logout.php">Logout</a>

</body>
</html>
