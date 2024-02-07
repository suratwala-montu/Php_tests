<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_user_data";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);

    // File Upload
    $targetDirectory = "uploads/";
    $targetFile = $targetDirectory . basename($_FILES["file"]["name"]);
    
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
        // Use prepared statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO users (username, password, profile_image) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $password, $targetFile);

        if ($stmt->execute()) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "File upload failed.";
    }
}

$conn->close();
?>
