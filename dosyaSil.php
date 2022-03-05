<?php
    $dosyaIsmi= $_GET['dosyaIsmi'];
    $nerdenGeldi= $_GET['nerdenGeldi'];
    
	$sonuc = unlink($dosyaIsmi); 
	if ($sonuc){
		echo 'Dosya başarıyla silindi';
		if($nerdenGeldi==1){
		    @header("location:yukledigimDosyalar.php");
		}else{
		    @header("location:dosyaListele.php");
		}
	}else{
	    echo 'Dosya mevcut değil';
    } 
?>