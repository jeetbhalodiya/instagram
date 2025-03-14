<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
        }
        .sidebar {
            width: 80px;
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
        .dashboard {
            margin-left: -4px;
            padding: 20px;
            width: calc(100% - 90px);
        }
        .dashboard h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .story-section {
            display: flex;
            gap: 10px;
            overflow-x: auto;
            padding: 10px 0;
            margin-left: -10px;
        }
        .story {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            color: #555;
            border: 2px solid #0095f6;
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
    <div class="dashboard">
        <h1>Dashboard</h1>
        <div class="story-section">
            <div class="story">User 1</div>
            <div class="story">User 2</div>
            <div class="story">User 3</div>
            <div class="story">User 4</div>
            <div class="story">User 5</div>
            <div class="story">User 5</div>
            <div class="story">User 5</div>
            <div class="story">User 5</div>
            <div class="story">User 5</div>
        </div>
    </div>
</body>
</html>