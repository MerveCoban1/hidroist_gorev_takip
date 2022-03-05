<?php
    session_start();
    $kullaniciAdi=$_POST["kullaniciAdi2"];
    $sifre=$_POST["sifre2"];
    $baglanti=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
    if (!$baglanti){
        echo("baglantida bir hata olustu");
    }else{  
        $sorgu="SELECT * FROM ogretmenler where username='$kullaniciAdi' AND sifre='$sifre'"; 
        $sonuc=mysqli_query($baglanti,$sorgu);
        $sayi=mysqli_num_rows(mysqli_query($baglanti,$sorgu));
        if($sayi<1){
            $hata=true;
            @header("location:indexTekrar.html");  
        }else{
            @header("location:anasayfaOgretmen.php");
            $_SESSION['user']=$kullaniciAdi;
            $_SESSION['who']="ogretmen";
        }
    }
?>