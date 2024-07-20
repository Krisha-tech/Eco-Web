<?php
session_start();

// Assume you have a database or some way to verify user credentials
// For this example, we'll use a simple array for user data
$users = [
    ['username' => 'admin', 'password' => 'admin', 'type' => 'admin'],
    ['username' => 'officer', 'password' => 'officer', 'type' => 'officer'],
    ['username' => 'farmer', 'password' => 'farmer', 'type' => 'farmer']
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Loop through users to check credentials
    foreach ($users as $user) {
        if ($user['username'] == $username && $user['password'] == $password) {
            $_SESSION['user_type'] = $user['type'];
            break;
        }
    }

    // Redirect based on user type
    switch ($_SESSION['user_type']) {
        case 'admin':
            header('Location: admin.html');
            exit();
        case 'officer':
            header('Location: officer.php');
            exit();
        case 'Farmer':
            header('Location: dashboard.html ');
            exit();
        default:
            echo "Invalid credentials. Please try again.";
    }
}
?>


