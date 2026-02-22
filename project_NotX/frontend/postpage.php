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
    <title> POST!!! </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <h1 id=title> NotX</h1>

     <div id="post-container">
    <form action="../backend/postpage.php" method="POST">
        <textarea name="post_content" placeholder="What's happening?" required></textarea>
        <div class="post-actions">
            <button type="submit" id="post-btn">Post</button>
        </div>
    </form>
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