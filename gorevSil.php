<?php
    session_start();
    if ($_SESSION['user']==""){
        @header("location:index.html");
    }
    $silinecekID= $_GET['gorevId'];
    
    $baglan=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
    mysqli_set_charset($baglan, "utf8");
    $sonuc=mysqli_query($baglan,"DELETE FROM gorevler WHERE gorevId=".$silinecekID);
    if($sonuc>0){
       @header("location:anasayfaOgretmen.php"); 
    }
    else{
        echo "Bir sorun oluştu silinemedi";
    }
?>