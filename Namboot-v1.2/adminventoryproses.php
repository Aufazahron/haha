<?php 
include 'koneksi.php';
$name_inventory = $_POST['name_inventory'];
// $pict_inventory = $_POST['pict_inventory'];


if (isset($_POST["submit"])) {
    $name = $_POST["name_inventory"];
    $targetDirectory = "Img/Inventory/";
    $uploadedFileName = $name . "_" . basename($_FILES["file"]["name"]);
    $targetFile = $targetDirectory . $uploadedFileName;

    // Coba unggah file
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
    //     echo "File " . htmlspecialchars($uploadedFileName) . " telah berhasil diunggah oleh " . htmlspecialchars($name) . ".";
    // } else {
    //     echo "Maaf, terjadi kesalahan saat mengunggah file.";
    }
}


$query = "INSERT INTO db_inventory SET name_inventory = '$name_inventory', pict_inventory = '$uploadedFileName'";
mysqli_query($conn, $query);
header("location:adminventory.php");
 ?>