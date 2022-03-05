<?php
    session_start();
    if ($_SESSION['user']==""){
        @header("location:index.html");
    }
    if($_GET['gorevId']){
        $gorevId= $_GET['gorevId'];
    }
    if($_GET['kimin']){
        $kimin= $_GET['kimin'];
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/gorevGuncelle.css">
    <title>Gorev Guncelle</title>
</head>
<body>
    <main>
        <div class="gorevEklemeKutusu">
            <h4>Görev Güncelle</h4>
            <form action="gorevGuncelle2.php" method="post">
            <input type="text" name="gorevId" value="<?php echo $gorevId; ?>" style="display:none">
            <input type="text" name="kimin" value="<?php echo $kimin; ?>" style="display:none">
           
            <textarea rows="4" cols="30" name="guncelKonu" >
Güncel Konu: </textarea>
            <br>
            <input type="text" name="guncelSonTeslim" placeholder="Son Teslim:    ">
            <br>
            <input type="submit" value="Guncelle">
        </div>
    </main>
</body>
</html>
