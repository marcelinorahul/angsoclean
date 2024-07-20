<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginC.css">
    <title>Angso Clean</title>
</head>
<body>
    <nav>
        <div class="baratas">
            <a href="loginsebagai.html"><img src="foto/panah.jpg" class="panah"></a>
            <div class ="menu">
                <div class="kolom">
                    <p>Cleaner</p>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <img src="foto/ANGCLE.png" alt="logo" class="logo">
            <div class="containerRU">        
                <div class ="perintah">
                    <img src="foto/logouser.png" alt="logo" class="keterangan">
                    <input class="isi" type="text" id="username" placeholder="Username"><br><br>
                    <img src="foto/logopw.png" alt="" class="keterangan">
                    <input class="isi" type="password" id="password" placeholder="Password"><br>
                </div>
                <input class="masuk" type="submit" value="Login" onclick="location.href='halamanutamacleaner.html'">
            </div>
    </div>
        <!--=============== MAIN JS ===============-->
        <script src="js/main.js"></script>
</body>
</html>