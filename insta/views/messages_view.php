<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Messages</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
        }
        .sidebar {
            width: 70px;
            height: 100vh;
            background-color: #fff;
            border-right: 1px solid #dbdbdb;
            padding: 20px 0;
            position: fixed;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .menu-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 15px 0;
            cursor: pointer;
            color: #262626;
            text-decoration: none;
            font-size: 14px;
        }
        .menu-item i {
            font-size: 24px;
            margin-bottom: 5px;
        }
        .menu-item:hover {
            color: #0095f6;
        }
        .messages-container {
            margin-left: 80px;
            padding: 20px;
            width: calc(100% - 80px);
            display: flex;
        }
        .chat-list {
            margin-left: -80px;
            width: 30%;
            border-right: 1px solid #dbdbdb;
            padding: 10px;
        }
        .chat-list h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }
        .chat {
            padding: 10px;
            border-bottom: 1px solid #dbdbdb;
            cursor: pointer;
        }
        .chat:hover {
            background-color: #f5f5f5;
        }
        .chat-window {
            width: 70%;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .chat-box {
            height: 400px;
            border: 1px solid #dbdbdb;
            padding: 10px;
            overflow-y: auto;
            margin-bottom: 10px;
        }
        .input-box {
            display: flex;
            gap: 10px;
        }
        .input-box input {
            flex: 1;
            padding: 10px;
            border: 1px solid #dbdbdb;
            border-radius: 5px;
        }
        .input-box button {
            padding: 10px 15px;
            background-color: #0095f6;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo">📸</div>
        <a href="/dashboard" class="menu-item"><i class="fas fa-home"></i>Home</a>
        <a href="/search" class="menu-item"><i class="fas fa-search"></i>Search</a>
        <a href="/messages" class="menu-item"><i class="fas fa-paper-plane"></i>Messages</a>
        <a href="/notification" class="menu-item"><i class="fas fa-heart"></i>Notifications</a>
        <a href="/profile" class="menu-item"><i class="fas fa-user"></i>Profile</a>
    </div>
    <div class="messages-container">
        <div class="chat-list">
            <h2>Messages</h2>
            <div class="chat">User 1</div>
            <div class="chat">User 2</div>
            <div class="chat">User 3</div>
            <div class="chat">User 4</div>
        </div>
    </div>
</body>
</html>