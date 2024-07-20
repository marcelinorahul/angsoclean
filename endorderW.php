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
            <p class="angcle2">Halaman Order Cleaner WC</p>
        </div>
    </nav>
    <div class="containerRU"> 
        <p class="kalimat1">Tekan selesai jika cleaner telah mengerjakan tugasnya</p>       
        <div class ="perintah">
            <p class="keterangan">Nama Cleaner</p>
            <br><br>
            <p class="keterangan">Jadwal pemesanan</p>
            <br><br>
            <p class="keterangan">Deskripsi pemesanan</p>
            <br><br> 
            <p class="keterangan">Alamat lengkap</p>
            <br><br> 
            <p class="keterangan">Telepon</p>
            <br><br> 
            <p class="keterangan">Kondisi tempat yang<br>akan kami bersihkan</p><br>
            <br><br>
            <p class="keterangan">Biaya</p>
            <br><br>
        </div>
        <button type="button" class="submit" onclick="location.href='halamanutamauser.html';alert('Selamat pesanan anda telah selesai, Terimakasih');">Selesai</button>
        <button type="button" class="submit" style="margin-right: 20px; background: #FD9797;" onclick="location.href='laporkanW.html';">Laporkan</button>
        <br>
        <div style="border: 4px solid white; margin-top: 20px;">
        <p style="margin-left: 10px;">Keterangan :</p>
        <p style="margin-left: 10px;">Tekan "Selesai" jika Cleaner telah mengerjakan pekerjaannya</p>
        <p style="margin-left: 10px;">Tekan “Report” jika Cleaner tidak datang, tidak sopan, dan lain sebaginya</p>
        </div>
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