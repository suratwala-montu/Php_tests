<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "login_user_data");

$conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// -------------------------------------------
// Get user input
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// Upload profile image
$profileImage = null;
if ($_FILES['profile_image']['size'] > 0) {
    $profileImage = "uploads/" . basename($_FILES['profile_image']['name']);
    move_uploaded_file($_FILES['profile_image']['tmp_name'], $profileImage);
}

// Insert user into database
$sql = "INSERT INTO users (username, password, email, profile_image) VALUES ('$username', '$password', '$email', '$profileImage')";
if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>
