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
        /***************************************************************************************************************************************/
        echo '<p style="text-align:center; border:1px solid #888888;margin-left:20%;margin-right:20%;color: #363636;">Koray Karanfil</p>';
        $fileName1="yuklenenDosyalar/KorayKaranfil/*";
        $dosyalar1 = glob($fileName1);
        foreach ($dosyalar1 as $dosya1) {
            //echo '<p style="text-align:center;"><a href="dosyaAc.php?dosyaIsmi='.$dosya.'">'.$dosya.'</a></p>';
            echo '<p style="text-align:center;">'.$dosya1.'</p>';
            echo '<p style="text-align:center;"><a href="dosyaIndir.php?dosyaIsmi='.$dosya1.'"><img src="images/download.png" title="download" style="width:25px;height:25px;"></a>
            <a href="dosyaSil.php?dosyaIsmi='.$dosya1.'&nerdenGeldi=2" onclick="return uyari3();"><img src="images/delete.png" title="delete" style="width:22px;height:22px;"></a></p>';
        }
        /***************************************************************************************************************************************/
        echo '<p style="text-align:center; border:1px solid #888888;margin-left:20%;margin-right:20%;color: #363636;">Yunus Geçim</p>';
        $fileName2="yuklenenDosyalar/YunusGecim/*";
        $dosyalar2 = glob($fileName2);
        foreach ($dosyalar2 as $dosya2) {
            //echo '<p style="text-align:center;"><a href="dosyaAc.php?dosyaIsmi='.$dosya.'">'.$dosya.'</a></p>';
            echo '<p style="text-align:center;">'.$dosya2.'</p>';
            echo '<p style="text-align:center;"><a href="dosyaIndir.php?dosyaIsmi='.$dosya2.'"><img src="images/download.png" title="download" style="width:25px;height:25px;"></a>
            <a href="dosyaSil.php?dosyaIsmi='.$dosya2.'&nerdenGeldi=2" onclick="return uyari3();"><img src="images/delete.png" title="delete" style="width:22px;height:22px;"></a></p>';
        }
        /***************************************************************************************************************************************/
        echo '<p style="text-align:center; border:1px solid #888888;margin-left:20%;margin-right:20%;color: #363636;">Ömer Yılmaz</p>';
        $fileName3="yuklenenDosyalar/OmerYilmaz/*";
        $dosyalar3 = glob($fileName3);
        foreach ($dosyalar3 as $dosya3) {
            //echo '<p style="text-align:center;"><a href="dosyaAc.php?dosyaIsmi='.$dosya.'">'.$dosya.'</a></p>';
            echo '<p style="text-align:center;">'.$dosya3.'</p>';
            echo '<p style="text-align:center;"><a href="dosyaIndir.php?dosyaIsmi='.$dosya3.'"><img src="images/download.png" title="download" style="width:25px;height:25px;"></a>
            <a href="dosyaSil.php?dosyaIsmi='.$dosya3.'&nerdenGeldi=2" onclick="return uyari3();"><img src="images/delete.png" title="delete" style="width:22px;height:22px;"></a></p>';
        }
        /***************************************************************************************************************************************/
        echo '<p style="text-align:center; border:1px solid #888888;margin-left:20%;margin-right:20%;color: #363636;">Merve Coban</p>';
        $fileName4="yuklenenDosyalar/MerveCoban/*";
        $dosyalar4 = glob($fileName4);
        foreach ($dosyalar4 as $dosya4) {
            //echo '<p style="text-align:center;"><a href="dosyaAc.php?dosyaIsmi='.$dosya.'">'.$dosya.'</a></p>';
            echo '<p style="text-align:center;">'.$dosya4.'</p>';
            echo '<p style="text-align:center;"><a href="dosyaIndir.php?dosyaIsmi='.$dosya4.'"><img src="images/download.png" title="download" style="width:25px;height:25px;"></a>
            <a href="dosyaSil.php?dosyaIsmi='.$dosya4.'&nerdenGeldi=2" onclick="return uyari3();"><img src="images/delete.png" title="delete" style="width:22px;height:22px;"></a></p>';
        }
        /***************************************************************************************************************************************/
        echo '<p style="text-align:center; border:1px solid #888888;margin-left:20%;margin-right:20%;color: #363636;">Hangeldi Ymakov</p>';
        $fileName5="yuklenenDosyalar/HangeldiYmakov/*";
        $dosyalar5 = glob($fileName5);
        foreach ($dosyalar5 as $dosya5) {
            //echo '<p style="text-align:center;"><a href="dosyaAc.php?dosyaIsmi='.$dosya.'">'.$dosya.'</a></p>';
            echo '<p style="text-align:center;">'.$dosya5.'</p>';
            echo '<p style="text-align:center;"><a href="dosyaIndir.php?dosyaIsmi='.$dosya5.'"><img src="images/download.png" title="download" style="width:25px;height:25px;"></a>
            <a href="dosyaSil.php?dosyaIsmi='.$dosya5.'&nerdenGeldi=2" onclick="return uyari3();"><img src="images/delete.png" title="delete" style="width:22px;height:22px;"></a></p>';
        }
        /***************************************************************************************************************************************/
        echo '<p style="text-align:center; border:1px solid #888888;margin-left:20%;margin-right:20%;color: #363636;">Aleyna Göker</p>';
        $fileName6="yuklenenDosyalar/AleynaGoker/*";
        $dosyalar6 = glob($fileName6);
        foreach ($dosyalar6 as $dosya6) {
            //echo '<p style="text-align:center;"><a href="dosyaAc.php?dosyaIsmi='.$dosya.'">'.$dosya.'</a></p>';
            echo '<p style="text-align:center;">'.$dosya6.'</p>';
            echo '<p style="text-align:center;"><a href="dosyaIndir.php?dosyaIsmi='.$dosya6.'"><img src="images/download.png" title="download" style="width:25px;height:25px;"></a>
            <a href="dosyaSil.php?dosyaIsmi='.$dosya6.'&nerdenGeldi=2" onclick="return uyari3();"><img src="images/delete.png" title="delete" style="width:22px;height:22px;"></a></p>';
        }
        /***************************************************************************************************************************************/
        echo '<p style="text-align:center; border:1px solid #888888;margin-left:20%;margin-right:20%;color: #363636;">Buse Şimşek</p>';
        $fileName7="yuklenenDosyalar/BuseSimsek/*";
        $dosyalar7 = glob($fileName7);
        foreach ($dosyalar7 as $dosya7) {
            //echo '<p style="text-align:center;"><a href="dosyaAc.php?dosyaIsmi='.$dosya.'">'.$dosya.'</a></p>';
            echo '<p style="text-align:center;">'.$dosya7.'</p>';
            echo '<p style="text-align:center;"><a href="dosyaIndir.php?dosyaIsmi='.$dosya7.'"><img src="images/download.png" title="download" style="width:25px;height:25px;"></a>
            <a href="dosyaSil.php?dosyaIsmi='.$dosya7.'&nerdenGeldi=2" onclick="return uyari3();"><img src="images/delete.png" title="delete" style="width:22px;height:22px;"></a></p>';
        }
        /***************************************************************************************************************************************/
        echo '<p style="text-align:center; border:1px solid #888888;margin-left:20%;margin-right:20%;color: #363636;">Ahmet Celep</p>';
        $fileName8="yuklenenDosyalar/AhmetCelep/*";
        $dosyalar8 = glob($fileName8);
        foreach ($dosyalar8 as $dosya8) {
            //echo '<p style="text-align:center;"><a href="dosyaAc.php?dosyaIsmi='.$dosya.'">'.$dosya.'</a></p>';
            echo '<p style="text-align:center;">'.$dosya8.'</p>';
            echo '<p style="text-align:center;"><a href="dosyaIndir.php?dosyaIsmi='.$dosya8.'"><img src="images/download.png" title="download" style="width:25px;height:25px;"></a>
            <a href="dosyaSil.php?dosyaIsmi='.$dosya8.'&nerdenGeldi=2" onclick="return uyari3();"><img src="images/delete.png" title="delete" style="width:22px;height:22px;"></a></p>';
        }
        /***************************************************************************************************************************************/
        echo '<p style="text-align:center; border:1px solid #888888;margin-left:20%;margin-right:20%;color: #363636;">Ahmet Keser</p>';
        $fileName9="yuklenenDosyalar/AhmetKeser/*";
        $dosyalar9 = glob($fileName9);
        foreach ($dosyalar9 as $dosya9) {
            //echo '<p style="text-align:center;"><a href="dosyaAc.php?dosyaIsmi='.$dosya.'">'.$dosya.'</a></p>';
            echo '<p style="text-align:center;">'.$dosya9.'</p>';
            echo '<p style="text-align:center;"><a href="dosyaIndir.php?dosyaIsmi='.$dosya9.'"><img src="images/download.png" title="download" style="width:25px;height:25px;"></a>
            <a href="dosyaSil.php?dosyaIsmi='.$dosya9.'&nerdenGeldi=2" onclick="return uyari3();"><img src="images/delete.png" title="delete" style="width:22px;height:22px;"></a></p>';
        }
        /***************************************************************************************************************************************/
        echo '<p style="text-align:center; border:1px solid #888888;margin-left:20%;margin-right:20%;color: #363636;">Muhammed Said Sevinç</p>';
        $fileName10="yuklenenDosyalar/MuhammedSaidSevinc/*";
        $dosyalar10 = glob($fileName10);
        foreach ($dosyalar10 as $dosya10) {
            //echo '<p style="text-align:center;"><a href="dosyaAc.php?dosyaIsmi='.$dosya.'">'.$dosya.'</a></p>';
            echo '<p style="text-align:center;">'.$dosya10.'</p>';
            echo '<p style="text-align:center;"><a href="dosyaIndir.php?dosyaIsmi='.$dosya10.'"><img src="images/download.png" title="download" style="width:25px;height:25px;"></a>
            <a href="dosyaSil.php?dosyaIsmi='.$dosya10.'&nerdenGeldi=2" onclick="return uyari3();"><img src="images/delete.png" title="delete" style="width:22px;height:22px;"></a></p>';
        }
        /***************************************************************************************************************************************/
        echo '<p style="text-align:center; border:1px solid #888888;margin-left:20%;margin-right:20%;color: #363636;">Duran Kaan Karataş</p>';
        $fileName11="yuklenenDosyalar/DuranKaanKaratas/*";
        $dosyalar11 = glob($fileName11);
        foreach ($dosyalar11 as $dosya11) {
            //echo '<p style="text-align:center;"><a href="dosyaAc.php?dosyaIsmi='.$dosya.'">'.$dosya.'</a></p>';
            echo '<p style="text-align:center;">'.$dosya11.'</p>';
            echo '<p style="text-align:center;"><a href="dosyaIndir.php?dosyaIsmi='.$dosya11.'"><img src="images/download.png" title="download" style="width:25px;height:25px;"></a>
            <a href="dosyaSil.php?dosyaIsmi='.$dosya11.'&nerdenGeldi=2" onclick="return uyari3();"><img src="images/delete.png" title="delete" style="width:22px;height:22px;"></a></p>';
        }
        /***************************************************************************************************************************************/
        echo '<p style="text-align:center; border:1px solid #888888;margin-left:20%;margin-right:20%;color: #363636;">Cemre Sena Demir</p>';
        $fileName12="yuklenenDosyalar/CemreSenaDemir/*";
        $dosyalar12 = glob($fileName12);
        foreach ($dosyalar12 as $dosya12) {
            //echo '<p style="text-align:center;"><a href="dosyaAc.php?dosyaIsmi='.$dosya.'">'.$dosya.'</a></p>';
            echo '<p style="text-align:center;">'.$dosya12.'</p>';
            echo '<p style="text-align:center;"><a href="dosyaIndir.php?dosyaIsmi='.$dosya12.'"><img src="images/download.png" title="download" style="width:25px;height:25px;"></a>
            <a href="dosyaSil.php?dosyaIsmi='.$dosya12.'&nerdenGeldi=2" onclick="return uyari3();"><img src="images/delete.png" title="delete" style="width:22px;height:22px;"></a></p>';
        }
        /***************************************************************************************************************************************/
        echo '<p style="text-align:center; border:1px solid #888888;margin-left:20%;margin-right:20%;color: #363636;">Burak Erdem</p>';
        $fileName13="yuklenenDosyalar/BurakErdem/*";
        $dosyalar13 = glob($fileName13);
        foreach ($dosyalar13 as $dosya13) {
            //echo '<p style="text-align:center;"><a href="dosyaAc.php?dosyaIsmi='.$dosya.'">'.$dosya.'</a></p>';
            echo '<p style="text-align:center;">'.$dosya13.'</p>';
            echo '<p style="text-align:center;"><a href="dosyaIndir.php?dosyaIsmi='.$dosya13.'"><img src="images/download.png" title="download" style="width:25px;height:25px;"></a>
            <a href="dosyaSil.php?dosyaIsmi='.$dosya13.'&nerdenGeldi=2" onclick="return uyari3();"><img src="images/delete.png" title="delete" style="width:22px;height:22px;"></a></p>';
        }
        /***************************************************************************************************************************************/
        echo '<p style="text-align:center; border:1px solid #888888;margin-left:20%;margin-right:20%;color: #363636;">Ali Özgür Polat</p>';
        $fileName14="yuklenenDosyalar/AliOzgurPolat/*";
        $dosyalar14 = glob($fileName14);
        foreach ($dosyalar14 as $dosya14) {
            //echo '<p style="text-align:center;"><a href="dosyaAc.php?dosyaIsmi='.$dosya.'">'.$dosya.'</a></p>';
            echo '<p style="text-align:center;">'.$dosya14.'</p>';
            echo '<p style="text-align:center;"><a href="dosyaIndir.php?dosyaIsmi='.$dosya14.'"><img src="images/download.png" title="download" style="width:25px;height:25px;"></a>
            <a href="dosyaSil.php?dosyaIsmi='.$dosya14.'&nerdenGeldi=2" onclick="return uyari3();"><img src="images/delete.png" title="delete" style="width:22px;height:22px;"></a></p>';
        }
        /***************************************************************************************************************************************/
        echo '<p style="text-align:center; border:1px solid #888888;margin-left:20%;margin-right:20%;color: #363636;">Afşin Demiröz</p>';
        $fileName15="yuklenenDosyalar/AfsinDemiroz/*";
        $dosyalar15 = glob($fileName15);
        foreach ($dosyalar15 as $dosya15) {
            //echo '<p style="text-align:center;"><a href="dosyaAc.php?dosyaIsmi='.$dosya.'">'.$dosya.'</a></p>';
            echo '<p style="text-align:center;">'.$dosya15.'</p>';
            echo '<p style="text-align:center;"><a href="dosyaIndir.php?dosyaIsmi='.$dosya15.'"><img src="images/download.png" title="download" style="width:25px;height:25px;"></a>
            <a href="dosyaSil.php?dosyaIsmi='.$dosya15.'&nerdenGeldi=2" onclick="return uyari3();"><img src="images/delete.png" title="delete" style="width:22px;height:22px;"></a></p>';
        }
        /***************************************************************************************************************************************/
        echo '<p style="text-align:center; border:1px solid #888888;margin-left:20%;margin-right:20%;color: #363636;">Ufuk Alper Şimşek</p>';
        $fileName16="yuklenenDosyalar/UfukAlperSimsek/*";
        $dosyalar16 = glob($fileName16);
        foreach ($dosyalar16 as $dosya16) {
            //echo '<p style="text-align:center;"><a href="dosyaAc.php?dosyaIsmi='.$dosya.'">'.$dosya.'</a></p>';
            echo '<p style="text-align:center;">'.$dosya16.'</p>';
            echo '<p style="text-align:center;"><a href="dosyaIndir.php?dosyaIsmi='.$dosya16.'"><img src="images/download.png" title="download" style="width:25px;height:25px;"></a>
            <a href="dosyaSil.php?dosyaIsmi='.$dosya16.'&nerdenGeldi=2" onclick="return uyari3();"><img src="images/delete.png" title="delete" style="width:22px;height:22px;"></a></p>';
        }
        /***************************************************************************************************************************************/
        echo '<p style="text-align:center; border:1px solid #888888;margin-left:20%;margin-right:20%;color: #363636;">Gamze Baylan</p>';
        $fileName17="yuklenenDosyalar/GamzeBaylan/*";
        $dosyalar17 = glob($fileName17);
        foreach ($dosyalar17 as $dosya17) {
            //echo '<p style="text-align:center;"><a href="dosyaAc.php?dosyaIsmi='.$dosya.'">'.$dosya.'</a></p>';
            echo '<p style="text-align:center;">'.$dosya17.'</p>';
            echo '<p style="text-align:center;"><a href="dosyaIndir.php?dosyaIsmi='.$dosya17.'"><img src="images/download.png" title="download" style="width:25px;height:25px;"></a>
            <a href="dosyaSil.php?dosyaIsmi='.$dosya17.'&nerdenGeldi=2" onclick="return uyari3();"><img src="images/delete.png" title="delete" style="width:22px;height:22px;"></a></p>';
        }
        /***************************************************************************************************************************************/
        echo '<p style="text-align:center; border:1px solid #888888;margin-left:20%;margin-right:20%;color: #363636;">Enes Ergen</p>';
        $fileName18="yuklenenDosyalar/EnesErgen/*";
        $dosyalar18 = glob($fileName18);
        foreach ($dosyalar18 as $dosya18) {
            //echo '<p style="text-align:center;"><a href="dosyaAc.php?dosyaIsmi='.$dosya.'">'.$dosya.'</a></p>';
            echo '<p style="text-align:center;">'.$dosya18.'</p>';
            echo '<p style="text-align:center;"><a href="dosyaIndir.php?dosyaIsmi='.$dosya18.'"><img src="images/download.png" title="download" style="width:25px;height:25px;"></a>
            <a href="dosyaSil.php?dosyaIsmi='.$dosya18.'&nerdenGeldi=2" onclick="return uyari3();"><img src="images/delete.png" title="delete" style="width:22px;height:22px;"></a></p>';
        }
        /***************************************************************************************************************************************/
        echo '<p style="text-align:center; border:1px solid #888888;margin-left:20%;margin-right:20%;color: #363636;">Furkan Güneri</p>';
        $fileName19="yuklenenDosyalar/FurkanGuneri/*";
        $dosyalar19 = glob($fileName19);
        foreach ($dosyalar19 as $dosya19) {
            //echo '<p style="text-align:center;"><a href="dosyaAc.php?dosyaIsmi='.$dosya.'">'.$dosya.'</a></p>';
            echo '<p style="text-align:center;">'.$dosya19.'</p>';
            echo '<p style="text-align:center;"><a href="dosyaIndir.php?dosyaIsmi='.$dosya19.'"><img src="images/download.png" title="download" style="width:25px;height:25px;"></a>
            <a href="dosyaSil.php?dosyaIsmi='.$dosya19.'&nerdenGeldi=2" onclick="return uyari3();"><img src="images/delete.png" title="delete" style="width:22px;height:22px;"></a></p>';
        }
        /***************************************************************************************************************************************/
        echo '<p style="text-align:center; border:1px solid #888888;margin-left:20%;margin-right:20%;color: #363636;">Mizgin Satılmış</p>';
        $fileName20="yuklenenDosyalar/MizginSatilmis/*";
        $dosyalar20 = glob($fileName20);
        foreach ($dosyalar20 as $dosya20) {
            //echo '<p style="text-align:center;"><a href="dosyaAc.php?dosyaIsmi='.$dosya.'">'.$dosya.'</a></p>';
            echo '<p style="text-align:center;">'.$dosya20.'</p>';
            echo '<p style="text-align:center;"><a href="dosyaIndir.php?dosyaIsmi='.$dosya20.'"><img src="images/download.png" title="download" style="width:25px;height:25px;"></a>
            <a href="dosyaSil.php?dosyaIsmi='.$dosya20.'&nerdenGeldi=2" onclick="return uyari3();"><img src="images/delete.png" title="delete" style="width:22px;height:22px;"></a></p>';
        }
        /***************************************************************************************************************************************/
        echo '<p style="text-align:center; border:1px solid #888888;margin-left:20%;margin-right:20%;color: #363636;">Ebrar Tokdemir</p>';
        $fileName21="yuklenenDosyalar/EbrarTokdemir/*";
        $dosyalar21 = glob($fileName21);
        foreach ($dosyalar21 as $dosya21) {
            //echo '<p style="text-align:center;"><a href="dosyaAc.php?dosyaIsmi='.$dosya.'">'.$dosya.'</a></p>';
            echo '<p style="text-align:center;">'.$dosya21.'</p>';
            echo '<p style="text-align:center;"><a href="dosyaIndir.php?dosyaIsmi='.$dosya21.'"><img src="images/download.png" title="download" style="width:25px;height:25px;"></a>
            <a href="dosyaSil.php?dosyaIsmi='.$dosya21.'&nerdenGeldi=2" onclick="return uyari3();"><img src="images/delete.png" title="delete" style="width:22px;height:22px;"></a></p>';
        }
        /***************************************************************************************************************************************/
        echo '<p style="text-align:center; border:1px solid #888888;margin-left:20%;margin-right:20%;color: #363636;">Sıraç Kahyaoğlu</p>';
        $fileName22="yuklenenDosyalar/SiracKahyaoglu/*";
        $dosyalar22 = glob($fileName22);
        foreach ($dosyalar22 as $dosya22) {
            //echo '<p style="text-align:center;"><a href="dosyaAc.php?dosyaIsmi='.$dosya.'">'.$dosya.'</a></p>';
            echo '<p style="text-align:center;">'.$dosya22.'</p>';
            echo '<p style="text-align:center;"><a href="dosyaIndir.php?dosyaIsmi='.$dosya22.'"><img src="images/download.png" title="download" style="width:25px;height:25px;"></a>
            <a href="dosyaSil.php?dosyaIsmi='.$dosya22.'&nerdenGeldi=2" onclick="return uyari3();"><img src="images/delete.png" title="delete" style="width:22px;height:22px;"></a></p>';
        }
        /***************************************************************************************************************************************/
        echo '<p style="text-align:center; border:1px solid #888888;margin-left:20%;margin-right:20%;color: #363636;">Sedanur Kıvırcık</p>';
        $fileName23="yuklenenDosyalar/SedanurKivircik/*";
        $dosyalar23 = glob($fileName23);
        foreach ($dosyalar23 as $dosya23) {
            //echo '<p style="text-align:center;"><a href="dosyaAc.php?dosyaIsmi='.$dosya.'">'.$dosya.'</a></p>';
            echo '<p style="text-align:center;">'.$dosya23.'</p>';
            echo '<p style="text-align:center;"><a href="dosyaIndir.php?dosyaIsmi='.$dosya23.'"><img src="images/download.png" title="download" style="width:25px;height:25px;"></a>
            <a href="dosyaSil.php?dosyaIsmi='.$dosya23.'&nerdenGeldi=2" onclick="return uyari3();"><img src="images/delete.png" title="delete" style="width:22px;height:22px;"></a></p>';
        }
        /***************************************************************************************************************************************/
        echo '<p style="text-align:center; border:1px solid #888888;margin-left:20%;margin-right:20%;color: #363636;">Şevval Zengin</p>';
        $fileName24="yuklenenDosyalar/SevvalZengin/*";
        $dosyalar24 = glob($fileName24);
        foreach ($dosyalar24 as $dosya24) {
            //echo '<p style="text-align:center;"><a href="dosyaAc.php?dosyaIsmi='.$dosya.'">'.$dosya.'</a></p>';
            echo '<p style="text-align:center;">'.$dosya24.'</p>';
            echo '<p style="text-align:center;"><a href="dosyaIndir.php?dosyaIsmi='.$dosya24.'"><img src="images/download.png" title="download" style="width:25px;height:25px;"></a>
            <a href="dosyaSil.php?dosyaIsmi='.$dosya24.'&nerdenGeldi=2" onclick="return uyari3();"><img src="images/delete.png" title="delete" style="width:22px;height:22px;"></a></p>';
        }
        /***************************************************************************************************************************************/
        echo '<p style="text-align:center; border:1px solid #888888;margin-left:20%;margin-right:20%;color: #363636;">Yusuf İkbal Aldenir</p>';
        $fileName25="yuklenenDosyalar/YusufIkbalAldenir/*";
        $dosyalar25 = glob($fileName25);
        foreach ($dosyalar25 as $dosya25) {
            //echo '<p style="text-align:center;"><a href="dosyaAc.php?dosyaIsmi='.$dosya.'">'.$dosya.'</a></p>';
            echo '<p style="text-align:center;">'.$dosya25.'</p>';
            echo '<p style="text-align:center;"><a href="dosyaIndir.php?dosyaIsmi='.$dosya25.'"><img src="images/download.png" title="download" style="width:25px;height:25px;"></a>
            <a href="dosyaSil.php?dosyaIsmi='.$dosya25.'&nerdenGeldi=2" onclick="return uyari3();"><img src="images/delete.png" title="delete" style="width:22px;height:22px;"></a></p>';
        }
        /***************************************************************************************************************************************/
        echo '<p style="text-align:center; border:1px solid #888888;margin-left:20%;margin-right:20%;color: #363636;">Aleyna Gülşen</p>';
        $fileName26="yuklenenDosyalar/AleynaGulsen/*";
        $dosyalar26 = glob($fileName26);
        foreach ($dosyalar26 as $dosya26) {
            //echo '<p style="text-align:center;"><a href="dosyaAc.php?dosyaIsmi='.$dosya.'">'.$dosya.'</a></p>';
            echo '<p style="text-align:center;">'.$dosya26.'</p>';
            echo '<p style="text-align:center;"><a href="dosyaIndir.php?dosyaIsmi='.$dosya26.'"><img src="images/download.png" title="download" style="width:25px;height:25px;"></a>
            <a href="dosyaSil.php?dosyaIsmi='.$dosya26.'&nerdenGeldi=2" onclick="return uyari3();"><img src="images/delete.png" title="delete" style="width:22px;height:22px;"></a></p>';
        }
    ?>
</body>
<script>
    function uyari3() {
        if (confirm("Bu dosyayı silmek istediğinize emin misiniz?"))
            return true;
        else 
            return false;
    }
</script>
</html>