<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    text-align: center;
    margin: 0;
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


.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

    </style>
</head>
<body>
    <h2>Login</h2>
    <form method="post" id="loginForm">
        <label>Username</label>
        <input type="text" name="username" required><br><br>
        <label>Password</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Login" onclick="validateForm()">
        <a class="register-button" href="register.php">Register</a> <!-- Register button -->
    </form>

    <!-- Modal untuk pesan -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <p id="modal-message"></p>
        </div>
    </div>

    <script src="script.js">

function validateForm() {
    
}

function showModal(message) {
    var modal = document.getElementById("myModal");
    var modalMessage = document.getElementById("modal-message");

    modalMessage.innerHTML = message;
    modal.style.display = "block";
}

function closeModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
}


window.onclick = function(event) {
    var modal = document.getElementById("myModal");
    if (event.target == modal) {
        modal.style.display = "none";
    }
};

    </script> 
</body>
</html>
