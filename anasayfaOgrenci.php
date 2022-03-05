<?php
    session_start();
    if ($_SESSION['user']==""){
        @header("location:index.html");
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/anasayfa.css">
    <title>Anasayfa Ogrenci</title>
</head>
<body>
    <header>
        <div id="logo"><img src="images/logo.png" title="Hidroist"></div> 
        <nav>
            <ul>
                <li  style="border-bottom:2px solid #363636;"><a href="anasayfaOgrenci.php" ><img src="images/homePage.png" title="HomePage"></a></li>
                <li><a href="hesabim.php"><img src="images/myAccount.png" title="MyAccount"></a></li>
                <li><a href="cikis.php"><img src="images/logOut.png" title="LogOut"></a></li>
            </ul>
        </nav>  
    </header>
    <hr> 
    <main>
        <div class="yatayDiv">
            <div class="kisi">
                <div class="kisiBilgi">
                    <img class="kisiResmi" src="images/kisiler/KorayKaranfil.jpg" title="KorayKaranfil">
                    <p>Koray Karanfil</p>
                    <p>Elektronik Departman</p>
                    <img class="genislet" src="images/ok1.png">
                </div>
                <div class="gorevBilgi">
                    <img class="daralt" src="images/ok2.png" style="margin-left:51%;width: 15px;height: 15px;">
                    <?php
                        $baglanti=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
                        $kim="KorayKaranfil";
                        $gonder=mysqli_query($baglanti,"SELECT * FROM gorevler WHERE username='$kim'");
                        while($satir=mysqli_fetch_assoc($gonder)){ 
                            $gorevId=$satir["gorevId"]; 
                            $gorevAdi=$satir["gorevAdi"];
                            $sonTarih=$satir["sonTarih"];
                            $teslimDurumu=$satir["teslimDurumu"];
                            if($teslimDurumu=="tamam"){
                                $durum="Tamamlandi";
                            }else if($teslimDurumu=="hayir"){
                                $durum="Devam Ediyor";
                            }
                            echo '<div style="border:1px solid #eee9e9;"></div>';
                            ?>
                            <p style="margin-left: 25px;margin-right:15px;"><img src="images/bak1.png" style="width:10px;height:10px;margin-right: 5px;"><span style="font-size:12px;"><?php echo $gorevAdi ?></span></p>
                            <p><img src="images/saat1.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $sonTarih ?></span></p>
                            <p><img src="images/tamam2.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $durum ?></span></p>
                            <p><?php $teslimDurumu ?></p>
                            <?php 
                            echo '<p></p>';
                        }  
                    ?>   
                </div>
            </div>
            <div class="kisi">
                <div class="kisiBilgi">
                    <img class="kisiResmi" src="images/kisiler/YunusGecim.jpg" title="YunusGecim">
                    <p>Yunus GEÇİM</p>
                    <p>Elektronik Departman</p>
                    <img class="genislet" src="images/ok1.png">
                </div>
                <div class="gorevBilgi">
                    <img class="daralt" src="images/ok2.png" style="margin-left:51%;width: 15px;height: 15px;">
                    <?php
                        $baglanti=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
                        $kim="YunusGecim";
                        $gonder=mysqli_query($baglanti,"SELECT * FROM gorevler WHERE username='$kim'");
                        while($satir=mysqli_fetch_assoc($gonder)){ 
                            $gorevId=$satir["gorevId"]; 
                            $gorevAdi=$satir["gorevAdi"];
                            $sonTarih=$satir["sonTarih"];
                            $teslimDurumu=$satir["teslimDurumu"];
                            if($teslimDurumu=="tamam"){
                                $durum="Tamamlandi";
                            }else if($teslimDurumu=="hayir"){
                                $durum="Devam Ediyor";
                            }
                            echo '<div style="border:1px solid #eee9e9;"></div>';
                            ?>
                            <p style="margin-left: 25px;margin-right:15px;"><img src="images/bak1.png" style="width:10px;height:10px;margin-right: 5px;"><span style="font-size:12px;"><?php echo $gorevAdi ?></span></p>
                            <p><img src="images/saat1.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $sonTarih ?></span></p>
                            <p><img src="images/tamam2.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $durum ?></span></p>
                            <p><?php $teslimDurumu ?></p>
                            <?php
                            echo '<p></p>';
                        }
                    ?>   
                </div>
            </div>
            <div class="kisi">
                <div class="kisiBilgi">
                    <img class="kisiResmi" src="images/kisiler/OmerYilmaz.jpg" title="OmerYilmaz">
                    <p>Ömer YILMAZ</p>
                    <p>Elektronik Departman</p>
                    <img class="genislet" src="images/ok1.png">
                </div>
                <div class="gorevBilgi">
                    <img class="daralt" src="images/ok2.png" style="margin-left:51%;width: 15px;height: 15px;">
                    <?php
                        $baglanti=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
                        $kim="OmerYilmaz";
                        $gonder=mysqli_query($baglanti,"SELECT * FROM gorevler WHERE username='$kim'");
                        while($satir=mysqli_fetch_assoc($gonder)){ 
                            $gorevId=$satir["gorevId"]; 
                            $gorevAdi=$satir["gorevAdi"];
                            $sonTarih=$satir["sonTarih"];
                            $teslimDurumu=$satir["teslimDurumu"];
                            if($teslimDurumu=="tamam"){
                                $durum="Tamamlandi";
                            }else if($teslimDurumu=="hayir"){
                                $durum="Devam Ediyor";
                            }
                            echo '<div style="border:1px solid #eee9e9;"></div>';
                            ?>
                            <p style="margin-left: 25px;margin-right:15px;"><img src="images/bak1.png" style="width:10px;height:10px;margin-right: 5px;"><span style="font-size:12px;"><?php echo $gorevAdi ?></span></p>
                            <p><img src="images/saat1.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $sonTarih ?></span></p>
                            <p><img src="images/tamam2.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $durum ?></span></p>
                            <p><?php $teslimDurumu ?></p>
                            <?php
                            echo '<p></p>';
                        }
                    ?>   
                </div>
            </div>
            <div class="kisi">
                <div class="kisiBilgi">
                    <img class="kisiResmi" src="images/kisiler/MerveCoban.jpg" title="MerveCoban">
                    <p>Merve ÇOBAN</p>
                    <p>Bilgisayar Departmanı</p>
                    <img class="genislet" src="images/ok1.png">
                </div>
                <div class="gorevBilgi">
                    <img class="daralt" src="images/ok2.png" style="margin-left:51%;width: 15px;height: 15px;">
                    <?php
                        $baglanti=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
                        $kim="MerveCoban";
                        $gonder=mysqli_query($baglanti,"SELECT * FROM gorevler WHERE username='$kim'");
                        while($satir=mysqli_fetch_assoc($gonder)){ 
                            $gorevId=$satir["gorevId"]; 
                            $gorevAdi=$satir["gorevAdi"];
                            $sonTarih=$satir["sonTarih"];
                            $teslimDurumu=$satir["teslimDurumu"];
                            if($teslimDurumu=="tamam"){
                                $durum="Tamamlandi";
                            }else if($teslimDurumu=="hayir"){
                                $durum="Devam Ediyor";
                            }
                            echo '<div style="border:1px solid #eee9e9;"></div>';
                            ?>
                            <p style="margin-left: 25px;margin-right:15px;"><img src="images/bak1.png" style="width:10px;height:10px;margin-right: 5px;"><span style="font-size:12px;"><?php echo $gorevAdi ?></span></p>
                            <p><img src="images/saat1.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $sonTarih ?></span></p>
                            <p><img src="images/tamam2.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $durum ?></span></p>
                            <p><?php $teslimDurumu ?></p>
                            <?php
                            echo '<p></p>';
                        }
                    ?>   
                </div>
            </div>
        </div>
        <div class="yatayDiv">
            <div class="kisi">
                <div class="kisiBilgi">
                    <img class="kisiResmi" src="images/kisiler/HangeldiYmakov.jpg" title="HangeldiYmakov">
                    <p>Hangeldi YMAKOV</p>
                    <p>Mekanik Departman</p>
                    <img class="genislet" src="images/ok1.png">
                </div>
                <div class="gorevBilgi">
                    <img class="daralt" src="images/ok2.png" style="margin-left:51%;width: 15px;height: 15px;">
                    <?php
                        $baglanti=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
                        $kim="HangeldiYmakov";
                        $gonder=mysqli_query($baglanti,"SELECT * FROM gorevler WHERE username='$kim'");
                        while($satir=mysqli_fetch_assoc($gonder)){ 
                            $gorevId=$satir["gorevId"]; 
                            $gorevAdi=$satir["gorevAdi"];
                            $sonTarih=$satir["sonTarih"];
                            $teslimDurumu=$satir["teslimDurumu"];
                            if($teslimDurumu=="tamam"){
                                $durum="Tamamlandi";
                            }else if($teslimDurumu=="hayir"){
                                $durum="Devam Ediyor";
                            }
                            echo '<div style="border:1px solid #eee9e9;"></div>';
                            ?>
                            <p style="margin-left: 25px;margin-right:15px;"><img src="images/bak1.png" style="width:10px;height:10px;margin-right: 5px;"><span style="font-size:12px;"><?php echo $gorevAdi ?></span></p>
                            <p><img src="images/saat1.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $sonTarih ?></span></p>
                            <p><img src="images/tamam2.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $durum ?></span></p>
                            <p><?php $teslimDurumu ?></p>
                            <?php
                            echo '<p></p>';
                        }
                    ?>   
                </div>
            </div>
            <div class="kisi">
                <div class="kisiBilgi">
                    <img class="kisiResmi" src="images/kisiler/AleynaGoker.jpg" title="AleynaGoker">
                    <p>Aleyna GÖKER</p>
                    <p>Mekanik Departman</p>
                    <img class="genislet" src="images/ok1.png">
                </div>
                <div class="gorevBilgi">
                    <img class="daralt" src="images/ok2.png" style="margin-left:51%;width: 15px;height: 15px;">
                    <?php
                        $baglanti=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
                        $kim="AleynaGoker";
                        $gonder=mysqli_query($baglanti,"SELECT * FROM gorevler WHERE username='$kim'");
                        while($satir=mysqli_fetch_assoc($gonder)){ 
                            $gorevId=$satir["gorevId"]; 
                            $gorevAdi=$satir["gorevAdi"];
                            $sonTarih=$satir["sonTarih"];
                            $teslimDurumu=$satir["teslimDurumu"];
                            if($teslimDurumu=="tamam"){
                                $durum="Tamamlandi";
                            }else if($teslimDurumu=="hayir"){
                                $durum="Devam Ediyor";
                            }
                            echo '<div style="border:1px solid #eee9e9;"></div>';
                            ?>
                            <p style="margin-left: 25px;margin-right:15px;"><img src="images/bak1.png" style="width:10px;height:10px;margin-right: 5px;"><span style="font-size:12px;"><?php echo $gorevAdi ?></span></p>
                            <p><img src="images/saat1.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $sonTarih ?></span></p>
                            <p><img src="images/tamam2.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $durum ?></span></p>
                            <p><?php $teslimDurumu ?></p>
                            <?php
                            echo '<p></p>';
                        }
                    ?>   
                </div>
            </div>
            <div class="kisi">
                <div class="kisiBilgi">
                    <img class="kisiResmi" src="images/kisiler/BuseSimsek.jpg" title="BuseSimsek">
                    <p>Buse ŞİMŞEK</p>
                    <p>İletişim ve Organizasyon Departmanı</p>
                    <img class="genislet" src="images/ok1.png">
                </div>
                <div class="gorevBilgi">
                    <img class="daralt" src="images/ok2.png" style="margin-left:51%;width: 15px;height: 15px;">
                    <?php
                        $baglanti=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
                        $kim="BuseSimsek";
                        $gonder=mysqli_query($baglanti,"SELECT * FROM gorevler WHERE username='$kim'");
                        while($satir=mysqli_fetch_assoc($gonder)){ 
                            $gorevId=$satir["gorevId"]; 
                            $gorevAdi=$satir["gorevAdi"];
                            $sonTarih=$satir["sonTarih"];
                            $teslimDurumu=$satir["teslimDurumu"];
                            if($teslimDurumu=="tamam"){
                                $durum="Tamamlandi";
                            }else if($teslimDurumu=="hayir"){
                                $durum="Devam Ediyor";
                            }
                            echo '<div style="border:1px solid #eee9e9;"></div>';
                            ?>
                            <p style="margin-left: 25px;margin-right:15px;"><img src="images/bak1.png" style="width:10px;height:10px;margin-right: 5px;"><span style="font-size:12px;"><?php echo $gorevAdi ?></span></p>
                            <p><img src="images/saat1.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $sonTarih ?></span></p>
                            <p><img src="images/tamam2.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $durum ?></span></p>
                            <p><?php $teslimDurumu ?></p>
                            <?php
                            echo '<p></p>';
                        }
                    ?>   
                </div>
            </div>
            <div class="kisi">
                <div class="kisiBilgi">
                    <img class="kisiResmi" src="images/kisiler/AhmetCelep.jpg" title="AhmetCelep">
                    <p>Ahmet CELEP</p>
                    <p>Elektronik Departman</p>
                    <img class="genislet" src="images/ok1.png">
                </div>
                <div class="gorevBilgi">
                    <img class="daralt" src="images/ok2.png" style="margin-left:51%;width: 15px;height: 15px;">
                    <?php
                        $baglanti=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
                        $kim="AhmetCelep";
                        $gonder=mysqli_query($baglanti,"SELECT * FROM gorevler WHERE username='$kim'");
                        while($satir=mysqli_fetch_assoc($gonder)){ 
                            $gorevId=$satir["gorevId"]; 
                            $gorevAdi=$satir["gorevAdi"];
                            $sonTarih=$satir["sonTarih"];
                            $teslimDurumu=$satir["teslimDurumu"];
                            if($teslimDurumu=="tamam"){
                                $durum="Tamamlandi";
                            }else if($teslimDurumu=="hayir"){
                                $durum="Devam Ediyor";
                            }
                            echo '<div style="border:1px solid #eee9e9;"></div>';
                            ?>
                            <p style="margin-left: 25px;margin-right:15px;"><img src="images/bak1.png" style="width:10px;height:10px;margin-right: 5px;"><span style="font-size:12px;"><?php echo $gorevAdi ?></span></p>
                            <p><img src="images/saat1.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $sonTarih ?></span></p>
                            <p><img src="images/tamam2.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $durum ?></span></p>
                            <p><?php $teslimDurumu ?></p>
                            <?php
                            echo '<p></p>';
                        }
                    ?>   
                </div>
            </div>
        </div>
        <div class="yatayDiv">
            <div class="kisi">
                <div class="kisiBilgi">
                    <img class="kisiResmi" src="images/kisiler/AhmetKeser.jpg" title="AhmetKeser">
                    <p>Ahmet KESER</p>
                    <p>Elektronik Departman</p>
                    <img class="genislet" src="images/ok1.png">
                </div>
                <div class="gorevBilgi">
                    <img class="daralt" src="images/ok2.png" style="margin-left:51%;width: 15px;height: 15px;">
                    <?php
                        $baglanti=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
                        $kim="AhmetKeser";
                        $gonder=mysqli_query($baglanti,"SELECT * FROM gorevler WHERE username='$kim'");
                        while($satir=mysqli_fetch_assoc($gonder)){ 
                            $gorevId=$satir["gorevId"]; 
                            $gorevAdi=$satir["gorevAdi"];
                            $sonTarih=$satir["sonTarih"];
                            $teslimDurumu=$satir["teslimDurumu"];
                            if($teslimDurumu=="tamam"){
                                $durum="Tamamlandi";
                            }else if($teslimDurumu=="hayir"){
                                $durum="Devam Ediyor";
                            }
                            echo '<div style="border:1px solid #eee9e9;"></div>';
                            ?>
                            <p style="margin-left: 25px;margin-right:15px;"><img src="images/bak1.png" style="width:10px;height:10px;margin-right: 5px;"><span style="font-size:12px;"><?php echo $gorevAdi ?></span></p>
                            <p><img src="images/saat1.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $sonTarih ?></span></p>
                            <p><img src="images/tamam2.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $durum ?></span></p>
                            <p><?php $teslimDurumu ?></p>
                            <?php
                            echo '<p></p>';
                        }
                    ?>   
                </div>
            </div>
            <div class="kisi">
                <div class="kisiBilgi">
                    <img class="kisiResmi" src="images/kisiler/MuhammedSaidSevinc.jpg" title="MuhammedSaidSeinc">
                    <p>Muhammed Said SEVİNÇ</p>
                    <p>Elektronik Departman</p>
                    <img class="genislet" src="images/ok1.png">
                </div>
                <div class="gorevBilgi">
                    <img class="daralt" src="images/ok2.png" style="margin-left:51%;width: 15px;height: 15px;">
                    <?php
                        $baglanti=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
                        $kim="MuhammedSaidSevinc";
                        $gonder=mysqli_query($baglanti,"SELECT * FROM gorevler WHERE username='$kim'");
                        while($satir=mysqli_fetch_assoc($gonder)){ 
                            $gorevId=$satir["gorevId"]; 
                            $gorevAdi=$satir["gorevAdi"];
                            $sonTarih=$satir["sonTarih"];
                            $teslimDurumu=$satir["teslimDurumu"];
                            if($teslimDurumu=="tamam"){
                                $durum="Tamamlandi";
                            }else if($teslimDurumu=="hayir"){
                                $durum="Devam Ediyor";
                            }
                            echo '<div style="border:1px solid #eee9e9;"></div>';
                            ?>
                            <p style="margin-left: 25px;margin-right:15px;"><img src="images/bak1.png" style="width:10px;height:10px;margin-right: 5px;"><span style="font-size:12px;"><?php echo $gorevAdi ?></span></p>
                            <p><img src="images/saat1.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $sonTarih ?></span></p>
                            <p><img src="images/tamam2.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $durum ?></span></p>
                            <p><?php $teslimDurumu ?></p>
                            <?php
                            echo '<p></p>';
                        }
                    ?>   
                </div>
            </div>
            <div class="kisi">
                <div class="kisiBilgi">
                    <img class="kisiResmi" src="images/kisiler/DuranKaanKaratas.jpg" title="DuranKaanKaratas">
                    <p>Duran Kaan KARATAŞ</p>
                    <p>Elektronik Departman</p>
                    <img class="genislet" src="images/ok1.png">
                </div>
                <div class="gorevBilgi">
                    <img class="daralt" src="images/ok2.png" style="margin-left:51%;width: 15px;height: 15px;">
                    <?php
                        $baglanti=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
                        $kim="DuranKaanKaratas";
                        $gonder=mysqli_query($baglanti,"SELECT * FROM gorevler WHERE username='$kim'");
                        while($satir=mysqli_fetch_assoc($gonder)){ 
                            $gorevId=$satir["gorevId"]; 
                            $gorevAdi=$satir["gorevAdi"];
                            $sonTarih=$satir["sonTarih"];
                            $teslimDurumu=$satir["teslimDurumu"];
                            if($teslimDurumu=="tamam"){
                                $durum="Tamamlandi";
                            }else if($teslimDurumu=="hayir"){
                                $durum="Devam Ediyor";
                            }
                            echo '<div style="border:1px solid #eee9e9;"></div>';
                            ?>
                            <p style="margin-left: 25px;margin-right:15px;"><img src="images/bak1.png" style="width:10px;height:10px;margin-right: 5px;"><span style="font-size:12px;"><?php echo $gorevAdi ?></span></p>
                            <p><img src="images/saat1.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $sonTarih ?></span></p>
                            <p><img src="images/tamam2.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $durum ?></span></p>
                            <p><?php $teslimDurumu ?></p>
                            <?php
                            echo '<p></p>';
                        }
                    ?>   
                </div>
            </div>
            <div class="kisi">
                <div class="kisiBilgi">
                    <img class="kisiResmi" src="images/kisiler/CemreSenaDemir.jpg" title="CemreSenaDemir">
                    <p>Cemre Sena DEMİR</p>
                    <p>Elektronik Departman</p>
                    <img class="genislet" src="images/ok1.png">
                </div>
                <div class="gorevBilgi">
                    <img class="daralt" src="images/ok2.png" style="margin-left:51%;width: 15px;height: 15px;">
                    <?php
                        $baglanti=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
                        $kim="CemreSenaDemir";
                        $gonder=mysqli_query($baglanti,"SELECT * FROM gorevler WHERE username='$kim'");
                        while($satir=mysqli_fetch_assoc($gonder)){ 
                            $gorevId=$satir["gorevId"]; 
                            $gorevAdi=$satir["gorevAdi"];
                            $sonTarih=$satir["sonTarih"];
                            $teslimDurumu=$satir["teslimDurumu"];
                            if($teslimDurumu=="tamam"){
                                $durum="Tamamlandi";
                            }else if($teslimDurumu=="hayir"){
                                $durum="Devam Ediyor";
                            }
                            echo '<div style="border:1px solid #eee9e9;"></div>';
                            ?>
                            <p style="margin-left: 25px;margin-right:15px;"><img src="images/bak1.png" style="width:10px;height:10px;margin-right: 5px;"><span style="font-size:12px;"><?php echo $gorevAdi ?></span></p>
                            <p><img src="images/saat1.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $sonTarih ?></span></p>
                            <p><img src="images/tamam2.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $durum ?></span></p>
                            <p><?php $teslimDurumu ?></p>
                            <?php
                            echo '<p></p>';
                        }
                    ?>   
                </div>
            </div>
        </div>
        <div class="yatayDiv"> 
            <div class="kisi">
                <div class="kisiBilgi">
                    <img class="kisiResmi" src="images/kisiler/BurakErdem.jpg" title="BurakErdem">
                    <p>Burak ERDEM</p>
                    <p>Elektronik Departman</p>
                    <img class="genislet" src="images/ok1.png">
                </div>
                <div class="gorevBilgi">
                    <img class="daralt" src="images/ok2.png" style="margin-left:51%;width: 15px;height: 15px;">
                    <?php
                        $baglanti=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
                        $kim="BurakErdem";
                        $gonder=mysqli_query($baglanti,"SELECT * FROM gorevler WHERE username='$kim'");
                        while($satir=mysqli_fetch_assoc($gonder)){ 
                            $gorevId=$satir["gorevId"]; 
                            $gorevAdi=$satir["gorevAdi"];
                            $sonTarih=$satir["sonTarih"];
                            $teslimDurumu=$satir["teslimDurumu"];
                            if($teslimDurumu=="tamam"){
                                $durum="Tamamlandi";
                            }else if($teslimDurumu=="hayir"){
                                $durum="Devam Ediyor";
                            }
                            echo '<div style="border:1px solid #eee9e9;"></div>';
                            ?>
                            <p style="margin-left: 25px;margin-right:15px;"><img src="images/bak1.png" style="width:10px;height:10px;margin-right: 5px;"><span style="font-size:12px;"><?php echo $gorevAdi ?></span></p>
                            <p><img src="images/saat1.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $sonTarih ?></span></p>
                            <p><img src="images/tamam2.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $durum ?></span></p>
                            <p><?php $teslimDurumu ?></p>
                            <?php
                            echo '<p></p>';
                        }
                    ?>   
                </div>
            </div>
            <div class="kisi">
                <div class="kisiBilgi">
                    <img class="kisiResmi" src="images/kisiler/AliOzgurPolat.jpg" title="AliOzgurPolat">
                    <p>Ali Özgür POLAT</p>
                    <p>Elektronik Departman</p>
                    <img class="genislet" src="images/ok1.png">
                </div>
                <div class="gorevBilgi">
                    <img class="daralt" src="images/ok2.png" style="margin-left:51%;width: 15px;height: 15px;">
                    <?php
                        $baglanti=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
                        $kim="AliOzgurPolat";
                        $gonder=mysqli_query($baglanti,"SELECT * FROM gorevler WHERE username='$kim'");
                        while($satir=mysqli_fetch_assoc($gonder)){ 
                            $gorevId=$satir["gorevId"]; 
                            $gorevAdi=$satir["gorevAdi"];
                            $sonTarih=$satir["sonTarih"];
                            $teslimDurumu=$satir["teslimDurumu"];
                            if($teslimDurumu=="tamam"){
                                $durum="Tamamlandi";
                            }else if($teslimDurumu=="hayir"){
                                $durum="Devam Ediyor";
                            }
                            echo '<div style="border:1px solid #eee9e9;"></div>';
                            ?>
                            <p style="margin-left: 25px;margin-right:15px;"><img src="images/bak1.png" style="width:10px;height:10px;margin-right: 5px;"><span style="font-size:12px;"><?php echo $gorevAdi ?></span></p>
                            <p><img src="images/saat1.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $sonTarih ?></span></p>
                            <p><img src="images/tamam2.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $durum ?></span></p>
                            <p><?php $teslimDurumu ?></p>
                            <?php
                            echo '<p></p>';
                        }
                    ?>   
                </div>
            </div>
            <div class="kisi">
                <div class="kisiBilgi">
                    <img class="kisiResmi" src="images/kisiler/AfsinDemiroz.jpg" title="AfsinDemiroz">
                    <p>Afşin DEMİRÖZ</p>
                    <p>Mekanik Departman</p>
                    <img class="genislet" src="images/ok1.png">
                </div>
                <div class="gorevBilgi">
                    <img class="daralt" src="images/ok2.png" style="margin-left:51%;width: 15px;height: 15px;">
                    <?php
                        $baglanti=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
                        $kim="AfsinDemiroz";
                        $gonder=mysqli_query($baglanti,"SELECT * FROM gorevler WHERE username='$kim'");
                        while($satir=mysqli_fetch_assoc($gonder)){ 
                            $gorevId=$satir["gorevId"]; 
                            $gorevAdi=$satir["gorevAdi"];
                            $sonTarih=$satir["sonTarih"];
                            $teslimDurumu=$satir["teslimDurumu"];
                            if($teslimDurumu=="tamam"){
                                $durum="Tamamlandi";
                            }else if($teslimDurumu=="hayir"){
                                $durum="Devam Ediyor";
                            }
                            echo '<div style="border:1px solid #eee9e9;"></div>';
                            ?>
                            <p style="margin-left: 25px;margin-right:15px;"><img src="images/bak1.png" style="width:10px;height:10px;margin-right: 5px;"><span style="font-size:12px;"><?php echo $gorevAdi ?></span></p>
                            <p><img src="images/saat1.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $sonTarih ?></span></p>
                            <p><img src="images/tamam2.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $durum ?></span></p>
                            <p><?php $teslimDurumu ?></p>
                            <?php
                            echo '<p></p>';
                        }
                    ?>   
                </div>
            </div>
            <div class="kisi">
                <div class="kisiBilgi">
                    <img class="kisiResmi" src="images/kisiler/UfukAlperSimsek.jpg" title="UfukAlperSimsek">
                    <p>Ufuk Alper ŞİMŞEK</p>
                    <p>Mekanik Departman</p>
                    <img class="genislet" src="images/ok1.png">
                </div>
                <div class="gorevBilgi">
                    <img class="daralt" src="images/ok2.png" style="margin-left:51%;width: 15px;height: 15px;">
                    <?php
                        $baglanti=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
                        $kim="UfukAlperSimsek";
                        $gonder=mysqli_query($baglanti,"SELECT * FROM gorevler WHERE username='$kim'");
                        while($satir=mysqli_fetch_assoc($gonder)){ 
                            $gorevId=$satir["gorevId"]; 
                            $gorevAdi=$satir["gorevAdi"];
                            $sonTarih=$satir["sonTarih"];
                            $teslimDurumu=$satir["teslimDurumu"];
                            if($teslimDurumu=="tamam"){
                                $durum="Tamamlandi";
                            }else if($teslimDurumu=="hayir"){
                                $durum="Devam Ediyor";
                            }
                            echo '<div style="border:1px solid #eee9e9;"></div>';
                            ?>
                            <p style="margin-left: 25px;margin-right:15px;"><img src="images/bak1.png" style="width:10px;height:10px;margin-right: 5px;"><span style="font-size:12px;"><?php echo $gorevAdi ?></span></p>
                            <p><img src="images/saat1.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $sonTarih ?></span></p>
                            <p><img src="images/tamam2.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $durum ?></span></p>
                            <p><?php $teslimDurumu ?></p>
                            <?php
                            echo '<p></p>';
                        }
                    ?>   
                </div>
            </div>
        </div>
        <div class="yatayDiv">
            <div class="kisi">
                <div class="kisiBilgi">
                    <img class="kisiResmi" src="images/kisiler/GamzeBaylan.jpg" title="GamzeBaylan">
                    <p>Gamze BAYLAN</p>
                    <p>Mekanik Departman</p>
                    <img class="genislet" src="images/ok1.png">
                </div>
                <div class="gorevBilgi">
                    <img class="daralt" src="images/ok2.png" style="margin-left:51%;width: 15px;height: 15px;">
                    <?php
                        $baglanti=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
                        $kim="GamzeBaylan";
                        $gonder=mysqli_query($baglanti,"SELECT * FROM gorevler WHERE username='$kim'");
                        while($satir=mysqli_fetch_assoc($gonder)){ 
                            $gorevId=$satir["gorevId"]; 
                            $gorevAdi=$satir["gorevAdi"];
                            $sonTarih=$satir["sonTarih"];
                            $teslimDurumu=$satir["teslimDurumu"];
                            if($teslimDurumu=="tamam"){
                                $durum="Tamamlandi";
                            }else if($teslimDurumu=="hayir"){
                                $durum="Devam Ediyor";
                            }
                            echo '<div style="border:1px solid #eee9e9;"></div>';
                            ?>
                            <p style="margin-left: 25px;margin-right:15px;"><img src="images/bak1.png" style="width:10px;height:10px;margin-right: 5px;"><span style="font-size:12px;"><?php echo $gorevAdi ?></span></p>
                            <p><img src="images/saat1.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $sonTarih ?></span></p>
                            <p><img src="images/tamam2.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $durum ?></span></p>
                            <p><?php $teslimDurumu ?></p>
                            <?php
                            echo '<p></p>';
                        }
                    ?>   
                </div>
            </div>
            <div class="kisi">
                <div class="kisiBilgi">
                    <img class="kisiResmi" src="images/kisiler/EnesErgen.jpg" title="EnesErgen">
                    <p>Enes ERGEN</p>
                    <p>Bilgisayar Departmanı</p>
                    <img class="genislet" src="images/ok1.png">
                </div>
                <div class="gorevBilgi">
                    <img class="daralt" src="images/ok2.png" style="margin-left:51%;width: 15px;height: 15px;">
                    <?php
                        $baglanti=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
                        $kim="EnesErgen";
                        $gonder=mysqli_query($baglanti,"SELECT * FROM gorevler WHERE username='$kim'");
                        while($satir=mysqli_fetch_assoc($gonder)){ 
                            $gorevId=$satir["gorevId"]; 
                            $gorevAdi=$satir["gorevAdi"];
                            $sonTarih=$satir["sonTarih"];
                            $teslimDurumu=$satir["teslimDurumu"];
                            if($teslimDurumu=="tamam"){
                                $durum="Tamamlandi";
                            }else if($teslimDurumu=="hayir"){
                                $durum="Devam Ediyor";
                            }
                            echo '<div style="border:1px solid #eee9e9;"></div>';
                            ?>
                            <p style="margin-left: 25px;margin-right:15px;"><img src="images/bak1.png" style="width:10px;height:10px;margin-right: 5px;"><span style="font-size:12px;"><?php echo $gorevAdi ?></span></p>
                            <p><img src="images/saat1.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $sonTarih ?></span></p>
                            <p><img src="images/tamam2.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $durum ?></span></p>
                            <p><?php $teslimDurumu ?></p>
                            <?php
                            echo '<p></p>';
                        }
                    ?>   
                </div>
            </div>
            <div class="kisi">
                <div class="kisiBilgi">
                    <img class="kisiResmi" src="images/kisiler/FurkanGuneri.jpg" title="FurkanGUneri">
                    <p>Furkan GÜNERİ</p>
                    <p>Bilgisayar Departmanı</p>
                    <img class="genislet" src="images/ok1.png">
                </div>
                <div class="gorevBilgi">
                    <img class="daralt" src="images/ok2.png" style="margin-left:51%;width: 15px;height: 15px;">
                    <?php
                        $baglanti=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
                        $kim="FurkanGuneri";
                        $gonder=mysqli_query($baglanti,"SELECT * FROM gorevler WHERE username='$kim'");
                        while($satir=mysqli_fetch_assoc($gonder)){ 
                            $gorevId=$satir["gorevId"]; 
                            $gorevAdi=$satir["gorevAdi"];
                            $sonTarih=$satir["sonTarih"];
                            $teslimDurumu=$satir["teslimDurumu"];
                            if($teslimDurumu=="tamam"){
                                $durum="Tamamlandi";
                            }else if($teslimDurumu=="hayir"){
                                $durum="Devam Ediyor";
                            }
                            echo '<div style="border:1px solid #eee9e9;"></div>';
                            ?>
                            <p style="margin-left: 25px;margin-right:15px;"><img src="images/bak1.png" style="width:10px;height:10px;margin-right: 5px;"><span style="font-size:12px;"><?php echo $gorevAdi ?></span></p>
                            <p><img src="images/saat1.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $sonTarih ?></span></p>
                            <p><img src="images/tamam2.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $durum ?></span></p>
                            <p><?php $teslimDurumu ?></p>
                            <?php
                            echo '<p></p>';
                        }
                    ?>   
                </div>
            </div>
            <div class="kisi">
                <div class="kisiBilgi">
                    <img class="kisiResmi" src="images/kisiler/MizginSatilmis.jpg" title="MizginSatilmis">
                    <p>Mizgin SATILMIŞ</p>
                    <p>Bilgisayar Departmanı</p>
                    <img class="genislet" src="images/ok1.png">
                </div>
                <div class="gorevBilgi">
                    <img class="daralt" src="images/ok2.png" style="margin-left:51%;width: 15px;height: 15px;">
                    <?php
                        $baglanti=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
                        $kim="MizginSatilmis";
                        $gonder=mysqli_query($baglanti,"SELECT * FROM gorevler WHERE username='$kim'");
                        while($satir=mysqli_fetch_assoc($gonder)){ 
                            $gorevId=$satir["gorevId"]; 
                            $gorevAdi=$satir["gorevAdi"];
                            $sonTarih=$satir["sonTarih"];
                            $teslimDurumu=$satir["teslimDurumu"];
                            if($teslimDurumu=="tamam"){
                                $durum="Tamamlandi";
                            }else if($teslimDurumu=="hayir"){
                                $durum="Devam Ediyor";
                            }
                            echo '<div style="border:1px solid #eee9e9;"></div>';
                            ?>
                            <p style="margin-left: 25px;margin-right:15px;"><img src="images/bak1.png" style="width:10px;height:10px;margin-right: 5px;"><span style="font-size:12px;"><?php echo $gorevAdi ?></span></p>
                            <p><img src="images/saat1.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $sonTarih ?></span></p>
                            <p><img src="images/tamam2.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $durum ?></span></p>
                            <p><?php $teslimDurumu ?></p>
                            <?php
                            echo '<p></p>';
                        }
                    ?>   
                </div>
            </div>
        </div>
        <div class="yatayDiv">
            <div class="kisi">
                <div class="kisiBilgi">
                    <img class="kisiResmi" src="images/kisiler/EbrarTokdemir.jpg" title="EbrarTokdemir">
                    <p>Ebrar TOKDEMİR</p>
                    <p>İletişim ve Organizasyon Departmanı</p>
                    <img class="genislet" src="images/ok1.png">
                </div>
                <div class="gorevBilgi">
                    <img class="daralt" src="images/ok2.png" style="margin-left:51%;width: 15px;height: 15px;">
                    <?php
                        $baglanti=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
                        $kim="EbrarTokdemir";
                        $gonder=mysqli_query($baglanti,"SELECT * FROM gorevler WHERE username='$kim'");
                        while($satir=mysqli_fetch_assoc($gonder)){ 
                            $gorevId=$satir["gorevId"]; 
                            $gorevAdi=$satir["gorevAdi"];
                            $sonTarih=$satir["sonTarih"];
                            $teslimDurumu=$satir["teslimDurumu"];
                            if($teslimDurumu=="tamam"){
                                $durum="Tamamlandi";
                            }else if($teslimDurumu=="hayir"){
                                $durum="Devam Ediyor";
                            }
                            echo '<div style="border:1px solid #eee9e9;"></div>';
                            ?>
                            <p style="margin-left: 25px;margin-right:15px;"><img src="images/bak1.png" style="width:10px;height:10px;margin-right: 5px;"><span style="font-size:12px;"><?php echo $gorevAdi ?></span></p>
                            <p><img src="images/saat1.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $sonTarih ?></span></p>
                            <p><img src="images/tamam2.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $durum ?></span></p>
                            <p><?php $teslimDurumu ?></p>
                            <?php
                            echo '<p></p>';
                        }
                    ?>   
                </div>
            </div>
            <div class="kisi">
                <div class="kisiBilgi">
                    <img class="kisiResmi" src="images/kisiler/SiracKahyaoglu.jpg" title="SiracKahyaoglu">
                    <p>Sıraç KAHYAOĞLU</p>
                    <p>İletişim ve Organizasyon Departmanı</p>
                    <img class="genislet" src="images/ok1.png">
                </div>
                <div class="gorevBilgi">
                    <img class="daralt" src="images/ok2.png" style="margin-left:51%;width: 15px;height: 15px;">
                    <?php
                        $baglanti=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
                        $kim="SiracKahyaoglu";
                        $gonder=mysqli_query($baglanti,"SELECT * FROM gorevler WHERE username='$kim'");
                        while($satir=mysqli_fetch_assoc($gonder)){ 
                            $gorevId=$satir["gorevId"]; 
                            $gorevAdi=$satir["gorevAdi"];
                            $sonTarih=$satir["sonTarih"];
                            $teslimDurumu=$satir["teslimDurumu"];
                            if($teslimDurumu=="tamam"){
                                $durum="Tamamlandi";
                            }else if($teslimDurumu=="hayir"){
                                $durum="Devam Ediyor";
                            }
                            echo '<div style="border:1px solid #eee9e9;"></div>';
                            ?>
                            <p style="margin-left: 25px;margin-right:15px;"><img src="images/bak1.png" style="width:10px;height:10px;margin-right: 5px;"><span style="font-size:12px;"><?php echo $gorevAdi ?></span></p>
                            <p><img src="images/saat1.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $sonTarih ?></span></p>
                            <p><img src="images/tamam2.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $durum ?></span></p>
                            <p><?php $teslimDurumu ?></p>
                            <?php
                            echo '<p></p>';
                        }
                    ?>   
                </div>
            </div>
            <div class="kisi">
                <div class="kisiBilgi">
                    <img class="kisiResmi" src="images/kisiler/SedanurKivircik.jpg" title="SedanurKıvırcık">
                    <p>Sedanur KIVIRCIK</p>
                    <p>İletişim ve Organizasyon Departmanı</p>
                    <img class="genislet" src="images/ok1.png">
                </div>
                <div class="gorevBilgi">
                    <img class="daralt" src="images/ok2.png" style="margin-left:51%;width: 15px;height: 15px;">
                    <?php
                        $baglanti=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
                        $kim="SedanurKivircik";
                        $gonder=mysqli_query($baglanti,"SELECT * FROM gorevler WHERE username='$kim'");
                        while($satir=mysqli_fetch_assoc($gonder)){ 
                            $gorevId=$satir["gorevId"]; 
                            $gorevAdi=$satir["gorevAdi"];
                            $sonTarih=$satir["sonTarih"];
                            $teslimDurumu=$satir["teslimDurumu"];
                            if($teslimDurumu=="tamam"){
                                $durum="Tamamlandi";
                            }else if($teslimDurumu=="hayir"){
                                $durum="Devam Ediyor";
                            }
                            echo '<div style="border:1px solid #eee9e9;"></div>';
                            ?>
                            <p style="margin-left: 25px;margin-right:15px;"><img src="images/bak1.png" style="width:10px;height:10px;margin-right: 5px;"><span style="font-size:12px;"><?php echo $gorevAdi ?></span></p>
                            <p><img src="images/saat1.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $sonTarih ?></span></p>
                            <p><img src="images/tamam2.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $durum ?></span></p>
                            <p><?php $teslimDurumu ?></p>
                            <?php
                            echo '<p></p>';
                        }
                    ?>   
                </div>
            </div>
            <div class="kisi">
                <div class="kisiBilgi">
                    <img class="kisiResmi" src="images/kisiler/SevvalZengin.jpg" title="SevvalZengin">
                    <p>Şevval ZENGİN</p>
                    <p>Kimya Departmanı</p>
                    <img class="genislet" src="images/ok1.png">
                </div>
                <div class="gorevBilgi">
                    <img class="daralt" src="images/ok2.png" style="margin-left:51%;width: 15px;height: 15px;">
                    <?php
                        $baglanti=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
                        $kim="SevvalZengin";
                        $gonder=mysqli_query($baglanti,"SELECT * FROM gorevler WHERE username='$kim'");
                        while($satir=mysqli_fetch_assoc($gonder)){ 
                            $gorevId=$satir["gorevId"]; 
                            $gorevAdi=$satir["gorevAdi"];
                            $sonTarih=$satir["sonTarih"];
                            $teslimDurumu=$satir["teslimDurumu"];
                            if($teslimDurumu=="tamam"){
                                $durum="Tamamlandi";
                            }else if($teslimDurumu=="hayir"){
                                $durum="Devam Ediyor";
                            }
                            echo '<div style="border:1px solid #eee9e9;"></div>';
                            ?>
                            <p style="margin-left: 25px;margin-right:15px;"><img src="images/bak1.png" style="width:10px;height:10px;margin-right: 5px;"><span style="font-size:12px;"><?php echo $gorevAdi ?></span></p>
                            <p><img src="images/saat1.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $sonTarih ?></span></p>
                            <p><img src="images/tamam2.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $durum ?></span></p>
                            <p><?php $teslimDurumu ?></p>
                            <?php
                            echo '<p></p>';
                        }
                    ?>   
                </div>
            </div>
        </div>
        <div class="yatayDiv">
            <div class="kisi">
                <div class="kisiBilgi">
                    <img class="kisiResmi" src="images/kisiler/YusufIkbalAldenir.jpg" title="YusufIkbalAldenir">
                    <p>Yusuf İkbal ALDENİR</p>
                    <p>Kimya Departmanı</p>
                    <img class="genislet" src="images/ok1.png">
                </div>
                <div class="gorevBilgi">
                    <img class="daralt" src="images/ok2.png" style="margin-left:51%;width: 15px;height: 15px;">
                    <?php
                        $baglanti=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
                        $kim="YusufIkbalAldenir";
                        $gonder=mysqli_query($baglanti,"SELECT * FROM gorevler WHERE username='$kim'");
                        while($satir=mysqli_fetch_assoc($gonder)){ 
                            $gorevId=$satir["gorevId"]; 
                            $gorevAdi=$satir["gorevAdi"];
                            $sonTarih=$satir["sonTarih"];
                            $teslimDurumu=$satir["teslimDurumu"];
                            if($teslimDurumu=="tamam"){
                                $durum="Tamamlandi";
                            }else if($teslimDurumu=="hayir"){
                                $durum="Devam Ediyor";
                            }
                            echo '<div style="border:1px solid #eee9e9;"></div>';
                            ?>
                            <p style="margin-left: 25px;margin-right:15px;"><img src="images/bak1.png" style="width:10px;height:10px;margin-right: 5px;"><span style="font-size:12px;"><?php echo $gorevAdi ?></span></p>
                            <p><img src="images/saat1.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $sonTarih ?></span></p>
                            <p><img src="images/tamam2.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $durum ?></span></p>
                            <p><?php $teslimDurumu ?></p>
                            <?php
                            echo '<p></p>';
                        }
                    ?>   
                </div>
            </div>
            <div class="kisi">
                <div class="kisiBilgi">
                    <img class="kisiResmi" src="images/kisiler/AleynaGulsen.jpg" title="AleynaGulsen">
                    <p>Aleyna GÜLŞEN</p>
                    <p>Kimya Departmanı</p>
                    <img class="genislet" src="images/ok1.png">
                </div>
                <div class="gorevBilgi">
                    <img class="daralt" src="images/ok2.png" style="margin-left:51%;width: 15px;height: 15px;">
                    <?php
                        $baglanti=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
                        $kim="AleynaGulsen";
                        $gonder=mysqli_query($baglanti,"SELECT * FROM gorevler WHERE username='$kim'");
                        while($satir=mysqli_fetch_assoc($gonder)){ 
                            $gorevId=$satir["gorevId"]; 
                            $gorevAdi=$satir["gorevAdi"];
                            $sonTarih=$satir["sonTarih"];
                            $teslimDurumu=$satir["teslimDurumu"];
                            if($teslimDurumu=="tamam"){
                                $durum="Tamamlandi";
                            }else if($teslimDurumu=="hayir"){
                                $durum="Devam Ediyor";
                            }
                            echo '<div style="border:1px solid #eee9e9;"></div>';
                            ?>
                            <p style="margin-left: 25px;margin-right:15px;"><img src="images/bak1.png" style="width:10px;height:10px;margin-right: 5px;"><span style="font-size:12px;"><?php echo $gorevAdi ?></span></p>
                            <p><img src="images/saat1.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $sonTarih ?></span></p>
                            <p><img src="images/tamam2.png" style="width:10px;height:10px;margin-right: 10px;margin-left: 25px;"><span style="font-size:12px;"><?php echo $durum ?></span></p>
                            <p><?php $teslimDurumu ?></p>
                            <?php
                            echo '<p></p>';
                        }
                    ?>   
                </div>
            </div>
        </div>
    </main>
</body>
<script>
    /*1.öğrenci*/
    var kisi1Genislet=document.getElementsByClassName("genislet")[0];
    var kisi1Daralt=document.getElementsByClassName("daralt")[0];
    var kisi1gorevBilgi=document.getElementsByClassName("gorevBilgi")[0];
    var kisi1yatayDiv=document.getElementsByClassName("yatayDiv")[0];
    var kisi1=document.getElementsByClassName("kisi")[0];
    kisi1Genislet.onclick=function(){
        kisi1gorevBilgi.style.display="block";
        kisi1Genislet.style.display="none";
        kisi1Daralt.style.display="block";
        kisi1yatayDiv.style.height="400px";
    }
    kisi1Daralt.onclick=function(){
        kisi1gorevBilgi.style.display="none";
        kisi1Daralt.style.display="none";
        kisi1Genislet.style.display="block";
        kisi1yatayDiv.style.height="220px";
    }
    /*2.öğrenci*/
    var kisi2Genislet=document.getElementsByClassName("genislet")[1];
    var kisi2Daralt=document.getElementsByClassName("daralt")[1];
    var kisi2gorevBilgi=document.getElementsByClassName("gorevBilgi")[1];
    var kisi2yatayDiv=document.getElementsByClassName("yatayDiv")[0];
    var kisi2=document.getElementsByClassName("kisi")[1];
    kisi2Genislet.onclick=function(){
        kisi2gorevBilgi.style.display="block";
        kisi2Genislet.style.display="none";
        kisi2Daralt.style.display="block";
        kisi2yatayDiv.style.height="400px";
    }
    kisi2Daralt.onclick=function(){
        kisi2gorevBilgi.style.display="none";
        kisi2Daralt.style.display="none";
        kisi2Genislet.style.display="block";
        kisi2yatayDiv.style.height="220px";
    }
    /*3.öğrenci*/
    var kisi3Genislet=document.getElementsByClassName("genislet")[2];
    var kisi3Daralt=document.getElementsByClassName("daralt")[2];
    var kisi3gorevBilgi=document.getElementsByClassName("gorevBilgi")[2];
    var kisi3yatayDiv=document.getElementsByClassName("yatayDiv")[0];
    var kisi3=document.getElementsByClassName("kisi")[2];
    kisi3Genislet.onclick=function(){
        kisi3gorevBilgi.style.display="block";
        kisi3Genislet.style.display="none";
        kisi3Daralt.style.display="block";
        kisi3yatayDiv.style.height="400px";
    }
    kisi3Daralt.onclick=function(){
        kisi3gorevBilgi.style.display="none";
        kisi3Daralt.style.display="none";
        kisi3Genislet.style.display="block";
        kisi3yatayDiv.style.height="220px";
    }
    /*4.öğrenci*/
    var kisi4Genislet=document.getElementsByClassName("genislet")[3];
    var kisi4Daralt=document.getElementsByClassName("daralt")[3];
    var kisi4gorevBilgi=document.getElementsByClassName("gorevBilgi")[3];
    var kisi4yatayDiv=document.getElementsByClassName("yatayDiv")[0];
    var kisi4=document.getElementsByClassName("kisi")[3];
    kisi4Genislet.onclick=function(){
        kisi4gorevBilgi.style.display="block";
        kisi4Genislet.style.display="none";
        kisi4Daralt.style.display="block";
        kisi4yatayDiv.style.height="400px";
    }
    kisi4Daralt.onclick=function(){
        kisi4gorevBilgi.style.display="none";
        kisi4Daralt.style.display="none";
        kisi4Genislet.style.display="block";
        kisi4yatayDiv.style.height="220px";
    }
    /*5.öğrenci*/
    var kisi5Genislet=document.getElementsByClassName("genislet")[4];
    var kisi5Daralt=document.getElementsByClassName("daralt")[4];
    var kisi5gorevBilgi=document.getElementsByClassName("gorevBilgi")[4];
    var kisi5yatayDiv=document.getElementsByClassName("yatayDiv")[1];
    var kisi5=document.getElementsByClassName("kisi")[4];
    kisi5Genislet.onclick=function(){
        kisi5gorevBilgi.style.display="block";
        kisi5Genislet.style.display="none";
        kisi5Daralt.style.display="block";
        kisi5yatayDiv.style.height="400px";
    }
    kisi5Daralt.onclick=function(){
        kisi5gorevBilgi.style.display="none";
        kisi5Daralt.style.display="none";
        kisi5Genislet.style.display="block";
        kisi5yatayDiv.style.height="220px";
    }
    /*6.öğrenci*/
    var kisi6Genislet=document.getElementsByClassName("genislet")[5];
    var kisi6Daralt=document.getElementsByClassName("daralt")[5];
    var kisi6gorevBilgi=document.getElementsByClassName("gorevBilgi")[5];
    var kisi6yatayDiv=document.getElementsByClassName("yatayDiv")[1];
    var kisi6=document.getElementsByClassName("kisi")[5];
    kisi6Genislet.onclick=function(){
        kisi6gorevBilgi.style.display="block";
        kisi6Genislet.style.display="none";
        kisi6Daralt.style.display="block";
        kisi6yatayDiv.style.height="400px";
    }
    kisi6Daralt.onclick=function(){
        kisi6gorevBilgi.style.display="none";
        kisi6Daralt.style.display="none";
        kisi6Genislet.style.display="block";
        kisi6atayDiv.style.height="220px";
    }
    /*7.öğrenci*/
    var kisi7Genislet=document.getElementsByClassName("genislet")[6];
    var kisi7Daralt=document.getElementsByClassName("daralt")[6];
    var kisi7gorevBilgi=document.getElementsByClassName("gorevBilgi")[6];
    var kisi7yatayDiv=document.getElementsByClassName("yatayDiv")[1];
    var kisi7=document.getElementsByClassName("kisi")[6];
    kisi7Genislet.onclick=function(){
        kisi7gorevBilgi.style.display="block";
        kisi7Genislet.style.display="none";
        kisi7Daralt.style.display="block";
        kisi7yatayDiv.style.height="400px";
    }
    kisi7Daralt.onclick=function(){
        kisi7gorevBilgi.style.display="none";
        kisi7Daralt.style.display="none";
        kisi7Genislet.style.display="block";
        kisi7atayDiv.style.height="220px";
    }
    /*8.öğrenci*/
    var kisi8Genislet=document.getElementsByClassName("genislet")[7];
    var kisi8Daralt=document.getElementsByClassName("daralt")[7];
    var kisi8gorevBilgi=document.getElementsByClassName("gorevBilgi")[7];
    var kisi8yatayDiv=document.getElementsByClassName("yatayDiv")[1];
    var kisi8=document.getElementsByClassName("kisi")[7];
    kisi8Genislet.onclick=function(){
        kisi8gorevBilgi.style.display="block";
        kisi8Genislet.style.display="none";
        kisi8Daralt.style.display="block";
        kisi8yatayDiv.style.height="400px";
    }
    kisi8Daralt.onclick=function(){
        kisi8gorevBilgi.style.display="none";
        kisi8Daralt.style.display="none";
        kisi8Genislet.style.display="block";
        kisi8yatayDiv.style.height="220px";
    }
    /*9.öğrenci*/
    var kisi9Genislet=document.getElementsByClassName("genislet")[8];
    var kisi9Daralt=document.getElementsByClassName("daralt")[8];
    var kisi9gorevBilgi=document.getElementsByClassName("gorevBilgi")[8];
    var kisi9yatayDiv=document.getElementsByClassName("yatayDiv")[2];
    var kisi9=document.getElementsByClassName("kisi")[8];
    kisi9Genislet.onclick=function(){
        kisi9gorevBilgi.style.display="block";
        kisi9Genislet.style.display="none";
        kisi9Daralt.style.display="block";
        kisi9yatayDiv.style.height="400px";
    }
    kisi9Daralt.onclick=function(){
        kisi9gorevBilgi.style.display="none";
        kisi9Daralt.style.display="none";
        kisi9Genislet.style.display="block";
        kisi9yatayDiv.style.height="220px";
    }
    /*10.öğrenci*/
    var kisi10Genislet=document.getElementsByClassName("genislet")[9];
    var kisi10Daralt=document.getElementsByClassName("daralt")[9];
    var kisi10gorevBilgi=document.getElementsByClassName("gorevBilgi")[9];
    var kisi10yatayDiv=document.getElementsByClassName("yatayDiv")[2];
    var kisi10=document.getElementsByClassName("kisi")[9];
    kisi10Genislet.onclick=function(){
        kisi10gorevBilgi.style.display="block";
        kisi10Genislet.style.display="none";
        kisi10Daralt.style.display="block";
        kisi10yatayDiv.style.height="400px";
    }
    kisi10Daralt.onclick=function(){
        kisi10gorevBilgi.style.display="none";
        kisi10Daralt.style.display="none";
        kisi10Genislet.style.display="block";
        kisi10yatayDiv.style.height="220px";
    }
    /*11.öğrenci*/
    var kisi11Genislet=document.getElementsByClassName("genislet")[10];
    var kisi11Daralt=document.getElementsByClassName("daralt")[10];
    var kisi11gorevBilgi=document.getElementsByClassName("gorevBilgi")[10];
    var kisi11yatayDiv=document.getElementsByClassName("yatayDiv")[2];
    var kisi11=document.getElementsByClassName("kisi")[10];
    kisi11Genislet.onclick=function(){
        kisi11gorevBilgi.style.display="block";
        kisi11Genislet.style.display="none";
        kisi11Daralt.style.display="block";
        kisi11yatayDiv.style.height="400px";
    }
    kisi11Daralt.onclick=function(){
        kisi11gorevBilgi.style.display="none";
        kisi11Daralt.style.display="none";
        kisi11Genislet.style.display="block";
        kisi11yatayDiv.style.height="220px";
    }
    /*12.öğrenci*/
    var kisi12Genislet=document.getElementsByClassName("genislet")[11];
    var kisi12Daralt=document.getElementsByClassName("daralt")[11];
    var kisi12gorevBilgi=document.getElementsByClassName("gorevBilgi")[11];
    var kisi12yatayDiv=document.getElementsByClassName("yatayDiv")[2];
    var kisi12=document.getElementsByClassName("kisi")[11];
    kisi12Genislet.onclick=function(){
        kisi12gorevBilgi.style.display="block";
        kisi12Genislet.style.display="none";
        kisi12Daralt.style.display="block";
        kisi12yatayDiv.style.height="400px";
    }
    kisi12Daralt.onclick=function(){
        kisi12gorevBilgi.style.display="none";
        kisi12Daralt.style.display="none";
        kisi12Genislet.style.display="block";
        kisi12yatayDiv.style.height="220px";
    }
    /*13.öğrenci*/
    var kisi13Genislet=document.getElementsByClassName("genislet")[12];
    var kisi13Daralt=document.getElementsByClassName("daralt")[12];
    var kisi13gorevBilgi=document.getElementsByClassName("gorevBilgi")[12];
    var kisi13yatayDiv=document.getElementsByClassName("yatayDiv")[3];
    var kisi13=document.getElementsByClassName("kisi")[12];
    kisi13Genislet.onclick=function(){
        kisi13gorevBilgi.style.display="block";
        kisi13Genislet.style.display="none";
        kisi13Daralt.style.display="block";
        kisi13yatayDiv.style.height="400px";
    }
    kisi13Daralt.onclick=function(){
        kisi13gorevBilgi.style.display="none";
        kisi13Daralt.style.display="none";
        kisi13Genislet.style.display="block";
        kisi13yatayDiv.style.height="220px";
    }
    /*14.öğrenci*/
    var kisi14Genislet=document.getElementsByClassName("genislet")[13];
    var kisi14Daralt=document.getElementsByClassName("daralt")[13];
    var kisi14gorevBilgi=document.getElementsByClassName("gorevBilgi")[13];
    var kisi14yatayDiv=document.getElementsByClassName("yatayDiv")[3];
    var kisi14=document.getElementsByClassName("kisi")[13];
    kisi14Genislet.onclick=function(){
        kisi14gorevBilgi.style.display="block";
        kisi14Genislet.style.display="none";
        kisi14Daralt.style.display="block";
        kisi14yatayDiv.style.height="400px";
    }
    kisi14Daralt.onclick=function(){
        kisi14gorevBilgi.style.display="none";
        kisi14Daralt.style.display="none";
        kisi14Genislet.style.display="block";
        kisi14yatayDiv.style.height="220px";
    }
    /*15.öğrenci*/
    var kisi15Genislet=document.getElementsByClassName("genislet")[14];
    var kisi15Daralt=document.getElementsByClassName("daralt")[14];
    var kisi15gorevBilgi=document.getElementsByClassName("gorevBilgi")[14];
    var kisi15yatayDiv=document.getElementsByClassName("yatayDiv")[3];
    var kisi15=document.getElementsByClassName("kisi")[14];
    kisi15Genislet.onclick=function(){
        kisi15gorevBilgi.style.display="block";
        kisi15Genislet.style.display="none";
        kisi15Daralt.style.display="block";
        kisi15yatayDiv.style.height="400px";
    }
    kisi15Daralt.onclick=function(){
        kisi15gorevBilgi.style.display="none";
        kisi15Daralt.style.display="none";
        kisi15Genislet.style.display="block";
        kisi15yatayDiv.style.height="220px";
    }
    /*16.öğrenci*/
    var kisi16Genislet=document.getElementsByClassName("genislet")[15];
    var kisi16Daralt=document.getElementsByClassName("daralt")[15];
    var kisi16gorevBilgi=document.getElementsByClassName("gorevBilgi")[15];
    var kisi16yatayDiv=document.getElementsByClassName("yatayDiv")[3];
    var kisi16=document.getElementsByClassName("kisi")[15];
    kisi16Genislet.onclick=function(){
        kisi16gorevBilgi.style.display="block";
        kisi16Genislet.style.display="none";
        kisi16Daralt.style.display="block";
        kisi16yatayDiv.style.height="400px";
    }
    kisi16Daralt.onclick=function(){
        kisi16gorevBilgi.style.display="none";
        kisi16Daralt.style.display="none";
        kisi16Genislet.style.display="block";
        kisi16yatayDiv.style.height="220px";
    }
    /*17.öğrenci*/
    var kisi17Genislet=document.getElementsByClassName("genislet")[16];
    var kisi17Daralt=document.getElementsByClassName("daralt")[16];
    var kisi17gorevBilgi=document.getElementsByClassName("gorevBilgi")[16];
    var kisi17yatayDiv=document.getElementsByClassName("yatayDiv")[4];
    var kisi17=document.getElementsByClassName("kisi")[16];
    kisi17Genislet.onclick=function(){
        kisi17gorevBilgi.style.display="block";
        kisi17Genislet.style.display="none";
        kisi17Daralt.style.display="block";
        kisi17yatayDiv.style.height="400px";
    }
    kisi17Daralt.onclick=function(){
        kisi17gorevBilgi.style.display="none";
        kisi17Daralt.style.display="none";
        kisi17Genislet.style.display="block";
        kisi17yatayDiv.style.height="220px";
    }
    /*18.öğrenci*/
    var kisi18Genislet=document.getElementsByClassName("genislet")[17];
    var kisi18Daralt=document.getElementsByClassName("daralt")[17];
    var kisi18gorevBilgi=document.getElementsByClassName("gorevBilgi")[17];
    var kisi18yatayDiv=document.getElementsByClassName("yatayDiv")[4];
    var kisi18=document.getElementsByClassName("kisi")[17];
    kisi18Genislet.onclick=function(){
        kisi18gorevBilgi.style.display="block";
        kisi18Genislet.style.display="none";
        kisi18Daralt.style.display="block";
        kisi18yatayDiv.style.height="400px";
    }
    kisi18Daralt.onclick=function(){
        kisi18gorevBilgi.style.display="none";
        kisi18Daralt.style.display="none";
        kisi18Genislet.style.display="block";
        kisi18yatayDiv.style.height="220px";
    }
    /*19.öğrenci*/
    var kisi19Genislet=document.getElementsByClassName("genislet")[18];
    var kisi19Daralt=document.getElementsByClassName("daralt")[18];
    var kisi19gorevBilgi=document.getElementsByClassName("gorevBilgi")[18];
    var kisi19yatayDiv=document.getElementsByClassName("yatayDiv")[4];
    var kisi19=document.getElementsByClassName("kisi")[18];
    kisi19Genislet.onclick=function(){
        kisi19gorevBilgi.style.display="block";
        kisi19Genislet.style.display="none";
        kisi19Daralt.style.display="block";
        kisi19yatayDiv.style.height="400px";
    }
    kisi19Daralt.onclick=function(){
        kisi19gorevBilgi.style.display="none";
        kisi19Daralt.style.display="none";
        kisi19Genislet.style.display="block";
        kisi19yatayDiv.style.height="220px";
    }
    /*20.öğrenci*/
    var kisi20Genislet=document.getElementsByClassName("genislet")[19];
    var kisi20Daralt=document.getElementsByClassName("daralt")[19];
    var kisi20gorevBilgi=document.getElementsByClassName("gorevBilgi")[19];
    var kisi20yatayDiv=document.getElementsByClassName("yatayDiv")[4];
    var kisi20=document.getElementsByClassName("kisi")[19];
    kisi20Genislet.onclick=function(){
        kisi20gorevBilgi.style.display="block";
        kisi20Genislet.style.display="none";
        kisi20Daralt.style.display="block";
        kisi20yatayDiv.style.height="400px";
    }
    kisi20Daralt.onclick=function(){
        kisi20gorevBilgi.style.display="none";
        kisi20Daralt.style.display="none";
        kisi20Genislet.style.display="block";
        kisi20yatayDiv.style.height="220px";
    }
    /*21.öğrenci*/
    var kisi21Genislet=document.getElementsByClassName("genislet")[20];
    var kisi21Daralt=document.getElementsByClassName("daralt")[20];
    var kisi21gorevBilgi=document.getElementsByClassName("gorevBilgi")[20];
    var kisi21yatayDiv=document.getElementsByClassName("yatayDiv")[5];
    var kisi21=document.getElementsByClassName("kisi")[20];
    kisi21Genislet.onclick=function(){
        kisi21gorevBilgi.style.display="block";
        kisi21Genislet.style.display="none";
        kisi21Daralt.style.display="block";
        kisi21yatayDiv.style.height="400px";
    }
    kisi21Daralt.onclick=function(){
        kisi21gorevBilgi.style.display="none";
        kisi21Daralt.style.display="none";
        kisi21Genislet.style.display="block";
        kisi21yatayDiv.style.height="220px";
    }
    /*22.öğrenci*/
    var kisi22Genislet=document.getElementsByClassName("genislet")[21];
    var kisi22Daralt=document.getElementsByClassName("daralt")[21];
    var kisi22gorevBilgi=document.getElementsByClassName("gorevBilgi")[21];
    var kisi22yatayDiv=document.getElementsByClassName("yatayDiv")[5];
    var kisi22=document.getElementsByClassName("kisi")[21];
    kisi22Genislet.onclick=function(){
        kisi22gorevBilgi.style.display="block";
        kisi22Genislet.style.display="none";
        kisi22Daralt.style.display="block";
        kisi22yatayDiv.style.height="400px";
    }
    kisi22Daralt.onclick=function(){
        kisi22gorevBilgi.style.display="none";
        kisi22Daralt.style.display="none";
        kisi22Genislet.style.display="block";
        kisi22yatayDiv.style.height="220px";
    }
    /*23.öğrenci*/
    var kisi23Genislet=document.getElementsByClassName("genislet")[22];
    var kisi23Daralt=document.getElementsByClassName("daralt")[22];
    var kisi23gorevBilgi=document.getElementsByClassName("gorevBilgi")[22];
    var kisi23yatayDiv=document.getElementsByClassName("yatayDiv")[5];
    var kisi23=document.getElementsByClassName("kisi")[22];
    kisi23Genislet.onclick=function(){
        kisi23gorevBilgi.style.display="block";
        kisi23Genislet.style.display="none";
        kisi23Daralt.style.display="block";
        kisi23yatayDiv.style.height="400px";
    }
    kisi23Daralt.onclick=function(){
        kisi23gorevBilgi.style.display="none";
        kisi23Daralt.style.display="none";
        kisi23Genislet.style.display="block";
        kisi23yatayDiv.style.height="220px";
    }
    /*24.öğrenci*/
    var kisi24Genislet=document.getElementsByClassName("genislet")[23];
    var kisi24Daralt=document.getElementsByClassName("daralt")[23];
    var kisi24gorevBilgi=document.getElementsByClassName("gorevBilgi")[23];
    var kisi24yatayDiv=document.getElementsByClassName("yatayDiv")[5];
    var kisi24=document.getElementsByClassName("kisi")[23];
    kisi24Genislet.onclick=function(){
        kisi24gorevBilgi.style.display="block";
        kisi24Genislet.style.display="none";
        kisi24Daralt.style.display="block";
        kisi24yatayDiv.style.height="400px";
    }
    kisi24Daralt.onclick=function(){
        kisi24gorevBilgi.style.display="none";
        kisi24Daralt.style.display="none";
        kisi24Genislet.style.display="block";
        kisi24yatayDiv.style.height="220px";
    }
    /*25.öğrenci*/
    var kisi25Genislet=document.getElementsByClassName("genislet")[24];
    var kisi25Daralt=document.getElementsByClassName("daralt")[24];
    var kisi25gorevBilgi=document.getElementsByClassName("gorevBilgi")[24];
    var kisi25yatayDiv=document.getElementsByClassName("yatayDiv")[6];
    var kisi25=document.getElementsByClassName("kisi")[24];
    kisi25Genislet.onclick=function(){
        kisi25gorevBilgi.style.display="block";
        kisi25Genislet.style.display="none";
        kisi25Daralt.style.display="block";
        kisi25yatayDiv.style.height="400px";
    }
    kisi25Daralt.onclick=function(){
        kisi25gorevBilgi.style.display="none";
        kisi25Daralt.style.display="none";
        kisi25Genislet.style.display="block";
        kisi25yatayDiv.style.height="220px";
    }
    /*26.öğrenci*/
    var kisi26Genislet=document.getElementsByClassName("genislet")[25];
    var kisi26Daralt=document.getElementsByClassName("daralt")[25];
    var kisi26gorevBilgi=document.getElementsByClassName("gorevBilgi")[25];
    var kisi26yatayDiv=document.getElementsByClassName("yatayDiv")[6];
    var kisi26=document.getElementsByClassName("kisi")[25];
    kisi26Genislet.onclick=function(){
        kisi26gorevBilgi.style.display="block";
        kisi26Genislet.style.display="none";
        kisi26Daralt.style.display="block";
        kisi26yatayDiv.style.height="400px";
    }
    kisi26Daralt.onclick=function(){
        kisi26gorevBilgi.style.display="none";
        kisi26Daralt.style.display="none";
        kisi26Genislet.style.display="block";
        kisi26yatayDiv.style.height="220px";
    }
</script>
</html>