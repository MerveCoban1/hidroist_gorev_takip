<?php
	session_start();
	if ($_SESSION['user']==""){
        @header("location:index.html");
    }
	$userName=$_SESSION['user'];
	if ($_FILES){
		// Gönderilen dosya adınındaki türkçe karakter ve boşlukları dönüştürücü fonksiyonumuz
		function dosyaadi($degisken){
			$bul	= array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', 'Ö', 'İ', 'Ü', '-');
			$degistir = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'o', 'i', 'u', ' ');
			$sonuc = strtolower(str_replace($bul, $degistir, $degisken));
			$sonuc = str_replace(' ', '-', $sonuc);
			return $sonuc;
		}
		$klasor = 'images/kisiler'; // Dosyanın yükleneceği klasör
		$dosya = $_FILES['dosya']; // Gönderilen dosyanın bilgilerini değişkene aktarıyoruz
		$gelenformat = $dosya['type']; // Gelen dosyanın formatını tanımlıyoruz.
		$dosya_tmp = $dosya['tmp_name']; // Gelen dosyanın tmp adını tanımlıyoruz.
		$dosyaformati = array("image/pjpeg", "image/jpeg", "image/gif", "image/bmp", "image/x-png", "image/png"); // Yüklenmesine izin verilecek dosya formatlarını seçiyoruz
		$urldecode = urldecode(".jpg"); // Gönderilen dosya adına urldecode fonksiyonu uygulanıyor.
		$dosya = explode('/', $urldecode);
		if (in_array($gelenformat, $dosyaformati)) { // Php in_array fonksiyonu ile gelen dosya formatının izin verilen formatlara uygun olup olmadığını kontrol ediyoruz.
			$yuklenendosya = $klasor . '/' . $userName . dosyaadi($dosya[count($dosya) - 1]); // Gönderilen dosyayı yukarıda tanımladığımız dosyaadi() fonksiyonundan geçiriyoruz. Ve dosya yolu ile beraber değişkene atıyoruz.
			move_uploaded_file($dosya_tmp, $yuklenendosya); // Yüklenen dosyayı tmp dizininden olması gereken dizine taşıyoruz.
			$yuklenendosyaadi = $userName . dosyaadi($dosya[count($dosya) - 1]); // Yüklenen dosya adını ekrana yazdırmak veya veri tabanına yazdırmak için değişkene atıyoruz.
			if ($yuklenendosyaadi) {
				// If döngüsü ile yüklenen dosya adının dolu olup olmadığını kontrol ediyoruz.
				@header("location:hesabim.php"); 
			}
		}else{
			$sonuc = '<div class="alert alert-danger">Yüklemek istediğiniz dosya formatı uygun değil.</div>'; // Eğer izin verilmeyen bir formatta yüklenmeye çalışırsa hata mesajı döndürüyoruz.
		}
		}
?>