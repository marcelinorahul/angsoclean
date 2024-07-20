<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formorder.css">
    <title>Angso Clean</title>
</head>
<body>
    <nav>
        <div class="baratas">
            <a href="halamanutamauser.html"><img src="foto/panah.jpg" class="panah"></a>
            <p class="angcle2">Halaman Order Cleaner WC</p>
        </div>
    </nav>
    <div class="containerRU"> 
        <p class="kalimat1">Isi data pemesanan anda</p>       
        <div class ="perintah">
            <p class="keterangan">Jadwal pemesanan</p> 
                <input class = "isi" type="datetime-local" id="jadwal" name="jadwal"><br><br>
            <p class="keterangan">Deskripsi pemesanan</p> 
                <input class = "isi" type="text" id="deskripsi" name="deskripsi"><br><br>
            <p class="keterangan">Alamat lengkap</p> 
                <input class = "isi" type="text" id="alamat" name="alamat"><br><br>
            <p class="keterangan">Telepon</p> 
                <input class = "isi" type="tel" id="telepon" name="telepon"><br><br>
            <p class="keterangan">Kondisi tempat yang<br>akan kami bersihkan</p>
                <input class = "isif" type="file" id="foto" name="fotoorder"><br><br>
        </div>
        <button type="button" class="submit" onclick="location.href='konfirmasiorderW.html';alert('Periksa kembali data sebelum konfirmasi pemesanan');">Submit</button>
    </div>
    <div class="boxbawah">
        <div class="boxdalam">
            <p class="status1">Status : User</p>
        </div>
    </div>    
        <!--=============== MAIN JS ===============-->
        <script src="js/main.js"></script>
</body>
</html>