document.getElementById("iletisim-formu").addEventListener("submit", function(event) {
    event.preventDefault(); // formun otomatik olarak submit olmasını engelle
    
    // Diğer form işlemleri (gönderim, validasyon, vb.)
    
    // Form gönderildiğinde mesajı ekranda göster
    var mesajDiv = document.createElement("div");
    mesajDiv.textContent = "Form başarıyla gönderildi!";
    mesajDiv.className = "mesaj";
    document.getElementById("iletisim-formu").appendChild(mesajDiv);
});
