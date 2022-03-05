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
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/gorevEkle.css">
    <title>GorevEkle</title>
</head>
<body>
    <main>
        <div class="gorevEklemeKutusu">
            <h4>Yeni Görev</h4>
            <form action="gorevEkle2.php" method="post">
                <input type="text" name="kim" value="<?php echo $kim ?>" style="display:none;">
                <!--<input type="text" name="konu" placeholder="Konu:   ">-->
                <textarea rows="4" cols="30" name="konu" >
Konu: </textarea>
                <br>
                <input type="text" name="sonTeslim" placeholder="Son Teslim:    ">
                <br>
                <input type="submit" value="Ekle">
            </form>                          
        </div>
    </main>
</body>
</html>