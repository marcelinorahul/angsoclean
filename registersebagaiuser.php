<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registerU.css">
    <title>Angso Clean</title>
</head>
<body>
    <nav>
        <div class="baratas">
            <a href="registersebagai.html"><img src="foto/panah.jpg" class="panah"></a>
            <p class="angcle2">Halaman Register User</p>
        </div>
    </nav>
    <div class="containerRU">        
        <div class ="perintah">
                <p class="keterangan">E-mail</p> 
                <input class="isi" type="email" id="email" name="email" autocomplete="off"><br><br>
                <p class="keterangan">Password</p>
                <input class="isi" type="password" id="password" name="password"><br><br>
                <p class="keterangan">Retype Password</p>
                <input class="isi" type="password" id="password2" name="password2"><br><br>
                <p class="keterangan">Username</p>    
                <input class="isi" type="text" id="username" name="username"><br><br>
                <p class="keterangan">Telepon</p> 
                <input class = "isi" type="tel" id="number" name="telepon"><br><br>
                <p class="keterangan">Foto Diri</p>
                <input class = "isif" type="file" id="foto" name="foto"><br><br>
        </div>
    <button type="button" class="register" onclick="location.href='loginsebagaiuser.html'; alert('register berhasil! silahkan login');">Register</button>
</div>
</body>
</html>