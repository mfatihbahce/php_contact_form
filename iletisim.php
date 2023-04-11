<?php
// Veritabanı bağlantı bilgilerini ayarlayın
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "iletisim_formu";

// Veritabanına bağlanın
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol edin
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Form verilerini alın
$isim = $_POST["isim"];
$soyisim = $_POST["soyisim"];
$telefon = $_POST["telefon"];
$foto = $_FILES["foto"]["name"];

// Fotoğrafı sunucuya yükleyin
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);

// Veri doğrulama işlemlerini yapabilirsiniz

// Veriyi veritabanına kaydedin
$sql = "INSERT INTO iletisim_verileri (isim, soyisim, telefon, foto) VALUES ('$isim', '$soyisim', '$telefon', '$foto')";

if ($conn->query($sql) === TRUE) {
    echo "Form verileri başarıyla kaydedildi.";
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>