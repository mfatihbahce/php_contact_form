<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>İletişim Formu</title>
    <link rel="stylesheet" type="text/css" href="css/iletisim.css">
</head>
<body>
    <div class="iletisim-formu form-ortala">
        <h2>İletişim Formu</h2>
        <form id="iletisim-form" action="iletisim.php" method="post" enctype="multipart/form-data">
            <input type="text" name="isim" placeholder="isim">
            <input type="text" name="soyisim" placeholder="Soyisim">
            <input type="tel" name="telefon" placeholder="Telefon">
            <input type="file" name="foto" id="foto">
            
            <button type="submit">Gönder</button>
        </form>
    </div>
    <script src="js/iletisim.js"></script>
</body>
</html>