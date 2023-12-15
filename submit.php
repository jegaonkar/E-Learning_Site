<?php
// Establish connection to your database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "codopedia";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Insert data into the contact_us table
    $sql = "INSERT INTO contact_us(name, email, message)VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Thank you for contacting us, we will be reaching out to you soon.");';
        echo 'window.location.href = "index.php";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>