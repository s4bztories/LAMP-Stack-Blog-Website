submit.php
-- <?php
require_once 'config.php';
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect post data
    $name = $_POST['stud_name'];
    $email = $_POST['stud_email'];
    $blog = $_POST['blog'];

    // Prepare and bind (Secure way to prevent SQL injection)
    $stmt = $conn->prepare("INSERT INTO students (name, email, blog_content) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $blog);

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