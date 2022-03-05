<?php
    session_start();
    $kullaniciAdi=$_POST["kullaniciAdi"];
    $sifre=$_POST["sifre"];
    $baglanti=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
    if (!$baglanti){
        echo("baglantida bir hata olustu");
    }else{  
        $sorgu="SELECT * FROM ogrenciler where username='$kullaniciAdi' AND sifre='$sifre'"; 
        $sonuc=mysqli_query($baglanti,$sorgu);
        $sayi=mysqli_num_rows(mysqli_query($baglanti,$sorgu));
        if($sayi<1){
            @header("location:indexTekrar.html");  
        }else{
            @header("location:anasayfaOgrenci.php");
            $_SESSION['user']=$kullaniciAdi;
            $_SESSION['who']="ogrenci";
        }
    }
?>



