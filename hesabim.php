<?php
    session_start();
    if ($_SESSION['user']==""){
        @header("location:index.html");
    } 
    $userName=$_SESSION['user'];
    $who=$_SESSION['who']; 
    if($who=="ogretmen"){
        $link="anasayfaOgretmen.php";
    }else if($who=="ogrenci"){
        $link="anasayfaOgrenci.php";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/hesabim.css">
    <title>Hesabım</title>
</head>
<body>
    <header>
        <div id="logo"><img src="images/logo.png" title="Hidroist"></div> 
        <nav>
            <ul>
                <li><a href="<?php echo $link; ?>" ><img src="images/homePage.png" title="HomePage"></a></li>
                <li style="border-bottom:2px solid #363636;"><a href="hesabim.php"><img src="images/myAccount.png" title="MyAccount"></a></li>
                <li><a href="cikis.php"><img src="images/logOut.png" title="LogOut"></a></li>   
            </ul>
        </nav>  
    </header>
    <hr>
    <main>
        <div id="profil">
            <?php
            
            
                $baglanti=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
                mysqli_query("SET NAMES utf8");
                mysqli_query("SET CHARACTER SET utf8");
                mysqli_query("SET COLLATION_CONNECTION='utf8_turkish_ci'");
                if($who=="ogretmen"){
                    $gonder=mysqli_query($baglanti,"SELECT * FROM ogretmenler WHERE username='$userName';");
                    $satir=mysqli_fetch_assoc($gonder);
                    $name=$satir["name"];
                }else if($who=="ogrenci"){
                    $gonder=mysqli_query($baglanti,"SELECT * FROM ogrenciler WHERE username='$userName';");
                    $satir=mysqli_fetch_assoc($gonder);
                    $name=$satir["name"];
                }
                $resimYolu="images/kisiler/".$userName.".jpg";
                ?>
                <p><img id="profilResmi" src="<?php echo $resimYolu ?>"></p>
                <p><?php echo $name; ?></p>
                <?php
                echo '<a href="fotografDegistir.php" id="fotografdegistir" style="margin-left:42%; margin-right:6%;"><img src="images/upload.png" title="Fotoğraf Degiştir"></a>';
                echo '<a href="sifreDegistir.html"><img src="images/passwordImage.png" title="Sifre Degiştir"></a>';   
                
            ?>
        </div>
        <div id="gorevler">
            <p class="baslik">Gorevler</p>
            
            <?php    
                $baglanti=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
                $gonder2=mysqli_query($baglanti,"SELECT * FROM gorevler WHERE username='$userName'");
                while($satir2=mysqli_fetch_assoc($gonder2)){ 
                    $gorevId=$satir2["gorevId"]; 
                    $gorevAdi=$satir2["gorevAdi"];
                    $sonTarih=$satir2["sonTarih"];
                    $teslimDurumu=$satir2["teslimDurumu"];
                    if($teslimDurumu=="tamam"){
                        $durum="Teslim Edildi.";
                    }else if($teslimDurumu=="hayir"){
                        $durum="Devam Ediyor";
                    }
                ?>
                    <p><img src="images/bak1.png" style="margin-right:20px;"></p>
                    <p><span style="font-weight: bold;">Konu: </span><?php echo $gorevAdi ?></p>
                    <p><span style="font-weight: bold;">Son Teslim: </span><?php echo $sonTarih; ?></p>
                    <p><span style="font-weight: bold;">Durum: </span><?php echo $durum; ?></p>
                <?php
                    if($teslimDurumu=="tamam"){
                        echo '<p><a href="gorevDevamEttir.php?gorevId='.$satir2['gorevId'].'" onclick="return BitmediMi();" style="color:#363636">Devam Ettir</a></p>';
                    }else if($teslimDurumu=="hayir"){
                        echo '<p><a href="gorevTamamla.php?gorevId='.$satir2['gorevId'].'" onclick="return BittiMi();" style="color:#363636">Tamamla</a></p>';
                    }
                    echo '<div style="border: 1px solid #eee9e9"></div>';
                }
            ?>
            <p style="text-align:center;">
                <a href="yukledigimDosyalar.php"><img src="images/dosyaYukle.png" title="Yüklenmiş Dosyalar" style="width:22px;height:22px;"></a>
                <a href="dosyaYukle.php"><img src="images/load.png" title="Dosya Yükle" style="width:22px;height:22px;"></a>
            </p>
        </div>     
    </main> 
</body>
<script>
    function BittiMi() {
        if (confirm("Gorevi Bitirmek Istediğinize Emin Misiniz?"))
            return true;
        else 
            return false;
    }
    function BitmediMi() {
        if (confirm("Gorevi Devam Ettirmek Istediğinize Emin Misiniz?"))
            return true;
        else 
            return false;
    }
</script>
</html>