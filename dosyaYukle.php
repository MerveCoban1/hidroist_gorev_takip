<?php
    session_start();
    if ($_SESSION['user']==""){
        @header("location:index.html");
    }
    if($_GET['kim']){
        $kim= $_GET['kim'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="euc-jp">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/gorevEkle.css">
    <title>Dosya Yukle</title>
</head>
<body>
    <main>
        <div class="gorevEklemeKutusu">
            <h4>Dosya Yukle</h4>
            <form enctype="multipart/form-data" action="dosyaYukle2.php" method="post">
                <br>
                <input type="FILE" name="dosya" style="border:0px solid white;">
                <br>
                <input type="submit" value="Yukle">
            </form>                          
        </div>
    </main>
</body>
</html>