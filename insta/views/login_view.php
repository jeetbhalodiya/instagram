<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,100..900;1,100..900&display=swap');
body{
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
    width: 350px;
    height: 323px;
    background: linear-gradient(to bottom, #ffffff0e, #3e3e3e2a);
    border-radius: 21px;
    border: solid 1px #ebebf52f;
    padding: 16px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 12px;
}   

h2 {
    font-family: "Albert Sans", serif;
    font-style: bold;
    font-weight: bold;
    font-size: 32px;
    text-align: center;
    color: #ebebf5;
}
button{
    width: 145px;
    height: 50px;
    background-color: #E8CB62;
    border-radius: 12px;
    border: solid 1px #ebebf52f;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 6px;
    text-decoration: none;
}

.input-box {
    color:whitte;
    width: 302px;
    height: 50px;
    margin: 6px;
    border-radius: 12px;
    border: solid 1px #ebebf52f;
    display: flex;
    align-items: left;
    justify-content: left;
}
input{
    border-radius: 12px;
    width: 100%;
    padding-left: 10px;
    background-color: #00000000;
    border-style: none;
    color:#fff;
}

.input-text {
    color:whitte;
    font-weight: 300;
    font-size: 15px;
    color: white;
}

.btns{
    display: flex;
    flex-direction: row;
    
}
.cen{
    align-items: center;
    justify-content: center;
    display: flex;
    flex-direction: column;
    
}

.links{
    display: flex;
    flex-direction: column;
    text-align: center;
}

.button-signup {
    width: 145px;
    height: 50px;
    border-radius: 12px;
    border: solid 1px #ebebf52f;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 6px;
    text-decoration: none;
}

.button-login {

    width: 145px;
    height: 50px;
    background-color: #E8CB62;
    border-radius: 12px;
    border: solid 1px #ebebf52f;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 6px;
    text-decoration: none;
}

.button-text-signup {
    font-weight: 300;
    font-size: 1.2rem;
    color: white;
}

.button-text-login {
    font-weight: 300;
    font-size: 1.2rem;
    color: #242426;
}

/* Flash message styling */
.flash-message {
    background-color: #4CAF50; /* Green background for flash message */
    color: white;
    padding: 10px;
    border-radius: 6px;
    margin-bottom: 15px;
    text-align: center;
    font-size: 14px;
}

/* Error message styling */
.error-message {
    background-color: #f44336; /* Red background for errors */
    color: white;
    padding: 10px;
    border-radius: 6px;
    margin-bottom: 15px;
    text-align: center;
    font-size: 14px;
}

.error-message p {
    margin: 5px 0;
}

a {
    font-weight: 300;
    font-size: 0.8rem;
    text-decoration: none;
    color: #e8cb62;
    cursor: pointer;
}


@media (max-width: 768px) {
    .container {
        max-width: 90%;
        padding: 16px;
    }

    .title {
        font-size: 1.8rem;
    }

    .input-box,
    .button-signup,
    .button-login {
        max-width: 100%;    
    }

    .forgot-password {
        font-size: 0.75rem;
    }
}

@media (max-width: 480px) {
    .title {
        font-size: 1.6rem;
    }

    .container {
        padding: 12px;
        gap: 8px;
    }

    .input-box {
        height: 45px;
    }

    .button-signup,
    .button-login {
        height: 45px;
        font-size: 1rem;
    }

    .forgot-password {
        font-size: 0.7rem;
    }
}

/* Flash message styling */
.flash-message {
    border: solid 1px #4CAF50;
    background-color:rgb(187, 255, 189); /* Green background for flash message */
    color: #4CAF50;
    padding: 10px;
    border-radius: 10px;
    margin-bottom: 15px;
    text-align: center;
    font-size: 14px;
}

/* Error message styling */
.error-message {
    border: solid 1px #f44336;
    background-color:rgb(255, 217, 214); /* Red background for errors */
    color: #f44336;
    padding: 10px;
    border-radius: 10px;
    margin-bottom: 15px;
    text-align: center;
    font-size: 14px;
}

.error-message p {
    margin: 5px 0;
}

    </style>
</head>

<body>
<img src="views/logo.png" alt="" class="background-image">
    <div class="container">

    
        <div class="login-box">

            <!-- Displaying Flash message -->
            <?php if (isset($_SESSION['Flash'])): ?>
                <div class="flash-message">
                    <?php echo $_SESSION['Flash']; ?>
                    <?php unset($_SESSION['Flash']); ?>
                </div>
            <?php endif; ?>

            <!-- Displaying errors -->
            <?php if (!empty($errors)): ?>
                <div class="error-message">
                    <?php foreach ($errors as $error): ?>
                        <p><?php echo $error; ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <h2>Login</h2>

            <form action="/login" method = "post">
            <div class="input-box">
                <input autocomplete ="off" type="text" name="username" placeholder="Username" value="<?= isset($_POST['username']) ? $_POST['username'] : ''; ?>" required>
            </div>
            <div class="input-box">
                <input autocomplete="off" type="password" name="password" placeholder="Password" value="<?= isset($_POST['password']) ? $_POST['password'] : ''; ?>" required>
            </div>
            <div class="btns">
            <a href="#" class="login"><button class="login">Login</button></a>
            </form>
            <a href="/" class="button-signup">Sign Up</a>
            </div>
           <div class="cen">
           </div>
        </div>
    </div>
</body>

</html>