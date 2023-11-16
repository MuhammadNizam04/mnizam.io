<?php
require_once 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        
        if (password_verify($password, $row['password'])) {
            
            session_start();
            $_SESSION['username'] = $username;

            if ($row['role'] == 'admin') {
                header("Location: index.php");
                exit();
            } elseif ($row['role'] == 'user') {
                header("Location: user.php");
                exit();
            } else {
                echo "Login gagal. Peran tidak valid.";
            }
        } else {
            echo "Login gagal. Password salah.";
        }
    } else {
        echo "Login gagal. Data pengguna tidak ditemukan.";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: 0 auto;
        }

        label {
            display: block;
            text-align: center;
            margin: 20px 0;
        }

        input[type="text"],
        input[type="password"] {
            width: 80%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: red;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        input[type="submit"]:hover {
            background-color: orange; 
        }

        .register-button {
            display: block;
            text-align: center;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <h2>Login</h2>
    <form method="post">
        <label>Username</label>
        <input type="text" name="username" required><br><br>
        <label>Password</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
        <a class="register-button" href="register.php">Register</a> 
    </form>
</body>
</html>
