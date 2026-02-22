<?php
    session_start();
    include("bridge.php");
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div id="profile" >
        <p></p>
            <?php echo $_SESSION['username']; ?></div>
            
            <h1 id=title> NotX</h1>
            
    </div>
    <div id="findfriends">
    <h4>Find Friends</h3>
</div>


    <div>
    <p>This is your homepage. comming soon.</p> 
    <hr>
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
    <footer>
        <p>&copy; 2024 NotX. All rights reserved.</p>
        <a href="logout.php">Logout</a>
    </footer>    
    </div>
</body>
</html>