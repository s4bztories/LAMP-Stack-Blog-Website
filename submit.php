submit.php
-- <?php
require_once 'config.php';
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect post data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Prepare and bind (Secure way to prevent SQL injection)
    $stmt = $conn->prepare("INSERT INTO posts (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);
    // Execute the query
    if ($stmt->execute()) {
        echo "<h3>New record created successfully!</h3>";
        echo "<a href='index.html'>Go back</a>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
