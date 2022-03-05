<?php
    session_start();
    if ($_SESSION['user']==""){
        @header("location:index.html");
    }
    $kim=$_SESSION['user'];
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
    <?php
        $dizin = 'yuklenenDosyalar/'.$kim.'/';
        $yuklenecek_dosya = $dizin . basename($_FILES['dosya']['name']);
        $name=$kim."_".$odevno;
        if (move_uploaded_file($_FILES['dosya']['tmp_name'], $yuklenecek_dosya)){
            @header("location:hesabim.php");
        } else {
            echo "Dosya yüklenirken bir hata oluştu.";
        }
        
    ?>
</body>
</html>

