<?php
// Include database connection
include 'db.php';

// Initialize variables
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from POST request
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare SQL query to check credentials
    $sql = "SELECT * FROM users WHERE USERNAME = ? AND PASSWORD = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if credentials match
    if ($result->num_rows > 0) {
        // Redirect to welcome page
        header("Location: welcome.php");
        exit;
    } else {
        // Show error message
        $error = "Username or Password is incorrect.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        
        <button type="submit">Login</button>
    </form>

    <!-- Display error message -->
    <?php if ($error): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
</body>
</html>