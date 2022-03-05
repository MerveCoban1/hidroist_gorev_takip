<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GorevEkle</title>
</head>
<body>
    <?php
        session_start();
        if ($_SESSION['user']==""){
            @header("location:index.html");
        }
        $kim=$_POST["kim"];
        $konu=$_POST["konu"];
        $sonTeslim=$_POST["sonTeslim"];
        $baglanti=mysqli_connect("localhost","Merve","merve1998coban","GorevUygulamasi");
        if (!$baglanti){
            echo("baglantida bir hata olustu");
        }else{  
            $sorgu="INSERT INTO gorevler(username,gorevAdi,sonTarih,teslimDurumu) VALUES('$kim','$konu','$sonTeslim','hayir');"; 
            $sonuc=mysqli_query($baglanti,$sorgu);
            if($sonuc){
                //mail adresine de bildirim yollamalıyız  
                $gonder2=mysqli_query($baglanti,"SELECT * FROM ogrenciler where username='$kim';");
                $sayi=mysqli_num_rows($gonder2);
                if($sayi<1){
                    $gonder2=mysqli_query($baglanti,"SELECT * FROM ogretmenler where username='$kim';");
                }
                $satir2=mysqli_fetch_assoc($gonder2);
                $gonderilenKisiMailAdresi=$satir2["mailadresi"];
                
                $icerik="Yeni bir görev eklendi Lütfen kontrol ediniz.";
                //şimdi bu adrese mail atmalıyız.
                @header("location:mailAt.php?atilacakMail=$gonderilenKisiMailAdresi&icerik=$icerik");
            }else{
                echo "Bir sorun oluştu görev eklenemedi";
            }
        }
    ?>
</body>
</html>