<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "posttest5";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $pesanan = $_POST["pesanan"];
    
    
    $file = $_FILES["file"];
    $file_name = $file["name"];
    $file_tmp = $file["tmp_name"];
    
   
    $upload_dir = "uploads/";
    $target_file = $upload_dir . basename($file_name);
    
    if (move_uploaded_file($file_tmp, $target_file)) {
        $sql = "INSERT INTO tambah (id, nama, pesanan, gambar) VALUES ('$id', '$nama', '$pesanan', '$target_file')";
        if (mysqli_query($conn, $sql)) {
            echo "Data berhasil ditambahkan ke database.";
        } else {
            echo "Gagal menambahkan data: " . mysqli_error($conn);
        }
    } else {
        echo "Gagal mengunggah file.";
    }
}

mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            color: #333;
            margin-top: 20px;
            font-size: 24px;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin: 0 auto;
            width: 320px;
        }

        label {
        display: block;
        margin: 10px auto; 
        text-align: center;
        color: #333;
        font-size: 18px;
        }

        input[type="text"] {
            width: 80%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .submit-button {
            background-color: #007BFF;
            color: red;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .submit-button:hover {
            background-color: #0056b3;
        }

        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .button-container a {
            text-decoration: none;
            background-color: red;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            margin-right: 10px;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .button-container a:hover {
            background-color: orange;
        }

        .submit-button {
    background-color: red ; 
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 18px;
    transition: background-color 0.3s ease, transform 0.3s ease; 
}

.submit-button:hover {
    background-color: orange !important; 
    transform: scale(1.05); 
}

        
    </style>
</head>
<body>
    <h1>Form Pesanan</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nama">ID:</label>
        <input type="text" name="id" id="id" required>

        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>

        <label for="pesanan">Pesanan:</label>
        <input type="text" name="pesanan" id="pesanan" required>

        <br>Pilih file gambar untuk diunggah:</br> <input type="file" name="file" id="file">
        <input type="submit" value="Submit" name="submit">
    </form>

    
    
</form>

    <div class="button-container">
        <a href="update.php">Update Data</a>
        <a href="user.php">Kembali</a>
    </div>
</body>
</html>
