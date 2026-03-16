<?php
session_start();
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (isset($_SESSION['reg_user']) && isset($_SESSION['reg_pass']) && 
        $username === $_SESSION['reg_user'] && $password === $_SESSION['reg_pass']) {
        $message = "welcome " . $username;
    } else {
        $message = "wrong username/password";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #fff;
        }
        .container {
            text-align: center;
            padding: 40px;
            width: 400px;
        }
        h1 {
            font-size: 36px;
            color: #333;
            margin-bottom: 40px;
            font-weight: normal;
        }
        .form-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }
        .form-group label {
            width: 100px;
            text-align: left;
            color: #333;
            font-size: 16px;
        }
        .form-group input {
            flex: 1;
            padding: 12px 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            outline: none;
        }
        .form-group input:focus {
            border-color: #28a745;
        }
        .btn-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 30px;
            margin-top: 30px;
        }
        .btn-login {
            background: #28a745;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .btn-login:hover {
            background: #218838;
        }
        .btn-register {
            color: #007bff;
            text-decoration: none;
            font-size: 16px;
        }
        .btn-register:hover {
            text-decoration: underline;
        }
        .message {
            margin-top: 20px;
            color: #333;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            <div class="btn-container">
                <button type="submit" name="login" class="btn-login">Login</button>
                <a href="register.php" class="btn-register">Register</a>
            </div>
        </form>
        <div class="message"><?php echo $message; ?></div>
    </div>
</body>
</html>