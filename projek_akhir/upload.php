<?php
$targetDir = "Uploads"; 
$targetFile = $targetDir . basename($_FILES["file"]["name"]);
$uploadOk = 1;

if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if ($check !== false) {
        
        move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile);
        echo "File " . basename($_FILES["file"]["name"]) . " berhasil diunggah.";
    } else {
        echo "File bukan gambar.";
    }
}
?>
