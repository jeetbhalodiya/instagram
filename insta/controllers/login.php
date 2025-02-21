<?php
session_start();
require "db.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));

    $errors = [];
    if(empty($username) || empty($password)){
        $errors[] = "Please fill in all the fields";
    }
    if (empty($errors)){
        $stmt = $conn -> prepare("SELECT * FROM users WHERE username = ? and role = 'user'");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0){
            $user = $result->fetch_assoc();
            if(password_verify($password,$user["password"])){
                $_SESSION['user_id'] = $user["id"];
                $_SESSION['username'] = $user["username"];
                $_SESSION['role'] = $user["role"];
                $_SESSION['Flash'] = "Successfully logged in";
                header("Location: /user_home");
                exit();
            }
            else{
                $errors [] = "Invalid password";
            }
    }
    else{
        $errors [] = "Invalid username";
    }
}
}

require "views/login_view.php";