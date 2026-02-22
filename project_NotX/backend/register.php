<?php
include("bridge.php");

if (isset($_POST['signUp'])){
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];


    $checkUserSql = "SELECT * FROM userdata WHERE username = '$username'";
    $result = $conn->query($checkUserSql);
    if($result->num_rows > 0){
        echo "<script>
            alert('Account already exists. please try to login instead.');
            window.location.href='../frontend/login.php';
          </script>";
        //header("Location: ../frontend/login.php");
    } else {
        $sql = "INSERT INTO userdata (fullname, username, password, email, telephone) VALUES ('$fullname', '$username', '$password', '$email', '$phonenumber')";
        if ($conn->query($sql) === TRUE) {
            session_start();
             $row=$result->fetch_assoc();
             $_SESSION['username'] = $username;
             $_SESSION['fullname'] = $fullname;
             $_SESSION['email'] = $email;
             $_SESSION['phonenumber'] = $phonenumber;
             $_SESSION['success_msg'] = "Account created! Welcome, $username.";
            header("Location: ../frontend/home.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM userdata WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['username'] = $row['username'];
            $_SESSION['fullname'] = $row['fullname'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['phonenumber'] = $row['telephone'];
            $_SESSION['success_msg'] = "Welcome back, $username!";
        header("Location: ../frontend/home.php");
        exit();
    } else {
        echo "<script>
            alert('Invalid username or password. Please try again.');
            window.history.back(); // Sends them back to the form
          </script>";
    }
} 
?>