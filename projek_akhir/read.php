<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "posttest5";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "SELECT * FROM tambah";
$result = mysqli_query($conn, $sql);


if (isset($_POST['id'])) {
    $id = $_POST['id'];
   
    echo "ID yang akan dihapus: " . $id;

    $sql = "DELETE FROM tambah WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        
    } else {
        echo "Gagal menghapus data: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
<head>
    <title>Data Pengguna</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: red;
            text-align: center;
            padding: 20px 0;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: red;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:nth-child(odd) {
            background-color: #fff;
        }

        a {
            color: #007BFF;
            text-decoration: none;
            transition: color 0.3s;
        }

        a:hover {
            color: white;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: red;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: orange;
        }
    </style>
</head>
<body>
    <h1>Data Pengguna</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Pesanan</th>
            <th>Gambar</th>
            <th>Aksi</th> 
        </tr>
        
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['pesanan'] . "</td>";
            echo "<td><img src='uploads/" . $row['gambar'] . "' alt='Gambar' style='max-width: 100px; max-height: 100px;'></td>";
            echo "<td><button class='btn btn-danger' onclick='hapusData(" . $row['id'] . ")'>Hapus</button></td>";
            echo "</tr>";
        }
        ?>
        <script>
        function hapusData(id) {
            if (confirm('Anda yakin ingin menghapus data ini?')) {
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "delete.php", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        
                        var row = document.querySelector("tr[data-id='" + id + "']");
                        if (row) {
                            row.remove();
                        }
                        
                        
                        location.reload(); 
                    }
                };
                xhr.send("id=" + id);
            }
        }
</script>

    </table>
    <div style="text-align: center; padding: 20px;">
        <a href="index.php" class="btn">Kembali</a>
    </div>
</body>
</html>
