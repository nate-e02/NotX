<?php
session_start();
include '../backend/db_connection.php'; // Your DB connection file

if (isset($_GET['query'])) {
    $search = $_GET['query'];
    
    // Using Prepared Statements to prevent SQL injection
    $sql = "SELECT name, username FROM userdata WHERE username LIKE ? OR name LIKE ?";
    $stmt = $conn->prepare($sql);
    $searchTerm = "%" . $search . "%"; // The % means "anything before or after"
    $stmt->bind_param("ss", $searchTerm, $searchTerm);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<div class="search-result-item">';
            echo '   <div class="user-info">';
            echo '       <h4>' . $row['name'] . '</h4>';
            echo '       <p>@' . $row['username'] . '</p>';
            echo '   </div>';
            echo '   <button class="follow-btn">View Profile</button>';
            echo '</div>';
        }
    } else {
        echo "<p>No users found matching '$search'.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1 id=title> NotX</h1>
<form action="search.php" method="GET" id="search-form">
    <input type="text" name="query" placeholder="Search for friends..." required>
    <button type="submit">Search</button>
</form>

<div id="results-container">
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