<?php
    $yeniSifre= $_POST['yeniSifre'];

    session_start();
    if ($_SESSION['user']==""){
        @header("location:index.html");
    }
    $userName=$_SESSION['user'];
    $who=$_SESSION['who'];
    
    if($who=="ogretmen"){
        $baglan=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
        mysqli_set_charset($baglan, "utf8");
        $sonuc=mysqli_query($baglan,"UPDATE ogretmenler SET sifre='$yeniSifre' WHERE username='$userName';");
        if($sonuc>0){
            echo "Başarıyla guncellendi";
            @header("location:hesabim.php"); 
        }
        else{
            echo "Bir sorun oluştu guncellenemedi";
        }
    }else if($who=="ogrenci"){
        $baglan=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
        mysqli_set_charset($baglan, "utf8");
        $sonuc=mysqli_query($baglan,"UPDATE ogrenciler SET sifre='$yeniSifre' WHERE username='$userName';");
        if($sonuc>0){
            echo "Başarıyla guncellendi";
            @header("location:hesabim.php"); 
        }
        else{
            echo "Bir sorun oluştu guncellenemedi";
        }
    }
?>