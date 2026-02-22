<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
if(!isset($_SESSION['fullname'])){
    $_SESSION['fullname'] = "Guest";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1 id=title> NotX</h1>
<div class="profile-container">
    <header class="profile-header">
        <div class="cover-photo">
            <img src="../imgs/cover.jpg" alt="Cover">
        </div>
        <div class="profile-nav-bar">
            <div class="profile-pic-container">
                <img src="../imgs/Profile.PNG" alt="" class="profile-pic">
            </div>
            <button class="edit-btn">Edit Profile</button>
        </div>
    </header>

    <section class="user-details">
        <h2 class="display-name"><?php echo $_SESSION['fullname']; ?></h2>
        <p class="username">@<?php echo $_SESSION['username']; ?></p>
        <p class="bio">Building the future of NotX. Coding, coffee, and CSS.</p>
        
        <div class="stats">
            <span><strong>0</strong> Following</span>
            <span><strong>0</strong> Followers</span>
        </div>
    </section>

    <nav class="profile-tabs">
        <div class="active">Posts</div>
        <div>Replies</div>
        <div>Media</div>
        <div>Likes</div>
    </nav>

    <main class="post-feed">
        <div class="post">This is my first post on NotX!</div>
    </main>
    <button id="logout"> <a href="logout.php">Logout</a></button>
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