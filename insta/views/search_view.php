<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Profile</title>
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
        .profile-container {
            margin-left: 80px;
            padding: 20px;
            width: calc(100% - 80px);
        }
        .profile-header {
            display: flex;
            align-items: center;
            gap: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #dbdbdb;
        }
        .profile-picture {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #dbdbdb;
        }
        .profile-info {
            display: flex;
            flex-direction: column;
        }
        .profile-info h2 {
            margin: 0;
        }
        .profile-stats {
            display: flex;
            gap: 15px;
        }
        .profile-posts {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 10px;
            margin-top: 20px;
        }
        .post {
            width: 100%;
            height: 150px;
            background-color: #dbdbdb;
        }
        .search-container {
            margin-left: 80px;
            padding: 20px;
            width: calc(100% - 80px);
        }
        .search-bar {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #dbdbdb;
            border-radius: 5px;
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
    <div class="search-container">
        <input type="text" class="search-bar" placeholder="Search...">
    </div>
</body>
</html>