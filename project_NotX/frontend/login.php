<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NotX</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <div class="header">
        <h1>NotX</h1>

        <form action="../backend/register.php" method="post" id="loginform">
            <label for="username">USERNAME:</label>
            <input id="username" type="text" placeholder="username" name="username" required><br>
            <label for="password">PASSWORD:</label>
            <input type="password" id="password" placeholder="password" name="password" required><br>
            <input type="submit" value="login" name="login" id="loginbtn">
        </form>
    </div>
    <script src="login.js"></script>
</body>

</html>