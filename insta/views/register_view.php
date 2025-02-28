<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,100..900;1,100..900&display=swap');
body {
    font-family: "Albert Sans", serif;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background-color: #242426;
    overflow: hidden;
    margin: 0;  
}

.container {
    backdrop-filter: blur(25px);
    font-family: "Albert Sans", serif;
    width: 400px;
    height: auto;
    background: linear-gradient(to bottom, #ffffff0e, #3e3e3e2a);
    border-radius: 21px;
    border: solid 1px #ebebf52f;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 12px;
}   

h2 {
    font-weight: bold;
    font-size: 32px;
    text-align: center;
    color: #ebebf5;
}

.input-box {
    width: 100%;
    height: 50px;
    margin: 6px;
    border-radius: 12px;
    border: solid 1px #ebebf52f;
    display: flex;
    align-items: center;
    justify-content: center;
}
input {
    width: 100%;
    height: 50px;
    padding-left: 10px;
    background-color: transparent;
    border: none;
    color: #fff;
    font-size: 16px;
}

button {
    width: 100%;
    height: 50px;
    background-color: #E8CB62;
    border-radius: 12px;
    border: none;
    font-size: 16px;
    color: black;
    cursor: pointer;
}

button:hover {
    background-color: #d1b359;
}

/* Flash message styling */
.flash-message {
    background-color: rgb(187, 255, 189);
    color: #4CAF50;
    padding: 10px;
    border-radius: 10px;
    text-align: center;
}

/* Error message styling */
.error-message {
    background-color: rgb(255, 217, 214);
    color: #f44336;
    padding: 10px;
    border-radius: 10px;
    text-align: center;
}

a {
    color: #e8cb62;
    text-decoration: none;
    font-size: 14px;
}
    </style>
</head>
<body>
    <div class="container">
        <h2>Register</h2>

        <!-- Flash Messages -->
        <?php session_start(); ?>
        <?php if (isset($_SESSION['Flash'])): ?>
            <div class="flash-message">
                <?php echo $_SESSION['Flash']; unset($_SESSION['Flash']); ?>
            </div>
        <?php endif; ?>

        <!-- Error Messages -->
        <?php if (isset($_SESSION["errors"])): ?>
            <div class="error-message">
                <?php foreach ($_SESSION["errors"] as $error): ?>
                    <p><?php echo $error; ?></p>
                <?php endforeach; ?>
                <?php unset($_SESSION["errors"]); ?>
            </div>
        <?php endif; ?>

        <!-- Registration Form -->
        <form action="/" method="POST">
            <div class="input-box">
                <input type="text" name="username" placeholder="Username" value="<?= isset($_POST['username']) ? $_POST['username'] : ''; ?>" required>
            </div>
            <div class="input-box">
                <input type="email" name="email" placeholder="Email" value="<?= isset($_POST['email']) ? $_POST['email'] : ''; ?>" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit">Sign Up</button>
        </form>

        <p><a href="/login">Already have an account? Log In</a></p>
    </div>
</body>
</html>
