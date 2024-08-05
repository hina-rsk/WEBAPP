<?php
require_once 'CONFIG/session.php';
require_once 'MODULES/user.php';


if($_SERVER['REQUEST_METHOD'] == "POST") {
    $user = new User;
    $user->email= $_POST['email'];
    $user->password= $_POST['password'];
    $result = $user->login();
    echo "<pre>";
    print_r($result);
    echo "</pre>";
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Account</title>
</head>
<body>
<style>
    body {
            margin: 0;
            padding: 0;
            background-color: #ffcbcb;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;

            height: 70vh;
        }
        .create-account {
            background: rgb(238, 196, 196);
            border-radius: 10px;
            box-shadow: 0 5px 15px rgb(124, 107, 107);
            padding: 50px;
            width: 400px;
        }
        .create-account h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }      
        .create-account input[type="email"],
        .create-account input[type="password"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #e9c0c0;
        border-radius: 5px;
        margin-bottom: 20px;
        }
        .create-account input[type="submit"]{
            width: 420px;
            padding: 10px;
            background: #d48888;
            color: rgb(253, 212, 212);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        .create-account input[type="submit"]:hover {
            background: #ff9292;
        }  
  </style>
  </style>
  <div class="xx">
    <navbar>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">Sign up</a></li>       
</ul>
</navbar>
    </div>
<div class="create-account">
    <h1>Log In your Account</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>"method="POST">

            <label for="">Enter Email</label>
            <input type="email" name="email"><br>
            <label for="">Enter Password</label>
            <input type="password" name="password"><br>
            <input type = "submit" value = "Login">
</form>
    
</body>
</html>

