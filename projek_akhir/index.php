<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$message = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = mysqli_real_escape_string($conn, $_POST["pesan-nama"]);
    $email = mysqli_real_escape_string($conn, $_POST["pesan-email"]);
    $pesan = mysqli_real_escape_string($conn, $_POST["pesan-pesan"]);

    $sql = "INSERT INTO pesan (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";

    if ($conn->query($sql) === TRUE) {
        $message = "Pesan berhasil dikirim.";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toko Sembako</title>
    <link rel="stylesheet" href="gaya.css">
    <style>
         .container {
            display: flex;
            flex-wrap: wrap; 
        }

        .cool-box {
            position: relative;
            width: 320px;
            height: 400px;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px; 
        }

        .cool-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease-in-out;
        }

        .cool-box:hover img {
            transform: scale(1.1);
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.2));
            display: flex;
            flex-direction: column;
            justify-content: space-between; 
            padding: 20px;
            color: #fff;
        }

        .overlay h2 {
            margin: 0;
            font-size: 1.5em;
        }

        .overlay p {
            margin: 5px 0 0;
            font-size: 1em;
        }

    .button-container {
    display: flex;
    justify-content: space-around;
    margin-top: 10px;
}

.button {
    width: 30%; 
    padding: 10px 15px;
    background-color: red;
    color: #fff;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.button:hover {
    background-color: orange;
}

    .navbar {
            background-color: darkorange;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            font-size: 16px;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 16px;  
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn {
            background-color: red;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }


    </style>

</head>
<body>
    <div class="badan-utama">


    <header>
        <h2>WaraS</h2>
        <p>(Warung Sembako)</p>
        </header>

    <div class="navbar">
    <a href="index.php">Home</a>
    <a href="#idabout">About</a>
    <a id="mode-toggle" class="hitam" align="right">Mode</a>
    <div class="dropdown">
        <button class="dropbtn">Tentang 
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="saran.php">Saran</a>
            <a href="pengguna.php">Pengguna</a>
            <a href="read.php">Pesanan</a>
        </div>
    </div> 
    <a id="logoutButton" href="login.php">Logout</a>
    <div id="tanggal"></div>
        <div id="waktu">
            <span id="hari"></span>, 
            <span id="tanggal-label"></span>
            <span id="bulan"></span> 
            <span id="tahun"></span>
            <br>
            <span id="zona-waktu"></span>
        </div>
</div>

        
        
    <div style="width: 100%;">
    <img src="foto.jpeg" alt="gambar" style="width: 100%; height: 550px;">
    </div>


        <div class="container">
        <div class="cool-box">
            <img src="kacang.jpg" alt="Deskripsi gambar" width="300">
            <div class="overlay">
                <h2>Kacang Kacangan</h2>
                <p>Kami Menjual berbagai aneka kacang kacangan.</p>
                <div class="button-container">
                    <a href="#" class="button">Lihat Detail</a>
                </div>
            </div>
     </div>

        <div class="cool-box">
            <img src="Sayurmayur.jpeg" alt="Deskripsi gambar" width="300">
            <div class="overlay">
                <h2>Sayuran</h2>
                <p>Kami benjual berbagai jenis sayuran</p>
                <div class="button-container">
                    <a href="#" class="button">Lihat Detail</a>
                </div>
            </div>
        </div>

        
        <div class="cool-box">
            <img src="bahandapur.jpg" alt="Deskripsi gambar" width="300">
            <div class="overlay">
                <h2>bahan dapur</h2>
                <p>Bahan dapur yang segar dan berkualitas tinggi, siap untuk memasak berbagai hidangan.</p>
                <div class="button-container">
                    <a href="#" class="button">Lihat Detail</a>
                </div>
            </div>
        </div>

        <div class="cool-box">
            <img src="makanan.jpeg" alt="Deskripsi gambar" width="300">
            <div class="overlay">
                <h2>Bahan Mentah</h2>
                <p>Bahan mentah berkualitas tinggi untuk memastikan masakan terbaik.</p>
                <div class="button-container">
                    <a href="#" class="button">Lihat Detail</a>
                </div>
            </div>
        </div>

        <div class="cool-box">
            <img src="buah.jpeg" alt="Deskripsi gambar" width="300">
            <div class="overlay">
                <h2>Buah-Buahan</h2>
                <p>Buah-buahan segar yang menyegarkan dan penuh dengan nutrisi.</p>
                <div class="button-container">
                    <a href="#" class="button">Lihat Detail</a>
                </div>
            </div>
        </div>

        <div class="cool-box">
            <img src="daging.jpeg" alt="Deskripsi gambar" width="300">
            <div class="overlay">
                <h2>Daging</h2>
                <p>Daging pilihan yang siap memikat lidah Anda.</p>
                <div class="button-container">
                    <a href="#" class="button">Lihat Detail</a>
                </div>
            </div>
        </div>


        <div class="cool-box">
            <img src="bumbuinstan.jpeg" alt="Deskripsi gambar" width="300">
            <div class="overlay">
                <h2>Bumbu Instan</h2>
                <p>Bumbu instan untuk memudahkan pengalaman masak Anda.</p>
                <div class="button-container">
                    <a href="#" class="button">Lihat Detail</a>
                </div>
            </div>
        </div>

        <div class="cool-box">
            <img src="bumbu.jpeg" alt="Deskripsi gambar" width="300">
            <div class="overlay">
                <h2>Bumbu Mentah</h2>
                <p>Bumbu mentah untuk sentuhan cita rasa yang autentik.</p>
                <div class="button-container">
                    <a href="#" class="button">Lihat Detail</a>
                </div>
            </div>
        </div>

        <div class="cool-box">
            <img src="bahanpokok.jpeg" alt="Deskripsi gambar" width="300">
            <div class="overlay">
                <h2>Bahan Pokok</h2>
                <p>Keberagaman bahan pokok untuk memenuhi kebutuhan dapur Anda.</p>
                <div class="button-container">
                    <a href="#" class="button">Lihat Detail</a>
                </div>
            </div>
        </div>

        <div class="cool-box">
            <img src="instanjpeg.jpeg" alt="Deskripsi gambar" width="300">
            <div class="overlay">
                <h2>Makanan Instan</h2>
                <p>Solusi cepat dengan makanan instan yang lezat.</p>
                <div class="button-container">
                    <a href="#" class="button">Lihat Detail</a>
                </div>
            </div>
        </div>

        <div class="cool-box">
            <img src="ikanjpeg.jpeg" alt="Deskripsi gambar" width="300">
            <div class="overlay">
                <h2>Ikan</h2>
                <p>Varian ikan terbaik untuk memenuhi kebutuhan gizi harian.</p>
                <div class="button-container">
                    <a href="#" class="button">Lihat Detail</a>
                </div>
            </div>
        </div>

        <div class="cool-box">
            <img src="alatdapur.jpeg" alt="Deskripsi gambar" width="300">
            <div class="overlay">
                <h2>Alat dapur</h2>
                <p>Deskripsi singkat tentang foto ini.</p>
                <div class="button-container">
                    <a href="#" class="button">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
    

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-info">
                <h3 id="idabout">About Me</h3>
                <p>Nama: Muhammad Nizam</p>
                <p>Alamat: JL.Perjuangan 5 Kota Samarinda</p>
                <p>Telepon: 0895-1822-9605</p>
                <p>Email: <a href="mailto:ijamnizam224@gmail.com">ijamnizam224@gmail.com</a></p>
            </div>

            <div class="footer-social">
                <h3>Ikuti Saya</h3>
                <ul>
                    <li><a href="https://www.facebook.com/profile.php?id=100047245231406&mibextid=LQQJ4d"><img src="fb.png" alt="Facebook"></a></li>
                    <li><a href="https://instagram.com/___mazin.m?igshid=MzMyNGUyNmU2YQ=="><img src="ig.png" alt="Instagram"></a></li>
                </ul>
            </div>


        

        <div class="footer-bottom">
            &copy; 2023 Toko Sembako - Semua Hak Dilindungi
        </div>
    </footer>




    <script>
        function tampilkanWaktu() {
    var waktuSekarang = new Date();
    var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', timeZoneName: 'short' };
    var waktuElement = document.getElementById("waktu");
    waktuElement.querySelector("#hari").textContent = waktuSekarang.toLocaleDateString('id-ID', { weekday: 'long' });
    waktuElement.querySelector("#tanggal-label").textContent = waktuSekarang.getDate();
    waktuElement.querySelector("#bulan").textContent = waktuSekarang.toLocaleDateString('id-ID', { month: 'long' });
    waktuElement.querySelector("#tahun").textContent = waktuSekarang.getFullYear();
    waktuElement.querySelector("#zona-waktu").textContent = waktuSekarang.toLocaleString('id-ID', { timeZoneName: 'short' });
}


setInterval(tampilkanWaktu, 1000);
tampilkanWaktu(); 

function toggleMode() {
    const body = document.body;
    body.classList.toggle("dark-mode");
    
    const aboutInfo = document.getElementById("idabout");
    if (body.classList.contains("dark-mode")) {
        aboutInfo.style.color = "#fff";
    } else {
        aboutInfo.style.color = "#333";
    }
}

document.getElementById("mode-toggle").addEventListener("click", toggleMode);

    document.getElementById("logoutButton").addEventListener("click", function(event) {
    event.preventDefault();
   
    var confirmation = confirm("Apakah Anda yakin ingin logout?");
    
    
    if (confirmation) {
        window.location.href = "login.php";
    }
});

function submitForm() {
       
        var form = document.getElementById("form-pesan");
        form.submit();
    }

    function showPopup(message) {
            alert(message);
        }

    </script>
</html>
