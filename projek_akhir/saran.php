<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "SELECT * FROM pesan";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pesan&Saran</title>
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
            color: orange;
        }
    </style>
</head>
<body>
    <h1>Data Kritik Dan Saran</h1>
    <table>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Saran</th>
           
        </tr>
        
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['pesan'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <div style="text-align: center; padding: 20px;">
        <a href="index.php">Kembali</a>
    </div>
</body>
</html>
