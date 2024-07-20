 <?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $usertype = $_POST['usertype'];

    $conn = new mysqli('127.0.0.1', 'root', '', 'loginpage');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM userdatils WHERE username='$username' AND password='$password' AND usertype='$usertype'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['usertype'] = $usertype;
        
        switch ($usertype) {
            case 'admin':
                header("Location: adminhome.php");
                break;
            case 'officer':
                header("Location: fieldOffhome.php");
                break;
            case 'farmer':
                header("Location: userfarmer.php");
                break;
            default:
                echo "Invalid user type.";
        }
    } else {
        echo "Invalid credentials. Please try again.";
    }

    $conn->close();
}
?>
