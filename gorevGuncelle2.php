<?php
    session_start();
    if ($_SESSION['user']==""){
        @header("location:index.html");
    }
    if($_POST['gorevId']){
        $gorevId= $_POST['gorevId'];
    }
    if($_POST['kimin']){
        $kimin= $_POST['kimin'];
    }
    if($_POST['guncelKonu']){
        $gorevAdi= $_POST['guncelKonu'];
    }
    if($_POST['guncelSonTeslim']){
        $sonTarih= $_POST['guncelSonTeslim'];
    }
    
    $baglan=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
    mysqli_set_charset($baglan, "utf8");
    $sonuc=mysqli_query($baglan,"UPDATE gorevler SET gorevAdi='$gorevAdi', sonTarih='$sonTarih'  WHERE gorevId=$gorevId;");
    if($sonuc>0){
       echo "Başarıyla guncellendi";
       //mail adresine de bildirim yollamalıyız  
       $gonder2=mysqli_query($baglan,"SELECT * FROM ogrenciler where username='$kimin';");
       $sayi=mysqli_num_rows($gonder2);
       if($sayi<1){
           $gonder2=mysqli_query($baglan,"SELECT * FROM ogretmenler where username='$kimin';");
       }
       $satir2=mysqli_fetch_assoc($gonder2);
       $gonderilenKisiMailAdresi=$satir2["mailadresi"];
       $icerik="Görev güncellemesi gerçekleşti. Lütfen kontrol ediniz.";
       //şimdi bu adrese mail atmalıyız.
       @header("location:mailAt.php?atilacakMail=$gonderilenKisiMailAdresi&icerik=$icerik");
    }
    else{
        echo "Bir sorun oluştu guncellenemedi";
    }
    
?>
