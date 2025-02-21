<?php   
session_start(); //bcs there is msg flashing
require "db.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));
    $errors = [];

    // Check if fields are empty
    if (empty($username) || empty($password)) {
        $errors[] = "Please fill in all fields";
    }

    // Validate username length
    if (strlen($username) >= 40) {
        $errors[] = "Username must be under 40 characters";
    }
    
    if(strlen($password) <= 4){
        $errors[] = "Password must be at least 4 characters";
    }
    if(strlen($password) >=30){
        $errors[] = "Password must be under 30 characters";
    }

    // Check if username already exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND role = 'user'");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $errors[] = "Username already exists";
    }

    // If no errors, insert new user
    if (empty($errors)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert user with role set to 'user'
        $stmt = $conn->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, 'user')");
        $stmt->bind_param("ss", $username, $hashed_password);
        if($stmt->execute()){
            $_SESSION['Flash'] = "Successfully registered";
        }
        else{
            $errors[] = "Some problem occured";
        }
        
    }
}

require "views/register_view.php";
?>
