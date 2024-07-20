<?php
session_start();

if (!isset($_SESSION['username']) || !isset($_SESSION['usertype'])) {
    header("Location: farmer.html");
    exit();
}

$username = $_SESSION['username'];
$usertype = $_SESSION['usertype'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

    <h1>Welcome, <?php echo $username; ?>!</h1>

    <?php if ($usertype == 'admin'): ?>
        <h2>Admin Dashboard</h2>
        <!-- Add admin-specific content here -->
    <?php elseif ($usertype == 'officer'): ?>
        <h2>Field Officer Dashboard</h2>
        <!-- Add field officer-specific content here -->
    <?php elseif ($usertype == 'farmer'): ?>
        <h2>Farmer Dashboard</h2>
        <!-- Add farmer-specific content here -->
    <?php endif; ?>

    <a href="logout.php">Logout</a>

</body>
</html>
