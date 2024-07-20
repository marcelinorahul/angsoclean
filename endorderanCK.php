<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/endorder.css">
    <title>Angso Clean</title>
</head>
<body>
    <nav>
        <div class="baratas">
            <p class="angcle2">Halaman Order Cleaner Kamar</p>
        </div>
    </nav>
    <div class="containerRU"> 
        <p class="kalimat1">Tekan selesai jika pekerjaan telah anda kerjakan</p>       
        <div class ="perintah">
            <p class="keterangan">Nama Pengorder</p>
            <br><br>
            <p class="keterangan">Jadwal pemesanan</p>
            <br><br>
            <p class="keterangan">Deskripsi pemesanan</p>
            <br><br> 
            <p class="keterangan">Alamat lengkap</p>
            <br><br> 
            <p class="keterangan">Telepon</p>
            <br><br> 
            <p class="keterangan">Biaya</p>
            <br><br>
            <p class="keterangan">Upload bukti pengerjaan</p>
            <input class = "isif" type="file" id="foto" name="fotobukti">
            <br><br>
        </div>
        <button type="button" class="submit" onclick="location.href='halamanutamauser.html';alert('Selamat pekerjaan anda telah selesai, Terimakasih');">Selesai</button>
        <br>
        <div style="border: 4px solid white; margin-top: 20px;">
        <p style="margin-left: 10px;">Keterangan :</p>
        <p style="margin-left: 10px;">Tekan "Selesai" dapat dilakukan, jika User telah menekan "Selesai" terlebih dahulu</p>
        </div>
    </div>
    <div class="boxbawah">
        <div class="boxdalam">
            <p class="status1">Status : Cleaner</p>
        </div>
    </div>   
        <!--=============== MAIN JS ===============-->
        <script src="js/main.js"></script> 
</body>
</html>