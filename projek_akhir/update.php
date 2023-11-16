<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "posttest5";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$successMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $pesanan = $_POST["pesanan"];

    
    $gambar = $_FILES["gambar"]["name"];
    $gambar_tmp = $_FILES["gambar"]["tmp_name"];
    $gambar_folder = "uploads/" . $gambar;

    
    $sql = "UPDATE tambah SET nama='$nama', pesanan='$pesanan', gambar='$gambar_folder' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        
        move_uploaded_file($gambar_tmp, $gambar_folder);
        $successMessage = "Data berhasil diperbarui.";
    } else {
        echo "Gagal memperbarui data: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Perbarui Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 300px;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin: 10px 0;
            color: #333;
            text-align: center;
        }

        input[type="text"] {
            width: 90%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
        }

        button {
            background-color:red;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            margin: 20px auto;
        }

        a {
            display: block;
            text-align: center;
            text-decoration: none;
            color: #007BFF;
        }

        .success-message {
            color: #009900;
            text-align: center;
            display: <?php echo $successMessage ? "block" : "none"; ?>;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Perbarui Data</h1>
        <form method="post" action="" enctype="multipart/form-data">
            <label for="id">ID Pengguna:</label>
            <input type="text" name="id" id="id" required>
            
            <label for="nama">Nama Baru:</label>
            <input type="text" name="nama" id="nama" required>
            
            <label for="pesanan">Pesanan Baru:</label>
            <input type="text" name="pesanan" id="pesanan" required>
            
            <label for="gambar">Gambar Baru:</label>
            <input type="file" name="gambar" id="gambar">
            
            <button type="submit">Perbarui Data</button>
        </form>
        <p class="success-message"><?= $successMessage ?></p>
        <a href="create.php">Kembali</a>
    </div>
</body>
</html>
