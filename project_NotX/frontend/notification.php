<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>notification</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1 id=title> NotX</h1>
    
<div id="notif-container">
    <h2 id="notif-title">Notifications</h2>
    
    <div class="notif-item unread">
        <div class="notif-icon follow">👤</div>
        <div class="notif-content">
            <p><strong>@coding_pro</strong> followed you</p>
            <span class="notif-time">2m ago</span>
        </div>
    </div>

    <div class="notif-item">
        <div class="notif-icon like">❤️</div>
        <div class="notif-content">
            <p><strong>@notx_fan</strong> liked your post</p>
            <span class="notif-time">1h ago</span>
        </div>
    </div>
</div>
<nav id="footerbar">
    
    <div>
        <ul>
            <li><a href="home.php"><img src="../imgs/home.PNG" alt="home" ></a></li>
            <li><a href="search.php"><img src="../imgs/search.jpg" alt="search" ></a></li>
            <li><a href="postpage.php"><img src="../imgs/add.jpg" alt="add" ></a></li>
            <li><a href="notification.php"><img src="../imgs/notification.PNG" alt="notification" ></a></li>
             <li><a href="account.php"><img src="../imgs/Profile.PNG" alt=<?php echo $_SESSION['username']; ?>> </a> </li>
        </ul>
</nav>
</body>
</html>