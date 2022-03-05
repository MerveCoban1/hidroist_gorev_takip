<?php
    session_start();
    if ($_SESSION['user']==""){
        @header("location:index.html");
    }
    $gorevId=$_GET["gorevId"];
    $baglanti=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
    if (!$baglanti){
        echo("baglantida bir hata olustu");
    }else{  
        $sorgu="UPDATE gorevler SET teslimDurumu='hayir' WHERE gorevId=$gorevId"; 
        $sonuc=mysqli_query($baglanti,$sorgu);
        if($sonuc>0){
            echo "Başarıyla guncellendi";
            @header("location:hesabim.php"); 
         }
         else{
             echo "Bir sorun oluştu guncellenemedi";
         }
    }
?>