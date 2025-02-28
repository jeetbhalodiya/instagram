<?php




require "db.php"; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if fields exist to avoid null warnings
    $username = isset($_POST["username"]) ? trim($_POST["username"]) : "";
    $email = isset($_POST["email"]) ? trim($_POST["email"]) : "";
    $password = isset($_POST["password"]) ? trim($_POST["password"]) : "";
    $errors = [];

    // Validate fields
    if (empty($username) || empty($email) || empty($password)) {
        $errors[] = "All fields are required.";
    }

    if (strlen($username) > 40) {
        $errors[] = "Username must be under 40 characters.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (strlen($password) < 4 || strlen($password) > 30) {
        $errors[] = "Password must be between 4 and 30 characters.";
    }

    // Check if username or email already exists
    if (empty($errors)) {
        $stmt = $conn->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
        $stmt->bind_param("ss", $username, $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $errors[] = "Username or email already exists.";
        }
        $stmt->close();
    }

    // If no errors, insert user into the database
    if (empty($errors)) {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $hashed_password);

        if ($stmt->execute()) {
            $_SESSION["Flash"] = "Registration successful! Please log in.";
            header("Location: /login");
            exit();
        } else {
            $errors[] = "Something went wrong. Please try again.";
        }
        $stmt->close();
    }

    $_SESSION["errors"] = $errors; // Store errors in session to show on the form page
    header("Location: /"); // Redirect back to the register page if errors occur
    exit();
}

require "views/register_view.php"
?>
