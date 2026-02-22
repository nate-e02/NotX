<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NotX</title>
    <link rel="stylesheet" href="form.css">
</head>


<body>
    <form action="../backend/register.php" method="post" id="signupform">
        <h2>Join NotX</h2>

        <label for="name">FULNAME :</label>
        <input id="name" type="text" placeholder="fullname" name="fullname" required>
        <label for="username">USERNAME :</label>
        <input id="username" type="text" placeholder="Choose a username" name="username" required>

        <label for="password">PASSWORD :</label>
        <input type="password" id="Password" name="password" placeholder="**********">
        <label for="phone number">PHONE NUMBER :</label>
        <input type="tel" id="phone number" name="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="000-000-0000"
            required>
        <label for="email">EMAIL :</label>
        <input type="email" id="email" name="email" required>
        <div class="gender-section">
            <label>GENDER :</label><br>
            <input type="radio" id="male" name="gender" value="male"> <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female"> <label for="female">Female</label>
            <input type="radio" id="unknown" name="gender" value="other"> <label for="unknown">Other</label>
        </div>

        <div class="confirm-section">
            <input type="checkbox" id="confirm" name="confirm" required>
            <label for="confirm">I agree to the NotX Terms</label>
        </div>

        <input type="submit" value="SignUp" id="signupbtn" name="signUp">
    </form>
    </form>
    <script src="login.js"></script>
</body>

</html>