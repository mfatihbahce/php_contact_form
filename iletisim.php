<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ad = $_POST["ad"];
    $soyad = $_POST["soyad"];
    $numara = $_POST["numara"];
    
    // Fotoğrafın yüklenip yüklenmediğini kontrol et
    if(isset($_FILES["foto"]) && $_FILES["foto"]["error"] == 0){
        $hedef_klasor = "fotograflar/";
        $hedef_dosya = $hedef_klasor . basename($_FILES["foto"]["name"]);
        $dosya_tipi = strtolower(pathinfo($hedef_dosya, PATHINFO_EXTENSION));
        
        // Fotoğrafı hedef klasöre taşı
        if(move_uploaded_file($_FILES["foto"]["tmp_name"], $hedef_dosya)){
            echo "Fotoğraf başarıyla yüklendi.<br>";
            echo "Yüklenen dosyanın adı: " . $_FILES["foto"]["name"] . "<br>";
            echo "Dosya tipi: " . $dosya_tipi . "<br>";
            echo "Dosya boyutu: " . $_FILES["foto"]["size"] . " byte<br>";
        } else {
            echo "Fotoğraf yüklenirken hata oluştu.<br>";


        // Dosyayı hedef klasöre kaydet
        if (move_uploaded_file($_FILES["dosya"]["tmp_name"], $dosyaHedef)) {
            echo "<script>alert('Dosya başarıyla yüklendi. İletişim formu başarıyla gönderildi.'); window.location.href = 'index.html';</script>";
        } else {
            echo "<script>alert('Dosya yüklenirken hata oluştu. Lütfen tekrar deneyin.');</script>";
        }
    }
        }
    }
    
    // E-posta gönderimi
    $to = "iletisim@orneksite.com"; // E-posta alıcısı
    $subject = "İletişim Formu"; // E-posta konusu
    $message = "Ad: " . $ad . "\nSoyad: " . $soyad . "\nNumara: " . $numara; // E-posta içeriği
    
    $headers = "From: iletisim@orneksite.com" . "\r\n" .
        "Reply-To: iletisim@orneksite.com" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Form başarıyla gönderildi.<br>";
    } else {
        echo "İletişim formu gönderilirken hata oluştu.<br>";
    }

?>
