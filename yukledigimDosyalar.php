<?php
    session_start();
    if ($_SESSION['user']==""){
        @header("location:index.html");
    }
    $kim=$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/gorevEkle.css">
    <title>DosyaListele</title>
</head>
<body style="padding-top:5%;padding-bottom:5%;">
    <?php
        $fileName="yuklenenDosyalar/".$kim."/*";
        $dosyalar = glob($fileName);
        foreach ($dosyalar as $dosya) {
            //echo '<p style="text-align:center;"><a href="dosyaAc.php?dosyaIsmi='.$dosya.'">'.$dosya.'</a></p>';
            echo '<p style="text-align:center;">'.$dosya.'</p>';
            echo '<p style="text-align:center;">
            <a href="dosyaIndir.php?dosyaIsmi='.$dosya.'"><img src="images/download.png" title="download" style="width:23px;height:23px;"></a>
            <a href="dosyaSil.php?dosyaIsmi='.$dosya.'&nerdenGeldi=1" onclick="return uyari2();"><img src="images/delete.png" title="delete" style="width:22px;height:22px;"></a>
            </p>';
        }
    ?>
</body>
<script>
    function uyari2() {
        if (confirm("Bu dosyayı silmek istediğinize emin misiniz?"))
            return true;
        else 
            return false;
    }
</script>
</html>