<?php
require_once 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role']; 

    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (username, password, role) VALUES ('$username', '$hashed_password', '$role')";

    if ($conn->query($sql) === TRUE) {
        echo "Registrasi berhasil.Silahkan Login";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
        }

        label {
            display: block;
            text-align: center;
            margin: 10px 0;
            color: #333;
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
    </style>
</head>
<body>
    <h2>Registrasi</h2>
    <form method="post">
        <label>Username</label>
        <input type="text" name="username" required><br><br>
        <label>Password</label>
        <input type="password" name="password" required><br><br>
        <select name="role" required>
        <option value="user">User</option>
        <option value="admin">Admin</option>
        </select>
        <input type="submit" value="Registrasi">

        <a class="register-button" href="login.php">Kembali ke Login</a>
    </form>
</body>
</html>
